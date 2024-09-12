@include('Layouts.header')
@include('advisor-sidebar')

{{-- include "advisor-sidebar.php"; --}}


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" />
<link href="dist/css/jquery.multiselect.css" rel="stylesheet" type="text/css" media="screen" />
<link href="dist/css/jquery.fastconfirm.css" rel="stylesheet" type="text/css" media="screen" />



<aside class="right-side">
  <section class="content-header">
    <h1>LEAD<!--<small>Preview</small>--></h1>
  </section>
  <!-- Main content -->
  <section class="content">

    <!-- left column -->
    <div class="">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Add LEAD</h3>
          <div class="pull-right" style="font-size:15px;"><span class="mandatory">*</span> indicates required field
            &nbsp;</div>
        </div><!-- /.box-header -->

        <!-- form start -->
        <div class="box-body">
          <form role="form" class="form-horizontal" name="ipoform" id="ipoform" method="post" action="{{route('lead-process')}}"
            autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="proposerName" id="proposerName" class="form-control isRequired" label="Name"/>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="titleSlug" id="titleSlug" class="form-control isRequired" label="Name Slug "/>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="doB" id="doB" class="form-control" label="DOB"/>
              </div>

              <div class="col-md-6">
                <x-input type="text" name="mobile1" id="mobile1" class="form-control" label="Mobile 1"/>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="mobile2" id="mobile2" class="form-control" label="Mobile 2"/>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="refby" id="refby" class="form-control" label="Reference By"/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <x-input type="text" name="intrpr" id="intrpr" class="form-control" label="Interested Product"/>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="attby" id="attby" class="form-control" label="Attended By"/>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Status</label>
                  <div class="col-lg-8">
                    <select name="status" id="status" class="status form-control" style="width:100%">
                      <option value="Under Folloup">Under Folloup</option>
                      <option value="Closed">Closed</option>
                      <option value="Not Interested">Not Interested</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <x-input type="text" name="remarks" id="remarks" class="form-control" label="Remarks"/>
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

<script type="text/javascript">
  $(function () {
    $(".select2").select2();
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
  });

</script>

<script>
  $("#fromDate").datepicker({
    dateFormat: "dd-mm-yy",
  });
  $("#toDate").datepicker({
    dateFormat: "dd-mm-yy",
  });
</script>

@include('Layouts.footer')
