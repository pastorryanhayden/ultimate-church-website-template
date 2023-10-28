<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'label' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'label' => null,
]); ?>
<?php foreach (array_filter(([
    'label' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<label class="flex">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.checkbox','data' => ['attributes' => 
            \Filament\Support\prepare_inherited_attributes($attributes)
                ->merge([
                    'wire:loading.attr' => 'disabled',
                    'wire:target' => implode(',', \Filament\Tables\Table::LOADING_TARGETS),
                ], escape: false)
        ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::input.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(
            \Filament\Support\prepare_inherited_attributes($attributes)
                ->merge([
                    'wire:loading.attr' => 'disabled',
                    'wire:target' => implode(',', \Filament\Tables\Table::LOADING_TARGETS),
                ], escape: false)
        )]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if(filled($label)): ?>
        <span class="sr-only">
            <?php echo e($label); ?>

        </span>
    <?php endif; ?>
</label>
<?php /**PATH /home/forge/biblebaptistmattoon.org/vendor/filament/tables/src/../resources/views/components/selection/checkbox.blade.php ENDPATH**/ ?>