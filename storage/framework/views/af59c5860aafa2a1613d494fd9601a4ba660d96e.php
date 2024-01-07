


<?php $__env->startSection('content'); ?>
    <div class="bg-light p-4 rounded">
        <h1>Update product</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <form method="post" action="<?php echo e(route('products.update', $product->id)); ?>">
                <?php echo method_field('patch'); ?>
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="<?php echo e($product->name); ?>" type="text" class="form-control" name="name" placeholder="Name" required>
                    <?php if($errors->has('name')): ?>
                    <span class="text-danger text-left"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="<?php echo e($product->description); ?>" type="text" class="form-control" name="description" placeholder="Description address" required>
                    <?php if($errors->has('description')): ?>
                    <span class="text-danger text-left"><?php echo e($errors->first('description')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input value="<?php echo e($product->price); ?>" type="text" class="form-control" name="price" placeholder="Price" required>
                    <?php if($errors->has('price')): ?>
                    <span class="text-danger text-left"><?php echo e($errors->first('price')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input value="<?php echo e($product->image); ?>" type="text" class="form-control" name="image" placeholder="Image" required>
                    <?php if($errors->has('image')): ?>
                        <span class="text-danger text-left"><?php echo e($errors->first('image')); ?></span>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Update product</button>
                <a href="<?php echo e(route('products.index')); ?>" class="btn btn-default">Cancel</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layouts2.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/products/edit.blade.php ENDPATH**/ ?>