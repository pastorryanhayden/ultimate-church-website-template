<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-actions::components.action','data' => ['action' => $action,'dynamicComponent' => 'filament::link','iconPosition' => $getIconPosition(),'iconSize' => $getIconSize(),'class' => 'fi-ac-link-action']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-actions::action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action),'dynamic-component' => 'filament::link','icon-position' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getIconPosition()),'icon-size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getIconSize()),'class' => 'fi-ac-link-action']); ?>
    <?php echo e($getLabel()); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/code/church-web/biblebaptistmattoon/vendor/filament/actions/src/../resources/views/link-action.blade.php ENDPATH**/ ?>