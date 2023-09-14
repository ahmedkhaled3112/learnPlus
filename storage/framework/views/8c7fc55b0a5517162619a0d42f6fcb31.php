<?php $__env->startSection('page-title'); ?>
    Students Trash
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>
        <h1 class="display-1 my-5 text-danger"><i class="fa-solid fa-trash-can"></i> Students Trash</h1>
        <div class="row">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th style="width: 20%;">Actions</th>
                </tr>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->name); ?></td>
                    <td><?php echo e($student->phone); ?></td>
                    <td><?php echo e($student->email); ?></td>
                    <td><?php echo e($student->address); ?></td>
                    <td><?php echo e($student->city->name); ?></td>
                    <td style="width: 20%;">
                        <a href="<?php echo e(route('students.restore', $student->id)); ?>" class="btn btn-success">Restore</a>
                        <a href="<?php echo e(route('students.delete_forever', $student->id)); ?>" class="btn btn-danger">Delete Permanently</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mahmoud Emara\Desktop\LearnPlus\resources\views/students/trash.blade.php ENDPATH**/ ?>