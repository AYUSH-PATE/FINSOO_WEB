@include('Layouts.header')
@include('advisor-sidebar')
<?php

// $id = check_input($con, base64_decode($_REQUEST['id']));
// $id1 = check_input($con, $_REQUEST['id']);
// //echo $id;

// $query = mysqli_query($con, "SELECT * FROM `renewals` WHERE `lead_id`='" . $id . "' ");
// $data = mysqli_fetch_assoc($query);
// if (!$data) {
//   die("" . mysqli_error());
// }

?>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" />
<link href="dist/css/jquery.multiselect.css" rel="stylesheet" type="text/css" media="screen" />
<link href="dist/css/jquery.fastconfirm.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript">
  $(document).ready(function () {
    $("#ipoform").validate({
      rules: {
        ipoTitle: {
          required: true,
        },
      },

      messages: {
        ipoTitle: {
          required: "This field cannot be blank.",
        },
      }
    });
  });
</script>


<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<aside class="right-side">
  <section class="content-header">
    <h1>Lead<!--<small>Preview</small>--></h1>
  </section>
  <!-- Main content -->
  <section class="content">

    <!-- left column -->
    <div class="">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Edit RENEWALS</h3>
          <div class="pull-right" style="font-size:15px;"><span class="mandatory">*</span> indicates required field
            &nbsp;</div>
        </div><!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
          <form role="form" class="form-horizontal" name="editleadform" id="editleadform" method="post"
            action="renewal-process.php" autocomplete="off" enctype="multipart/form-data">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Prposer Name<span class="mandatory">*</span></label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control isRequired" id="proposerName" name="proposerName"
                      value="<?php echo $data['proposer_name'] ?>" placeholder="Enter IPO Title"
                      title="Please enter IPO Title" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="categorySlug" class="col-sm-4 control-label">Prposer Slug <span
                      class="mandatory">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control isRequired" id="titleSlug" name="titleSlug"
                      value="<?php echo $data['proposer_name_slug']; ?>" placeholder="IPO slug"
                      title="Please enter IPO Slug" />
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Insured Name</label>
                  <div class="col-lg-8">
                    <input type="text" id="insuredname" name="insuredname" class="form-control"
                      value="<?php echo $data['insured_name']; ?>" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">DOB</label>
                  <div class="col-lg-8">
                    <input type="text" id="doB" name="doB" class="form-control" value="<?php echo $data['dob']; ?>" />
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Mobile 1</label>
                  <div class="col-lg-8">
                    <input type="text" id="mobile1" name="mobile1" class="form-control"
                      value="<?php echo $data['mobile1']; ?>" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Mobile 2</label>
                  <div class="col-lg-8">
                    <input type="text" id="mobile2" name="mobile2" class="form-control"
                      value="<?php echo $data['mobile2']; ?>" />
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Mail ID</label>
                  <div class="col-lg-8">
                    <input type="text" id="mailId" name="mailId" class="form-control"
                      value="<?php echo $data['mail_id']; ?>" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Premium Mode</label>
                  <div class="col-lg-8">
                    <select name="moDe" id="moDe" class="select2 form-control" style="width:100%">

                      <option value="Regular" <?php if ($data['mode'] == 'Regular') {
                        echo 'selected';
                      }
                      ;
                      ?>> Regular
                      </option>
                      <option value="Limited" <?php if ($data['mode'] == 'Limited') {
                        echo 'selected';
                      }
                      ;
                      ?>> Limited
                      </option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Company Name</label>
                  <div class="col-lg-8">
                    <input type="text" id="companyName" name="companyName" class="form-control"
                      value="<?php echo $data['company_name']; ?>" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Policy Type</label>
                  <div class="col-lg-8">
                    <input type="text" id="tYpe" name="tYpe" class="form-control"
                      value="<?php echo $data['type']; ?>" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Policy Number</label>
                  <div class="col-lg-8">
                    <input type="text" id="polnum" name="polnum" class="form-control"
                      value="<?php echo $data['policy_num']; ?>" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Renewal Start Date</label>
                  <div class="col-lg-8">
                    <input type="date" id="renew_start_date" name="renew_start_date" class="form-control" placeholder="mm-dd-yyyy" />
                    <span style="font-size:13px; color:red;"> date format will be : mm/dd/yyyy</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Premium Frequency</label>
                  <div class="col-lg-8">
                    <select name="prefreq" id="prefreq" class="select2 form-control" style="width:100%">
                    <option value="Premium Frequency" <?php
                      if ($data['premium_freq'] == 'Monthly') {
                        echo "selected";
                      }
                      ?>>Premium Frequency</option>
                      <option value="Monthly" <?php
                      if ($data['premium_freq'] == 'Monthly') {
                        echo "selected";
                      }
                      ?>>Monthly</option>
                      <option value="Quarterly" <?php
                      if ($data['premium_freq'] == 'Quarterly') {
                        echo "selected";
                      }
                      ?>>Quarterly</option>
                      <option value="Half-yearly" <?php
                      if ($data['premium_freq'] == 'Half-yearly') {
                        echo "selected";
                      }
                      ?>>Half-yearly</option>
                      <option value="Yearly" <?php
                      if ($data['premium_freq'] == 'Yearly') {
                        echo "selected";
                      }
                      ?>>Yearly</option>
                      <option value="2 Yearly" <?php
                      if ($data['premium_freq'] == '2 Yearly') {
                        echo "selected";
                      }
                      ?>>2 Yearly</option>
                      <option value="3 Yearly" <?php
                      if ($data['premium_freq'] == '3 Yearly') {
                        echo "selected";
                      }
                      ?>>3 Yearly</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Renewal Premium</label>
                  <div class="col-lg-8">
                    <input type="text" id="renewpre" name="renewpre" class="form-control"
                      value="<?php echo $data['renew_prem']; ?>" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Vehicle Number</label>
                  <div class="col-lg-8">
                    <input type="text" id="vehnum" name="vehnum" class="form-control"
                      value="<?php echo $data['vehicle_num']; ?>" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Renewal Date</label>
                  <div class="col-lg-8">
                    <input type="text" id="renew_date" name="renew_date" class="form-control"  value="<?php echo $data['renew_date']; ?>" placeholder="mm-dd-yyyy" />
                    <span style="font-size:13px; color:red;"> date format will be : mm/dd/yyyy</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Status</label>
                  <div class="col-lg-8">
                    <select name="status" id="status" class="select2 form-control" style="width:100%">
                      <option value="Port-Internal" <?php
                      if ($data['status'] == "Port-Internal") {
                        echo 'selected';
                      }
                      ?>>Port-Internal</option>
                      <option value="Port-Other" <?php
                      if ($data['status'] == "Port-Other") {
                        echo 'selected';
                      }
                      ?>>Port-Other</option>
                      <option value="Pending" <?php
                      if ($data['status'] == "Pending") {
                        echo 'selected';
                      }
                      ?>>Pending</option>
                      <option value="Cancelled" <?php
                      if ($data['status'] == "Cancelled") {
                        echo 'selected';
                      }
                      ?>>Cancelled</option>
                      <option value="Renewed" <?php
                      if ($data['status'] == "Renewed") {
                        echo 'selected';
                      }
                      ?>>Renewed</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">ECS / Non ECS</label>
                  <div class="col-lg-8">
                    <select name="ecs" id="ecs" class="select2 form-control" style="width:100%">
                      <option value="Regular" <?php
                      if ($data['ecs'] == "Regular") {
                        echo 'selected';
                      }
                      ?>>Regular</option>
                      <option value="Limited" <?php
                      if ($data['ecs'] == "Limited") {
                        echo 'selected';
                      }
                      ?>>Limited</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Updated By</label>
                  <div class="col-lg-8">
                    <input type="text" id="upby" name="upby" class="form-control"
                      value="<?php echo $data['updated_by']; ?>" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Remarks</label>
                  <div class="col-lg-8">
                    <input type="text" id="remarks" name="remarks" class="form-control"
                      value="<?php echo $data['remarks']; ?>" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Insued Date</label>
                  <div class="col-lg-8">
                    <input type="text" id="isue" name="isue" class="form-control"
                      value="<?php echo $data['issued_date']; ?>" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">PPT</label>
                  <div class="col-lg-8">
                    <input type="text" id="PPT" name="PPT" class="form-control" value="<?php echo $data['ppt']; ?>" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">PT</label>
                  <div class="col-lg-8">
                    <input type="text" id="PT" name="PT" class="form-control" value="<?php echo $data['pt']; ?>" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">SA/IDV</label>
                  <div class="col-lg-8">
                    <input type="text" id="saidv" name="saidv" class="form-control"
                      value="<?php echo $data['sa/idv']; ?>" />
                  </div>
                </div>
              </div>
            </div>

            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

            <div class="box-footer">
              <input type="submit" name="save" class="btn btn-info" value="Save Changes">
              <input type="reset" name="reset" class="btn bg-primary" value="Reset">
            </div>

          </form>
      </div><!-- /.box -->
    </div><!--/.col (left) -->
  </section><!-- /.content -->

</aside>

<script type="text/javascript">
   $('#prefreq').change(function() {

    var selected = document.getElementById('prefreq').value;    
    var intitdate =document.getElementById('renew_start_date').value;  

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'calculate_date.php?value=' + selected + '&initdate=' + intitdate, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('renew_date').value = xhr.responseText;
        }
    };
    xhr.send();

});    
</script>

<script type="text/javascript" src="dist/js/jquery.multiselect.js"></script>
<script type="text/javascript" src="dist/js/jquery.multiselect.filter.js"></script>
<script type="text/javascript" src="dist/js/jquery.fastconfirm.js"></script>
<script type="text/javascript" src="dist/js/slug.js"></script>
<script type="text/javascript" src="dist/js/jquery.blockUI.js"></script>
<script src="//cdn.ckeditor.com/4.5.9/full/ckeditor.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#ipoTitle").stringToSlug({
      getPut: "#titleSlug"
    });
  })

</script>



<script>
  $("#fromDate").datepicker({
    dateFormat: "dd-mm-yy",
  });
  $("#toDate").datepicker({
    dateFormat: "dd-mm-yy",
  });
</script>

<?php
include "footer.php";
?>
@include('Layouts.footer')