<?php include('ui/header.php');?>
<?php include('ui/menus.php');?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard<small>/Masters</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo portal_url()?>"><i class="fa fa-dashboard"></i>
					Home</a></li>
			<li class="active">Masters</li>
		</ol>
	</section>
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Masters</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
				<div class="box-body">

					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_country" data-toggle="tab">Country</a></li>
							<li><a href="#tab_state" data-toggle="tab">State</a></li>
							<li><a href="#tab_city" data-toggle="tab">City</a></li>
							<li class="pull-right"><a href="#" class="text-muted"><i
									class="fa fa-gear"></i></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_country">
								<div class="row">
									<form action="<?php echo portal_url()?>master_add_country" method="post" name="country_form"
										id="country_form">
										<div class="col-md-6">
											<label class="col-md-5 control-label">Country Name</label>
											<div class="col-md-7">
												<input type="text" class="input-sm form-control"
													name="country_name" id="country_name" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="pull-right">
												<input type="submit" class="btn btn-xs btn-primary"
													name="country_submit" id="country_submit" /> <input
													type="reset" class="btn btn-xs btn-warning"
													name="country_reset" id="country_reset" />
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_state">
								<div class="row">
									<form action="" method="post" name="state_form" id="state_form">
										<div class="col-md-6 form-group">
											<label class="col-md-5 control-label">Country Name</label>
											<div class="col-md-7">
												<select class="input-sm form-control country"
													name="state_country_name" id="state_country_name">
													<option value="">-Select-</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 form-group">
											<label class="col-md-5 control-label">State Name</label>
											<div class="col-md-7">
												<input type="text" class="input-sm form-control"
													name="state_name" id="state_name" />
											</div>
										</div>
										<div class="col-md-6 form-group">
											<div class="pull-right">
												<input type="submit" class="btn btn-xs btn-primary"
													name="state_submit" id="state_submit" /> <input
													type="reset" class="btn btn-xs btn-warning"
													name="state_reset" id="state_reset" />
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_city">
								<div class="row">
									<form action="" method="post" name="city_form" id="city_form">
										<div class="col-md-6 form-group">
											<label class="col-md-5 control-label">Country Name</label>
											<div class="col-md-7">
												<select class="input-sm form-control country"
													name="city_country_name" id="city_country_name"
													onchange="load_state('city_country_name')">
													<option value="">-Select-</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 form-group">
											<label class="col-md-5 control-label">State Name</label>
											<div class="col-md-7">
												<select class="input-sm form-control state"
													name="city_state_name" id="city_state_name">
													<option value="">-Select-</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 form-group">
											<label class="col-md-5 control-label">City Name</label>
											<div class="col-md-7">

												<input type="text" class="input-sm form-control"
													name="city_name" id="city_name" />
											</div>
										</div>
										<div class="col-md-6 form-group">
											<div class="pull-right">
												<input type="submit" class="btn btn-xs btn-primary"
													name="city_submit" id="city_submit" /> <input type="reset"
													class="btn btn-xs btn-warning" name="city_reset"
													id="city_reset" />
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<div class="pull-right"></div>

				</div>
			</form>
		</div>
		<!-- /.box -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">List of Masters</h3>
			</div>
			<div class="box-body">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_country_data" data-toggle="tab">Country</a></li>
							<li><a href="#tab_state_data" data-toggle="tab">State</a></li>
							<li><a href="#tab_city_data" data-toggle="tab">City</a></li>
							<li class="pull-right"><a href="#" class="text-muted"><i
									class="fa fa-gear"></i></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_country_data">
								<div class="table-responsive">
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Countrys</th>
												<th>Option</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 0; 
											foreach ($country as $c) { ?>    
											<tr>
												<td class="col-md-1"><?php echo ++$i; ?></td>
												<td><?php echo $c->countryname; ?></td>
												<td class="col-md-2">
													<span class="btn btn-warning btn-sm" onclick="edit_country('<?php echo $c->id; ?>','<?php echo $c->countryname; ?>')"> <i class="fa fa-edit"></i></i></span>
													<span class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></i></span>
												</td>
											</tr>
											<?php
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_state_data">
							
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_city_data">
								
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
			</div>
		</div>
	</div>
</div>


<?php include('ui/footer.php');?>
<?php include('ui/script_includes.php');?>
<script>
$("document").ready(function(){
  
$("#country_form").validate({
	rules: {
		country_name: {
			required: true,
			minlength:3
		}
	},
	submitHandler: function(form) {   
		$(form).submit();
	}
});
$("#state_form").validate({
	rules: {
		state_country_name: {
			required: true					
		},
		state_name: {
			required: true,
			minlength:3
		}
	},
	submitHandler: function(form) {   
		alert();
		//$(form).submit();
	}
});
$("#city_form").validate({
	rules: {
		city_country_name: {
			required: true					
		},
		city_state_name: {
			required: true,					
		},
		city_name:{
			required:true,
			minlength:3
		}
	},
	submitHandler: function(form) {   
		alert();
		//$(form).submit();
	}
});
});
function load_country(){
	$.ajax({
		type:"GET",
		url:"load_Country",
		data:{},
		success:function(data){
			$(".country").html(data);
		}
	});
}
function load_state(element_id){
	var id=$.trim($("#"+element_id).val());
	if(id!=null && id!=undefined){
		$.ajax({
			type:"GET",
			url:"load_State",
			data:{country:id},
			success:function(data){
				$(".state").html(data);
			}
		});
	}else{
		alert("Please Select Country!.");
	}	
}

function edit_country(i,n){
	
}
</script>
</body>
</html>