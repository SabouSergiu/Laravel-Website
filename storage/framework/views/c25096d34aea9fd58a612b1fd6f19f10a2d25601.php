

<?php $__env->startSection('content'); ?>
    <div class="bg-light p-4 rounded">
        <h1>Add new product</h1>
        <div class="lead">
            Add new product and assign role.
        </div>
        <div class="container mt-4">
            <form method="POST" action="">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="<?php echo e(old('name')); ?>" type="text" class="form-control" name="name" placeholder="Name" required>
                    <?php if($errors->has('name')): ?>
                    <span class="text-danger text-left"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="<?php echo e(old('description')); ?>" type="text" class="form-control" name="description"  placeholder="Description address" required>
                    <?php if($errors->has('description')): ?>
                    <span class="text-danger text-left"><?php echo e($errors->first('description')); ?></span>
                    <?php endif; ?>
                </div>                
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input value="<?php echo e(old('price')); ?>" type="text" class="form-control" name="price" placeholder="Price" required>
                    <?php if($errors->has('price')): ?>
                        <span class="text-danger text-left"><?php echo e($errors->first('price')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input value="<?php echo e(old('image')); ?>" type="text" class="form-control" name="image" placeholder="Image" required>
                    <?php if($errors->has('image')): ?>
                        <span class="text-danger text-left"><?php echo e($errors->first('image')); ?></span>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Save product</button>
                <a href="<?php echo e(route('products.index')); ?>" class="btn btn-default">Back</a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts2.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/products/create.blade.php ENDPATH**/ ?>