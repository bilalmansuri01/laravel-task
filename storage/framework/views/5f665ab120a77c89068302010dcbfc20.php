

<?php $__env->startSection('content'); ?>

<div class="card mt-5">
    <h2 class="card-header">Show Contact</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="<?php echo e(route('contacts.index')); ?>"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong> <br/>
                    <?php echo e($contact->name); ?>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Phone:</strong> <br/>
                    <?php echo e($contact->phone); ?>

                </div>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('contacts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my-laravel-app\resources\views/contacts/show.blade.php ENDPATH**/ ?>