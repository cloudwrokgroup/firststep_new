<?php include('ui/header.php');?>
<?php include('ui/menus.php');?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard<small> / Vehicle </small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo portal_url()?>"><i class="fa fa-dashboard"></i>
					Home</a></li>
			<li class="active">Vehicle</li>
		</ol>
	</section>
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Vehicle</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form action="" method="post" name="vehicle_type_form"
				id="vehicle_type_form">
				<div class="box-body">
					<div class="col-md-6">
						<label class="col-md-5 control-label">Vehicle Type</label>
						<div class="col-md-7">
							<input type="text" class="input-sm form-control"
								name="vehicle_type" id="vehicle_type" />
						</div>
					</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<div class="pull-right">
						<input type="submit" class="btn btn-xs btn-primary"
							name="vehicle_submit" id="vehicle_submit" /> <input type="reset"
							class="btn btn-xs btn-warning" name="vehicle_reset"
							id="vehicle_reset" />
					</div>
				</div>
			</form>
		</div>
		<!-- /.box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">List of Vehicle</h3>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table id="vehicletype_datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="col-md-1">#</th>
								<th>Vehicle Type</th>
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
var cb=function(type,i){alert(type+"----"+i)};

$("document").ready(function(){$("#vehicle_type_form").validate({rules: {vehicle_type: {required: true,minlength:3,remote: "<?php echo portal_url()?>master_check_vehicletype"}},submitHandler: function(form) {$.ajax({url:'<?php echo portal_url()?>master_add_vehicletype',data:$("#vehicle_type_form").serialize(),method:"POST",success:function(response){if(response.status==="success"){alert(response.message);$("#vehicle_type_form")[0].reset();$('#vehicletype_datatable').DataTable().destroy();ld();}},error:function(response){console.log(response);}});}});ld();});
function ld(){$.ajax({url:'<?php echo portal_url()?>getVehicletypes_list',data:{},method:"GET",success:function(r){var d=r.data,i=0;$.each(d,function(i,o){var html="";html+="<button onclick='ev("+o.id+")' class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>&nbsp;"+"<button onclick='dv("+o.id+")' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></button>",o['option']=html,o['count']=++i;});$('#vehicletype_datatable').DataTable( {"data": d,"columns":[{'data':'count'},{'data':'vehicletype'},{'data':'option'}]})},error:function(response){console.log(response);}});}
function dv(i){cb("delete",i)};
function ev(i){cb("edit",i)};
</script>
</body>
</html>