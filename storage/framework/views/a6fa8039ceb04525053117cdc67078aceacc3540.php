<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'field' => null,
    'hasInlineLabel' => null,
    'hasNestedRecursiveValidationRules' => false,
    'helperText' => null,
    'hint' => null,
    'hintActions' => null,
    'hintColor' => null,
    'hintIcon' => null,
    'id' => null,
    'isDisabled' => null,
    'isMarkedAsRequired' => null,
    'label' => null,
    'labelPrefix' => null,
    'labelSrOnly' => null,
    'labelSuffix' => null,
    'required' => null,
    'statePath' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'field' => null,
    'hasInlineLabel' => null,
    'hasNestedRecursiveValidationRules' => false,
    'helperText' => null,
    'hint' => null,
    'hintActions' => null,
    'hintColor' => null,
    'hintIcon' => null,
    'id' => null,
    'isDisabled' => null,
    'isMarkedAsRequired' => null,
    'label' => null,
    'labelPrefix' => null,
    'labelSrOnly' => null,
    'labelSuffix' => null,
    'required' => null,
    'statePath' => null,
]); ?>
<?php foreach (array_filter(([
    'field' => null,
    'hasInlineLabel' => null,
    'hasNestedRecursiveValidationRules' => false,
    'helperText' => null,
    'hint' => null,
    'hintActions' => null,
    'hintColor' => null,
    'hintIcon' => null,
    'id' => null,
    'isDisabled' => null,
    'isMarkedAsRequired' => null,
    'label' => null,
    'labelPrefix' => null,
    'labelSrOnly' => null,
    'labelSuffix' => null,
    'required' => null,
    'statePath' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    if ($field) {
        $hasInlineLabel ??= $field->hasInlineLabel();
        $hasNestedRecursiveValidationRules ??= $field instanceof \Filament\Forms\Components\Contracts\HasNestedRecursiveValidationRules;
        $helperText ??= $field->getHelperText();
        $hint ??= $field->getHint();
        $hintActions ??= $field->getHintActions();
        $hintColor ??= $field->getHintColor();
        $hintIcon ??= $field->getHintIcon();
        $id ??= $field->getId();
        $isDisabled ??= $field->isDisabled();
        $isMarkedAsRequired ??= $field->isMarkedAsRequired();
        $label ??= $field->getLabel();
        $labelSrOnly ??= $field->isLabelHidden();
        $required ??= $field->isRequired();
        $statePath ??= $field->getStatePath();
    }

    $hintActions = array_filter(
        $hintActions ?? [],
        fn (\Filament\Forms\Components\Actions\Action $hintAction): bool => $hintAction->isVisible(),
    );

    $hasError = $errors->has($statePath) || ($hasNestedRecursiveValidationRules && $errors->has("{$statePath}.*"));
?>

<div <?php echo e($attributes->class(['fi-fo-field-wrp'])); ?>>
    <?php if($label && $labelSrOnly): ?>
        <label for="<?php echo e($id); ?>" class="sr-only">
            <?php echo e($label); ?>

        </label>
    <?php endif; ?>

    <div
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'grid gap-y-2',
            'sm:grid-cols-3 sm:items-start sm:gap-x-4' => $hasInlineLabel,
        ]) ?>"
    >
        <?php if(($label && (! $labelSrOnly)) || $labelPrefix || $labelSuffix || filled($hint) || $hintIcon || count($hintActions)): ?>
            <div
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'flex items-center justify-between gap-x-3',
                    'sm:pt-1.5' => $hasInlineLabel,
                ]) ?>"
            >
                <?php if($label && (! $labelSrOnly)): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-forms::components.field-wrapper.label','data' => ['for' => $id,'error' => $errors->has($statePath),'isDisabled' => $isDisabled,'isMarkedAsRequired' => $isMarkedAsRequired,'prefix' => $labelPrefix,'suffix' => $labelSuffix,'required' => $required]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-forms::field-wrapper.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'error' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->has($statePath)),'is-disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isDisabled),'is-marked-as-required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isMarkedAsRequired),'prefix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($labelPrefix),'suffix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($labelSuffix),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($required)]); ?>
                        <?php echo e($label); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php elseif($labelPrefix): ?>
                    <?php echo e($labelPrefix); ?>

                <?php elseif($labelSuffix): ?>
                    <?php echo e($labelSuffix); ?>

                <?php endif; ?>

                <?php if(filled($hint) || $hintIcon || count($hintActions)): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-forms::components.field-wrapper.hint','data' => ['actions' => $hintActions,'color' => $hintColor,'icon' => $hintIcon]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-forms::field-wrapper.hint'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hintActions),'color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hintColor),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hintIcon)]); ?>
                        <?php echo e($hint); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if((! \Filament\Support\is_slot_empty($slot)) || $hasError || filled($helperText)): ?>
            <div
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'grid gap-y-2',
                    'sm:col-span-2' => $hasInlineLabel,
                ]) ?>"
            >
                <?php echo e($slot); ?>


                <?php if($hasError): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-forms::components.field-wrapper.error-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-forms::field-wrapper.error-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e($errors->first($statePath) ?? ($hasNestedRecursiveValidationRules ? $errors->first("{$statePath}.*") : null)); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php if(filled($helperText)): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-forms::components.field-wrapper.helper-text','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-forms::field-wrapper.helper-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e($helperText); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/forge/biblebaptistmattoon.org/vendor/filament/forms/src/../resources/views/components/field-wrapper/index.blade.php ENDPATH**/ ?>