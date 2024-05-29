<div <?php echo e($attributes->merge([
    'class' => "filament-icon-picker filament-icon-picker-{$getLayout()}",
])->merge($getColumnsConfig())); ?>>
	<?php echo $__env->make('filament-forms::components.select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/vendor/guava/filament-icon-picker/src/../resources/views/forms/icon-picker.blade.php ENDPATH**/ ?>