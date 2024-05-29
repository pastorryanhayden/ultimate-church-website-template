<?php $__env->startSection('header'); ?>
<h1><?php echo e($ministry->name); ?></h1>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<article class="single-ministry">
<img src="<?php echo e(asset('/storage/' . $ministry->image )); ?>" alt="<?php echo e($ministry->name); ?>">
<div class="content">
<h2><?php echo e($ministry->name); ?></h2>
<p class="for"><?php echo e($ministry->for); ?></p>
<section class="meeting-info">
    <h3>Meeting Info</h3>
    <p><?php echo e($ministry->meeting_info); ?></p>
</section>
<?php if($ministry->leader->name): ?>
<section class="contact">
    <h3>Contact</h3>
    <img src="<?php echo e(asset('/storage/' . $ministry->leader->photo )); ?>" alt="<?php echo e($ministry->leader->name); ?>">
    <h4><?php echo e($ministry->leader->name); ?>, <?php echo e($ministry->leader->position); ?></h4>
    <p><strong>Email: </strong> <?php echo e($ministry->leader->email); ?></p>
    <p><strong>Phone: </strong> <?php echo e($ministry->leader->phone); ?></p>
</section>
</div>
<section class="body">
    <?php echo $ministry->body; ?>

</section>
</article>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/ministries/show.blade.php ENDPATH**/ ?>