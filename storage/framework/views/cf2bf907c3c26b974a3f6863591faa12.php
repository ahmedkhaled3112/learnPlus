<?php $__env->startSection('page-title'); ?>
    Search for Students
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>
    <h1 class="display-1 text-primary my-5">Search for Students</h1>
    <h3>You're searching for <?php echo $id; ?></h3>
    <h3>You're searching for <?php echo e($id); ?></h3>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mahmoud Emara\Desktop\LearnPlus\resources\views/students/search.blade.php ENDPATH**/ ?>