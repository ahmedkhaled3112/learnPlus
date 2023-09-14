<?php $__env->startSection('page-title'); ?>
    Student Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>
<h1 class="display-1 my-5 text-primary">Student Profile</h1>
    <div class="row">
        <div class="col-6">
            <ul class="h2 mb-5">
                <li class="mb-3">ID: <?php echo e($student->id); ?></li>
                <li class="mb-3">Name: <?php echo e($student->name); ?></li>
                <li class="mb-3">Phone: <?php echo e($student->phone); ?></li>
                <li class="mb-3">Birth Date: <?php echo e($student->birth_date); ?></li>
                <li class="mb-3">Address: <?php echo e($student->address); ?></li>
                <li class="mb-3">City: <?php echo e($student->city->name); ?></li>
            </ul>
            <a href="/students" class="btn btn-secondary">Back to Students List</a>
        </div>
        <div class="col-6">
            <img id="profile-picture" src="<?php echo e(asset('storage/students/' . $student->image)); ?>">
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mahmoud Emara\Desktop\LearnPlus\resources\views/students/view.blade.php ENDPATH**/ ?>