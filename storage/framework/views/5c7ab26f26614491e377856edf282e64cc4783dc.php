<?php if($ministries->count() > 1): ?>
<section class="ministries">
    <hgroup>
    <h2>Something for you and your family</h2>
    <a href="/ministries">See All Ministries <?php echo $__env->make('partials.icons.chevright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
   
    </hgroup>
     <div class="grid">
     <?php $__currentLoopData = $ministries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ministry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <article>
    <img src="<?php echo e(asset('storage/'. $ministry->image)); ?>" alt="">
    <div>
    <h4><?php echo e($ministry->for); ?></h4>
    <h3><?php echo e($ministry->name); ?></h3>
    <a href="#">Learn More <?php echo $__env->make('partials.icons.chevright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
    </div>
    </article>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php endif; ?><?php /**PATH /home/forge/biblebaptistmattoon.org/resources/views/partials/_ministries.blade.php ENDPATH**/ ?>