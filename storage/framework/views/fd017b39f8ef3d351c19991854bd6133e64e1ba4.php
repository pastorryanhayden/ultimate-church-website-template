<?php $__env->startSection('content'); ?>
<section>
<h2><?php echo e($about->what_services_like_title); ?></h2>
<?php echo $about->what_services_like; ?>

</section>
<?php if($about->show_pastors): ?>
<section>
<?php if($leaders->count() > 1): ?>
<h2>Who are your pastors?</h2>
<?php else: ?> 
<h2>Who is your pastor?</h2>
<?php endif; ?>
<?php $__currentLoopData = $leaders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leader): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
<?php if($leader->lead_pastor == true): ?>
<article>

<h3><?php echo e($leader->name); ?>, <?php echo e($leader->position); ?></h3>
<img src="<?php echo e(asset('storage/'. $leader->photo)); ?>" alt="<?php echo e($leader->name); ?>">
<?php echo $leader->bio; ?>

</article>
<?php endif; ?>
<?php if($leader->lead_pastor == false): ?>


<article>

<h3><?php echo e($leader->name); ?>, <?php echo e($leader->position); ?></h3>
<img src="<?php echo e(asset('storage/'. $leader->photo)); ?>" alt="<?php echo e($leader->name); ?>">
<?php echo $leader->bio; ?>

</article>
<?php endif; ?> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php endif; ?> 
<?php if($about->what_church_like): ?>
<section>
<h2><?php echo e($about->what_church_like_title); ?></h2>
<?php echo $about->what_church_like; ?>

</section>
<?php endif; ?> 
<?php if($about->other_info): ?>
<section>
<h2><?php echo e($about->other_info_title); ?></h2>
<?php echo $about->other_info; ?>

</section>
<?php endif; ?> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/about.blade.php ENDPATH**/ ?>