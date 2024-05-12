<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/vendor/filament/forms/src/../resources/views/components/group.blade.php ENDPATH**/ ?>