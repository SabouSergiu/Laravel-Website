

<?php $__env->startSection('content'); ?>
    <div class="bg-light p-4 rounded">
        <h1>Users</h1>
        <div class="lead">
        Manage your users here.
        <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary btn-sm float-right">Add new user</a>
    </div>

    <div class="mt-2">
        <?php echo $__env->make('layouts1.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col" width="1%">#</th>
            <th scope="col" width="15%">Name</th>
            <th scope="col">Email</th>
            <th scope="col" width="10%">Username</th>
            <th scope="col" width="1%" colspan="3"></th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($user->id); ?></th>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->username); ?></td>
                    <td><a href="<?php echo e(route('users.show', $user->id)); ?>" class="btn btn-warning btnsm">Show</a></td>
                    <td><a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-info btnsm">Edit</a></td>
                    <td>
                    <?php echo Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

                    <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="d-flex">
        <?php echo $users->links(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts1.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/users/index.blade.php ENDPATH**/ ?>