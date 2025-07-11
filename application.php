
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "oshts";

//create connection
$con = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_error().')' .mysqli_connect_error ());
}


$First_Name=filter_input(INPUT_POST, 'First_Name');
$Other_Name=filter_input(INPUT_POST, 'Other_Name');
$Last_Name=filter_input(INPUT_POST, 'Last_Name');
$Date_of_Birth=filter_input(INPUT_POST, 'Date_of_Birth');
$Gender=filter_input(INPUT_POST, 'Gender');
$Religion=filter_input(INPUT_POST, 'Religion');
$School=filter_input(INPUT_POST, 'School');
$Address=filter_input(INPUT_POST, 'Address');
$Index_Number=filter_input(INPUT_POST, 'Index_Number');
$Score=filter_input(INPUT_POST, 'Score');
$Health_Condition=filter_input(INPUT_POST, 'Health_Condition');
$Specific_Condition=filter_input(INPUT_POST, 'Specific_Condition');
$Course=filter_input(INPUT_POST, 'Course');
$Email=filter_input(INPUT_POST, 'Email');
$Father_Name=filter_input(INPUT_POST, 'Father_Name');
$Mother_Name=filter_input(INPUT_POST, 'Mother_Name');
$Phone=filter_input(INPUT_POST, 'Phone');


$sql = "INSERT INTO application (First_Name, Other_Name, Last_Name, Date_of_Birth, Gender, Religion, School, Address, Index_Number, Score, Health_Condition, Specific_Condition, Course, Email, Father_Name, Mother_Name, Phone) VALUES ('$First_Name', '$Other_Name', '$Last_Name', '$Date_of_Birth', '$Gender', '$Religion', '$School', '$Address', '$Index_Number', '$Score', '$Health_Condition', '$Specific_Condition', '$Course', '$Email', '$Father_Name', '$Mother_Name', '$Phone')";
	  
	if (mysqli_multi_query($con, $sql)) {
		
echo "<script type='text/javascript'>alert('Your Application submitted successfully')</script>";
		 
		 header("refresh:0.05; url=./index.php");
	} 

	else{  
  	echo "<script type='text/javascript'>alert('Your Application not submitted')</script>";
  	header("refresh:0.05; url=./index.php");
  	  
  	  }
?>