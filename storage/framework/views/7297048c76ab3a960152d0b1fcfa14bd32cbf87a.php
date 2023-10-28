<?php
    use Filament\Support\Enums\IconPosition;
?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'active' => false,
    'alpineActive' => null,
    'badge' => null,
    'icon' => null,
    'iconColor' => 'gray',
    'iconPosition' => IconPosition::Before,
    'tag' => 'button',
    'type' => 'button',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'active' => false,
    'alpineActive' => null,
    'badge' => null,
    'icon' => null,
    'iconColor' => 'gray',
    'iconPosition' => IconPosition::Before,
    'tag' => 'button',
    'type' => 'button',
]); ?>
<?php foreach (array_filter(([
    'active' => false,
    'alpineActive' => null,
    'badge' => null,
    'icon' => null,
    'iconColor' => 'gray',
    'iconPosition' => IconPosition::Before,
    'tag' => 'button',
    'type' => 'button',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $hasAlpineActiveClasses = filled($alpineActive);

    $inactiveItemClasses = 'text-gray-500 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200';

    $activeItemClasses = 'fi-tabs-item-active bg-gray-50 text-primary-600 dark:bg-white/5 dark:text-primary-400';

    $iconClasses = 'fi-tabs-item-icon h-5 w-5';

    $inactiveIconClasses = 'text-gray-400 dark:text-gray-500';

    $activeIconClasses = 'text-primary-600 dark:text-primary-400';
?>

<<?php echo e($tag); ?>

    <?php if($tag === 'button'): ?>
        type="<?php echo e($type); ?>"
    <?php endif; ?>
    <?php if($hasAlpineActiveClasses): ?>
        x-bind:class="{
            <?php echo \Illuminate\Support\Js::from($inactiveItemClasses)->toHtml() ?>: ! <?php echo e($alpineActive); ?>,
            <?php echo \Illuminate\Support\Js::from($activeItemClasses)->toHtml() ?>: <?php echo e($alpineActive); ?>,
        }"
    <?php endif; ?>
    <?php echo e($attributes
            ->merge([
                'aria-selected' => $active,
                'role' => 'tab',
            ])
            ->class([
                'fi-tabs-item flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium font-medium outline-none transition duration-75 hover:bg-gray-50 focus:bg-gray-50 dark:hover:bg-white/5 dark:focus:bg-white/5',
                $inactiveItemClasses => (! $hasAlpineActiveClasses) && (! $active),
                $activeItemClasses => (! $hasAlpineActiveClasses) && $active,
            ])); ?>

>
    <?php if($icon && in_array($iconPosition, [IconPosition::Before, 'before'])): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $icon,'xBind:class' => $hasAlpineActiveClasses ? '{ ' . \Illuminate\Support\Js::from($inactiveIconClasses) . ': ! (' . $alpineActive . '), ' . \Illuminate\Support\Js::from($activeIconClasses) . ': ' . $alpineActive . ' }' : null,'class' => \Illuminate\Support\Arr::toCssClasses([
                $iconClasses,
                $inactiveIconClasses => (! $hasAlpineActiveClasses) && (! $active),
                $activeIconClasses => (! $hasAlpineActiveClasses) && $active,
            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'x-bind:class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hasAlpineActiveClasses ? '{ ' . \Illuminate\Support\Js::from($inactiveIconClasses) . ': ! (' . $alpineActive . '), ' . \Illuminate\Support\Js::from($activeIconClasses) . ': ' . $alpineActive . ' }' : null),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                $iconClasses,
                $inactiveIconClasses => (! $hasAlpineActiveClasses) && (! $active),
                $activeIconClasses => (! $hasAlpineActiveClasses) && $active,
            ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <span>
        <?php echo e($slot); ?>

    </span>

    <?php if($icon && in_array($iconPosition, [IconPosition::After, 'after'])): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $icon,'xBind:class' => $hasAlpineActiveClasses ? '{ ' . \Illuminate\Support\Js::from($inactiveIconClasses) . ': ! (' . $alpineActive . '), ' . \Illuminate\Support\Js::from($activeIconClasses) . ': ' . $alpineActive . ' }' : null,'class' => \Illuminate\Support\Arr::toCssClasses([
                $iconClasses,
                $inactiveIconClasses => (! $hasAlpineActiveClasses) && (! $active),
                $activeIconClasses => (! $hasAlpineActiveClasses) && $active,
            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'x-bind:class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hasAlpineActiveClasses ? '{ ' . \Illuminate\Support\Js::from($inactiveIconClasses) . ': ! (' . $alpineActive . '), ' . \Illuminate\Support\Js::from($activeIconClasses) . ': ' . $alpineActive . ' }' : null),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                $iconClasses,
                $inactiveIconClasses => (! $hasAlpineActiveClasses) && (! $active),
                $activeIconClasses => (! $hasAlpineActiveClasses) && $active,
            ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if(filled($badge)): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.badge','data' => ['size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm']); ?>
            <?php echo e($badge); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>
</<?php echo e($tag); ?>>
<?php /**PATH /Users/ryanhayden/code/church-web/biblebaptistmattoon/vendor/filament/support/src/../resources/views/components/tabs/item.blade.php ENDPATH**/ ?>