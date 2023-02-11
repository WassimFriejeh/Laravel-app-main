<?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js' , 'resources/css/app.css']); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        
        <div class="row">
            <div class="col-3 p-5">
                <img src="<?php echo e($user->profile->profileImage()); ?>" class="rounded-circle w-100">
            </div>
            
            <div class="col-9 pt-5 ps-5">
                <div class="d-flex justify-content-between align-items-baseline">

                    <div class="d-flex align-items-center pb-2">
                        <div class="h4"><?php echo e($user->username); ?></div>
                        <div id="app">
                            <div id="Followbutton">
                                <FollowButton user-id="<?php echo e($user->id); ?>" follows="<?php echo e($follows); ?>"/>
                            </div>
                        </div>
                    </div>
                    
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                        <a href="/p/create">Add New Post</a>
                    <?php endif; ?>
                </div>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                    <a href="/profile/<?php echo e($user->id); ?>/edit">Edit Prorfile</a>
                <?php endif; ?>

                <div class="d-flex">
                    <div class="pe-4"><strong><?php echo e($postcount); ?></strong> posts </div>
                    <div class="pe-4"><strong><?php echo e($followerscount); ?></strong> followers</div>
                    <div class="pe-4"><strong><?php echo e($followingcount); ?></strong> following</div>
                </div>
                <div class="pt-3 font-weight-bold"><strong><?php echo e($user->profile->title); ?></strong></div>
                <div><?php echo e($user->profile->description); ?>

                </div>
                <div><a href="https://www.freecodecamp.org"><?php echo e($user->profile->url); ?></a></div>
            </div>

            <div class="row">
                <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-4 pb-4">
                        <a href="/p/<?php echo e($post->id); ?>">
                            <img class="w-100" src="/storage/<?php echo e($post->image); ?>">
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel-app-main\resources\views/profiles/index.blade.php ENDPATH**/ ?>