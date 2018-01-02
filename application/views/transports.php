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
              <form action="" id="transporter_form" name="transporter_form" method="POST">
              <div class="box-body">
                <div class="col-md-12 form-group">
            <div class="col-md-6">
              <label for="Transporter_name" class="control-label col-md-5">Transporter name</label>
              <div class="col-md-7">
                <input type="text" name="transporter_name" id="transporter_name" class="input-sm form-control"/>
              </div>
            </div>
            <div class="col-md-6">
              <label for="Transporter_Address" class="control-label col-md-5">Transporter Address</label>
              <div class="col-md-7">
                <textarea name="transporter_addr" id="transporter_addr" class="input-sm form-control"></textarea>
              </div>
            </div>
          </div>
          <div class="col-md-12 form-group">
            <div class="col-md-6">
              <label for="Transporter_state" class="control-label col-md-5">State</label>
              <div class="col-md-7">
                <select name="transporter_state" id="transporter_state" class="input-sm form-control">
                  <option value="">-Select State-</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <label for="Transporter_city" class="control-label col-md-5">City</label>
              <div class="col-md-7">
                <select name="transporter_city" id="transporter_city" class="input-sm form-control">
                  <option value="">-Select City-</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-12 form-group">
            <div class="col-md-6">
              <label for="Transporter_pincode" class="control-label col-md-5">Pincode</label>
              <div class="col-md-7">
                <input type="text" name="transporter_pincode" id="transporter_pincode" class="input-sm form-control"/>                  
              </div>
            </div>
            <div class="col-md-6">
              <label for="Transporter_city" class="control-label col-md-5">Mobile</label>
              <div class="col-md-7">
                <input type="text" name="transporter_mobile" id="transporter_mobile" class="input-sm form-control"/>                  
              </div>
            </div>
          </div>
          <div>
            <strong>Google Map</strong>
            <span class="btn btn-xs btn-primary">
              <i class="fa fa-plus"></i>
            </span>
            <hr style="border:0.5px solid;"/>
          </div>          
          <div class="col-md-12 form-group">
            <div class="col-md-6">
              <label for="Transporter_Latitude" class="control-label col-md-5">Latitude</label>
              <div class="col-md-7">
                <input type="text" name="transporter_latitude" id="transporter_latitude" class="input-sm form-control" />
              </div>
            </div>
            <div class="col-md-6">
              <label for="Transporter_Longitude" class="control-label col-md-5">Longitude</label>
              <div class="col-md-7">
                <input type="text" name="transporter_longitude" id="transporter_longitude" class="input-sm form-control" />
              </div>
            </div>
          </div>
          <div>
           <strong>Vehicles details</strong>
          <hr style="border:0.5px solid;"/>
          </div>
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="employment">
            <thead>
              <tr>
                <th>#</th>
                <th>Vehicle Type</th>
                <th>Cost Per Kilometer</th>
                <th>Minimum Kilometer</th>
                <th>Minimum Cost</th>
                <th>Vehicle Number</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td class="form-group col-md-2 ">
                  <select class="form-control input-sm" id="vehicle_type" name="vehicle_type[]">
                    <option value="">-Select Vehicle Type-</option>
                  </select>
                </td>
                <td class="form-group col-md-2">                  
                    <input type="text" class="form-control input-sm" id="cost_per_Kilometer" name="cost_per_Kilometer[]" placeholder="" />                  
                </td>
                <td class="form-group col-md-2">                  
                    <input type="text" class="form-control input-sm" id="minimum_kilometer" name="minimum_kilometer[]" placeholder="" />
                  
                </td>
                <td class="form-group col-md-2 ">
                  <input type="text" class="form-control input-sm" id="minimum_cost" name="minimum_cost[]" />
                </td>
                <td class="form-group col-md-2 ">
                  <input type="text" class="form-control input-sm text-right" id="vehicle_number" name="vehicle_number[]"/>
                </td>                
                <td class="form-group">
                  <button class="btn btn-default btn-sm addButtonvehicle_details" type="button"><i class="fa fa-plus" ></i></button>
                </td>
              </tr>
              <tr class="hide " id="vehicle_details_template">
                <td></td>
                <td class="form-group col-md-2 ">
                  <select class="form-control input-sm" data-template="vehicle_type">
                    <option value="">-Select Vehicle Type-</option>
                  </select>
                </td>
                <td class="form-group col-md-2">                  
                    <input type="text" class="form-control input-sm" data-template="cost_per_Kilometer" placeholder="" />                  
                </td>
                <td class="form-group col-md-2">
                  
                    <input type="text" class=" form-control input-sm" data-template="minimum_kilometer" placeholder="" />
                   
                </td>
                <td class="form-group col-md-2 ">
                  <input type="text" class="form-control input-sm" data-template="minimum_cost">
                </td>
                <td class="form-group col-md-2 ">
                  <input type="text" class="form-control input-sm" data-template="vehicle_number" value="0">
                </td>               
                <td class="form-group">
                  <button class="btn btn-default btn-sm removeButtonvehicle_details" type="button"><i class="fa fa-times " style="color: red;"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
           
              
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
              <div class="pull-right">
                   <input type="submit" class="btn btn-xs btn-primary" name="country_submit" id="country_submit" />
            <input type="reset" class="btn btn-xs btn-warning" name="country_reset" id="country_reset" />
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
                        <thead>
                             <tr>
                               <th>#</th>
                               <th>Transporter Name</th>
                               <th>Phone Number</th>
                               <th>Address</th>
                               <th>Existing vehicle</th>
                               <th>Delete Transporter</th>
                               <th>Edit</th>
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
  $("#transporter_form").validate({
      rules:{
          transporter_name:{
            required:true,
            minlength:3
          },
          transporter_addr:{
            required:true,
            minlength:10
          },
          transporter_state:{
            required:true
          },
          transporter_city:{
            required:true
          },
          transporter_pincode:{
            required:true,
          },
          transporter_mobile:{
            required:true
          },
          transporter_latitude:{
            required:true
          },
          transporter_longitude:{
            required:true
          },
          
    }
  });
});
</script>
</body>
</html>