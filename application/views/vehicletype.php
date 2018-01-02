<?php include('ui/header.php');?>
<?php include('ui/menus.php');?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard<small>/Commodity</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo portal_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Commodity</li>
      </ol>
    </section>
     <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Commodity</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form action="" method="post" name="vehicle_type_form" id="vehicle_type_form">
              <div class="box-body">
                    <div class="col-md-6">
                        <label class="col-md-5 control-label">Vehicle Type</label>
                        <div class="col-md-7">
                            <input type="text" class="input-sm form-control" name="vehicle_type" id="vehicle_type" />
                        </div>
                    </div>
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
              <div class="pull-right">
                    <input type="submit" class="btn btn-xs btn-primary" name="vehicle_submit" id="vehicle_submit" />
			        <input type="reset" class="btn btn-xs btn-warning" name="vehicle_reset" id="vehicle_reset" />
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
  $("#vehicle_type_form").validate({
	rules: {
		country_name: {
			required: true,
			minlength:3
		}
	},
	submitHandler: function(form) {   
	alert();
		//$(form).submit();
	}
  });
});
</script>
</body>
</html>