<?php
   require_once 'header.php';
require_once 'config.php';



$phone = "";
$phone_err = "";
 


if($_SERVER["REQUEST_METHOD"] == "POST"){

  // Validate phone no
    if(empty(trim($_POST["phone"]))){
        $phone_err = "Please enter your phone no.";     
    } 
     else{
        
        $phone = trim($_POST["phone"]);
         if (!preg_match("/^[5-9]\d{9}$/",$phone)) {
                            $phone_err = "Invalid Phone No";
                    }
        
    }
    
    
 if(empty($phone_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO user (phone ) VALUES (?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i",  $param_phone);
            
            // Set parameters
          
            $param_phone = $phone;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login-3.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}




   ?>
<div class="page-content header-clear-medium">
     <form id="theform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
   <div class="content" id="mobile">
      <div class='container container-fluid'>
      <h2 class="text-center mb-5">Sign In With Your Phone Number</h2>
      <div class="input-style input-style-2 input-required">
        <span class="color-highlight input-style-1-inactive">Phone</span>
        <input class="form-control" id="phone" type="tel" placeholder="" name="phone" value="<?php echo $phone; ?>">
                <span class="help-block"><?php echo $phone_err; ?></span>
   
       <div class="form-group">
                <input type="button" id="send_otp" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-100 mt-4" value="VERIFY PHONE NUMBER">
                
            </div>
   </div>
       </div>
         </div>
         
         
         <div class="content" style="display:none" id="otp">
      <div class='container container-fluid'>
      <h2 class="text-center mb-5">OTP</h2>
      <div class="input-style input-style-2 input-required">
        <span class="color-highlight input-style-1-inactive">OTP</span>
        <input class="form-control" type="tel" placeholder="" name="otp" value="<?php echo $phone; ?>">
                <span class="help-block"><?php echo $phone_err; ?></span>
   <p style="color:red" id="msg1"></p>
       <div class="form-group">
                <input type="submit" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-100 mt-4" value="VERIFY PHONE NUMBER">
                
            </div>
   </div>
       </div>
         </div>
         
         
         
         
         
    </form>

<?php
   require_once 'js-links.php';
   ?>
    
    
    <script>
    $(document).ready(function(){
    $('#send_otp').click(function(){
    var phone_number=$('#phone').val();
        	var re = /^[5-9]\d{9}$/;
	var condition = re.test(phone_number);
//	console.log(condition);	
	$('#msg1').html("");
	if(!condition){
		//$('#msg1').html(" * Invalid Phone Number");
		//document.getElementById("phoneNo").value="";
        alert("*invalid phone number");
	}


                            
        else{
                        
 $.post("ajax_login.php",
  {
    contact: phone_number,
  },
  function(data, status){
    var obj=JSON.parse(data);
     if(obj.msg=="ok")
         {
             $('#otp').show();
             $('#mobile').hide();
         }
     else{
         alert("unable to send otp");
     }
  });
        }
    });
        
        
          $("#theform").on('submit', function(e){
		       
    			e.preventDefault();
    			$.ajax({
    				type: 'POST',
    				url: 'ajax_login.php',
    				data: new FormData(this),
    				contentType: false,
    				cache: false,
    				processData:false,
    				success:function(data){
    				
    				    var obj=JSON.parse(data);
                        
                        if(obj.msg=='ok')
                            {
                                alert("match");
                            }
                        else if(obj.msg=='register')
                            {
                              //  window.location='login-3.php';
                            }
                        else{
                            $('#msg1').html(obj.msg);
                        }
                      
    				},
                    
    			});
    });
    
    });
    </script>