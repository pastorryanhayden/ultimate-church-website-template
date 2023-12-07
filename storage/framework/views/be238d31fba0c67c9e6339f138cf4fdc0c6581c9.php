<?php $__env->startSection('header'); ?>
<h1><?php echo e($event->title); ?></h1>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>
article.single-ministry section.meeting-info {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
    padding: 1rem;
    margin-top: 1rem;
    background-color: #CFFAFE;
}
article.single-ministry section.meeting-info h3 {
    margin-top: 0;
}
</style>
<article class="single-ministry">
<img src="<?php echo e(asset('/storage/' . $event->photo )); ?>" alt="<?php echo e($event->title); ?>">
<div class="content">
<h2><?php echo e($event->title); ?></h2>
<p class="for">For: <?php echo e($event->for); ?></p>
<section class="meeting-info">
    <h3>Main Info</h3>
    <p><?php echo e(date_format($event->start_date, 'F j')); ?> <?php if($event->end_date): ?>-<?php echo e(date_format($event->end_date, 'F j')); ?> <?php endif; ?></p>
    <p><?php echo e($event->description); ?></p>
</section>

</div>
<section class="body">
    <?php echo $event->body; ?>

</section>
</article>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/resources/views/events/show.blade.php ENDPATH**/ ?>