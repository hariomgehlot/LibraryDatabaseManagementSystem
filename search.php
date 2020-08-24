<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="login-box">
  <h1>PMB Gujarati Science College Library</h1>
  <h4>1,Nasiya Road ,Indore,M.P</h4>  
<form method="POST" action="result.php" >
<input type="number" class="textbox" placeholder="Enter Enrollment Number" name="query_num" required>
<input type="submit"  class ="btn" name="submit">
</form>
<input type="button" class="btn" value='Register Student' onclick=window.location.href='register.php'>
</div>
  </body>
</html>
