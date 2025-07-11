<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "oshts";

//create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_error().')' .mysqli_connect_error ());
}
//assigning values
	$Name=$_POST['Name'];
	$Department=$_POST['Department'];
	$Contact=$_POST['Contact'];
	$Username=$_POST['Username'];
	$Password=md5($_POST['Password']);
	
	
	mysqli_query($conn,"insert into user1 (Name, Department, Contact, Username, Password) values ('$Name', '$Department', '$Contact', '$Username', '$Password')");
	
	?>
		<script>
			window.alert('SignUp for Admission user successful!');
			window.history.back();
		</script>
	<?php
?>