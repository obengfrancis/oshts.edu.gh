<?php
$conn = new mysqli('localhost', 'root', '', 'oshts');
if (isset($_POST['Username']) and isset($_POST['Password'])){

	// Assigning POST values to variables.
$Username = $_POST['Username'];
$Password = md5($_POST['Password']);

//inserting comment//
$sql = "INSERT INTO admin (Username, Password,) values ('$Username', '$Password')";

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `admin` WHERE Username='$Username' and Password ='$Password'";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){ 
	
echo "<script type='text/javascript'>alert('Administrator Login successful !')</script>";
  header("refresh:0.005;url=./view_application.php");

   }
   else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
header("refresh:0.005;url=./index.php");
}
}
?>