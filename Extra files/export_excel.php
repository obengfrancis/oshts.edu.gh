
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Obuasi Senior High Technical School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js\bootstrap.min.js"></script>


</head>
<body>
  
<div class="container-fluid">
  <br>
  <br>
  <br>
  <form action="export.php" method="POST">
      <input type="submit" name="export_excel" class="btn btn-success" value="Export to excel">

    </form>
<div class="container">
  <div class="row">
    
  <div class="table table table-hover">
  <table  class="table-bordered table-hover" id="application_data" >
    <thead>
      <tr>
        <th>userid</th>
        <th>username</th>
        <th>Department</th>
        <th>Phone</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $conn = new mysqli('localhost', 'root', '', 'try');
$sql = 'SELECT * FROM examp ORDER BY userid ASC';
$result = mysqli_query($conn, $sql);
      
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['userid']; ?></td>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['Department']; ?></td>
          <td><?php echo $row['Phone']; ?></td>
          <td><?php echo $row['email']; ?></td>

        </tr>

      <?php }    ?>

    </tbody>
    

  </table>
    
    
  </div>
  
</div>
  
</div>

</body>
</html>