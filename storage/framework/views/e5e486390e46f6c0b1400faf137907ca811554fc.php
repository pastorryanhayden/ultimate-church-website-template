<?php
    use Filament\Support\Enums\Alignment;
?>

<?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getFieldWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => $field,'label-sr-only' => $isLabelHidden()]); ?>
    <?php
        $imageCropAspectRatio = $getImageCropAspectRatio();
        $imageResizeTargetHeight = $getImageResizeTargetHeight();
        $imageResizeTargetWidth = $getImageResizeTargetWidth();
        $isAvatar = $isAvatar();
        $statePath = $getStatePath();
        $isDisabled = $isDisabled();
        $hasImageEditor = $hasImageEditor();
    ?>

    <div
        ax-load
        ax-load-src="<?php echo e(\Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('file-upload', 'filament/forms')); ?>"
        x-data="fileUploadFormComponent({
                    acceptedFileTypes: <?php echo \Illuminate\Support\Js::from($getAcceptedFileTypes())->toHtml() ?>,
                    imageEditorEmptyFillColor: <?php echo \Illuminate\Support\Js::from($getImageEditorEmptyFillColor())->toHtml() ?>,
                    imageEditorMode: <?php echo \Illuminate\Support\Js::from($getImageEditorMode())->toHtml() ?>,
                    imageEditorViewportHeight: <?php echo \Illuminate\Support\Js::from($getImageEditorViewportHeight())->toHtml() ?>,
                    imageEditorViewportWidth: <?php echo \Illuminate\Support\Js::from($getImageEditorViewportWidth())->toHtml() ?>,
                    deleteUploadedFileUsing: async (fileKey) => {
                        return await $wire.deleteUploadedFile(<?php echo \Illuminate\Support\Js::from($statePath)->toHtml() ?>, fileKey)
                    },
                    getUploadedFilesUsing: async () => {
                        return await $wire.getFormUploadedFiles(<?php echo \Illuminate\Support\Js::from($statePath)->toHtml() ?>)
                    },
                    hasImageEditor: <?php echo \Illuminate\Support\Js::from($hasImageEditor)->toHtml() ?>,
                    imageCropAspectRatio: <?php echo \Illuminate\Support\Js::from($imageCropAspectRatio)->toHtml() ?>,
                    imagePreviewHeight: <?php echo \Illuminate\Support\Js::from($getImagePreviewHeight())->toHtml() ?>,
                    imageResizeMode: <?php echo \Illuminate\Support\Js::from($getImageResizeMode())->toHtml() ?>,
                    imageResizeTargetHeight: <?php echo \Illuminate\Support\Js::from($imageResizeTargetHeight)->toHtml() ?>,
                    imageResizeTargetWidth: <?php echo \Illuminate\Support\Js::from($imageResizeTargetWidth)->toHtml() ?>,
                    imageResizeUpscale: <?php echo \Illuminate\Support\Js::from($getImageResizeUpscale())->toHtml() ?>,
                    isAvatar: <?php echo \Illuminate\Support\Js::from($isAvatar)->toHtml() ?>,
                    isDisabled: <?php echo \Illuminate\Support\Js::from($isDisabled)->toHtml() ?>,
                    isDownloadable: <?php echo \Illuminate\Support\Js::from($isDownloadable())->toHtml() ?>,
                    isOpenable: <?php echo \Illuminate\Support\Js::from($isOpenable())->toHtml() ?>,
                    isPreviewable: <?php echo \Illuminate\Support\Js::from($isPreviewable())->toHtml() ?>,
                    isReorderable: <?php echo \Illuminate\Support\Js::from($isReorderable())->toHtml() ?>,
                    loadingIndicatorPosition: <?php echo \Illuminate\Support\Js::from($getLoadingIndicatorPosition())->toHtml() ?>,
                    locale: <?php echo \Illuminate\Support\Js::from(app()->getLocale())->toHtml() ?>,
                    panelAspectRatio: <?php echo \Illuminate\Support\Js::from($getPanelAspectRatio())->toHtml() ?>,
                    panelLayout: <?php echo \Illuminate\Support\Js::from($getPanelLayout())->toHtml() ?>,
                    placeholder: <?php echo \Illuminate\Support\Js::from($getPlaceholder())->toHtml() ?>,
                    maxSize: <?php echo \Illuminate\Support\Js::from(($size = $getMaxSize()) ? "'{$size} KB'" : null)->toHtml() ?>,
                    minSize: <?php echo \Illuminate\Support\Js::from(($size = $getMinSize()) ? "'{$size} KB'" : null)->toHtml() ?>,
                    removeUploadedFileUsing: async (fileKey) => {
                        return await $wire.removeFormUploadedFile(<?php echo \Illuminate\Support\Js::from($statePath)->toHtml() ?>, fileKey)
                    },
                    removeUploadedFileButtonPosition: <?php echo \Illuminate\Support\Js::from($getRemoveUploadedFileButtonPosition())->toHtml() ?>,
                    reorderUploadedFilesUsing: async (files) => {
                        return await $wire.reorderFormUploadedFiles(<?php echo \Illuminate\Support\Js::from($statePath)->toHtml() ?>, files)
                    },
                    shouldAppendFiles: <?php echo \Illuminate\Support\Js::from($shouldAppendFiles())->toHtml() ?>,
                    shouldOrientImageFromExif: <?php echo \Illuminate\Support\Js::from($shouldOrientImagesFromExif())->toHtml() ?>,
                    shouldTransformImage: <?php echo \Illuminate\Support\Js::from($imageCropAspectRatio || $imageResizeTargetHeight || $imageResizeTargetWidth)->toHtml() ?>,
                    state: $wire.<?php echo e($applyStateBindingModifiers("entangle('{$statePath}')")); ?>,
                    uploadButtonPosition: <?php echo \Illuminate\Support\Js::from($getUploadButtonPosition())->toHtml() ?>,
                    uploadProgressIndicatorPosition: <?php echo \Illuminate\Support\Js::from($getUploadProgressIndicatorPosition())->toHtml() ?>,
                    uploadUsing: (fileKey, file, success, error, progress) => {
                        $wire.upload(
                            `<?php echo e($statePath); ?>.${fileKey}`,
                            file,
                            () => {
                                success(fileKey)
                            },
                            error,
                            progress,
                        )
                    },
                })"
        wire:ignore
        x-ignore
        <?php echo e($attributes
                ->merge([
                    'id' => $getId(),
                ], escape: false)
                ->merge($getExtraAttributes(), escape: false)
                ->merge($getExtraAlpineAttributes(), escape: false)
                ->class([
                    'fi-fo-file-upload flex',
                    match ($getAlignment()) {
                        Alignment::Center, 'center' => 'justify-center',
                        Alignment::End, 'end' => 'justify-end',
                        Alignment::Left, 'left' => 'justify-left',
                        Alignment::Right, 'right' => 'justify-right',
                        Alignment::Start, 'start', null => 'justify-start',
                    },
                ])); ?>

    >
        <div
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'h-full',
                'w-32' => $isAvatar,
                'w-full' => ! $isAvatar,
            ]) ?>"
        >
            <input
                x-ref="input"
                <?php echo e($getExtraInputAttributeBag()
                        ->merge([
                            'disabled' => $isDisabled,
                            'multiple' => $isMultiple(),
                            'type' => 'file',
                        ], escape: false)); ?>

            />
        </div>

        <?php if($hasImageEditor && (! $isDisabled)): ?>
            <div
                x-show="isEditorOpen"
                x-cloak
                x-on:click.stop
                x-trap.noscroll="isEditorOpen"
                x-on:keydown.escape.window="closeEditor"
                class="fixed inset-0 isolate z-50 h-screen w-screen p-2 sm:p-10 md:p-20"
            >
                <div
                    aria-hidden="true"
                    class="fixed inset-0 h-full w-full cursor-pointer bg-black/50"
                    style="will-change: transform"
                ></div>

                <div
                    class="isolate z-10 flex h-full w-full items-center justify-center"
                >
                    <div
                        class="mx-auto flex h-full w-full flex-col overflow-hidden rounded-xl bg-white ring-1 ring-gray-900/10 dark:bg-gray-800 dark:ring-gray-50/10 lg:flex-row"
                    >
                        <div class="w-full flex-1 overflow-auto p-4 lg:h-full">
                            <div class="h-full w-full">
                                <img x-ref="editor" class="h-full w-auto" />
                            </div>
                        </div>

                        <div
                            class="shadow-top z-[1] flex h-96 w-full flex-col overflow-auto bg-gray-50 dark:bg-gray-900/30 lg:h-full lg:max-w-xs lg:shadow-none"
                        >
                            <div class="flex-1 overflow-hidden">
                                <div
                                    class="flex h-full flex-col overflow-y-auto"
                                >
                                    <div class="flex-1 overflow-auto">
                                        <div class="space-y-6 p-4">
                                            <div class="w-full space-y-3">
                                                <?php $__currentLoopData = [
                                                    [
                                                        'label' => __('filament-forms::components.file_upload.editor.fields.x_position.label'),
                                                        'ref' => 'xPositionInput',
                                                        'unit' => __('filament-forms::components.file_upload.editor.fields.x_position.unit'),
                                                        'alpineSaveHandler' => 'editor.setData({...editor.getData(true), x: +$el.value})',
                                                    ],
                                                    [
                                                        'label' => __('filament-forms::components.file_upload.editor.fields.y_position.label'),
                                                        'ref' => 'yPositionInput',
                                                        'unit' => __('filament-forms::components.file_upload.editor.fields.y_position.unit'),
                                                        'alpineSaveHandler' => 'editor.setData({...editor.getData(true), y: +$el.value})',
                                                    ],
                                                    [
                                                        'label' => __('filament-forms::components.file_upload.editor.fields.width.label'),
                                                        'ref' => 'widthInput',
                                                        'unit' => __('filament-forms::components.file_upload.editor.fields.width.unit'),
                                                        'alpineSaveHandler' => 'editor.setData({...editor.getData(true), width: +$el.value})',
                                                    ],
                                                    [
                                                        'label' => __('filament-forms::components.file_upload.editor.fields.height.label'),
                                                        'ref' => 'heightInput',
                                                        'unit' => __('filament-forms::components.file_upload.editor.fields.height.unit'),
                                                        'alpineSaveHandler' => 'editor.setData({...editor.getData(true), height: +$el.value})',
                                                    ],
                                                    [
                                                        'label' => __('filament-forms::components.file_upload.editor.fields.rotation.label'),
                                                        'ref' => 'rotationInput',
                                                        'unit' => __('filament-forms::components.file_upload.editor.fields.rotation.unit'),
                                                        'alpineSaveHandler' => 'editor.rotateTo(+$el.value)',
                                                    ],
                                                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <label
                                                        class="flex w-full items-center rounded-lg border border-gray-300 bg-gray-100 text-sm shadow-sm dark:border-gray-700 dark:bg-gray-800"
                                                    >
                                                        <span
                                                            class="flex w-20 flex-shrink-0 items-center justify-center self-stretch border-e border-gray-300 px-2 dark:border-gray-700"
                                                        >
                                                            <?php echo e($input['label']); ?>

                                                        </span>

                                                        <input
                                                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                                                'block w-full border-none text-sm transition duration-75 focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70 dark:bg-gray-700 dark:text-white dark:focus:border-primary-500',
                                                            ]) ?>"
                                                            x-on:keyup.enter.stop.prevent="<?php echo e($input['alpineSaveHandler']); ?>"
                                                            x-on:blur="<?php echo e($input['alpineSaveHandler']); ?>"
                                                            x-ref="<?php echo e($input['ref']); ?>"
                                                            x-on:keydown.enter.prevent
                                                            type="text"
                                                        />

                                                        <span
                                                            class="flex w-16 items-center justify-center self-stretch border-s border-gray-300 px-2 dark:border-gray-700"
                                                        >
                                                            <?php echo e($input['unit']); ?>

                                                        </span>
                                                    </label>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>

                                            <div class="space-y-3">
                                                <?php $__currentLoopData = $getImageEditorActions(iconSizeClasses: 'h-5 w-5 mx-auto'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupedActions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.group','data' => ['class' => 'w-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                                                        <?php $__currentLoopData = $groupedActions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['xTooltip' => '{
                                                                    content: @js($action[\'label\']),
                                                                    theme: $store.theme,
                                                                }','xOn:click.stop.prevent' => ''.e($action['alpineClickHandler']).'','color' => 'gray','grouped' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-tooltip' => '{
                                                                    content: @js($action[\'label\']),
                                                                    theme: $store.theme,
                                                                }','x-on:click.stop.prevent' => ''.e($action['alpineClickHandler']).'','color' => 'gray','grouped' => true]); ?>
                                                                <?php echo $action['iconHtml']; ?>


                                                                <span
                                                                    class="sr-only"
                                                                >
                                                                    <?php echo e($action['label']); ?>

                                                                </span>
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
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>

                                            <?php if(count($aspectRatios = $getImageEditorAspectRatiosForJs())): ?>
                                                <div class="space-y-3">
                                                    <div
                                                        class="text-xs text-gray-950 dark:text-white"
                                                    >
                                                        <?php echo e(__('filament-forms::components.file_upload.editor.aspect_ratios.label')); ?>

                                                    </div>

                                                    <?php $__currentLoopData = collect($aspectRatios)->chunk(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ratiosChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.group','data' => ['class' => 'w-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                                                            <?php $__currentLoopData = $ratiosChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $ratio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['xTooltip' => '{
                                                                        content: @js(__(\'filament-forms::components.file_upload.editor.actions.set_aspect_ratio.label\', [\'ratio\' => $label])),
                                                                        theme: $store.theme,
                                                                    }','xOn:click.stop.prevent' => 'currentRatio = \''.e($label).'\'; editor.setAspectRatio('.e($ratio).')','color' => 'gray','xBind:class' => '{\'!bg-gray-50 dark:!bg-gray-700\': currentRatio === \''.e($label).'\'}','grouped' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-tooltip' => '{
                                                                        content: @js(__(\'filament-forms::components.file_upload.editor.actions.set_aspect_ratio.label\', [\'ratio\' => $label])),
                                                                        theme: $store.theme,
                                                                    }','x-on:click.stop.prevent' => 'currentRatio = \''.e($label).'\'; editor.setAspectRatio('.e($ratio).')','color' => 'gray','x-bind:class' => '{\'!bg-gray-50 dark:!bg-gray-700\': currentRatio === \''.e($label).'\'}','grouped' => true]); ?>
                                                                    <?php echo e($label); ?>

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
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div
                                        class="flex items-center gap-3 px-4 py-3"
                                    >
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['color' => 'gray','xOn:click.prevent' => 'pond.imageEditEditor.oncancel']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'gray','x-on:click.prevent' => 'pond.imageEditEditor.oncancel']); ?>
                                            <?php echo e(__('filament-forms::components.file_upload.editor.actions.cancel.label')); ?>

                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['color' => 'warning','xOn:click.stop.prevent' => 'editor.reset()','class' => 'ml-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'warning','x-on:click.stop.prevent' => 'editor.reset()','class' => 'ml-auto']); ?>
                                            <?php echo e(__('filament-forms::components.file_upload.editor.actions.reset.label')); ?>

                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['color' => 'success','xOn:click.prevent' => 'saveEditor']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'success','x-on:click.prevent' => 'saveEditor']); ?>
                                            <?php echo e(__('filament-forms::components.file_upload.editor.actions.save.label')); ?>

                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/code/church-web/biblebaptistmattoon/vendor/filament/forms/src/../resources/views/components/file-upload.blade.php ENDPATH**/ ?>