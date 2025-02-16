

<?php $__env->startSection('content'); ?>

<div class="card mt-5">
    <h2 class="card-header">Laravel CRUD Example</h2>
    <div class="card-body">
        
        <?php if(session('success')): ?>
            <div class="alert alert-success" role="alert"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="<?php echo e(route('contacts.create')); ?>">
                <i class="fa fa-plus"></i> Create New Contact
            </a>
        </div>

        <!-- Bulk XML Import Form (Simple Input) -->
        <form action="<?php echo e(route('contacts.import.xml')); ?>" method="POST" enctype="multipart/form-data" class="mt-3">
            <?php echo csrf_field(); ?>
            <div class="input-group">
                <input type="file" name="xml_file" class="form-control" accept=".xml" required>
                <button type="submit" class="btn btn-primary">Upload XML</button>
            </div>
        </form>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e(++$i); ?></td>
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->phone); ?></td>
                        <td>
                            <form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" method="POST">
                                <a class="btn btn-info btn-sm" href="<?php echo e(route('contacts.show', $contact->id)); ?>">
                                    <i class="fa-solid fa-list"></i> Show
                                </a>
                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('contacts.edit', $contact->id)); ?>">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4">There are no contacts available.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        
        <?php echo $contacts->links(); ?>


    </div>
</div>  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('contacts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my-laravel-app\resources\views/contacts/index.blade.php ENDPATH**/ ?>