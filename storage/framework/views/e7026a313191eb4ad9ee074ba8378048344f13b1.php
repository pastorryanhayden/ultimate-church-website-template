<?php
    if ((! isset($columnSpan)) || (! is_array($columnSpan))) {
        $columnSpan = [
            'default' => $columnSpan ?? null,
        ];
    }

    if ((! isset($columnStart)) || (! is_array($columnStart))) {
        $columnStart = [
            'default' => $columnStart ?? null,
        ];
    }
?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.grid.column','data' => ['default' => $columnSpan['default'] ?? 1,'sm' => $columnSpan['sm'] ?? null,'md' => $columnSpan['md'] ?? null,'lg' => $columnSpan['lg'] ?? null,'xl' => $columnSpan['xl'] ?? null,'twoXl' => $columnSpan['2xl'] ?? null,'defaultStart' => $columnStart['default'] ?? null,'smStart' => $columnStart['sm'] ?? null,'mdStart' => $columnStart['md'] ?? null,'lgStart' => $columnStart['lg'] ?? null,'xlStart' => $columnStart['xl'] ?? null,'twoXlStart' => $columnStart['2xl'] ?? null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::grid.column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['default' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnSpan['default'] ?? 1),'sm' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnSpan['sm'] ?? null),'md' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnSpan['md'] ?? null),'lg' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnSpan['lg'] ?? null),'xl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnSpan['xl'] ?? null),'twoXl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnSpan['2xl'] ?? null),'defaultStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnStart['default'] ?? null),'smStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnStart['sm'] ?? null),'mdStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnStart['md'] ?? null),'lgStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnStart['lg'] ?? null),'xlStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnStart['xl'] ?? null),'twoXlStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columnStart['2xl'] ?? null)]); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.section','data' => ['class' => 'h-32 animate-pulse']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-32 animate-pulse']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/vendor/filament/support/src/../resources/views/components/loading-section.blade.php ENDPATH**/ ?>