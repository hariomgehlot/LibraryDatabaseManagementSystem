<?php
if(isset($_POST["submit"])){
       $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'library_db';
$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn->connect_error) {
    die("Connection failed:");
}
$imageData=addslashes(file_get_contents($_FILES['img']['tmp_name']));
$query="INSERT INTO all_stu(name, f_name, c_number, email, stream, dob,image) VALUES ('".$_POST['name']."','".$_POST['f_name']."','".$_POST['c_number']."','".$_POST['email']."','".$_POST['stream']."','".$_POST['dob']."','".$imageData."')";
 $qry2 = "SELECT MAX(enroll_num)from all_stu WHERE name='".$_POST['name']."';";
 echo $query;
 $result = mysqli_query($conn,$query);
$result1 = mysqli_query($conn,$qry2);
while($rows=mysqli_fetch_array($result1)){
  $enroll_number = $rows[0];
  }
  $table_qry="CREATE TABLE table_".$enroll_number."(book_id INT(6), book_name VARCHAR(20) , author_name VARCHAR(20), publication VARCHAR(20), price FLOAT(10),  date_of_issue date);";
$result2=mysqli_query($conn,$table_qry);

if(!$result){
 die('Database Error!!!');
}
if(!$result2){ 
  printf("\nerror meassge %s\n",$conn->error);
die("UNABLE TO CREATE STUDENT DATA!!!");
}
}
else{
  header("location:index2.php");
     echo "Form Unsupported Please Retry!!!.";
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Registered</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="login-box">
  <h1>PMB Gujarati Science College Library</h1>
  <h4>1,Nasiya Road ,Indore,M.P</h4>
    <br>
       <h4> <?php echo $_POST['name']?> is now a Registered Student!<br>
       Whose Enrollment Number Is:-<?php echo $enroll_number;?>
</h4> 
 <input type="button" class="btn" value="Search Student" onclick=window.location.href='search.php' style="width:50%;">
 <input type="button" class="btn" value="Register Another Student" onclick=window.location.href="register.php" style="width:50%;border-spacing:10px;">
</div>
  </body>
</html>