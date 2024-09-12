<?php echo $__env->make('Layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('advisor-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>Lead list
        <a href="<?php echo e(route('add-lead')); ?>" class="btn btn-primary pull-right" style="margin-top:-5px;"><i class="fa fa-plus"></i>&nbsp;Add Lead</a>
    </h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
				<div class="box">

					<div class="box-body">
						<?php if(Session::has('1')): ?>
						<p>
							<?php echo e(Session::get('1')); ?>

						</p>
						<?php endif; ?>
						<div class="scroll" style="overflow : scroll">
					  <table id="employee-role-table" class="table table-bordered table-striped">
						<thead>
						  <tr>
							<th>Sr. No.</th>
							<th>Name</th>
							<th>Name Slug</th>
							<th>DOB</th>
							<th>Mobile1</th>
							<th>Mobile2</th>
							<th>Reference By</th>
							<th>Interested Product</th>
							<th>Attended By</th>
							<th>Status</th>
							<th>Remarks</th>
							<th>Edit</th>
							<th>Delete</th>
						  </tr>
						</thead>
						<tbody>
						   <?php $__currentLoopData = $lead; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							   <tr>
								<td><?php echo e($item->leads_id); ?></td>
								<td><?php echo e($item->name); ?></td>
								<td><?php echo e($item->name_slug); ?></td>
								<td><?php echo e($item->dob); ?></td>
								<td><?php echo e($item->mobile1); ?></td>
								<td><?php echo e($item->mobile2); ?></td>
								<td><?php echo e($item->reference_by); ?></td>
								<td><?php echo e($item->interested_product); ?></td>
								<td><?php echo e($item->attended_by); ?></td>
								<td><?php echo e($item->status); ?></td>
								<td><?php echo e($item->remarks); ?></td>
								
								<td>
									<a href="<?php echo e(route('edit-lead',['id'=> $item->leads_id])); ?>" class="btn btn-default" style="margin-right:2px;margin-bottom:6px;" title="Edit"><i class="fa fa-pencil"> Edit</i></a>
								  </td>
							    <td>
								    <a title="Click here to Delete This Record" class="show-pointer"><span class="label label-danger deleteButton" id="<?php echo e($item->leads_id); ?>">Delete</span></a>
							      </td>
							   </tr>
						   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					  </table>
					  </div>
					</div><!-- /.box-body -->
				  </div><!-- /.box -->
			</div>
		</div>
	</section>
</div>

<script>


// $(".deleteButton").click(function() {
// 	var dataid = $(this).attr('id');
// 	if(confirm("Do you really want to delete this record?")) {
// 		window.location = "lead-process.php?action=delete&id="+dataid;
// 	}
// });

// $(function () {
// 	$('#employee-role-table').DataTable({
// 	  "paging": true,
// 	  "lengthChange": true,
// 	  "searching": true,
// 	  "ordering": true,
// 	  "info": true,
// 	  "autoWidth": false
// 	});
// });
</script>

<?php echo $__env->make('Layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Finsso\resources\views/view-lead.blade.php ENDPATH**/ ?>