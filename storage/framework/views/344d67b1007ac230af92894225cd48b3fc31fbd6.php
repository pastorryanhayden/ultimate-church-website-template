<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'action',
    'dynamicComponent',
    'icon' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'action',
    'dynamicComponent',
    'icon' => null,
]); ?>
<?php foreach (array_filter(([
    'action',
    'dynamicComponent',
    'icon' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $isDisabled = $action->isDisabled();
    $url = $action->getUrl();
?>

<?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $dynamicComponent] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['badge' => $action->getBadge(),'badge-color' => $action->getBadgeColor(),'form' => $action->getFormToSubmit(),'tag' => $url ? 'a' : 'button','x-on:click' => $action->getAlpineClickHandler(),'wire:click' => $action->getLivewireClickHandler(),'wire:target' => $action->getLivewireTarget(),'href' => $isDisabled ? null : $url,'target' => ($url && $action->shouldOpenUrlInNewTab()) ? '_blank' : null,'type' => $action->canSubmitForm() ? 'submit' : 'button','color' => $action->getColor(),'key-bindings' => $action->getKeyBindings(),'tooltip' => $action->getTooltip(),'disabled' => $isDisabled,'icon' => $icon ?? $action->getIcon(),'icon-size' => $action->getIconSize(),'size' => $action->getSize(),'label-sr-only' => $action->isLabelHidden(),'attributes' => \Filament\Support\prepare_inherited_attributes($attributes)->merge($action->getExtraAttributes(), escape: false)]); ?>
    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/vendor/filament/actions/src/../resources/views/components/action.blade.php ENDPATH**/ ?>