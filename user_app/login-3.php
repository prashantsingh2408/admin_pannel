<?php
   require_once 'header.php';
require_once 'config.php';


//require "profile-check.php";
require "auth.php";

if(!(auth()))
{
    header("location: login.php");
}


$first = $last =$phone = "";
$first_err = $last_err = $phone_err = "";

?>



<div class="page-content header-clear-medium">
         <form id="dataform" method="post">
   <div class="content">
      <div class='container container-fluid'>
        <h1 class="text-center mb-5">Enter Name & Phone</h1>

        
            <span class="color-highlight input-style-1-inactive">First Name</span>
            <input class="form-control" type="text" placeholder="First Name" name="first" id="first" value="<?php echo $first; ?>" >
                <span class="help-block"><?php echo $first_err; ?></span>
          <p style="color:red" id="fst"></p>
        
         
            <span class="color-highlight input-style-1-inactive">Last Name</span>
            <input class="form-control" type="text" placeholder="Last Name" name="last" id="last" value="<?php echo $last; ?>" >
          <span class="help-block"><?php echo $last_err; ?></span>
          <p style="color:red" id="lst"></p>
          
            <span class="color-highlight input-style-1-inactive">Email</span>
            <input class="form-control" type="tel" placeholder="Email" name="email" id="email" value="" >
                <span class="help-block"><?php echo $phone_err; ?></span>
          <p style="color:red" id="msg1"></p>
         
        <div class="form-group">
                <input type="submit" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-100 mt-4" value="SIGN ME UP">
                
            </div>
      </div>
   </div>
    </form>
</div>
   

<?php
   require_once 'js-links.php';
   ?>


<script>
    $(document).ready(function(){
         $("#dataform").on('submit', function(e){
                    var email=$('#email').val();
            var re =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	        var condition = re.test(email);
//	         console.log(condition);	
	      
           
             if(email=="")
                 {
                     $('#msg1').html(" * Please enter your Email");
                 }
	else if(!condition){
		$('#msg1').html(" * Invalid Email ");
		//document.getElementById("phoneNo").value="";
        //alert("*invalid phone number");
	}
             
              var first=$('#first').val();
              var last=$('#last').val();
             if (first=="")
                 {
                    $('#fst').html(" * Please enter your first name"); 
                 }
             else{
                      	var re = /^[a-zA-Z ]{2,30}$/;
                 var condition2 = re.test(first);
                 if(!condition2){
                   $('#fst').html(" * Enter a valid first name");    
                 }
                 
                 
             }
             if (last=="")
                 {
                    $('#lst').html(" * Please enter your last name"); 
                 }
                     else{
                      	var re = /^[a-zA-Z ]{2,30}$/;
                 var condition3 = re.test(last);
                 if(!condition3){
                   $('#lst').html(" * Enter a valid first name");    
                 }
                 }
             
             if((condition)&& (condition2) && (condition3))
                 {
		      
    			e.preventDefault();
    			$.ajax({
    				type: 'POST',
    				url: 'update_data.php',
    				data: new FormData(this),
    				contentType: false,
    				cache: false,
    				processData:false,
    				success:function(data){
    				    var obj=JSON.parse(data);
                        
                        if(obj.msg=='ok')
                            {
                              window.location='login-4.php';
                            }
                       
                        else{
                            $('#msg1').html(obj.msg);
                        }
                      
    				},
                    
    			});
                     
                 }
                   
    });
    });
    
    
</script>
    


