<?php $__env->startSection('content'); ?>
    <div class="row title-section">
        <div class="col-12 col-md-8">
        <?php $__env->startSection('title', "Book issue Management"); ?>
        </div>
        <div class="col-8 col-md-4" style="padding-bottom: 15px;">
            
                <div class="right-searchbar">
                        <!-- Search form -->
                        <form action="book_issue_member" method="post" class="form-inline">
                                <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <input class="form-control" type="text" name="search" placeholder="Search member" aria-label="Search" required />
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-primary" style="margin-top: -10px;" type="submit">Search</button>
                            </div>
                            
                        </form>
                    </div>
            
        </div>
    </div>
    <div class="row">
                <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                        width="75%">
                    <thead> 
                    <tr>
                        <th>Member DID</th>
                        <th>Member name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr> 
                            <td><?php echo e($member->id); ?></td>
                            <td><?php echo e($member->name); ?></td> 
                            <td>
                                <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.book_issue.addbook',$member->id)); ?>">
                                    <i class="fa fa-plus"></i>
                                </a>
                                
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
        <div class="pull-right">
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>