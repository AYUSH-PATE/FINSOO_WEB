@include('Layouts.header')
@include('advisor-sidebar')


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" />
<link href="dist/css/jquery.multiselect.css" rel="stylesheet" type="text/css" media="screen" />
<link href="dist/css/jquery.fastconfirm.css" rel="stylesheet" type="text/css" media="screen" />



<aside class="right-side">
  <section class="content-header">
    <h1>RENEWAL<!--<small>Preview</small>--></h1>
  </section>
  <!-- Main content -->
  <section class="content">

    <!-- left column -->
    <div class="">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Add RENEWAL</h3>
          <div class="pull-right" style="font-size:15px;"><span class="mandatory">*</span> indicates required field
            &nbsp;</div>
        </div><!-- /.box-header -->
        <!-- form start -->
        <div class="box-body">
          <form role="form" class="form-horizontal" name="ipoform" id="ipoform" method="post"  autocomplete="off" enctype="multipart/form-data">

            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="proposerName" id="proposerName" class="form-control isRequired" label="Prposer Name"/>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="titleSlug" id="titleSlug" class="form-control isRequired" label="Prposer Slug "/>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="insuredname" id="insuredname" class="form-control" label="Insured Name"/>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="doB" id="doB" class="form-control" label="DOB"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="mobile1" id="mobile1" class="form-control" label="Mobile 1"/>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="mobile2" id="mobile2" class="form-control" label="Mobile 2"/>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="mailId" id="mailId" class="form-control" label="Mail ID"/>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Premium Mode</label>
                  <div class="col-lg-8">
                    <select name="moDe" id="moDe" class="select2 form-control" style="width:100%">
                      <option value="Regular">Regular</option>
                      <option value="Limited">Limited</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="companyName" id="companyName" class="form-control" label="Company Name"/>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="tYpe" id="tYpe" class="form-control" label="Policy Type"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="polnum" id="polnum" class="form-control" label="Policy Number"/>
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
                      <option value="Premium Frequency">--  Premium Frequency  --</option>
                      <option value="Monthly">Monthly</option>
                      <option value="Quarterly">Quarterly</option>
                      <option value="Half-yearly">Half-yearly</option>
                      <option value="Yearly">Yearly</option>
                      <option value="2 Yearly">2 Yearly</option>
                      <option value="3 Yearly">3 Yearly</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="renewpre" id="renewpre" class="form-control" label="Renewal Premium"/>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="vehnum" id="vehnum" class="form-control" label="Vehicle Number"/>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Renewal Date</label>
                  <div class="col-lg-8">
                    <input type="text" id="renew_date" name="renew_date" class="form-control" placeholder="mm-dd-yyyy"/>
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
                      <option value="Port-Internal">Port-Internal</option>
                      <option value="Port-Other">Port-Other</option>
                      <option value="Pending" selected >Pending</option>
                      <option value="Cancelled">Cancelled</option>
                      <option value="Renewed">Renewed</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">ECS / Non ECS</label>
                  <div class="col-lg-8">
                    <select name="ecs" id="ecs" class="select2 form-control" style="width:100%">
                      <option value="Regular">Regular</option>
                      <option value="Limited">Limited</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="upby" id="upby" class="form-control" label="Updated By"/>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="remarks" id="remarks" class="form-control" label="Remarks"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="isue" id="isue" class="form-control" label="Insued Date"/>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="PPT" id="PPT" class="form-control" label="PPT"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="PT" id="PT" class="form-control" label="PT"/>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="saidv" id="saidv" class="form-control" label="SA/IDV"/>
              </div>
            </div>
            <div class="box-footer">
              <input type="submit" name="submit" class="btn btn-info" value="Submit">
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
    $("#proposerName").stringToSlug({
      getPut: "#titleSlug"
    });
  })

</script>

<!-- <script type="text/javascript">
  $(function () {
    $(".select2").select2();
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
  });

</script> -->

<script>
  $("#fromDate").datepicker({
    dateFormat: "dd-mm-yy",
  });
  $("#toDate").datepicker({
    dateFormat: "dd-mm-yy",
  });
</script>
@include('Layouts.footer')
