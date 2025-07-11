<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=download.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	$conn = new mysqli('localhost', 'root', '', 'oshts');
	
	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
						<th>Application ID</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
						<th>Date of Birth</th>
						<th>Gender</th>
						<th>Religion</th>
						<th>School</th>
						<th>Address</th>
						<th>Index Number</th>
						<th>Aggregate</th>
						<th>Health Condition</th>
						<th>Specific Condition</th>
						<th>Course</th>
						<th>Email</th>
						<th>Father Name</th>
						<th>Mother Name</th>
						<th>Phone</th>
					</tr>
				<tbody>
		";
		
		$query = $conn->query("SELECT * FROM `application`") or die(mysqli_errno());
		while($fetch = $query->fetch_array()){
			
		$output .= "
					<tr>
						<td>".$fetch['applicationID']."</td>
						<td>".$fetch['First_Name']."</td>
						<td>".$fetch['Other_Name']."</td>
						<td>".$fetch['Last_Name']."</td>
						<td>".$fetch['Date_of_Birth']."</td>
						<td>".$fetch['Gender']."</td>
						<td>".$fetch['Religion']."</td>
						<td>".$fetch['School']."</td>
						<td>".$fetch['Address']."</td>
						<td>".$fetch['Index_Number']."</td>
						<td>".$fetch['Score']."</td>
						<td>".$fetch['Health_Condition']."</td>
						<td>".$fetch['Specific_Condition']."</td>
						<td>".$fetch['Course']."</td>
						<td>".$fetch['Email']."</td>
						<td>".$fetch['Father_Name']."</td>
						<td>".$fetch['Mother_Name']."</td>
						<td>".$fetch['Phone']."</td>
					</tr>
		";
		}
		
		$output .="
				</tbody>
				
			</table>
		";
		
		echo $output;
	}
	
?>