<body >

<!-- Add New User -->
    <div class="modal fade" id="addnewuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <img src="img/img/download.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="modal-title" id="myModalLabel" style="font-size: 20px;">  ADD EXEAT ADMINITRATOR</span>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div><br>

<!--Modal body-->
<div class="modal-body" style="width: 100%">
<div class="container-fluid">
<form role="form" method="POST" action="adduser.php" enctype="multipart/form-data">
<div class="container-fluid">

<div class="form-group input-group">
 User Name:
<input type="text" style="width:500px; text-transform:capitalize;" class="form-control" name="Name" required>
</div>
<div class="form-group input-group">
Department:
<input type="text" style="width:500px; text-transform:capitalize;" class="form-control" name="Department">
</div>
<div class="form-group input-group">
Mobile Number:
<input type="number" style="width:500px; " class="form-control" name="Contact">
</div>
<div class="form-group input-group">
Username:
<input type="text" style="width:500px; ;" class="form-control" name="Username" required>
</div>
<div class="form-group input-group">
Password:
<input type="password" style="width:500px; " class="form-control" name="Password" required>
</div>
<div class="form-group input-group">    
Comfirm Password:
<input type="password" style="width:500px;" class="form-control" name="Cpassword" required>                    
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
</form>
</div>
</div>
</div>
</div>
</div>
</body>