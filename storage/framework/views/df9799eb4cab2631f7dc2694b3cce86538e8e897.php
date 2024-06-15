<?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getFieldWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => $field]); ?>
    <?php
        $statePath = $getStatePath();
    ?>

    <?php if($isDisabled()): ?>
        <div
            class="prose block w-full max-w-none rounded-lg bg-gray-50 px-3 py-3 text-gray-500 shadow-sm ring-1 ring-gray-950/10 dark:prose-invert dark:bg-transparent dark:text-gray-400 dark:ring-white/10 sm:text-sm"
        >
            <?php echo str($getState())->markdown()->sanitizeHtml(); ?>

        </div>
    <?php else: ?>
        <div
            <?php echo e($attributes
                    ->merge($getExtraAttributes(), escape: false)
                    ->class([
                        'fi-fo-markdown-editor max-w-full overflow-hidden rounded-lg bg-white font-mono text-base text-gray-950 shadow-sm ring-1 transition duration-75 focus-within:ring-2 dark:bg-white/5 dark:text-white sm:text-sm',
                        'ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500' => ! $errors->has($statePath),
                        'ring-danger-600 focus-within:ring-danger-600 dark:ring-danger-500 dark:focus-within:ring-danger-500' => $errors->has($statePath),
                    ])); ?>

        >
            <div
                ax-load="visible"
                ax-load-src="<?php echo e(\Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('markdown-editor', 'filament/forms')); ?>"
                x-data="markdownEditorFormComponent({
                            isLiveDebounced: <?php echo \Illuminate\Support\Js::from($isLiveDebounced())->toHtml() ?>,
                            isLiveOnBlur: <?php echo \Illuminate\Support\Js::from($isLiveOnBlur())->toHtml() ?>,
                            liveDebounce: <?php echo \Illuminate\Support\Js::from($getNormalizedLiveDebounce())->toHtml() ?>,
                            placeholder: <?php echo \Illuminate\Support\Js::from($getPlaceholder())->toHtml() ?>,
                            state: $wire.<?php echo e($applyStateBindingModifiers("entangle('{$statePath}')", isOptimisticallyLive: false)); ?>,
                            toolbarButtons: <?php echo \Illuminate\Support\Js::from($getToolbarButtons())->toHtml() ?>,
                            translations: <?php echo \Illuminate\Support\Js::from(__('filament-forms::components.markdown_editor'))->toHtml() ?>,
                            uploadFileAttachmentUsing: async (file, onSuccess, onError) => {
                                $wire.upload(`componentFileAttachments.<?php echo e($statePath); ?>`, file, () => {
                                    $wire
                                        .getFormComponentFileAttachmentUrl('<?php echo e($statePath); ?>')
                                        .then((url) => {
                                            if (! url) {
                                                return onError()
                                            }

                                            onSuccess(url)
                                        })
                                })
                            },
                        })"
                x-ignore
                wire:ignore
                <?php echo e($getExtraAlpineAttributeBag()); ?>

            >
                <textarea x-ref="editor" class="hidden"></textarea>
            </div>
        </div>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/Herd/examplesite/vendor/filament/forms/src/../resources/views/components/markdown-editor.blade.php ENDPATH**/ ?>