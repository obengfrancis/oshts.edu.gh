<!-- Delete User -->
<div class="modal fade" id="del_<?php echo $data["UserID"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <img src="img/img/download.jpg">&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="modal-title" id="myModalLabel" style="font-size: 20px;">  Delete Admission User details</span>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <!--Modal Body-->
                <div class="modal-body">
                <div class="container-fluid">
                    <?php
                        $a=mysqli_query($conn,"select * from user1 where UserID='".$data['UserID']."'");
                        $b=mysqli_fetch_array($a);
                    ?>
                    <h5><center>User Name: <strong><?php echo ucwords($b['Name']); ?></strong></center></h5>
                    <form role="form" method="POST" action="deleteuser1.php<?php echo '?id='.$data['UserID']; ?>">
                </div>                 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit User Details -->
<div class="modal fade" id="edit_<?php echo $data['UserID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <img src="img/img/download.jpg">&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="modal-title" id="myModalLabel" style="font-size: 20px;">  Edit Admission Administrator details</span>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

<!--Modal Body-->
                <div class="modal-body">
                <div class="container-fluid">
<?php
$a=mysqli_query($conn,"SELECT * FROM user1 WHERE UserID='".$data['UserID']."'");
                        $query=mysqli_fetch_array($a);
                    ?>
                    <div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_user1.php<?php echo '?UserID='.$data['UserID']; ?>">
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




