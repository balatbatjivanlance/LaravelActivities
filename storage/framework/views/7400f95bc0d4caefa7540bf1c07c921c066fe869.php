

<?php $__env->startSection('content'); ?>

<div class="container">
    <form method="POST" action="/posts">
        <?php echo csrf_field(); ?>
        <input type="text" name="title">
        <textarea name="description"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelActivities\resources\views/posts/create.blade.php ENDPATH**/ ?>