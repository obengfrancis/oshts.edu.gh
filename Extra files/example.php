<!DOCTYPE html>
<html lang="en">
<head>
  <title>Obuasi senior high technical school</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    .container{
      width: 50%;
      background: #fff;
    }
  </style>
<body style="background-color:lightblue">

<br/>

<div class="container"><br/>
  <center>
  <img src="img/img/download.jpg">
  <span class="navbar-text"><h4><strong>Obuasi Senior High Technical school</strong></h4>
  </span>
</center>
 <center><strong >STUDENT ADMISSION FORM</strong><br>
  <strong >2020/2021 academic year</strong>
 </center>

  <form action="try.php" method="post" class="needs-validation" novalidate>
    <div class="form-group">
      <label >Student's First Name:</label>
      <input type="text" class="form-control"  placeholder="Enter student's first name" name="First_Name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
   

    <div class="form-group">
      <label >Student's Last name:</label>
      <input type="text" class="form-control"  placeholder="Enter student's last name" name="Last_Name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label>Select program/course:</label>
      <select class="form-control"  name="Course" required>
        <option>Select your preffered course</option>
        <option>Science</option>
      <option>Business</option>
      <option>General arts</option>
      <option>Home Economics</option>
      <option>Agric science</option>
      <option>Applied electricity</option>
      <option>Automobile mechanic</option>
      <option>Electronics</option>
      <option>Wood technology</option>
      <option>Metal technology</option>
      </select> 
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label >Select religious denomination:</label>
      <select class="form-control"  name="Religion" required>
        <option>Christian</option>
        <option>Moslem</option>
      <option>Other</option>
      </select> 
       <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label>Address of last school attended:</label>
      <input type="text" class="form-control"  placeholder="Enter the address of your JHS " name="Address" required>
     <div class="invalid-feedback">Please fill out this field.</div>
  </div>

 
<div class="form-group">
      <label>Date of birth:</label>
      <input type="date" class="form-control"  placeholder="Enter student's last name" name="Date_of_Birth" required>
     <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label>B.E.C.E. Index Number:</label>
      <input type="number" class="form-control"  placeholder="Enter your B.E.C.E index number " name="Index_Number" required>
     <div class="invalid-feedback">Please fill out this field.</div>
  </div>


  <div class="form-group">
      <label>Provide phone number for respone: </label>
      <input type="number" class="form-control"  placeholder="Enter phone number for feedback the school" name="Phone" required="">
     <div class="invalid-feedback">Please fill out this field.</div>
  </div>



  <div class="form-group">
      <label>Do you have a health condition?:</label>
      <select class="form-control"  name="Health_Condition" required>
        <option>No</option>
      <option>Yes</option>
      </select> 
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


     <div class="form-group">
      <label>If yes Specify:</label>
      <input type="text" class="form-control"  placeholder="Specify your health condition here " name="Specific_Condition">
      </div>


      <div class="form-group">
      <label>Parent's E-mail: </label>
      <input type="text" class="form-control"  placeholder="Enter valid E-mail address, eg: you@gmail.com " name="Email" required="">
     <div class="invalid-feedback">Please fill out this field.</div>
  </div>

    <center> <button type="submit" class="btn btn-primary" name="Submit">Submit admission application</button></center>

  </form>
</div>


<script type="text/javascript">
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

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

</body>
</html>