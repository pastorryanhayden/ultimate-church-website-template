<?php
    $state = $getState();
?>

<div
    wire:key="<?php echo e($this->getId()); ?>.table.record.<?php echo e($recordKey); ?>.column.<?php echo e($getName()); ?>.toggle-column.<?php echo e($state ? 'true' : 'false'); ?>"
>
    <div
        x-data="{
            error: undefined,
            state: <?php echo \Illuminate\Support\Js::from((bool) $state)->toHtml() ?>,
            isLoading: false,
        }"
        wire:ignore
        <?php echo e($attributes
                ->merge($getExtraAttributes(), escape: false)
                ->class([
                    'fi-ta-toggle',
                    'px-3 py-4' => ! $isInline(),
                ])); ?>

    >
        <?php
            $offColor = $getOffColor() ?? 'gray';
            $onColor = $getOnColor() ?? 'primary';
        ?>

        <button
            role="switch"
            aria-checked="false"
            x-bind:aria-checked="state.toString()"
            x-on:click="
                if (isLoading) {
                    return
                }

                state = ! state

                isLoading = true

                const response = await $wire.updateTableColumnState(<?php echo \Illuminate\Support\Js::from($getName())->toHtml() ?>, <?php echo \Illuminate\Support\Js::from($recordKey)->toHtml() ?>, state)

                error = response?.error ?? undefined

                if (error) {
                    state = ! state
                }

                isLoading = false
            "
            x-tooltip="
                error === undefined
                    ? false
                    : {
                          content: error,
                          theme: $store.theme,
                      }
            "
            x-bind:class="
                (state
                    ? '<?php echo e(match ($onColor) {
                            'gray' => 'bg-gray-200 dark:bg-gray-700',
                            default => 'bg-custom-600',
                        }); ?>'
                    : '<?php echo e(match ($offColor) {
                            'gray' => 'bg-gray-200 dark:bg-gray-700',
                            default => 'bg-custom-600',
                        }); ?>') +
                    (isLoading ? ' opacity-70 pointer-events-none' : '')
            "
            x-bind:style="
                state
                    ? '<?php echo e(\Filament\Support\get_color_css_variables($onColor, shades: [600])); ?>'
                    : '<?php echo e(\Filament\Support\get_color_css_variables($offColor, shades: [600])); ?>'
            "
            <?php if($isDisabled()): echo 'disabled'; endif; ?>
            type="button"
            class="relative ms-4 inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70"
        >
            <span
                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                x-bind:class="{
                    'translate-x-5 rtl:-translate-x-5': state,
                    'translate-x-0': ! state,
                }"
            >
                <?php if($hasOffIcon()): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $getOffIcon(),'class' => \Illuminate\Support\Arr::toCssClasses([
                            'fi-ta-toggle-off-icon h-3 w-3',
                            match ($onColor) {
                                'gray' => 'text-gray-400 dark:text-gray-700',
                                default => 'text-custom-600',
                            },
                        ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getOffIcon()),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                            'fi-ta-toggle-off-icon h-3 w-3',
                            match ($onColor) {
                                'gray' => 'text-gray-400 dark:text-gray-700',
                                default => 'text-custom-600',
                            },
                        ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
            </span>

            <span
                class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                aria-hidden="true"
                x-bind:class="{
                    'opacity-100 ease-in duration-200': state,
                    'opacity-0 ease-out duration-100': ! state,
                }"
            >
                <?php if($hasOnIcon()): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $getOnIcon(),'xCloak' => 'x-cloak','class' => \Illuminate\Support\Arr::toCssClasses([
                            'fi-ta-toggle-on-icon h-3 w-3',
                            match ($onColor) {
                                'gray' => 'text-gray-400 dark:text-gray-700',
                                default => 'text-custom-600',
                            },
                        ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getOnIcon()),'x-cloak' => 'x-cloak','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                            'fi-ta-toggle-on-icon h-3 w-3',
                            match ($onColor) {
                                'gray' => 'text-gray-400 dark:text-gray-700',
                                default => 'text-custom-600',
                            },
                        ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>
            </span>
        </button>
    </div>
</div>
<?php /**PATH /Users/ryanhayden/Herd/examplesite/vendor/filament/tables/src/../resources/views/columns/toggle-column.blade.php ENDPATH**/ ?>