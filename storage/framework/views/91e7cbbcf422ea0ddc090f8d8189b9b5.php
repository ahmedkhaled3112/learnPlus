<?php $__env->startSection('page-title'); ?>
    Search Students Dynamically
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>
<div class="card">
    <div class="card-body">
        <h1 class="display-1 text-primary my-5">Search Students Dynamically</h1>
        <form class="row mb-4" action="<?php echo e(route('students.by_dynamic')); ?>" method="get">
            <div class="col-10">
                <input type="text" name="term" id="term" value="<?php echo e(request('term')); ?>" class="form-control" placeholder="Type a term Here">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
        </form>
        <?php if(empty($results)): ?>
            <p class="alert alert-info text-center">No Data to Show</p>
        <?php else: ?>
            <div class="row">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Birth Date</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Actions</th>
                    </tr>
                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($student->name); ?></td>
                        <td><?php echo e($student->phone); ?></td>
                        <td><?php echo e($student->birth_date); ?></td>
                        <td><?php echo e($student->address); ?></td>
                        <td><?php echo e($student->city_id); ?></td>
                        <td>
                            <a href="/students/<?php echo e($student->id); ?>" class="btn btn-secondary">View</a>
                            <a href="/students/<?php echo e($student->id); ?>/edit" class="btn btn-primary">Edit</a>
                            <form style="display: inline-block;" action="/students/<?php echo e($student->id); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\projects\LearnPlus\resources\views/students/search-dynamically.blade.php ENDPATH**/ ?>