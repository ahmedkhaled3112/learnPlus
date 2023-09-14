<?php $__env->startSection('page-title'); ?>
    Students List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>
    <div class="card">
        <div class="card-body">
            <h1 class="display-3 my-5 text-primary"><i class="fa-solid fa-users"></i> Students List</h1>
            <div class="row">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th style="width: 30%;">Actions</th>
                    </tr>
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img class="profile-picture" src="<?php echo e(asset('storage/students/' . $student->image)); ?>"></td>
                        <td><?php echo e($student->name); ?></td>
                        <td><?php echo e($student->phone); ?></td>
                        <td><?php echo e($student->email); ?></td>
                        <td><?php echo e($student->address); ?></td>
                        <td><?php echo e($student->city->name); ?></td>
                        <td style="width: 30%;">
                            <a href="<?php echo e(route('students.view', $student->id)); ?>" class="btn btn-secondary">View</a>
                            <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-primary">Edit</a>
                            <form style="display: inline-block;" action="<?php echo e(route('students.delete', $student->id)); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <?php echo e($students->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mahmoud Emara\Desktop\LearnPlus\resources\views/students/list.blade.php ENDPATH**/ ?>