<?php
session_start();
if(isset($_POST["query_num"])){
  dataCalc();
}else if(isset($_POST["book_id"])){
  bookData();
}else{
  header("location:index2.php");
}
function bookData(){
            $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'library_db';
$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn->connect_error) {
    die("Connection failed:");
}
date_default_timezone_set("America/New_York");
$query="INSERT INTO table_".$_SESSION["enroll_number"]."(book_id,book_name,author_name,publication,price,date_of_issue) VALUES ('".$_POST["book_id"]."','".$_POST["book_name"]."','".$_POST["author_name"]."','".$_POST["publication"]."',".$_POST["price"].",'".date('Y-m-d')."');";
$result=mysqli_query($conn,$query);
  if(!$result){
     die("CAN NOT ISSUE BOOK QUERY ERROR" .mysqli_error());
  }else{
        dataCalc();
  }
}
function dataCalc(){
            $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'library_db';
    if(isset($_POST['query_num'])){
     $search_num=$_POST["query_num"];
      }else if(isset($_SESSION["enroll_number"])){
       $search_num=$_SESSION["enroll_number"];
  } 
$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
   $qry="SELECT * from all_stu WHERE enroll_num =$search_num";
     $result = mysqli_query($conn,$qry);
       if(!$result){
           die('Database Error!!!' .mysqli_error());
           }    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="login-box"  style="top:20%">
  <h1>PMB Gujarati Science College Library</h1>
  <h4>1,Nasiya Road ,Indore,M.P</h4>
<input type="button" class="btn" style="font-size:18px; padding:2px;" value='Register Student' onclick=window.location.href='register.php'>
<input type="button" class="btn" value='Search Again' onclick=window.location.href='search.php'  style="font-size:18px; padding:2px;">
<input type="button" class="btn" style="font-size:18px; padding:2px;" value="Issue A Book!" onclick=window.location.href='issue.php' >
<?php 
if ($result->num_rows == 0){
    echo "Student Not Registered Register First!!";
  }
  ?>
</div>
   <?php
    while($rows=mysqli_fetch_assoc($result))
    {

   ?>
<div class="result-table" style=" color:black; position:absolute;
        background-color: grey; top:43%; left:38%; ;font-size: 18px; transform: translate(-30%,0);">
  <table border="2px" align="center">
<tr>
<th> Student Name</th>
<th>Father's Name</th>
<th> Contact Number</th>
<th>Email</th>
<th>Department</th>
<th>Date Of Birth</th>
<th>Enrollment Number</th>
<th>Photo</th>
</tr>
<tr>
<td><?php echo $rows["name"];?></td>
<td><?php echo $rows["f_name"];?></td>
<td><?php echo $rows["c_number"];?></td>
<td><?php echo $rows["email"];?></td>
<td><?php echo $rows["stream"];?></td>
<td><?php echo $rows["dob"];?></td>
<td><?php echo $rows["enroll_num"]; $enroll_number=$rows["enroll_num"];
                                $_SESSION["enroll_number"]=$enroll_number; ?></td>
<td>
 <?php 
  echo '<img height="150px" width="150px" src="data:image/jpg;base64,'.base64_encode($rows['image']).'"/>' ;}?></td>
</tr>
</table>
<div style="background-color: red ;color:white; position: absolute ; transform: translate(10%);">
 
 
       <?php  
  $book_qry="SELECT * FROM table_".$enroll_number.";";
  $s_num=1;
  $result2=mysqli_query($conn,$book_qry);
  if(!$result2){
    echo "unable to get Book Data";
  }
  if($result2->num_rows >=1)
  {
    ?>
     <table border="2px" class="result-table">
    <tr>
      <th> S.No</th>
      <th>Book Id </th>
      <th>Book Name</th>
      <th>Author Name</th>
      <th>Publication</th>
      <th> Date of issue</th>
      <th>Price</th>
    </tr>
    <tr> 
      <?php
  while($rows2=mysqli_fetch_assoc($result2)){
?>
      <td><?php echo $s_num ;?> </td>
      <td><?php echo $rows2["book_id"] ;?></td>
      <td><?php echo $rows2["book_name"];?></td>
      <td><?php echo $rows2["author_name"] ;?></td>
      <td><?php echo $rows2["publication"] ;?></td>
      <td><?php echo $rows2["date_of_issue"];?></td>
      <td><?php echo $rows2["price"];?></td>
</tr>
<?php 
$s_num++;
}
}
else{
   echo "No Books Issued Till Now" ;
}
}
?>
  </table>
</div>
</div>
  </body>
</html>