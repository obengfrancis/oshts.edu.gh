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
  

  <style type="text/css">
    table{
      width: 100%
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-light navbar-light">
  <img src="img/Logo3.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="view_application.php" style="color: orange; font-style: monospace;  font-family: monospace; font-size: 20px;">&nbsp;Obuasi Senior High Technical School</a>  
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
 <center>    <h4 style="color:green; font-style:normal; font-family: monospace; font-size: 25px;">STUDENT'S EXEAT APPLICATIONS</h4></center><br>
<br>
<br>



<div class="container-fluid">
  <div class="row">
  <div class="table table table-hover">
  <table  class="table-bordered table-hover" id="exeat_data" >
      <thead>
      <tr>
      <td>Exeat ID</td>
    <td>Full Name</td>
    <td>Date for Exeat</td>
    <td>Time for Exeat</td>
    <td>Reason</td>
    <td>Return Date</td>
    <td>Return Time</td>
    <td>Phone</td>
    <td>Gender</td>
      
    </tr>
      </thead>
      <tbody>
      
      <?php
      $con = new mysqli('localhost', 'root', '', 'oshts');
      $sql = $con->query('SELECT * FROM exeat ORDER BY Exeat_ID DESC');
             while ($data = $sql->fetch_array()) 
    
      {
       echo '
         <tr>
         <td>'. $data["Exeat_ID"]. '</td>
         <td>'. $data["Full_Name"] .'</td>
         <td>'. $data["Date_of_Exeat"] .'</td>
         <td>'. $data["Time_of_Exeat"] .'</td>
         <td>'. $data["Reason"] .'</td>
         <td>'.  $data["Return_Date"] .'</td>
         <td>'.  $data["Return_Time"] .'</td>
         <td>'. $data["Phone"] .'</td>
         <td>'.  $data["Gender"] .'</td>


         </tr>
       ';
      }

      ?>
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
    $("#exeat_data").DataTable();
  });
  
  </script>
</body>
</html>
