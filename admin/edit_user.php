<?php
$conn = new mysqli('localhost', 'root', '', 'oshts');

	
	$UserID=$_GET['UserID'];
	
	$Name=$_POST['Name'];
	$Department=$_POST['Department'];
	$Contact=$_POST['Contact'];
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$use=mysqli_query($conn,"SELECT * FROM user WHERE UserID='UserID'");
	$urow=mysqli_fetch_array($use);
	
	if ($Password==$urow['Password']){
		$Pass=$Password;
	}
	else{
		$Pass=md5($Password);
	}
	mysqli_query($conn,"UPDATE user SET Name='$Name', Department='$Department', Contact='$Contact' where UserID='$UserID'");
	
	?>
		<script>
			window.alert('Exeat Administrator details updated successfully!');
			window.history.back();
		</script>
	<?php

?>