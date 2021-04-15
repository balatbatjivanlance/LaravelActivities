

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form method="POST" action="/posts/<?php echo e($posts->id); ?>">
                            <?php echo method_field('PATCH'); ?>
                            <?php echo csrf_field(); ?>

                                <input type="text" name="title" value="<?php echo e($posts->title); ?>">
                                <textarea name="description" value="<?php echo e($posts->description); ?>">
                                    <?php echo e($posts->description); ?>

                                </textarea>

                                <input type="submit" value="Submit">
                        </form>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelActivities\resources\views/posts/edit.blade.php ENDPATH**/ ?>