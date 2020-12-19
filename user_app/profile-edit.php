<?php
require_once 'header.php';
require 'session.php';
?>

<head>
   <link href="./css/style.css" rel="stylesheet">
   <script src="./js/jquery.min.js"></script>
   <script src="./js/jquery.form.js"></script>
</head>
<div class="header header-fixed header-logo-center">
   <a href="#" class="header-title">Edit Profile</a>
   <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
   <!--<button class="btn" type="submit"><a  class="header-icon header-icon-4"><i class="fa fa-check fa-lg"></i></a></button>-->
</div>
<div class="page-content header-clear-medium">
   <div class="content">
      <div class="container container-fluid">
         <div class="row">
            <div class="w-100 text-center">

               <div id="imgContainer">
                  <form enctype="multipart/form-data" action="image_upload_demo_submit.php" method="post" name="image_upload_form" id="image_upload_form">
                     <div id="imgArea"><img src="img\default .jpg">
                        <div class="progressBar">
                           <div class="bar"></div>
                           <div class="percent">0%</div>
                        </div>
                        <div id="imgChange"><span>Change Photo</span>
                           <input type="file" accept="image/*" name="image_upload_file" id="image_upload_file">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <form id="profileform" method="post">
         <div class='container container-fluid'>
            <div class="input-style has-icon input-style-1 input-required">
               <span>First Name</span>
               <input type="text" placeholder="First Name" id="firstname" name="firstname" value="<?= $firstname; ?>">
               <p id="first_error" style="color:red"></p>
            </div>
            <div class="input-style has-icon input-style-1 input-required">
               <span>Last Name</span>
               <input type="text" placeholder="Last Name" id="lastname" name="lastname" value="<?= $lastname; ?>">
               <p id="last_error" style="color:red"></p>
            </div>
            <div class="input-style has-icon input-style-1 input-required">
               <span>Title</span>
               <input type="text" placeholder="Title" id="title" name="title" value="<?= $title; ?>">
            </div>
            <div class="input-style has-icon input-style-1 input-required">
               <span>Bio</span>
               <input type="text" placeholder="Bio" id="bio" name="bio" value="<?= $bio; ?>">
            </div>
            <div class="input-style has-icon input-style-1 input-required">
               <span>Email</span>
               <input type="email" placeholder="Email" id="email" name="email" value="<?= $email; ?>">
               <p id="email_error" style="color:red"></p>
            </div>
            <div class="input-style has-icon input-style-1 input-required">
               <span>Phone Number</span>
               <input type="tel" placeholder="Phone Number" id="phone" name="phone" value="<?= $phone; ?>">
               <p id="phone_error" style="color:red"></p>
            </div>
            <div class="input-style has-icon input-style-1 input-required">
               <span>Body Height</span>
               <input type="number" placeholder='Body Height In cm' id="height" name="height" value="<?= $height; ?>">
            </div>
            <div class="input-style has-icon input-style-1 input-required">
               <span>Body Weight In Kgs</span>
               <input type="number" placeholder="Body Weight In Kgs" id="weight" name="weight" value="<?= $weight; ?>">
            </div>
            <div class="input-style has-icon input-style-1 input-required">
               <span>Birthday</span>
               <input type="date" placeholder="Birthday" id="dob" name="dob" value="<?= $birthday; ?>">
            </div>
            <div class="row mb-0 mx-1">
               <div class="col-6">
                  <div class="form-check icon-check">
                     <input class="form-check-input" type="radio" name="gender" value="M" id="radio1" checked>
                     <label class="form-check-label" for="radio1">Male</label>
                     <i class="icon-check-1 fa fa-circle color-gray-dark font-16"></i>
                     <i class="icon-check-2 fa fa-check-circle font-16 color-highlight"></i>
                  </div>
               </div>
               <div class="form-check icon-check">
                  <input class="form-check-input" type="radio" name="gender" value="F" id="radio2">
                  <label class="form-check-label" for="radio2">Female</label>
                  <i class="icon-check-1 fa fa-circle color-gray-dark font-16"></i>
                  <i class="icon-check-2 fa fa-check-circle font-16 color-highlight"></i>
               </div>
            </div>
         </div>

         <div class="form-group">
            <input type="submit" class="btn btn-m rounded-s text-uppercase font-700 mb-2 btn-center-xl bg-highlight w-100 mt-4" value="OK">
            <p id="msg1" style="color:red"></p>
         </div>
      </form>
   </div>
</div>
<?php
require_once 'footer.php';
require_once 'js-links.php';
?>

<script src="./js/jquery.min.js"></script>
<script src="./js/jquery.form.js"></script>
<script>
   $(document).on('change', '#image_upload_file', function() {
      var progressBar = $('.progressBar'),
         bar = $('.progressBar .bar'),
         percent = $('.progressBar .percent');

      $('#image_upload_form').ajaxForm({
         beforeSend: function() {
            progressBar.fadeIn();
            var percentVal = '0%';
            bar.width(percentVal)
            percent.html(percentVal);
         },
         uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal)
            percent.html(percentVal);
         },
         success: function(html, statusText, xhr, $form) {
            obj = $.parseJSON(html);
            if (obj.status) {
               var percentVal = '100%';
               bar.width(percentVal)
               percent.html(percentVal);
               $("#imgArea>img").prop('src', obj.image_medium);
            } else {
               alert(obj.error);
            }
         },
         complete: function(xhr) {
            progressBar.fadeOut();
         }
      }).submit();

   });
</script>

<script>
   $(document).ready(function() {
      $("#profileform").on('submit', function(e) {

         var phone_number = $('#phone').val();
         var re = /^[5-9]\d{9}$/;
         var condition = re.test(phone_number);

         if (!condition) {
            $('#phone_error').html("*invalid phone number");
         }
         var fname = $('#firstname').val();
         var re = /^[a-zA-Z ]{2,50}$/;
         var condition = re.test(fname);

         if (!condition) {
            $('#first_error').html("*First Name allows only alphabets");
         }
         var lname = $('#lastname').val();
         var re = /^[a-zA-Z ]{2,50}$/;
         var condition = re.test(lname);

         if (!condition) {
            $('#last_error').html("*Last Name allows only alphabets");
         }

         var email = $('#email').val();
         var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
         var condition = re.test(email);

         if (!condition) {

            $('#email_error').html("*Invalid Email format");
         }

         e.preventDefault();
         $.ajax({
            type: 'POST',
            url: 'update_profile.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
               var obj = JSON.parse(data);

               if (obj.msg == 'ok') {
                  window.location = 'profile.php';
               } else {
                  $('#msg1').html(obj.msg);
               }
            },

         });
      });
   });
</script>