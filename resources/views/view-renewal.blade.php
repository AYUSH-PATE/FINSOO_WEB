@include('Layouts.header')
@include('advisor-sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>Renewal list
        <a href="{{route('add-renewal')}}" class="btn btn-primary pull-right" style="margin-top:-5px;"><i class="fa fa-plus"></i>&nbsp;Add Renewal</a>
    </h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
                <div class="box">
					
					<div class="box-body">
                        <div class="scroll" style="overflow : scroll">
                            <table id="employee-role-table" class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th> Sr. No.</th>
                                  <th>Prposer Name</th>
                                  <th>Prposer Slug</th>
                                  <th>Insured Name</th>
                                  <th>DOB</th>
                                  <th>Mobile1</th>
                                  <th>Mobile2</th>
                                  <th>Mail ID</th>
                                  <th>Premium Mode</th>
                                  <th>Company Name</th>
                                  <th>Policy Type</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </tr>
                              </thead>
                              <tbody>
                        </table>
                        </div>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->
              </div>
          </div>
      </section>
  </div>	
  
  
  
  <script>
  
  
  $(".deleteButton").click(function() {
      var dataid = $(this).attr('id');
      if(confirm("Do you really want to delete this record?")) {
          window.location = "renewal-process.php?action=delete&id="+dataid;
      }
  });
  
  $(function () {
      $('#employee-role-table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
  });
  // $('table').scrollTableBody();
  </script>
@include('Layouts.footer')