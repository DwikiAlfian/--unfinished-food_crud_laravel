<?php $__env->startSection('title'); ?>
Index Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="uk-body uk-card-body">
<?php if(session()->get('success')): ?>
    <div class="uk-alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
  <?php endif; ?>
</div>
<div class="uk-card uk-card-body">
<table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Food Name</th>
            <th>Price</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($food->name); ?></td>
            <td><?php echo e($food->price); ?></td>
            <td><a href="<?php echo e(route('food.edit', $food->id)); ?>"><button class="uk-button uk-button-primary">
                Edit
            </button></a></td>
            <td>
                <form action="<?php echo e(route('food.destroy', $food->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="uk-button uk-button-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>