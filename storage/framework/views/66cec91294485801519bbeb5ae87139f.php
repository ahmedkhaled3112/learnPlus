<?php $__env->startSection('page-title'); ?>
    Edit Student
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>
    <div class="row">
        <div class="col-8">
            <h1 class="display-1 my-5 text-primary">Edit Student</h1>
        </div>
        <div class="col-4">
            <img class="mt-3" id="profile-picture" src="<?php echo e(asset('storage/students/' . $student->image)); ?>">
        </div>
    </div>
    <form action="<?php echo e(route('students.update', $student->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo method_field('put'); ?>
        <div class="form-group">
            <label for="image">Profile Picture</label>
            <input type="file" name="image" id="image" class="form-control mt-2 mb-3">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo e($student->name); ?>" class="form-control mt-2 mb-3">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="<?php echo e($student->phone); ?>" class="form-control mt-2 mb-3">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo e($student->email); ?>" class="form-control mt-2 mb-3">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?php echo e($student->address); ?>" class="form-control mt-2 mb-3">
        </div>
        <div class="form-group">
            <label for="city_id">City</label>
            <select name="city_id" id="city_id" class="form-select mt-2 mb-3">
                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e($city->id == $student->city_id ? "selected" : ""); ?> value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo e(route('students.list')); ?>" class="btn btn-secondary">Back to List</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mahmoud Emara\Desktop\LearnPlus\resources\views/students/edit.blade.php ENDPATH**/ ?>