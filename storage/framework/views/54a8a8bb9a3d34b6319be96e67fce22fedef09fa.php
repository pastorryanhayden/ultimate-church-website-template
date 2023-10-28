<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'active' => false,
    'disabled' => false,
    'icon' => null,
    'iconAlias' => null,
    'label' => null,
    'separator' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'active' => false,
    'disabled' => false,
    'icon' => null,
    'iconAlias' => null,
    'label' => null,
    'separator' => false,
]); ?>
<?php foreach (array_filter(([
    'active' => false,
    'disabled' => false,
    'icon' => null,
    'iconAlias' => null,
    'label' => null,
    'separator' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $hasIcon = filled($icon);
    $hasLabel = filled($label) || $separator;
    $isDisabled = $disabled || $separator;
?>

<li
    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'overflow-hidden border-x-[0.5px] border-gray-200 first:rounded-s-lg first:border-s-0 last:rounded-e-lg last:border-e-0 dark:border-white/10',
        'focus-within:z-10 focus-within:ring-2 focus-within:ring-primary-600 dark:focus-within:ring-primary-500' => ! $isDisabled,
    ]) ?>"
>
    <button
        <?php echo e($attributes
                ->merge([
                    'disabled' => $isDisabled,
                    'type' => 'button',
                ], escape: false)
                ->class([
                    'fi-pagination-item relative overflow-hidden p-2 text-sm font-semibold outline-none transition duration-75',
                    'text-gray-400 hover:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400' => $hasIcon,
                    'text-gray-700 dark:text-gray-200' => $hasLabel && (! ($active || $isDisabled)),
                    'hover:bg-gray-50 dark:hover:bg-white/5' => ! $isDisabled,
                    'bg-gray-50 text-primary-600 dark:bg-white/5 dark:text-primary-400' => $active,
                    'cursor-default' => $separator,
                ])); ?>

    >
        <?php if($hasIcon): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['alias' => $iconAlias,'icon' => $icon,'class' => \Illuminate\Support\Arr::toCssClasses([
                    'fi-pagination-item-icon h-5 w-5',
                ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['alias' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconAlias),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                    'fi-pagination-item-icon h-5 w-5',
                ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if($hasLabel): ?>
            <span class="px-1.5">
                <?php echo e($label ?? '...'); ?>

            </span>
        <?php endif; ?>
    </button>
</li>
<?php /**PATH /home/forge/biblebaptistmattoon.org/vendor/filament/support/src/../resources/views/components/pagination/item.blade.php ENDPATH**/ ?>