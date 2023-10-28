<?php
    use phpDocumentor\Reflection\Types\Context;

    $widgetData = $this->getWidgetData();
?>

<div <?php echo e($attributes->class(['fi-page'])); ?>>
    <?php echo e(\Filament\Support\Facades\FilamentView::renderHook('panels::page.start', scopes: $this->getRenderHookScopes())); ?>


    <section class="grid auto-cols-fr gap-y-8 py-8">
        <?php if($header = $this->getHeader()): ?>
            <?php echo e($header); ?>

        <?php elseif($heading = $this->getHeading()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.header.index','data' => ['actions' => $this->getCachedHeaderActions(),'breadcrumbs' => filament()->hasBreadcrumbs() ? $this->getBreadcrumbs() : [],'heading' => $heading,'subheading' => $this->getSubheading()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getCachedHeaderActions()),'breadcrumbs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(filament()->hasBreadcrumbs() ? $this->getBreadcrumbs() : []),'heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($heading),'subheading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getSubheading())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php echo e(\Filament\Support\Facades\FilamentView::renderHook('panels::page.header-widgets.before', scopes: $this->getRenderHookScopes())); ?>


        <?php if($headerWidgets = $this->getVisibleHeaderWidgets()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-widgets::components.widgets','data' => ['columns' => $this->getHeaderWidgetsColumns(),'data' => $widgetData,'widgets' => $headerWidgets]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-widgets::widgets'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getHeaderWidgetsColumns()),'data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($widgetData),'widgets' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($headerWidgets)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php echo e(\Filament\Support\Facades\FilamentView::renderHook('panels::page.header-widgets.after', scopes: $this->getRenderHookScopes())); ?>


        <?php echo e($slot); ?>


        <?php echo e(\Filament\Support\Facades\FilamentView::renderHook('panels::page.footer-widgets.before', scopes: $this->getRenderHookScopes())); ?>


        <?php if($footerWidgets = $this->getVisibleFooterWidgets()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-widgets::components.widgets','data' => ['columns' => $this->getFooterWidgetsColumns(),'data' => $widgetData,'widgets' => $footerWidgets]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-widgets::widgets'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getFooterWidgetsColumns()),'data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($widgetData),'widgets' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($footerWidgets)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php echo e(\Filament\Support\Facades\FilamentView::renderHook('panels::page.footer-widgets.after', scopes: $this->getRenderHookScopes())); ?>


        <?php if($footer = $this->getFooter()): ?>
            <?php echo e($footer); ?>

        <?php endif; ?>
    </section>

    <?php if(! $this instanceof \Filament\Tables\Contracts\HasTable): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-actions::components.modals','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-actions::modals'); ?>
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
    <?php endif; ?>

    <?php echo e(\Filament\Support\Facades\FilamentView::renderHook('panels::page.end', scopes: $this->getRenderHookScopes())); ?>

</div>
<?php /**PATH /home/forge/biblebaptistmattoon.org/vendor/filament/filament/src/../resources/views/components/page/index.blade.php ENDPATH**/ ?>