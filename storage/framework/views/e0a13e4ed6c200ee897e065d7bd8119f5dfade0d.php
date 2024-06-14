<?php
    $isConcealed = $isConcealed();
    $rows = $getRows();
    $statePath = $getStatePath();

    $initialHeight = (($rows ?? 2) * 1.5) + 0.75;
?>

<?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getFieldWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => $field]); ?>
    <textarea
        <?php if($shouldAutosize()): ?>
            ax-load
            ax-load-src="<?php echo e(\Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('textarea', 'filament/forms')); ?>"
            x-data="textareaFormComponent({ initialHeight: <?php echo \Illuminate\Support\Js::from($initialHeight)->toHtml() ?> })"
            x-ignore
            x-on:input="render()"
            style="height: <?php echo e($initialHeight); ?>rem"
            <?php echo e($getExtraAlpineAttributeBag()); ?>

        <?php endif; ?>
        <?php echo e($attributes
                ->merge([
                    'autocomplete' => $getAutocomplete(),
                    'autofocus' => $isAutofocused(),
                    'cols' => $getCols(),
                    'disabled' => $isDisabled(),
                    'id' => $getId(),
                    'maxlength' => (! $isConcealed) ? $getMaxLength() : null,
                    'minlength' => (! $isConcealed) ? $getMinLength() : null,
                    'placeholder' => $getPlaceholder(),
                    'readonly' => $isReadOnly(),
                    'required' => $isRequired() && (! $isConcealed),
                    'rows' => $rows,
                    $applyStateBindingModifiers('wire:model') => $statePath,
                ], escape: false)
                ->merge($getExtraAttributes(), escape: false)
                ->merge($getExtraInputAttributes(), escape: false)
                ->class([
                    'fi-fo-textarea block w-full rounded-lg border-none bg-white px-3 py-1.5 text-base text-gray-950 shadow-sm outline-none ring-1 transition duration-75 placeholder:text-gray-400 focus:ring-2 disabled:bg-gray-50 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:bg-white/5 dark:text-white dark:placeholder:text-gray-500 dark:disabled:bg-transparent dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6',
                    'ring-gray-950/10 focus:ring-primary-600 dark:ring-white/20 dark:focus:ring-primary-500 dark:disabled:ring-white/10' => ! $errors->has($statePath),
                    'ring-danger-600 focus:ring-danger-600 dark:ring-danger-500 dark:focus:ring-danger-500' => $errors->has($statePath),
                ])); ?>

    ></textarea>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/vendor/filament/forms/src/../resources/views/components/textarea.blade.php ENDPATH**/ ?>