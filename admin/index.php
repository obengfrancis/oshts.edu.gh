<!DOCTYPE html>
<html lang="en">
<head>
  <title>Obuasi senior high technical school</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viweport" content="width=device-width, initial scale=1.0" >
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/5a0e465901.js"></script>
</head>
<style type="text/css">
		.container{
			width: 35%;
			background: #fff;
		}
     .SignUp{
      margin-left: 50%;
      padding-bottom: auto;
      padding-top: auto;

     }
    }
	</style>
<body style="background-color:lightblue">
<br/>
<div class="container"><br/>
	<center>
	<img src="img/img/download.jpg">
	<span class="navbar-text"><h4><strong>Obuasi Senior High Technical school</strong></h4>
	</span><br>
  <h4><strong style="color: orange; font-size:20px; font-weight: 30px">ADMINISTRATOR LOGIN</strong></h4>
</center>
<br>

 </center>
  <form action="login.php" method="POST" class="needs-validation" novalidate>
    <div class="form-group">
      Username:
      <input type="text" class="form-control"  placeholder="Enter user name or email" name="Username" required>
      <div class="invalid-feedback">Please enter username.</div>
     </div>
    
     <div class="form-group">
      Password:
      <input type="password" class="form-control"  placeholder="Enter your password" name="Password" required>
     <div class="invalid-feedback">Please enter password.</div>
    </div>
   <button type="submit"  name="submit" class="btn btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>

   <!--Modal for Sign-Up for Administratior button-->
  <button type="button" class="SignUp" data-toggle="modal" data-target="#administrator" id="SignUp"><i class="fa fa-user-plus" aria-hidden="true"></i>
    SignUp
  </button> 
  </form>
  <br>
  <br>
  <br>
</div>




<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>
<?php include('signup_modal.php'); ?>
</body>
</html>

