<!-- auth.php -->
<?php require"auth/auth.php"; ?>
<!-- auth.php -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>Account - SwiftX</title>

<!-- Boilerplate -->
<?php require"includes/boilerplate.php"; ?>
<!-- Boilerplate -->

<!-- Sweetalert -->
<?php require"includes/sweetalert.php"; ?>
<!-- Sweetalert -->

<!-- Datatables -->
<?php require"includes/datatables_head.php"; ?>
<!-- Datatables -->

</head>
<body>
    
<!-- header.php -->
<?php require 'includes/header.php'; ?>
<!-- header.php -->

<!-- container-fluid -->
<div class="container-fluid">

<!-- breadcrumb -->
<p class="mt-3">Settings / <a href="Account.php">Account</a></p>
<!-- breadcrumb -->

<!-- AddnewBtn -->
<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_account"><i class="fa fa-plus"></i> Add New</a>
<!-- AddnewBtn -->

<!-- InsertAccount Modal -->
<div class="modal fade" id="add_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Add Account</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<!-- form -->
<form action="" method="post">

<!-- Account -->
<div class="form-group">
<label for="Account">Account:</label>
<input type="text" name="account" id="account" class="form-control form-control-sm" placeholder="Account" required>
</div>
<!-- Account -->

<!-- Submit&CancelBtn -->
<div class="form-group">
<a href="Account.php" class="btn btn-danger btn-sm">Cancel</a>
<input type="submit" name="add_account" id="add_account" class="btn btn-primary btn-sm" value="Submit">
</div>
<!-- Submit&CancelBtn -->

<?php 
require 'config/config.php';
//taking values from feedback form
if(isset($_POST["add_account"])){
$Account = $_POST['account'];
$CreatedAt = date("Y:m:d");
$UpdatedAt = date("Y:m:d");
#Query
$query = "INSERT INTO account (account, created_at, updated_at)
VALUES('$Account','$CreatedAt', '$UpdatedAt' )";
#Execute
$execute = mysqli_query($db,$query);
if($execute){
echo "<script>
Swal.fire({
icon: 'success',
title: 'Value has been added successfully!',
footer: '<a class=refreshbtn href=Account.php>Refresh</a>'
})
</script>";
}else{
echo "<script>
Swal.fire({
icon: 'error',
title: 'Error occured!',
footer: '<a class=refreshbtn href=Account.php>Refresh</a>'
})
</script>";
}
}
?>
<!-- InsertAccount Modal -->

</form>
<!-- form -->
</div>
</div>
</div>
</div>
<!-- ./Modal -->

<!-- card -->
<div class="card">
<!-- card body -->
<div class="card-body">

<!-- FetchAccount Table -->
<?php 
require 'config/config.php';
$query = "SELECT * FROM account ORDER BY id ASC";
$execute = mysqli_query($db, $query);
?>
<table class="table table-striped table-hover text-center display compact" width="100%" id="accounts">
<thead>
<tr>
<th>#</th>
<th>Account</th>
<th>Created At</th>
<th>Last Updated</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
if (mysqli_num_rows($execute) > 0) {
while ($row = mysqli_fetch_array($execute)) {
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['account']; ?></td>
<td><?php echo $row['created_at']; ?></td>
<td><?php echo $row['updated_at']; ?></td>
<td>
<form action="" method="post">
<button type="button" class="btn btn-primary btn-sm editbtn"> <i class="fa fa-edit"></i> Edit</button>
</form>
</td>
<td>
<form action="" method="post">
<button type="button" class="btn btn-danger btn-sm deletebtn"> <i class="fa fa-trash"></i> Delete</button>
</form>
</td>
</tr>
<?php }} ?>
</tbody>
</table>
<!-- FetchAccount Table -->

<!-- EditAccount Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel"> Edit Account </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form action="" method="POST">
<div class="modal-body">

<!-- ID -->
<div class="form-group">
<label for="ID">ID:</label>
<input type="text" name="editid" id="editid" class="form-control form-control-sm" readonly>
</div>
<!-- ID -->

<!-- Account -->
<div class="form-group">
<label for="Account">Account:</label>
<input type="text" name="editaccount" id="editaccount" class="form-control form-control-sm" required>
</div>
<!-- Account -->

</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
<button type="submit" name="updateaccount" class="btn btn-primary btn-sm">Update</button>
</div>
</form>
<!-- form -->
</div>
</div>
</div>
<!-- EditAccount Modal -->

<!-- EditAccount query -->
<?php 
require"config/config.php";
if(isset($_POST['updateaccount'])){
$id = $_POST['editid'];
$EditAccount = $_POST['editaccount'];
$query = "UPDATE account SET account='$EditAccount'WHERE id='$id'";
$execute = mysqli_query($db, $query);
if($execute){
echo "<script>
Swal.fire({
icon: 'success',
title: 'Value has been updated successfully!',
footer: '<a class=refreshbtn href=Account.php>Refresh</a>'
})
</script>";
}else{
echo "<script>
Swal.fire({
icon: 'error',
title: 'Value has not been updated!',
footer: '<a class=refreshbtn href=Account.php>Refresh</a>'
})
</script>";
}
}
?>
<!-- EditAccount query -->

<!-- DeleteAttempt Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
<div class="modal-content text-center">
<div class="modal-header d-flex justify-content-center">
<p class="heading">Are you sure?</p>
</div>
<div class="modal-body">
<i class="fas fa-times fa-4x animated rotateIn"></i>
</div>

<!-- form -->
<form method="POST">

<!-- GetID -->
<input type="hidden" name="delete_id" id="delete_id">
<!-- GetID -->

<!--Footer-->
<div class="modal-footer flex-center">
<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">No</button>
<button type="submit" name="deletedata" class="btn btn-outline-danger btn-sm">Yes</button>
</div>
</div>
<!--/.Content-->
</form>
<!-- form -->
</div>
</div>
<!-- DeleteAttempt Modal -->

<!-- DeleteAccount Query -->
<?php 
require"config/config.php";
if(isset($_POST['deletedata'])){
$id = $_POST['delete_id'];
$query = "DELETE FROM account WHERE id='$id'";
$execute = mysqli_query($db, $query);
if($execute){
echo"<script>
Swal.fire({
icon: 'success',
title: 'Value has been deleted successfully!',
footer: '<a class=refreshbtn href=Account.php>Refresh</a>'
})
</script>";
}else{
echo "<script>
Swal.fire({
icon: 'error',
title: 'Value has not been deleted yet!',
footer: '<a class=refreshbtn href=Account.php>Refresh</a>'
})
</script>";
}
}
?>
<!-- DeleteAccount Query -->

</form>
<!-- form -->
</div>
</div>
</div>
<!-- DeleteAccount Modal -->

</tbody>
</table>
</div>
<!-- card body -->
</div>
<!-- card -->
</div>
<!-- container-fluid -->


<!-- Datatable -->
<?php require"includes/datatables_foot.php"; ?>
<!-- Datatable -->

<!-- ScriptDatatable -->
<script type="text/javascript">
$(document).ready(function() {
$('#accounts').DataTable();
} );
</script>
<!-- ScriptDatatable -->

<!-- ScriptEditAccount Modal -->
<script>
$(document).ready(function () {
$('.editbtn').on('click', function() {
$('#editmodal').modal('show');
$tr = $(this).closest('tr');
var data = $tr.children("td").map(function() {
return $(this).text();
}).get();
console.log(data);
$('#editid').val(data[0]);
$('#editaccount').val(data[1]);
});
});
</script>
<!-- ScriptEditAccount Modal -->

<!-- ScriptDeleteAccount Modal -->
<script>
$(document).ready(function () {
$('.deletebtn').on('click', function() {
$('#deletemodal').modal('show');
$tr = $(this).closest('tr');
var data = $tr.children("td").map(function() {
return $(this).text();
}).get();
console.log(data);
$('#delete_id').val(data[0]);
});
});
</script>
<!-- ScriptDeleteAccount Modal -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
