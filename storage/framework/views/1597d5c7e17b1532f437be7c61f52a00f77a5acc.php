<div>
    <?php $__currentLoopData = $getRecord()->chapterSermons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bibleText): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
            <?php if($loop->last): ?>
                <span class="text-sm"><?php echo e($bibleText->book->name); ?> <?php echo e($bibleText->chapter->number); ?>:<?php echo e($bibleText->verse); ?></span>
            <?php else: ?>
                <span class="text-sm"><?php echo e($bibleText->book->name); ?> <?php echo e($bibleText->chapter->number); ?>:<?php echo e($bibleText->verse); ?>, </span>
            <?php endif; ?>
        
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/tables/columns/bible-text.blade.php ENDPATH**/ ?>