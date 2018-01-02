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
             <form action="" method="post" name="commodity_volume_form" id="commodity_volume_form" enctype="multipart/form-data">
              <div class="box-body">
               <div class="col-md-12 form-group">
                <div class="col-md-6 ">
                  <label class="col-md-5 control-label">Category</label>
                  <div class="col-md-7">
                    <select class="input-sm form-control" name="category" id="category" >
                      <option value="">-Select Category-</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="col-md-5 control-label">Product</label>
                  <div class="col-md-7">
                    <select class="input-sm form-control" name="product" id="product">
                      <option value="">-Select Product-</option>
                    </select>
                  </div>
                </div>
              </div>             
              <div class="col-md-12 form-group">
                <div class="col-md-6 ">
                  <label class="col-md-5 control-label">Vehicle</label>
                  <div class="col-md-7">
                    <select class="input-sm form-control" name="vehicle" id="vehicle">
                      <option value="">-Select Vehicle-</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="col-md-5 control-label">Total Kilograms</label>
                  <div class="col-md-7">
                    <input type="text" class="input-sm form-control" name="kilograms" id="kilograms"/>                      
                  </div>
                </div>
              </div>
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
              <div class="pull-right">
                  <input type="submit" class="btn btn-xs btn-primary" name="commodity_submit" id="commodity_submit" />
                  <input type="reset" class="btn btn-xs btn-warning" name="commodity_reset" id="commodity_reset" />
              </div>
              
              </div>
            </form>
          </div>
          <!-- /.box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">List of Commodity</h3>
            </div>    
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                              <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Product Name</th>
                                <th>Vehile Type</th>
                                <th>Total Kilos</th>
                                <th>Options</th>                
                              </tr>
                            </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>               
                          </tr>
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
  $("#commodity_volume_form").validate({
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