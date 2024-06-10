<?php $__env->startSection('header'); ?>
<div class="breadcrumbs">
    <a href="/sermons">Back to sermons</a>
</div>
<h1>Sermon: <?php echo e($sermon->title); ?></h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
{{}}
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/sermon/show.blade.php ENDPATH**/ ?>