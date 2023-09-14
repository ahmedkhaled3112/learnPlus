<?php $__env->startSection('page-title'); ?>
    New Student
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>
<div class="card">
    <div class="card-body">
        <h1 class="display-1 my-5 text-primary">New Student</h1>
        <form action="<?php echo e(route('students.save')); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Profile Picture</label>
                <input type="file" name="image" id="image" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="city_id">City</label>
                <select name="city_id" id="city_id" class="form-select mt-2 mb-3">
                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Add Student</button>
            <a href="/students" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mahmoud Emara\Desktop\LearnPlus\resources\views/students/new.blade.php ENDPATH**/ ?>