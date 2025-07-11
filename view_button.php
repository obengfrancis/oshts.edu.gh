<!-- View student's apllication details modal -->
<div class="modal fade" id="view_<?php echo $data['applicationID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <img src="img/img/download.jpg">&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="modal-title" id="myModalLabel" style="font-size: 20px;">  View Student Application details</span>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
        <!--Modal Body-->
<div class="modal-body" style="width: 100%">
<div class="container-fluid">
<?php
$conn = new mysqli('localhost', 'root', '', 'oshts');
$a=mysqli_query($conn,"SELECT * FROM application WHERE applicationID='".$data['applicationID']."'");
    $query=mysqli_fetch_array($a);
                    ?>

<div style="height:10px;"></div>
<form role="form" method="POST">
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Application ID:</span>
<input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($query['applicationID']); ?>" class="form-control" name="Name"></div>

<div style="height:10px;"></div>
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">First Name:</span>
<input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($query['First_Name']); ?>" class="form-control" name="First_Name"></div>
                        
<div style="height:10px;"></div>
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Middle Name:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Other_Name'] ?>" class="form-control" name="Other_Name">
</div>

<div style="height:10px;"></div>
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Last Name:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Last_Name'] ?>" class="form-control" name="Last_Name"></div>
                        
<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Date of Birth:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Date_of_Birth'] ?>" class="form-control" name="Date_of_Birth"></div>

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Gender:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Gender'] ?>" class="form-control" name="Gender"></div> 

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Religion:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Religion'] ?>" class="form-control" name="Religion"></div> 

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">School:</span>
<input type="text" style="width:400px;" value="<?php echo $query['School'] ?>" class="form-control" name="School"></div> 

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Address:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Address'] ?>" class="form-control" name="Address"></div> 

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Index Number:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Index_Number'] ?>" class="form-control" name="Index_Number"></div> 

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Aggregate:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Score'] ?>" class="form-control" name="Score"></div> 

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Health Condition:</span>
<input type="text" style="width:388px;" value="<?php echo $query['Health_Condition'] ?>" class="form-control" name="Health_Condition"></div>

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Specific Condition:</span>
<input type="text" style="width:380px;" value="<?php echo $query['Specific_Condition'] ?>" class="form-control" name="Specific_Condition"></div>

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Course:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Course'] ?>" class="form-control" name="Course"></div>

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">E-mail:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Email'] ?>" class="form-control" name="Email"></div>

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Father's Name:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Father_Name'] ?>" class="form-control" name="Father_Name"></div>

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Mother's Name:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Mother_Name'] ?>" class="form-control" name="Mother_name"></div>

<div style="height:10px;"></div>                    
<div class="form-group input-group">
<span class="input-group-addon" style="width:120px;">Mobile Number:</span>
<input type="text" style="width:400px;" value="<?php echo $query['Phone'] ?>" class="form-control" name="Phone"></div>

<div style="height:10px;"></div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                   
                    </form>
                </div>
        </div>
    </div>
<!-- /.modal -->