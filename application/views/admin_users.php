<?php include('ui/header.php');?>
<?php include('ui/menus.php');?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard<small> / Admin Users</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo portal_url()?>"><i class="fa fa-dashboard"></i>
					Home</a></li>
			<li class="active">Admin Users</li>
		</ol>
	</section>
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Admin User</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" id="admin_user_form" name="admin_user_form"
				action="" method="post">
				<div class="box-body">
					<div class="form-group col-md-6">
						<label for="User_email" class="col-md-5">User Email</label>
						<div class="col-md-6">
							<input type="text" class=" input-sm form-control"
								name="user_email" id="user_email"
								placeholder="Please Enter User E-mail">
						</div>
					</div>
					<div class="form-group col-md-6">
						<label for="User_name" class="col-md-5">User name</label>
						<div class="col-md-6">
							<input type="text" class=" input-sm form-control"
								name="user_name" id="user_name"
								placeholder="Please Enter User Name">
						</div>
					</div>
					<div class="form-group col-md-6">
						<label for="department_name" class="col-md-5">Department Name</label>
						<div class="col-md-6">
							<select class="input-sm form-control" name="department_name"
								id="department_name">
								<option value="">-Select Department-</option>
							</select>
						</div>
					</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<div class="pull-right">
						<input type="submit" class="btn btn-primary btn-xs" value="Submit" />
						<input type="reset" class="btn btn-warning btn-xs" value="Clear" />
					</div>

				</div>
			</form>
		</div>
		<!-- /.box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">List of Admin Users</h3>
			</div>
			<div class="box-body">
				<table id="data_table" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>User E-mail</th>
							<th>Password</th>
							<th>Department</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>kalaiselvan</td>
							<td>testing@gmail.com</td>
							<td>admin</td>
							<td>Testing</td>
							<td><span class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i>
							</span> <span class="btn btn-sm btn-danger"> <i
									class="fa fa-trash"></i>
							</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<?php include('ui/footer.php');?>
<?php include('ui/script_includes.php');?>
<script>
$("document").ready(function(){
    $("#admin_user_form").validate({
        rules:{
            department_name:{
                required:true,
                minlength:4
            }
        }
    })

    $('#data_table').DataTable({
        "lengthMenu":  [10, 25, 50, "All"]
    })
});
</script>
</body>
</html>
