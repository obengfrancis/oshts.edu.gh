<?php
$con= mysqli_connect('127.0.0.1','root','');
if (!$con) {
  echo "Not Connected to server";
}
if (!mysqli_select_db($con,'oshts')) {
  echo "DataBase not selected";
}
if (isset($_POST['Username']) and isset($_POST['Password'])){

// Assigning POST values to variables.
$Username = $_POST['Username'];
$Password = md5($_POST['Password']);

//inserting comment//
$sql = "INSERT INTO user1 (Username, Password,) values ('$Username', '$Password')";

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user1` WHERE Username='$Username' and Password ='$Password'";

$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

if ($count == 1){ 
echo "<script type='text/javascript'>alert('Admission login successful')</script>";
  header("refresh:0.005;url=./view_application.php");
   }
  else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
header("refresh:0.005;url=./login.php");
}
}
?>