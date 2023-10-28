<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'heading' => null,
    'subheading' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'heading' => null,
    'subheading' => null,
]); ?>
<?php foreach (array_filter(([
    'heading' => null,
    'subheading' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->class(['fi-simple-page'])); ?>>
    <section class="grid auto-cols-fr gap-y-6">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.header.simple','data' => ['heading' => $heading ??= $this->getHeading(),'logo' => $this->hasLogo(),'subheading' => $subheading ??= $this->getSubHeading()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::header.simple'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($heading ??= $this->getHeading()),'logo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->hasLogo()),'subheading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($subheading ??= $this->getSubHeading())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <?php echo e($slot); ?>

    </section>
</div>
<?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/vendor/filament/filament/src/../resources/views/components/page/simple.blade.php ENDPATH**/ ?>