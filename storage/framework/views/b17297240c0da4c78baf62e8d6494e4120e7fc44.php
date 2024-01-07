

<?php $__env->startSection('content'); ?>
    <div align="right">
        <a href="http://localhost:8000/home">Inapoi la magazin</a>
    </div>
    <div class="bg-light p-4 rounded">
        <h1>Products</h1>
        <div class="lead">
            Manage your products here.
            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary btn-sm float-right">Add new product</a>
        </div>

        <div class="mt-2">
            <?php echo $__env->make('layouts2.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col" width="1%">#</th>
                <th scope="col" width="15%">Name</th>
                <th scope="col">Description</th>
                <th scope="col" width="10%">Price</th>
                <th scope="col" width="1%">Image</th>
                <th scope="col" width="1%" colspan="4"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <th scope="row"><?php echo e($product->id); ?></th>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->image); ?></td>
                    <td><a href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-warning btnsm">Show</a></td>
                    <td><a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-info btnsm">Edit</a></td>
                    <td>
                    <?php echo Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']); ?>

                    <?php echo Form::close(); ?>

                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="d-flex">
            <?php echo $products->links(); ?>

        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts2.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/products/index.blade.php ENDPATH**/ ?>