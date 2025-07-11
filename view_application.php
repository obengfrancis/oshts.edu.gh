<!DOCTYPE html>
<html lang="en">
<head>
 <title>Obuasi senior high technical school</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
 <script src="https://use.fontawesome.com/5a0e465901.js"></script> 
  
</head>

<body>
<nav class="navbar navbar-expand-md bg-light navbar-light">
  <img src="img/Logo3.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="view_application.php" style="color: orange; font-style: monospace;  font-family: monospace; font-size: 23px;">&nbsp;Obuasi Senior High Technical School</a>  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="view_application.php" style="color:blue; font-style:normal;font-family: serif; font-size: 23px"><i class="fa fa-home"></i>   Applications</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Admission_List.php" style="color:blue; font-style:normal;font-family: serif; font-size: 23px"><i class="fa fa-address-book"></i>    Admission</a>
      </li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

       <button type="button" class="btn btn-outline-danger "><a class="nav-link" href="#logout" data-toggle="modal">Logout  </a></button>       
      </li>
    </ul>   
  </div>  
</nav>

<br>
<br>
<br>
<center>    <h4 style="color:green; font-style:normal; font-family: monospace; font-size: 25px;">STUDENT'S APPLICATIONS</h4></center><br>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form method="POST" action="excel.php">
    <button class="btn btn-success " name="export"><i class="fa fa-print"></i></span> Export Excel</button>
    </form>
<!--
   <a href="export_to_excel.php"> <button class="btn btn-success" name="export"><span class="glyphicon glyphicon-print"></span> Export Excel</button>
    </a>-->
</div>
</div>
</div>

<div class="container-fluid">
  <div class="row">
  <div class="table table table-hover">
  <table  class="table-bordered table-hover" id="application_data" >
      <thead>
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
    <td>ACTION</td>
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
       <td> 
       <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#view_<?php echo $data["applicationID"]; ?>"><i class="fa fa-eye"></i> View</button>
       <?php include("view_button.php"); ?>
       </td>

        <?php   
        }
      ?>
    </tbody>
      </table>
        </div>
   </div>

<?php include("Logout_modal.php");  ?>

<br>
<br>
<br>
<br>
<div class="jumbotron jumbotron-fluid" style="background-color: #fff;">
  <center><h6 style="color: #f; font-style: italic; font-family: monospace;">Obuasi Senior High Technical School  || P.O. Box 175  || Email:contact@oshts.com</h6>
    <h6 style="color: #; font-style: italic; font-family: monospace;">DEVELOPER: OSHTS ICT DEPARTMENT</h6>
    <h6 style="color: #; font-style: italic; font-family: monospace;">Copyright@2020 OSHTS</h6>
 </center>
</div>


  <script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
 <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
 
  
  <script type="text/javascript" language="javascript">
    
    $(document).ready(function(){
    $("#application_data").DataTable();
    
  });

  


  </script>
</body>
</html>











