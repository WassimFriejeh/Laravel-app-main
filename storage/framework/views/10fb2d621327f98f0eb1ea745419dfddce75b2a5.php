<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row ">
            <div class="col-8">
                <img src="/storage/<?php echo e($post->image); ?>" class="w-75">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center pb-4">
                    <div>
                        <img src="<?php echo e($post->user->profile->profileImage()); ?>" class="w-100 rounded-circle"
                            style="max-width: 50px">
                    </div>
                    <div class="ps-4">
                        <div class="font-weight-bold">
                            <a href="/profile/<?php echo e($post->user->id); ?>" class="text-decoration-none text-black">
                                <?php echo e($post->user->username); ?>

                            </a>
                        </div>
                    </div>
                    <a href="#" class="ps-3"> Follow</a>

                </div>
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel-app-main\resources\views/posts/show.blade.php ENDPATH**/ ?>