<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'breadcrumbs' => [],
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'breadcrumbs' => [],
]); ?>
<?php foreach (array_filter(([
    'breadcrumbs' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $iconAlias = 'breadcrumbs.separator';
    $iconClasses = 'h-5 w-5 text-gray-400 dark:text-gray-500';
?>

<nav <?php echo e($attributes->class(['fi-breadcrumbs'])); ?>>
    <ol class="flex flex-wrap items-center gap-x-2">
        <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="flex gap-x-2">
                <?php if(! $loop->first): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['alias' => $iconAlias,'icon' => 'heroicon-m-chevron-right','class' => \Illuminate\Support\Arr::toCssClasses([
                            $iconClasses,
                            'rtl:hidden',
                        ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['alias' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconAlias),'icon' => 'heroicon-m-chevron-right','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                            $iconClasses,
                            'rtl:hidden',
                        ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['alias' => $iconAlias,'icon' => 'heroicon-m-chevron-left','class' => \Illuminate\Support\Arr::toCssClasses([
                            $iconClasses,
                            'ltr:hidden',
                        ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['alias' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconAlias),'icon' => 'heroicon-m-chevron-left','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                            $iconClasses,
                            'ltr:hidden',
                        ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>

                <a
                    href="<?php echo e(is_int($url) ? '#' : $url); ?>"
                    
                    class="text-sm font-medium text-gray-500 outline-none transition duration-75 hover:text-gray-700 focus:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 dark:focus:text-gray-200"
                >
                    <?php echo e($label); ?>

                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</nav>
<?php /**PATH /Users/ryanhayden/code/church-web/biblebaptistmattoon/vendor/filament/support/src/../resources/views/components/breadcrumbs.blade.php ENDPATH**/ ?>