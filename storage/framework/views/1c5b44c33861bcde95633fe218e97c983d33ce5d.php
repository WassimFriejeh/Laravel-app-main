<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            <?php echo csrf_field(); ?>


            <div class="row">
                <div class="col-8 offset-4">

                    <div class="row">
                        <h1>Add New Post</h1>
                    </div>

                    <label for="caption" class="col-form-label text-md-end">
                        <?php echo e(__('Post Caption')); ?></label>

                    <div class="col-md-6">
                        <input id="caption" type="caption"
                            class="form-control 
                            <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid 
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="caption" value="<?php echo e(old('caption')); ?>" required autocomplete="caption">

                        <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-2 col-form-label text-md-end">
                            <?php echo e(__('Post Image')); ?></label>


                        <input type="file" class="form-control-file" id="image" name="image">

                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong><?php echo e($message); ?></strong>
                         
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="row pt-4 w-25">
                        <button class="btn btn-primary">Add new post</button>
                    </div>

                </div>
            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laravel-app-main\resources\views/posts/create.blade.php ENDPATH**/ ?>