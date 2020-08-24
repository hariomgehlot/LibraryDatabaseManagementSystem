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
    </head>
  <body>
<div class="login-box">
  <h1>PMB Gujarati Science College Library</h1>
  <form action="result.php" method="POST">
  <div class="textbox">
    <i class="fas fa-key"></i>
    <input type="Number" placeholder="Book Id" required="" name="book_id">
  </div>
  <div class="textbox">
     <i class="fas fa-book"></i>
    <input type="text" placeholder="Book Name" required="" name="book_name">
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type ="text" name="author_name" class="textbox" placeholder="Author Name" required="">
    </div>
    <div class="textbox">
      <i class="fas fa-envelope"></i>
<input type="text" name="publication" class= "textbox" placeholder="Publication" required >
</div>
 <div class="textbox">
      <i class="fas fa-dollar-sign"></i>
<input type="text" name="price" class= "textbox" placeholder="Price" required >
</div>
<input type="submit"  class="btn" name="submit" value='Issue Book' >
 <input type="reset" class="btn" value="Reset">
</form>
</div>
  </body>
</html>
