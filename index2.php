<?php
session_start();
$_SESSION["name"]="name";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
<div class="login-box">
  <a href=http://www.pmbgsccsit.in/><h1>PMB Gujarati Science College Library</h1></a>
  <h4>1,Nasiya Road ,Indore,M.P</h4>
  <input  type="button" class="btn" value='Register Student' onclick=window.location.href='register.php' style="">
<input type="button"  class="btn" value="Search Student" onclick=window.location.href='search.php'>
</div>
  </body>
</html>
