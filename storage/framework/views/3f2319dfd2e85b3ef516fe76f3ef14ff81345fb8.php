<?php $__env->startSection('content'); ?>    
    <div id="myModal" class="modal fade in" style="display: block; margin-top: 160px; margin-left: 100px;">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="fa fa-trash"></i>
                    </div>				
                    <h4 class="modal-title">Are you sure?</h4>	
                    <a href="<?php echo e(route('admin.quotation')); ?>" class="close" data-dismiss="modal" aria-hidden="true">×</a>
                   
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete patient named <?php echo e($Quotation->name); ?> with id <?php echo e($Quotation->id); ?>? This process cannot be undone.</p>
                </div>
                <div class="modal-footer">
                        <a href="<?php echo e(route('admin.quotation')); ?>" class="btn btn-primary">Cancel</a>
                        <form action="deletequotation" method="post">
                                <?php echo e(csrf_field()); ?>

                    <input type="hidden" id="id" name="id" value="<?php echo e($Quotation->id); ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>