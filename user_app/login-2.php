<?php
   require_once 'header.php';
require_once 'config.php';
 ?>
<div class="page-content header-clear-medium">
     <form id="theform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
   <div class="content" id="mobile">
      <div class='container container-fluid'>
      <h2 class="text-center mb-5">Sign In With Your Phone Number</h2>
      <div class="input-style input-style-2 input-required">
        <span class="color-highlight input-style-1-inactive">Phone</span>
        <input class="form-control" id="phone" type="tel" placeholder="" name="phone" value="" required>
                
   
       <div class="form-group">
                <input type="button" id="send_otp" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-100 mt-4" value="VERIFY PHONE NUMBER">
               <p style="color:red" id="msg2"></p>  
          </div>
   </div>
       </div>
         </div>
         
         
         <div class="content" style="display:none" id="otp">
      <div class='container container-fluid'>
      <h2 class="text-center mb-5">OTP</h2>
      <div class="input-style input-style-2 input-required">
        <span class="color-highlight input-style-1-inactive">OTP</span>
        <input class="form-control" type="tel" placeholder="" name="otp" value="" required>
          <span class="help-block"></span>
                   
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
	//$('#msg1').html("");
	if(!condition){
		$('#msg2').html(" * Invalid Phone Number");
		//document.getElementById("phoneNo").value="";
    //  alert("* invalid phone number");
	}
   else{
 $.post("ajax_login.php",
  {
    contact: phone_number,
  },
  function(data, status){
    var obj=JSON.parse(data);
     if(obj.msg=="continue")
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
                        
                        if(obj.msg=='old')
                            {
                              window.location='index.php';
                            }
                        
                        else if(obj.msg=='register')
                            {
                                window.location='login-3.php';
                            }
                        else{
                            $('#msg1').html(obj.msg);
                        }
                      
    				},
                    
    			});
    });
    
    });
    </script>