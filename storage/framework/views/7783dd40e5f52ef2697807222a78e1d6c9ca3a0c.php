

<?php $__env->startSection('content'); ?>
 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a class="btn btn-success pull-right" href="/posts/create">Create User</a>
            <br><br>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($posts->id); ?></td>
                                <td><?php echo e($posts->title); ?></td>
                                <td><?php echo e($posts->description); ?></td>
                                <td><a href="/posts/<?php echo e($posts->id); ?>" class="btn btn-success pull-right">View</a></td>
                                <td><a href="/posts/<?php echo e($posts->id); ?>/edit" class="btn btn-success pull-right">Edit</a></td>
                                <td>
                                    <form method="POST" action="/posts/<?php echo e($posts->id); ?>">
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelActivities\resources\views/posts/index.blade.php ENDPATH**/ ?>