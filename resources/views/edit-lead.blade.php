@include ("Layouts.header")
@include ("advisor-sidebar");



   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css"/>
   <link href="dist/css/jquery.multiselect.css" rel="stylesheet" type="text/css" media="screen" />
   <link href="dist/css/jquery.fastconfirm.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript">
$(document).ready(function() {
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
                <h3 class="box-title">Edit Lead</h3><div class="pull-right" style="font-size:15px;"><span class="mandatory">*</span> indicates required field &nbsp;</div>
            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <form role="form" class="form-horizontal" name="editleadform" id="editleadform"  method="post" action="{{route('lead-process',['id'=> $lead->leads_id])}}" autocomplete="off" enctype="multipart/form-data">

                 <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <label for="name" class="col-lg-4 control-label">Name<span class="mandatory">*</span></label>
                     <div class="col-lg-8">
                      <input type="text" class="form-control isRequired"  id="proposerName" name="proposerName" value="{{$lead->name}}" placeholder="Enter IPO Title" title="Please enter IPO Title" />
                     </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                       <label for="categorySlug" class="col-sm-4 control-label">Name Slug  <span class="mandatory">*</span></label>
                       <div class="col-sm-8">
                         <input type="text" class="form-control isRequired" id="titleSlug" name="titleSlug"  placeholder="IPO slug" title="Please enter IPO Slug" value="{{$lead->name_slug
                         }}" />
                       </div>
                    </div>
                   </div>
                  </div>


                  <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">DOB</label>
                  <div class="col-lg-8">
                    <input type="text" id="doB" name="doB" class="form-control"  />
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Mobile 1</label>
                  <div class="col-lg-8">
                    <input type="text" id="mobile1" name="mobile1" class="form-control"    />
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Mobile 2</label>
                  <div class="col-lg-8">
                    <input type="text" id="mobile2" name="mobile2" class="form-control"  />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Reference By</label>
                  <div class="col-lg-8">
                    <input type="text" id="refby" name="refby" class="form-control"  />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Interested Product</label>
                  <div class="col-lg-8">

                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Attended By</label>
                  <div class="col-lg-8">
                  <select name = "attby" id = "attby" class="form-control">
                  <option value="select">-- select --</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Status</label>
                  <div class="col-lg-8">
                    <select name="status" id="status" class="status form-control" style="width:100%">

                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name" class="col-lg-4 control-label">Remarks</label>
                  <div class="col-lg-8">
                    <input type="text" id="remarks" name="remarks" class="form-control"/>
                  </div>
                </div>
              </div>
            </div>

	                  <input type="hidden" name="id" id="id">

                    <div class="box-footer">
                        <input type="submit" name="save" class="btn btn-info" value="Save Changes">
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
        $("#ipoTitle").stringToSlug({
            getPut: "#titleSlug"
        });
    })

</script>

<script type="text/javascript" >
  $(function () {
    $(".select2").select2();
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
  });


</script>

<script>
  $("#doB").datepicker({
    dateFormat: "dd-mm-yy",
  });
</script>

@include ("footer.php");
