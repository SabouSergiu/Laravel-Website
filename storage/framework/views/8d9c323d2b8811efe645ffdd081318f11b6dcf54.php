


<?php $__env->startSection('content'); ?>
    <div class="bg-light p-4 rounded">
        <h1>Update user</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <form method="post" action="<?php echo e(route('users.update', $user->id)); ?>">
                <?php echo method_field('patch'); ?>
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="<?php echo e($user->name); ?>" type="text" class="form-control" name="name" placeholder="Name" required>
                    <?php if($errors->has('name')): ?>
                    <span class="text-danger text-left"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="<?php echo e($user->email); ?>" type="email" class="form-control" name="email" placeholder="Email address" required>
                    <?php if($errors->has('email')): ?>
                    <span class="text-danger text-left"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="<?php echo e($user->username); ?>" type="text" class="form-control" name="username" placeholder="Username" required>
                    <?php if($errors->has('username')): ?>
                    <span class="text-danger text-left"><?php echo e($errors->first('username')); ?></span>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Update user</button>
                <a href="<?php echo e(route('users.index')); ?>" class="btn btn-default">Cancel</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layouts1.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/users/edit.blade.php ENDPATH**/ ?>