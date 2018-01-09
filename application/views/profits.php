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
					<table id="profit_datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="col-md-1">#</th>
								<th>Profit</th>
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
$("document").ready(function(){$("#profits_form").validate({rules:{profits:{required:true,minlength:2,remote: "<?php echo portal_url()?>master_check_profit"}},submitHandler: function(form) {$.ajax({url:'<?php echo portal_url()?>master_add_profits',data:$("#profits_form").serialize(),method:"POST",success:function(response){if(response.status==="success"){alert(response.message);$("#profits_form")[0].reset();$('#profit_datatable').DataTable().destroy();ld();}},error:function(response){console.log(response);}});}});ld();});
function ld(){$.ajax({url:'<?php echo portal_url()?>getProfits_list',data:{},method:"GET",success:function(r){var d=r.data,i=0;$.each(d,function(i,o){var html="";html+="<button onclick='ep("+o.id+")' class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>&nbsp;"+"<button onclick='dp("+o.id+")' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></button>",o['option']=html,o['count']=++i;});$('#profit_datatable').DataTable( {"data": d,"columns":[{'data':'count'},{'data':'profit'},{'data':'option'}]})},error:function(response){console.log(response);}});}
</script>
</body>
</html>