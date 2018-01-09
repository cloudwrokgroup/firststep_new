<?php include('ui/header.php');?>
<?php include('ui/menus.php');?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard<small>/Department</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo portal_url()?>"><i class="fa fa-dashboard"></i>
					Home</a></li>
			<li class="active">Department</li>
		</ol>
	</section>
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Department</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" id="department_form" name="department_form"
				action="" method="post">
				<div class="box-body">
					<div class="form-group col-md-6">
						<label for="department_name" class="col-md-5">Department Name</label>
						<div class="col-md-6">
							<input type="text" class=" input-sm form-control"
								name="department_name" id="department_name"
								placeholder="Please Enter Department Name">
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
				<h3 class="box-title">List of Department</h3>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table id="department_datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="col-md-1">#</th>
								<th>Department</th>
								<th class="col-md-1">Option</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include('ui/footer.php');?>
<?php include('ui/script_includes.php');?>
<script>
$("document").ready(function(){
    $("#department_form").validate({
        rules:{department_name:{required:true,minlength:3,remote: "<?php echo portal_url()?>master_check_department"}},
		submitHandler: function(form) {$.ajax({url:'<?php echo portal_url()?>master_add_department',data:$("#department_form").serialize(),method:"POST",
		success:function(response){if(response.status==="success"){alert(response.message);$("#department_form")[0].reset();$('#department_datatable').DataTable().destroy();ld();}},error:function(response){console.log(response);}});}});ld();
});
function ld(){
	$.ajax({url:'<?php echo portal_url()?>getDepartments_list',data:{},method:"GET",success:function(r){var d=r.data,i=0;
		 $.each(data,function(i,o){var html="";html+="<button onclick='editdepartment("+o.id+")' class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>&nbsp;"+"<button onclick='deletedepartment("+o.id+")' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></button>",o['option']=html,o['count']=++i;});
		 $('#department_datatable').DataTable( {"data": d,"columns":[{'data':'count'},{'data':'department'},{'data':'option'}]})},error:function(response){console.log(response);}
	});	
}
</script>
</body>
</html>