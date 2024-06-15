<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'actions' => [],
    'badge' => null,
    'badgeColor' => null,
    'button' => false,
    'color' => null,
    'dropdownPlacement' => null,
    'dynamicComponent' => null,
    'group' => null,
    'icon' => null,
    'iconButton' => false,
    'label' => null,
    'link' => false,
    'size' => null,
    'tooltip' => null,
    'view' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'actions' => [],
    'badge' => null,
    'badgeColor' => null,
    'button' => false,
    'color' => null,
    'dropdownPlacement' => null,
    'dynamicComponent' => null,
    'group' => null,
    'icon' => null,
    'iconButton' => false,
    'label' => null,
    'link' => false,
    'size' => null,
    'tooltip' => null,
    'view' => null,
]); ?>
<?php foreach (array_filter(([
    'actions' => [],
    'badge' => null,
    'badgeColor' => null,
    'button' => false,
    'color' => null,
    'dropdownPlacement' => null,
    'dynamicComponent' => null,
    'group' => null,
    'icon' => null,
    'iconButton' => false,
    'label' => null,
    'link' => false,
    'size' => null,
    'tooltip' => null,
    'view' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(! ($dynamicComponent && $group)): ?>
    <?php
        $group = \Filament\Actions\ActionGroup::make($actions)
            ->badge($badge)
            ->badgeColor($badgeColor)
            ->color($color)
            ->dropdownPlacement($dropdownPlacement)
            ->icon($icon)
            ->label($label)
            ->size($size)
            ->tooltip($tooltip)
            ->view($view);

        if ($button) {
            $group->button();
        }

        if ($iconButton) {
            $group->iconButton();
        }

        if ($link) {
            $group->link();
        }
    ?>

    <?php echo e($group); ?>

<?php elseif(! $group->hasDropdown()): ?>
    <?php $__currentLoopData = $group->getActions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($action->isVisible()): ?>
            <?php echo e($action); ?>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <?php
        $actionLists = [];
        $singleActions = [];

        foreach ($group->getActions() as $action) {
            if ($action->isHidden()) {
                continue;
            }

            if ($action instanceof \Filament\Actions\ActionGroup && (! $action->hasDropdown())) {
                if (count($singleActions)) {
                    $actionLists[] = $singleActions;
                    $singleActions = [];
                }

                $actionLists[] = array_filter(
                    $action->getActions(),
                    fn ($action): bool => $action->isVisible(),
                );
            } else {
                $singleActions[] = $action;
            }
        }

        if (count($singleActions)) {
            $actionLists[] = $singleActions;
        }
    ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.index','data' => ['maxHeight' => $group->getDropdownMaxHeight(),'placement' => $group->getDropdownPlacement() ?? 'bottom-start','width' => $group->getDropdownWidth(),'teleport' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['max-height' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($group->getDropdownMaxHeight()),'placement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($group->getDropdownPlacement() ?? 'bottom-start'),'width' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($group->getDropdownWidth()),'teleport' => true]); ?>
         <?php $__env->slot('trigger', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $dynamicComponent] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['badge' => $group->getBadge(),'badge-color' => $group->getBadgeColor(),'color' => $group->getColor(),'tooltip' => $group->getTooltip(),'icon' => $group->getIcon(),'size' => $group->getSize(),'label-sr-only' => $group->isLabelHidden(),'attributes' => \Filament\Support\prepare_inherited_attributes($attributes)->merge($group->getExtraAttributes(), escape: false)]); ?>
                <?php echo e($slot); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>

        <?php $__currentLoopData = $actionLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.dropdown.list.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::dropdown.list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($action); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/Herd/examplesite/vendor/filament/actions/src/../resources/views/components/group.blade.php ENDPATH**/ ?>