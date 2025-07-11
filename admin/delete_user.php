<?php 
if (isset($_GET['id'])) {
	# code...
	echo $_GET['id'];
	$conn = new mysqli('localhost', 'root', '', 'oshts');
			$sql = $conn->query('DELETE FROM user WHERE UserID='.$_GET['id'].' ');
			if ($sql) {
			echo "<script type='text/javascript'>alert('Data deleted')</script>";
			}else{
			echo "<script type='text/javascript'>alert('Error occured somewhere')</script>";
			}
}
header('location:user_exeat.php');
?>


