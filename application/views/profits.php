<?php include('ui/header.php');?>
<?php include('ui/menus.php');?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard<small>/Profits</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo portal_url()?>"><i class="fa fa-dashboard"></i>
					Home</a></li>
			<li class="active">Profits</li>
		</ol>
	</section>
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Profits</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form action="" method="post" name="profits_form" id="profits_form">
				<div class="box-body">

					<div class="col-md-12 form-group">
						<div class="col-md-6 ">
							<label class="col-md-5 control-label">Profits</label>
							<div class="col-md-7">
								<input type="text" class="input-sm form-control" name="profits"
									id="profits" />

							</div>
						</div>
						<div class="col-md-6"></div>
					</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<div class="pull-right">
						<input type="submit" class="btn btn-xs btn-primary"
							name="profits_submit" id="profits_submit" /> <input type="reset"
							class="btn btn-xs btn-warning" name="profits_reset"
							id="profits_reset" />
					</div>

				</div>
			</form>
		</div>
		<!-- /.box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">List of Profits</h3>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">

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
  
});
</script>
</body>
</html>