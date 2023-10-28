<?php $__env->startSection('header'); ?>
<h1 class="devotion-header"><a href="/devotion">Devotions</a> / <?php echo e($devotion->title); ?></h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="devotion">

<?php if($devotion->video_url): ?>
<div class="video-wrapper">
    <iframe width="560" height="315"   src="https://www.youtube.com/embed/<?php echo e($devotion->youtube_id); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<?php elseif($devotion->image_url): ?>
<img class="header-image" src="<?php echo e(asset('storage/'. $devotion->image_url)); ?>" alt="<?php echo e($devotion->title); ?>">
<?php endif; ?>

<h1><?php echo e($devotion->title); ?></h1>
<div class="details">
<p class="dates">Written On: <?php echo e(\Carbon\Carbon::parse($devotion->date)->format('F j, Y')); ?></p>
<p class="author">Written by: <?php echo e($devotion->author->name); ?></p>
</div>
<?php if($devotion->audio_url): ?>
<figure class="audio">
  <figcaption>Listen to "<?php echo e($devotion->title); ?>":</figcaption>
  <audio controls src="<?php echo e(asset('storage/'. $devotion->audio_url)); ?>">
    <a href="<?php echo e(asset('storage/'. $devotion->audio_url)); ?>"> Download audio </a>
  </audio>
</figure>
<?php endif; ?> 
<article class="prose">
<?php echo $devotion->body; ?>

</article>
<hr>

</div>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/resources/views/devotion/single.blade.php ENDPATH**/ ?>