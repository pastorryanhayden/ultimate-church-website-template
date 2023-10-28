<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.page.index','data' => ['class' => \Illuminate\Support\Arr::toCssClasses([
        'fi-resource-edit-record-page',
        'fi-resource-' . str_replace('/', '-', $this->getResource()::getSlug()),
        'fi-resource-record-' . $record->getKey(),
    ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
        'fi-resource-edit-record-page',
        'fi-resource-' . str_replace('/', '-', $this->getResource()::getSlug()),
        'fi-resource-record-' . $record->getKey(),
    ]))]); ?>
    
            <?php $form = (function ($args) {
                return function () use ($args) {
                    extract($args, EXTR_SKIP);
                    ob_start(); ?>
        
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.form.index','data' => ['wire:key' => $this->getId() . '.forms.' . $this->getFormStatePath(),'wire:submit' => 'save']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getId() . '.forms.' . $this->getFormStatePath()),'wire:submit' => 'save']); ?>
            <?php echo e($this->form); ?>


            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.form.actions','data' => ['actions' => $this->getCachedFormActions(),'fullWidth' => $this->hasFullWidthFormActions()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::form.actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getCachedFormActions()),'full-width' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->hasFullWidthFormActions())]); ?>
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
    
            <?php return new \Illuminate\Support\HtmlString(ob_get_clean()); };
                })(get_defined_vars()); ?>
        

    <?php
        $relationManagers = $this->getRelationManagers();
    ?>

    <?php if((! $this->hasCombinedRelationManagerTabsWithContent()) || (! count($relationManagers))): ?>
        <?php echo e($form()); ?>

    <?php endif; ?>

    <?php if(count($relationManagers)): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.resources.relation-managers','data' => ['activeLocale' => isset($activeLocale) ? $activeLocale : null,'activeManager' => $activeRelationManager,'contentTabLabel' => $this->getContentTabLabel(),'managers' => $relationManagers,'ownerRecord' => $record,'pageClass' => static::class]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::resources.relation-managers'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active-locale' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($activeLocale) ? $activeLocale : null),'active-manager' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($activeRelationManager),'content-tab-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getContentTabLabel()),'managers' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($relationManagers),'owner-record' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($record),'page-class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(static::class)]); ?>
            <?php if($this->hasCombinedRelationManagerTabsWithContent()): ?>
                 <?php $__env->slot('content', null, []); ?> 
                    <?php echo e($form()); ?>

                 <?php $__env->endSlot(); ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/vendor/filament/filament/src/../resources/views/resources/pages/edit-record.blade.php ENDPATH**/ ?>