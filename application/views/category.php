<?php include('ui/header.php');?>
<?php include('ui/menus.php');?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard<small>/Category</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo portal_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
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
            <form action="" method="post" name="category_form" id="category_form" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-6 form-group">
                  <label class="col-md-5 control-label">Category</label>
                  <div class="col-md-7">
                    <input type="text" class="input-sm form-control" name="category" id="category" />
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <label class="col-md-5 control-label">Category</label>
                  <div class="col-md-7">
                    <input type="file" class="input-sm form-control" name="photo" id="photo" />
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
              <div class="pull-right">
                  <input type="submit" class="btn btn-xs btn-primary" name="category_submit" id="category_submit" />
                  <input type="reset" class="btn btn-xs btn-warning" name="category_reset" id="category_reset" />
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
   $("#category_form").validate({
	rules: {
		category: {
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