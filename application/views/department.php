<?php include('ui/header.php');?>
<?php include('ui/menus.php');?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard<small>/Department</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo portal_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
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
            <form role="form" id="department_form" name="department_form" action="" method="post">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label for="department_name" class="col-md-5">Department Name</label>
                  <div class="col-md-6">
                  <input type="text" class=" input-sm form-control" name="department_name" id="department_name" placeholder="Please Enter Department Name">
                  </div>                  
                </div>
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
              <div class="pull-right">
              <input type="submit" class="btn btn-primary btn-xs" value="Submit"/>
              <input type="reset" class="btn btn-warning btn-xs" value="Clear"/>
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
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Department</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
    $("#department_form").validate({
        rules:{
            department_name:{
                required:true,
                minlength:4
            }
        }
    })
});
</script>
</body>
</html>