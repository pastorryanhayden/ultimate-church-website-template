<?php
    $isAside = $isAside();
?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.section','data' => ['aside' => $isAside,'collapsed' => $isCollapsed(),'collapsible' => $isCollapsible() && (! $isAside),'compact' => $isCompact(),'contentBefore' => $isFormBefore(),'description' => $getDescription(),'heading' => $getHeading(),'icon' => $getIcon(),'iconColor' => $getIconColor(),'iconSize' => $getIconSize(),'attributes' => 
        \Filament\Support\prepare_inherited_attributes($attributes)
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)
            ->merge($getExtraAlpineAttributes(), escape: false)
    ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['aside' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAside),'collapsed' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isCollapsed()),'collapsible' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isCollapsible() && (! $isAside)),'compact' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isCompact()),'content-before' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isFormBefore()),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getDescription()),'heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getHeading()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getIcon()),'icon-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getIconColor()),'icon-size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getIconSize()),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(
        \Filament\Support\prepare_inherited_attributes($attributes)
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)
            ->merge($getExtraAlpineAttributes(), escape: false)
    )]); ?>
    <?php echo e($getChildComponentContainer()); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/vendor/filament/forms/src/../resources/views/components/section.blade.php ENDPATH**/ ?>