<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="export_to_excel.php"><center>Obuasi Senior High School Admissions Portal:  Export Student's Applications to Excel</center></a>
		</div>
	</nav>
	<div class="container-fluid"></div>

		
		<form method="POST" action="excel.php">
		<button class="btn btn-success " name="export"><i class="far fa-print"></i> Export Excel</button>
		</form>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
	<td>Application ID</td>
    <td>First Name</td>
    <td>Middle Name</td>
    <td>Last Name</td>
    <td>Date of Birth</td>
    <td>Gender</td>
    <td>Religion</td>
    <td>School</td>
    <td>Address</td>
    <td>Index Number</td>
    <td>Aggregate</td>
    <td>Health Condition</td>
    <td>Specific Condition</td>
    <td>Course</td>
    <td>Email</td>
    <td>Father Name</td>
    <td>Mother Name</td>
    <td>Phone</td>
   
				</tr>
			</thead>
			<tbody>
				 
      <?php
      $con = new mysqli('localhost', 'root', '', 'oshts');
      $sql = $con->query('SELECT * FROM application ORDER BY applicationID ');
             while ($data = $sql->fetch_array()) 
    {
        ?>
				<tr>
		 <td><?php echo $data["applicationID"]; ?></td>
         <td><?php echo $data["First_Name"]; ?></td>
         <td><?php echo $data["Other_Name"]; ?></td>
         <td><?php echo $data["Last_Name"]; ?></td>
         <td><?php echo $data["Date_of_Birth"]; ?></td>
         <td><?php echo  $data["Gender"]; ?></td>
         <td><?php echo  $data["Religion"]; ?></td>
         <td><?php echo $data["School"]; ?></td>
         <td><?php echo  $data["Address"]; ?></td>
         <td><?php echo  $data["Index_Number"]; ?></td>
         <td><?php echo $data["Score"]; ?></td>
         <td><?php echo  $data["Health_Condition"]; ?></td>
         <td><?php echo  $data["Specific_Condition"]; ?></td>
         <td><?php echo $data["Course"]; ?></td>
         <td><?php echo  $data["Email"]; ?></td>
         <td><?php echo  $data["Father_Name"]; ?></td>
         <td><?php echo $data["Mother_Name"]; ?></td>
         <td><?php echo  $data["Phone"]; ?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<br>
<br>
<br>
<br>
<div class="jumbotron jumbotron-fluid" style="background-color: #fff;">
  <center><h4 style="color: #f;">Obuasi Senior High Technical School  || P.O. Box 175  || Email:contact@oshts.com</h4>
    <h5 style="color: #f;">DEVELOPER: OSHTS ICT DEPARTMENT</h5>
    <h5 style="color: #f;">Copyright@2020 OSHTS</h5>
 </center>
	
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>