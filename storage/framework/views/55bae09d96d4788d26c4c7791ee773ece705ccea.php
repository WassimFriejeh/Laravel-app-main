<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-5 offset-4">
                <a href="profile/<?php echo e($post->user->id); ?>"><img src="/storage/<?php echo e($post->image); ?>" class="w-75"></a>
            </div>
        </div>
        <div class="row pt-4 pb-4">
            <div class="col-5 offset-5">

                <p> 
                    <span class="font-weight-bold">
                        <a href="/profile/<?php echo e($post->user->id); ?>" class="text-decoration-none text-black pe-3">
                            <?php echo e($post->user->username); ?>

                        </a>
                    </span>

                    <?php echo e($post->caption); ?>


                </p>
            </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <div class="row">
            <div class="col-5 offset-4 d-flex justify-center">
                <?php echo e($posts->onEachSide(1)->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel-app-main\resources\views/posts/index.blade.php ENDPATH**/ ?>