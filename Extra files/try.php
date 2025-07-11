<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "try";
$table = "example";

//create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_error().')' .mysqli_connect_error ());
}


$First_Name=filter_input(INPUT_POST, 'First_Name');
$Last_Name=filter_input(INPUT_POST, 'Last_Name');
$Course=filter_input(INPUT_POST, 'Course');
$Religion=filter_input(INPUT_POST, 'Religion');
$Address=filter_input(INPUT_POST, 'Address');
$Date_of_Birth=filter_input(INPUT_POST, 'Date_of_Birth');
$Index_Number=filter_input(INPUT_POST, 'Index_Number');
$Phone=filter_input(INPUT_POST, 'Phone');
$Health_Condition=filter_input(INPUT_POST, 'Health_Condition');
$Specific_Condition=filter_input(INPUT_POST, 'Specific_Condition');
$Email=filter_input(INPUT_POST, 'Email');



$sql = "INSERT INTO example (First_Name, Last_Name, Course, Religion, Address, Date_of_Birth, Index_Number, Phone, Health_Condition, Specific_Condition, Email) VALUES 
('$First_Name', $Last_Name', '$Course', '$Religion', '$Address', '$Date_of_Birth', '$Index_Number', '$Phone', '$Health_Condition', '$Specific_Condition', '$Email')";



if (mysqli_multi_query($con,$sql)) {
		
echo "<script type='text/javascript'>alert('Your booking records submitted successfully')</script>";
		 
		 header("refresh:0.05; url=..admission_form.php");
	} 

	else{  
  	echo "<script type='text/javascript'>alert('Your booking records not submitted')</script>";
  	header("refresh:0.05; url=.admission_form.php");
  	  
  	  }

?>

	

