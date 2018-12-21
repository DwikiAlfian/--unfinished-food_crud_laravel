<?php $__env->startSection('title'); ?>
Edit
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="uk-card uk-card-body">
    <div class="uk-card-header">
        <h3>Edit Food</h3>
    </div>

    <div class="uk-card uk-card-body">
        <?php if($errors->any()): ?>
        <div class="uk-alert-success" uk-alert>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div><br>
        <?php endif; ?>

<div class="uk-card uk-card-body">
    <form action="<?php echo e(route('food.update', $food->id)); ?>" method="post">
        <div class="uk-margin">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <label class="uk-label" for="name">Food Name: 
            <input class="uk-input uk-form-width-large" type="text" name="name" id="name" value="<?php echo e($food->name); ?>"></label>
        </div>
        <div class="uk-margin">
            <label class="uk-label" for="price">Price: 
            <input class="uk-input uk-form-width-large" type="text" name="price" id="price" value="<?php echo e($food->price); ?>"></label>
        </div>
        <div class="uk-margin">
            <button class="uk-button uk-button-primary" type="submit">Save</button>
        </div>
    </form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>