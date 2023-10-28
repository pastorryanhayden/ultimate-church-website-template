<?php $__env->startSection('header'); ?>
<h1>Devotions</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $devotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $devotion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<article class="devotions-list-item">
    <div class="content">
        <div class="details">
            <h3><a href="/devotion/<?php echo e($devotion->id); ?>"><?php echo e($devotion->title); ?></a></h3>
            <p class="dates"><?php echo e(\Carbon\Carbon::parse($devotion->date)->format('F j, Y')); ?></p>
            <p class="description"><?php echo e($devotion->text); ?></p>
            <a class="learn-more" href="/devotion/<?php echo e($devotion->id); ?>">Read More <?php echo $__env->make('partials.icons.chevright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
        </div>
        <?php if($devotion->image_url): ?>
        <img src="<?php echo e(asset('storage/'. $devotion->image_url)); ?>" alt="<?php echo e($devotion->title); ?>">
        <?php elseif($devotion->youtube_id): ?>
         <img src="http://img.youtube.com/vi/<?php echo e($devotion->youtube_id); ?>/maxresdefault.jpg" alt="placeholder image">
        <?php else: ?> 
        <img src="/images/devotional-placeholder.jpg" alt="placeholder image">
        <?php endif; ?>
    </div>
</article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php echo e($devotions->links('partials._pagination')); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/resources/views/devotion/index.blade.php ENDPATH**/ ?>