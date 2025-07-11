<!DOCTYPE html>
<html lang="en">
<head>
 <title>Obuasi senior high technical school</title>
 <meta charset="utf-8">
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
  <a class="navbar-brand" href="Admission_List.php" style="color: orange; font-style: monospace;  font-family: monospace; font-size: 20px;">&nbsp;Obuasi Senior High Technical School</a>  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="view_application.php" style="color:blue; font-style:normal;font-family: serif; font-size: 18px"><i class="fa fa-home"></i>   Applications</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Admission_List.php" style="color:blue; font-style:normal;font-family: serif; font-size: 18px"><i class="fa fa-address-book"></i>    Admission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_exeat.php" style="color:blue; font-style:normal;font-family: serif; font-size: 18px"><i class="fa fa-address-card"></i> Exeats</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_admission.php" style="color:blue; font-style:normal;font-family: serif; font-size: 18px"><i class="fa fa-unlock-alt"></i> User Admission</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="user_exeat.php" style="color:blue; font-style:normal;font-family: serif; font-size: 18px"><i class="fa fa-unlock-alt"></i> User Exeat</a>
      </li>
      &nbsp; 

       <button type="button" class="btn btn-outline-danger "><a class="nav-link" href="#logout" data-toggle="modal">Logout  </a></button>       
      </li>
    </ul>   
  </div>  
</nav>

<br>
<br>
<br>
 <center>    <h4 style="color:green; font-style:normal; font-family: monospace; font-size: 25px;" >STUDENT'S ADMISSION LIST</h4></center>
 <br>

<div class="container-fluid">
  <div class="row">
  <div class="table table-hover">
  <table  class="table-bordered table-hover" id="admission_data" >
      <thead>
      <tr>
    <td>Admission ID</td>
    <td>Student Name</td>    
    <td>Department</td>
    <td>Course</td>
    <td>Gender</td>
    <td>Religion</td>
    <td>Postal address</td>
    <td>Index Number</td>
    <td>Aggregate</td>
    <td>Sporting activity</td>   
   
    <td>Mobile Number</td>
    </tr>
      </thead>
      <tbody>

        
      
    </tbody>
      </table>
    </div>
   </div>
<?php include('Logout_modal.php'); ?>
<br>
<br>
<br>
<br>
<div class="jumbotron jumbotron-fluid" style="background-color: #fff;">
  <center><h6 style="color: #000; font-style: italic;">Obuasi Senior High Technical School  || P.O. Box 175  || Email:contact@oshts.com</h6>
    <h6 style="color: #000; font-style: italic;">DEVELOPER: OSHTS ICT DEPARTMENT</h6>
    <h6 style="color: #000; font-style: italic;">Copyright@2020 OSHTS</h6>
 </center>
</div>



  <script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    
    $(document).ready(function(){
    $("#admission_data").DataTable();
  });
  
  </script>
</body>
</html>
