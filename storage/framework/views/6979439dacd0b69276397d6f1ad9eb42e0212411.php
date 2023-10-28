<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'size' => 'md',
    'src',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'size' => 'md',
    'src',
]); ?>
<?php foreach (array_filter(([
    'size' => 'md',
    'src',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div
    <?php echo e($attributes
            ->class([
                'fi-avatar bg-cover bg-center',
                match ($size) {
                    'md' => 'h-9 w-9',
                    'lg' => 'h-10 w-10',
                    default => $size,
                },
            ])
            ->style([
                "background-image: url('{$src}')",
            ])); ?>

></div>
<?php /**PATH /Users/ryanhayden/code/church-web/biblebaptistmattoon/vendor/filament/support/src/../resources/views/components/avatar.blade.php ENDPATH**/ ?>