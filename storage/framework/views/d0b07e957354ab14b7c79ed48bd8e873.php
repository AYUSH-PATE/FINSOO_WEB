
<?php $__env->startSection('main-content'); ?>
<?php echo $__env->make('advisor-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




      <div class="content-wrapper">
           <div class="row">
            <div class="col-xs-12">
                <div class="box-body">
                   <div class="subContainer">
                        <img src="dist/img/logo.png" alt="Finsso Financial Services" title="Finsso Financial Services" />
                	</div>
                </div>
            </div>
        </div>
                                 
    
	    <div class="row">
            <div class="col-xs-12">
                <div class="box-body">
                  
                    
                    <div class="subContainer">
                      <div class="sectionContainer" style="font-size: 25px;margin: 20px 0px;font-weight: 600;">Manage</div>
                        <a href="<?php echo e(route('view-lead')); ?>" class="btn btn-default btn-lg" style="margin-right:2px;width:200px;margin-bottom:10px;"><img src="dist/img/glyphicons/blog.png" style="margin: 10px;width: 40px;height: 40px;" /><br/> <span style="font-size:16px; font-weight: 600;color: #414242;">Lead </span></a>
                        <a href="<?php echo e(route('view-renewal')); ?>" class="btn btn-default btn-lg" style="margin-right:2px;width:200px;margin-bottom:10px;"><img src="dist/img/glyphicons/blog.png" style="margin: 10px;width: 40px;height: 40px;" /><br/> <span style="font-size:16px; font-weight: 600;color: #414242;">Renewal </span></a>
                        <a href="change-password.php" class="btn btn-default btn-lg" style="margin-right:2px;width:200px;margin-bottom:10px;"><img src="dist/img/glyphicons/password.png" style="margin-bottom: 10px;" /><br/> <span style="font-size:16px; font-weight: 600;color: #414242;">Change Password</span></a>
                        <a href="logout.php" class="btn btn-default btn-lg" style="margin-right:2px;width:200px;margin-bottom:10px;"><img src="dist/img/glyphicons/signout.png" style="margin-bottom: 10px;" /><br/> <span style="font-size:16px; font-weight: 600;color: #414242;">Signout</span></a>
                      </div>
                      
                    
                </div>
            </div>
        </div>
  
</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Finsso\resources\views/advisor-dashboard.blade.php ENDPATH**/ ?>