<?php include('ui/header.php');?>
<?php include('ui/menus.php');?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard<small>/Category</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo portal_url()?>"><i class="fa fa-dashboard"></i>
					Home</a></li>
			<li class="active">Category</li>
		</ol>
	</section>
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Category</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<?php echo form_open_multipart('upload/do_upload');?>
			<form action="<?php echo portal_url()?>master_add_category" method="post" name="category_form" id="category_form"
				enctype="multipart/form-data">
				<div class="box-body">
					<div class="col-md-6 form-group">
						<label class="col-md-5 control-label">Category</label>
						<div class="col-md-7">
							<input type="text" class="input-sm form-control" name="category_name"
								id="category_name" />
						</div>
					</div>
					<div class="col-md-6 form-group">
						<label class="col-md-5 control-label">Category</label>
						<div class="col-md-7">
							<input type="file" class="input-sm form-control" name="photo"
								id="photo" />
						</div>
					</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<div class="pull-right">
						<input type="submit" class="btn btn-xs btn-primary"
							name="category_submit" id="category_submit" /> <input
							type="reset" class="btn btn-xs btn-warning" name="category_reset"
							id="category_reset" />
					</div>

				</div>
			</form>
		</div>
		<!-- /.box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">List of Category</h3>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table id="category_datatable" class="table table-bordered table-striped">

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
   $("#category_form").validate({
	rules: {
		category_name: {
			required: true,
			minlength:3
		},
		photo:{
			required:true
		}
	},
	submitHandler: function(form) {   
		$.ajax({
			url:'<?php echo portal_url()?>master_add_category',
			data:$("#category_form").serialize(),
			method:"POST",
			contentType: false,
			cache: false,
			processData:false, 
			success:function(response){
				console.log(response);
				if(response.status==="success"){
					alert(response.message);
					$("#category_form")[0].reset();
			    	//$('#category_datatable').DataTable().destroy();
					//ld();
				}
		   },error:function(response){
		    	console.log(response);   	
		   }
		})
	}
   });
});
</script>
</body>
</html>