<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'footer' => null,
    'header' => null,
    'reorderable' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'footer' => null,
    'header' => null,
    'reorderable' => false,
]); ?>
<?php foreach (array_filter(([
    'footer' => null,
    'header' => null,
    'reorderable' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<table
    <?php echo e($attributes->class(['fi-ta-table w-full table-auto divide-y divide-gray-200 text-start dark:divide-white/5'])); ?>

>
    <?php if($header): ?>
        <thead class="bg-gray-50 dark:bg-white/5">
            <tr>
                <?php echo e($header); ?>

            </tr>
        </thead>
    <?php endif; ?>

    <tbody
        <?php if($reorderable): ?>
            x-on:end.stop="$wire.reorderTable($event.target.sortable.toArray())"
            x-sortable
        <?php endif; ?>
        class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5"
    >
        <?php echo e($slot); ?>

    </tbody>

    <?php if($footer): ?>
        <tfoot class="bg-gray-50 dark:bg-white/5">
            <tr>
                <?php echo e($footer); ?>

            </tr>
        </tfoot>
    <?php endif; ?>
</table>
<?php /**PATH /home/forge/biblebaptistmattoon.org/vendor/filament/tables/src/../resources/views/components/table.blade.php ENDPATH**/ ?>