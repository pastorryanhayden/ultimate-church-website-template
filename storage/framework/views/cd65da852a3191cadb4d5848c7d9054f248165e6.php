<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'alpineDisabled' => null,
    'alpineValid' => null,
    'disabled' => false,
    'inlinePrefix' => false,
    'inlineSuffix' => false,
    'prefix' => null,
    'prefixActions' => [],
    'prefixIcon' => null,
    'prefixIconAlias' => null,
    'suffix' => null,
    'suffixActions' => [],
    'suffixIcon' => null,
    'suffixIconAlias' => null,
    'valid' => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'alpineDisabled' => null,
    'alpineValid' => null,
    'disabled' => false,
    'inlinePrefix' => false,
    'inlineSuffix' => false,
    'prefix' => null,
    'prefixActions' => [],
    'prefixIcon' => null,
    'prefixIconAlias' => null,
    'suffix' => null,
    'suffixActions' => [],
    'suffixIcon' => null,
    'suffixIconAlias' => null,
    'valid' => true,
]); ?>
<?php foreach (array_filter(([
    'alpineDisabled' => null,
    'alpineValid' => null,
    'disabled' => false,
    'inlinePrefix' => false,
    'inlineSuffix' => false,
    'prefix' => null,
    'prefixActions' => [],
    'prefixIcon' => null,
    'prefixIconAlias' => null,
    'suffix' => null,
    'suffixActions' => [],
    'suffixIcon' => null,
    'suffixIconAlias' => null,
    'valid' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $hasPrefix = count($prefixActions) || $prefixIcon || filled($prefix);
    $hasSuffix = count($suffixActions) || $suffixIcon || filled($suffix);

    $hasAlpineDisabledClasses = filled($alpineDisabled);
    $hasAlpineValidClasses = filled($alpineValid);
    $hasAlpineClasses = $hasAlpineDisabledClasses || $hasAlpineValidClasses;

    $enabledWrapperClasses = 'bg-white focus-within:ring-2 dark:bg-white/5';
    $disabledWrapperClasses = 'bg-gray-50 dark:bg-transparent';
    $validWrapperClasses = 'ring-gray-950/10';
    $invalidWrapperClasses = 'ring-danger-600 dark:ring-danger-500';
    $enabledValidWrapperClasses = 'focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500';
    $enabledInvalidWrapperClasses = 'focus-within:ring-danger-600 dark:focus-within:ring-danger-500';
    $disabledValidWrapperClasses = 'dark:ring-white/10';

    $actionsClasses = '-mx-1.5 flex items-center';
    $iconClasses = 'fi-input-wrapper-icon h-5 w-5 text-gray-400 dark:text-gray-500';
    $labelClasses = 'fi-input-wrapper-label whitespace-nowrap text-sm text-gray-500 dark:text-gray-400';

    $prefixActions = array_filter(
        $prefixActions,
        fn (\Filament\Forms\Components\Actions\Action $prefixAction): bool => $prefixAction->isVisible(),
    );

    $suffixActions = array_filter(
        $suffixActions,
        fn (\Filament\Forms\Components\Actions\Action $suffixAction): bool => $suffixAction->isVisible(),
    );

    $wireTarget = $attributes->whereStartsWith(['wire:target'])->first();

    $hasLoadingIndicator = filled($wireTarget);

    if ($hasLoadingIndicator) {
        $loadingIndicatorTarget = html_entity_decode($wireTarget, ENT_QUOTES);
    }
?>

<div
    <?php if($hasAlpineClasses): ?>
        x-bind:class="{
            <?php echo e($hasAlpineDisabledClasses ? "'{$enabledWrapperClasses}': ! ({$alpineDisabled})," : null); ?>

            <?php echo e($hasAlpineDisabledClasses ? "'{$disabledWrapperClasses}': {$alpineDisabled}," : null); ?>

            <?php echo e($hasAlpineValidClasses ? "'{$validWrapperClasses}': {$alpineValid}," : null); ?>

            <?php echo e($hasAlpineValidClasses ? "'{$invalidWrapperClasses}': ! ({$alpineValid})," : null); ?>

            <?php echo e(($hasAlpineDisabledClasses && $hasAlpineValidClasses) ? "'{$enabledValidWrapperClasses}': ! ({$alpineDisabled}) && {$alpineValid}," : null); ?>

            <?php echo e(($hasAlpineDisabledClasses && $hasAlpineValidClasses) ? "'{$enabledInvalidWrapperClasses}': ! ({$alpineDisabled}) && ! ({$alpineValid})," : null); ?>

            <?php echo e(($hasAlpineDisabledClasses && $hasAlpineValidClasses) ? "'{$disabledValidWrapperClasses}': {$alpineDisabled} && ! ({$alpineValid})," : null); ?>

        }"
    <?php endif; ?>
    <?php echo e($attributes
            ->except(['wire:target'])
            ->class([
                'fi-input-wrapper flex rounded-lg shadow-sm ring-1 transition duration-75',
                $enabledWrapperClasses => (! $hasAlpineClasses) && (! $disabled),
                $disabledWrapperClasses => (! $hasAlpineClasses) && $disabled,
                $validWrapperClasses => (! $hasAlpineClasses) && $valid,
                $invalidWrapperClasses => (! $hasAlpineClasses) && (! $valid),
                $enabledValidWrapperClasses => (! $hasAlpineClasses) && (! $disabled) && $valid,
                $enabledInvalidWrapperClasses => (! $hasAlpineClasses) && (! $disabled) && (! $valid),
                $disabledValidWrapperClasses => (! $hasAlpineClasses) && $disabled && $valid,
            ])); ?>

>
    <?php if($hasPrefix || $hasLoadingIndicator): ?>
        <div
            <?php if(! $hasPrefix): ?>
                wire:loading.delay.flex
                wire:target="<?php echo e($loadingIndicatorTarget); ?>"
                wire:key="<?php echo e(\Illuminate\Support\Str::random()); ?>" 
            <?php endif; ?>
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'flex items-center gap-x-3 ps-3',
                'pe-1' => $inlinePrefix && filled($prefix),
                'pe-2' => $inlinePrefix && blank($prefix),
                'border-e border-gray-200 pe-3 ps-3 dark:border-white/10' => ! $inlinePrefix,
            ]) ?>"
        >
            <?php if(count($prefixActions)): ?>
                <div class="<?php echo e($actionsClasses); ?>">
                    <?php $__currentLoopData = $prefixActions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prefixAction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($prefixAction); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <?php if($prefixIcon): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['alias' => $prefixIconAlias,'icon' => $prefixIcon,'wire:loading.remove.delay' => $hasLoadingIndicator,'wire:target' => $hasLoadingIndicator ? $loadingIndicatorTarget : null,'class' => $iconClasses]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['alias' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($prefixIconAlias),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($prefixIcon),'wire:loading.remove.delay' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hasLoadingIndicator),'wire:target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hasLoadingIndicator ? $loadingIndicatorTarget : null),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconClasses)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if($hasLoadingIndicator): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.loading-indicator','data' => ['attributes' => 
                        \Filament\Support\prepare_inherited_attributes(
                            new \Illuminate\View\ComponentAttributeBag([
                                'wire:loading.delay' => $hasPrefix,
                                'wire:target' => $hasPrefix ? $loadingIndicatorTarget : null,
                            ])
                        )
                    ,'class' => $iconClasses]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::loading-indicator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(
                        \Filament\Support\prepare_inherited_attributes(
                            new \Illuminate\View\ComponentAttributeBag([
                                'wire:loading.delay' => $hasPrefix,
                                'wire:target' => $hasPrefix ? $loadingIndicatorTarget : null,
                            ])
                        )
                    ),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconClasses)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(filled($prefix)): ?>
                <span class="<?php echo e($labelClasses); ?>">
                    <?php echo e($prefix); ?>

                </span>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div
        <?php if($hasLoadingIndicator && (! $hasPrefix)): ?>
            <?php if($inlinePrefix): ?>
                wire:loading.delay.class.remove="ps-3"
            <?php endif; ?>

            wire:target="<?php echo e($loadingIndicatorTarget); ?>"
        <?php endif; ?>
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'min-w-0 flex-1',
            'ps-3' => $hasLoadingIndicator && (! $hasPrefix) && $inlinePrefix,
        ]) ?>"
    >
        <?php echo e($slot); ?>

    </div>

    <?php if($hasSuffix): ?>
        <div
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'flex items-center gap-x-3 pe-3',
                'ps-1' => $inlineSuffix && filled($suffix),
                'ps-2' => $inlineSuffix && blank($suffix),
                'border-s border-gray-200 ps-3 dark:border-white/10' => ! $inlineSuffix,
            ]) ?>"
        >
            <?php if(filled($suffix)): ?>
                <span class="<?php echo e($labelClasses); ?>">
                    <?php echo e($suffix); ?>

                </span>
            <?php endif; ?>

            <?php if($suffixIcon): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['alias' => $suffixIconAlias,'icon' => $suffixIcon,'class' => $iconClasses]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['alias' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($suffixIconAlias),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($suffixIcon),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconClasses)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php if(count($suffixActions)): ?>
                <div class="<?php echo e($actionsClasses); ?>">
                    <?php $__currentLoopData = $suffixActions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suffixAction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($suffixAction); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /Users/ryanhayden/code/church-web/biblebaptistmattoon/vendor/filament/support/src/../resources/views/components/input/wrapper.blade.php ENDPATH**/ ?>