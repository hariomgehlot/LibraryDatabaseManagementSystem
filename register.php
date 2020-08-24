<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
  <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <meta charset="utf-8">
    <title>PMB Gujarati Science College Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageName')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
  </head>
  <body>
<div class="login-box">
  <h1>PMB Gujarati Science College Library</h1>
  <form action="registered.php" method="POST" enctype="multipart/form-data">
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Student Name" required="" name="name" maxlength="20" >
  </div>
  <div class="textbox">
     <i class="fas fa-user"></i>
    <input type="text" placeholder="Father's Name" required="" name="f_name" maxlength="20">
  </div>
  <div class="textbox">
    <i class="fas fa-phone"></i>
    <input type ="Tel" name="c_number" class="textbox" pattern="[0-9]{10}" maxlength="10" placeholder="Contact Number 10 Digits" required="">
    </div>
    <div class="textbox">
      <i class="fas fa-envelope"></i>
<input type="email" name="email" class= "textbox" placeholder="Enter Email">
</div>
<div class="textbox">
<select name="stream" class="drpdwn" required="" style="background:none ;border:none; font-size: 18px; color:gray; width:100%;" >
  <option value="" > Please Choose a Stream </option>
  <option value="BCA" >BCA</option>
  <option value="B.sc" >B.sc</option>
  <option value="MBio" >MBio</option>
</select>
</div>
<div class="textbox" style="width:100%">
<input type="date" name="dob"  value="10-12-2018" class="textbox" placeholder="Enter DOB"  required="" style="width:100%; color:gray">
</div>
<div class='textbox'> 
    <img class="imageOwn" id="imageName" src="#" alt="Your Photo" />
  <input class="imageInput" name="img" type='file'  accept="image/*" onchange="readURL(this);"  />
</div>
 <input type="submit"  class="btn" name="submit" value='Register Student'>
 <input type="reset" class="btn" value="Reset">
</form>
</div>
  </body>
</html>
