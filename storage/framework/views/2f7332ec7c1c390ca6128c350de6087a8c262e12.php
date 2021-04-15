

<?php $__env->startSection('content'); ?>
 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a class="btn btn-success pull-right" href="/posts">Back</a>
            <a class="btn btn-success pull-right" href="/posts/create">Create User</a>
            

            <div class="card">
                <div class="card-body">
                    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        Title: <?php echo e($posts->title); ?><br>
                        Description: <?php echo e($posts->description); ?><br>
                        Created At: <?php echo e($posts->created_at); ?><br>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelActivities\resources\views/posts/show.blade.php ENDPATH**/ ?>