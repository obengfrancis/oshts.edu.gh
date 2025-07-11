
<!-- Add Customer -->
    <div class="modal fade" id="administrator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <img src="img/img/download.jpg">&nbsp;&nbsp;
                    <h4 class="modal-title" id="myModalLabel">Sign Up as Administrator to Login</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
<!--Modal body-->
<div class="modal-body">
<div class="container-fluid">
<form role="form" method="POST" action="addadmin.php" enctype="multipart/form-data">
<div class="container-fluid">

<div class="form-group input-group">
Administrator Name:
<input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="Name" required>
</div>
<div class="form-group input-group">
Department:
<input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="Department">
</div>
<div class="form-group input-group">
Mobile Number:
<input type="number" style="width:400px; " class="form-control" name="Contact">
</div>
<div class="form-group input-group">
Username:
<input type="text" style="width:400px; ;" class="form-control" name="Username" required>
</div>
<div class="form-group input-group">
Password:
<input type="password" style="width:400px; " class="form-control" name="Password" required>
</div>
<div class="form-group input-group">    
Comfirm Password:
<input type="password" style="width:400px;" class="form-control" name="Cpassword" required>                    
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
</form>
                </div>
            </div>
        </div>
    </div>

<!-- /.modal -->


<!-- View Admission administrator details -->
    <div class="modal fade" id="view_<?php echo $data['UserID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">View Admission Administrator details</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
<?php
$a=mysqli_query($conn,"SELECT * FROM user1 WHERE UserID='".$data['UserID']."'");
                        $query=mysqli_fetch_array($a);
                    ?>
                    <div style="height:10px;"></div>
                    <form role="form" method="POST" action="view_user1.php<?php echo '?UserID='.$data['UserID']; ?>">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['Name']); ?>" class="form-control" name="Name">
                        </div>
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Department:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['Department']); ?>" class="form-control" name="Department">
                        </div>
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Contact Info:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['Contact'] ?>" class="form-control" name="Contact">
                        </div>
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Username:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['Username'] ?>" class="form-control" name="Username">
                        </div>
                        <div style="height:10px;"></div>                    
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Password:</span>
                            <input type="password" style="width:400px;" value="<?php echo $b['Password'] ?>" class="form-control" name="Password">
                        </div>
                        <div style="height:10px;"></div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
                    </form>
                </div>
        </div>
    </div>
<!-- /.modal -->