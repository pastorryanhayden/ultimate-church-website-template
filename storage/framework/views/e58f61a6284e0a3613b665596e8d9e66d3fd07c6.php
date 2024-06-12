<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'components',
    'record',
    'recordKey' => null,
    'rowLoop' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'components',
    'record',
    'recordKey' => null,
    'rowLoop' => null,
]); ?>
<?php foreach (array_filter(([
    'components',
    'record',
    'recordKey' => null,
    'rowLoop' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $getHiddenClasses = function (Filament\Tables\Columns\Column | Filament\Tables\Columns\Layout\Component $layoutComponent): ?string {
        if ($breakpoint = $layoutComponent->getHiddenFrom()) {
            return match ($breakpoint) {
                'sm' => 'sm:hidden',
                'md' => 'md:hidden',
                'lg' => 'lg:hidden',
                'xl' => 'xl:hidden',
                '2xl' => '2xl:hidden',
            };
        }

        if ($breakpoint = $layoutComponent->getVisibleFrom()) {
            return match ($breakpoint) {
                'sm' => 'hidden sm:block',
                'md' => 'hidden md:block',
                'lg' => 'hidden lg:block',
                'xl' => 'hidden xl:block',
                '2xl' => 'hidden 2xl:block',
            };
        }

        return null;
    };
?>

<?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layoutComponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $layoutComponent->record($record);
        $layoutComponent->rowLoop($rowLoop);

        $isColumn = $layoutComponent instanceof \Filament\Tables\Columns\Column;
    ?>

    <?php if($layoutComponent->isVisible()): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.grid.column','data' => ['default' => $layoutComponent->getColumnSpan('default'),'sm' => $layoutComponent->getColumnSpan('sm'),'md' => $layoutComponent->getColumnSpan('md'),'lg' => $layoutComponent->getColumnSpan('lg'),'xl' => $layoutComponent->getColumnSpan('xl'),'twoXl' => $layoutComponent->getColumnSpan('2xl'),'defaultStart' => $layoutComponent->getColumnStart('default'),'smStart' => $layoutComponent->getColumnStart('sm'),'mdStart' => $layoutComponent->getColumnStart('md'),'lgStart' => $layoutComponent->getColumnStart('lg'),'xlStart' => $layoutComponent->getColumnStart('xl'),'twoXlStart' => $layoutComponent->getColumnStart('2xl'),'class' => \Illuminate\Support\Arr::toCssClasses([
                'flex-1 w-full' => $layoutComponent->canGrow(),
                $getHiddenClasses($layoutComponent),
            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::grid.column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['default' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnSpan('default')),'sm' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnSpan('sm')),'md' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnSpan('md')),'lg' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnSpan('lg')),'xl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnSpan('xl')),'twoXl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnSpan('2xl')),'defaultStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnStart('default')),'smStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnStart('sm')),'mdStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnStart('md')),'lgStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnStart('lg')),'xlStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnStart('xl')),'twoXlStart' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->getColumnStart('2xl')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                'flex-1 w-full' => $layoutComponent->canGrow(),
                $getHiddenClasses($layoutComponent),
            ]))]); ?>
            <?php if($isColumn): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-tables::components.columns.column','data' => ['column' => $layoutComponent->inline(),'record' => $record,'recordKey' => $recordKey]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-tables::columns.column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['column' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($layoutComponent->inline()),'record' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($record),'record-key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($recordKey)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php else: ?>
                <?php echo e($layoutComponent->viewData(['recordKey' => $recordKey])); ?>

            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/vendor/filament/tables/src/../resources/views/components/columns/layout.blade.php ENDPATH**/ ?>