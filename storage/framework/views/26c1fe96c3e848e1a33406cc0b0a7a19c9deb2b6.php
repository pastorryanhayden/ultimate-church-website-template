<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'actions',
    'alignment' => 'start',
    'fullWidth' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'actions',
    'alignment' => 'start',
    'fullWidth' => false,
]); ?>
<?php foreach (array_filter(([
    'actions',
    'alignment' => 'start',
    'fullWidth' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    use Filament\Support\Enums\Alignment;
?>

<?php if($actions instanceof \Illuminate\Contracts\View\View): ?>
    <?php echo e($actions); ?>

<?php elseif(is_array($actions)): ?>
    <?php
        $actions = array_filter(
            $actions,
            fn ($action): bool => $action->isVisible(),
        );
    ?>

    <?php if(count($actions)): ?>
        <div
            <?php echo e($attributes->class([
                    'fi-ac gap-3',
                    'flex flex-wrap items-center' => ! $fullWidth,
                    match ($alignment) {
                        Alignment::Center, 'center' => 'justify-center',
                        Alignment::End, Alignment::Right, 'end', 'right' => 'flex-row-reverse',
                        default => 'justify-start',
                    } => ! $fullWidth,
                    'grid grid-cols-[repeat(auto-fit,minmax(0,1fr))]' => $fullWidth,
                ])); ?>

        >
            <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($action); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/code/church-web/biblebaptistmattoon/vendor/filament/actions/src/../resources/views/components/actions.blade.php ENDPATH**/ ?>