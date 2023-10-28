<?php $__env->startSection('header'); ?>
<h1>Ministries</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
<?php $__currentLoopData = $ministries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ministry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="ministry">
        <img src="<?php echo e(asset('/storage/' . $ministry->image )); ?>" alt="<?php echo e($ministry->name); ?>">
        <div class="content">
        <h3><?php echo e($ministry->name); ?></h3>
        <p class="for"><?php echo e($ministry->for); ?></p>
        <p class="info"><?php echo e($ministry->meeting_info); ?></p>
        <a class="learn-more" href="/ministry/<?php echo e($ministry->slug); ?>">Learn More <?php echo $__env->make('partials.icons.chevright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
        </div>
    </article>    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/forge/biblebaptistmattoon.org/resources/views/ministries/index.blade.php ENDPATH**/ ?>