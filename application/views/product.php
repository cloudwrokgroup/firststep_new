<?php include('ui/header.php');?>
<?php include('ui/menus.php');?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard<small>/ Product</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo portal_url()?>"><i class="fa fa-dashboard"></i>
					Home</a></li>
			<li class="active">Product</li>
		</ol>
	</section>
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Product</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form action="" method="post" name="product_form" id="product_form" enctype="multipart/form-data">
				<div class="box-body">

					<div class="col-md-12 form-group">
						<div class="col-md-6 ">
							<label class="col-md-5 control-label">Category</label>
							<div class="col-md-7">
								<select class="form-control input-sm" name="category" id="category">
									<option value="">-Select Category-</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<label class="col-md-5 control-label">Product Name</label>
							<div class="col-md-7">
								<input type="text" class="input-sm form-control" name="product_name"
									id="product_name" />
							</div>
						</div>
					</div>
					<div class="col-md-12 form-group">
						<div class="col-md-6 ">
							<label class="col-md-5 control-label">Upload Image</label>
							<div class="col-md-7">
									<input type="file" class="input-sm form-control" name="product_file"
									id="product_file" />
							</div>
						</div>
						<div class="col-md-6">
						
						</div>
					</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<div class="pull-right">
						<input type="submit" class="btn btn-xs btn-primary"
							name="product_submit" id="product_submit" /> <input type="reset"
							class="btn btn-xs btn-warning" name="product_reset"
							id="product_reset" />
					</div>

				</div>
			</form>
		</div>
		<!-- /.box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">List of Products</h3>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table id="profit_datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="col-md-1">#</th>
								<th>Product Name</th>
								<th>Product Image</th>
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
$("document").ready(function(){$("#product_form").validate({rules:{category:{required:true},product_name:{required:true,minlength:2,remote: "<?php echo portal_url()?>master_check_profit"},product_file:{required:true}},
submitHandler: function(form) {$.ajax({url:'<?php echo portal_url()?>master_add_profits',data:$("#profits_form").serialize(),method:"POST",success:function(response){if(response.status==="success"){alert(response.message);$("#profits_form")[0].reset();$('#profit_datatable').DataTable().destroy();ld();}},error:function(response){console.log(response);}});}});
//ld();
	
});
function ld(){$.ajax({url:'<?php echo portal_url()?>getProfits_list',data:{},method:"GET",success:function(r){var d=r.data,i=0;$.each(d,function(i,o){var html="";html+="<button onclick='ep("+o.id+")' class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>&nbsp;"+"<button onclick='dp("+o.id+")' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></button>",o['option']=html,o['count']=++i;});$('#profit_datatable').DataTable( {"data": d,"columns":[{'data':'count'},{'data':'profit'},{'data':'option'}]})},error:function(response){console.log(response);}});}
</script>
</body>
</html>