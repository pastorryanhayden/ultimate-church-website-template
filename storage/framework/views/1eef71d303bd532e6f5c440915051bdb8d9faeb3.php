<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'heading' => null,
    'logo' => true,
    'subheading' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'heading' => null,
    'logo' => true,
    'subheading' => null,
]); ?>
<?php foreach (array_filter(([
    'heading' => null,
    'logo' => true,
    'subheading' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<header class="fi-simple-header">
    <?php if($logo): ?>
        <div class="mb-4 flex justify-center">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if(filled($heading)): ?>
        <h1
            class="fi-simple-header-heading text-center text-2xl font-bold tracking-tight text-gray-950 dark:text-white"
        >
            <?php echo e($heading); ?>

        </h1>
    <?php endif; ?>

    <?php if(filled($subheading)): ?>
        <p
            class="fi-simple-header-subheading mt-2 text-center text-sm text-gray-500 dark:text-gray-400"
        >
            <?php echo e($subheading); ?>

        </p>
    <?php endif; ?>
</header>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/vendor/filament/filament/src/../resources/views/components/header/simple.blade.php ENDPATH**/ ?>