<?php
    use Filament\Support\Enums\FontFamily;
    use Filament\Support\Enums\FontWeight;
    use Filament\Support\Enums\IconPosition;
    use Filament\Tables\Columns\TextColumn\TextColumnSize;

    $canWrap = $canWrap();
    $descriptionAbove = $getDescriptionAbove();
    $descriptionBelow = $getDescriptionBelow();
    $isBadge = $isBadge();
    $iconPosition = $getIconPosition();
    $isListWithLineBreaks = $isListWithLineBreaks();
    $url = $getUrl();

    $arrayState = $getState();

    if ($arrayState instanceof \Illuminate\Support\Collection) {
        $arrayState = $arrayState->all();
    }

    if (is_array($arrayState)) {
        if ($listLimit = $getListLimit()) {
            $limitedArrayState = array_slice($arrayState, $listLimit);
            $arrayState = array_slice($arrayState, 0, $listLimit);
        }

        if ((! $isListWithLineBreaks) && (! $isBadge)) {
            $arrayState = implode(
                ', ',
                array_map(
                    fn ($value) => $value instanceof \Filament\Support\Contracts\HasLabel ? $value->getLabel() : $value,
                    $arrayState,
                ),
            );
        }
    }

    $arrayState = \Illuminate\Support\Arr::wrap($arrayState);
?>

<div
    <?php echo e($attributes
            ->merge($getExtraAttributes(), escape: false)
            ->class([
                'fi-ta-text grid gap-y-1',
                'px-3 py-4' => ! $isInline(),
            ])); ?>

>
    <?php if(filled($descriptionAbove)): ?>
        <p class="text-sm text-gray-500 dark:text-gray-400">
            <?php echo e($descriptionAbove); ?>

        </p>
    <?php endif; ?>

    <<?php echo e($isListWithLineBreaks ? 'ul' : 'div'); ?>

        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'list-inside list-disc' => $isBulleted(),
            'flex flex-wrap items-center gap-1' => $isBadge,
            'whitespace-normal' => $canWrap,
        ]) ?>"
    >
        <?php $__currentLoopData = $arrayState; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(filled($formattedState = $formatState($state))): ?>
                <?php
                    $color = $getColor($state);
                    $copyableState = $getCopyableState($state) ?? $state;
                    $copyMessage = $getCopyMessage($state);
                    $copyMessageDuration = $getCopyMessageDuration($state);
                    $fontFamily = $getFontFamily($state);
                    $icon = $getIcon($state);
                    $itemIsCopyable = $isCopyable($state);
                    $size = $getSize($state);
                    $weight = $getWeight($state);

                    $iconClasses = \Illuminate\Support\Arr::toCssClasses([
                        'fi-ta-text-item-icon h-5 w-5',
                        match ($color) {
                            'gray', null => 'text-gray-400 dark:text-gray-500',
                            default => 'text-custom-500',
                        },
                    ]);

                    $iconStyles = \Illuminate\Support\Arr::toCssStyles([
                        \Filament\Support\get_color_css_variables($color, shades: [500]) => $color !== 'gray',
                    ]);
                ?>

                <<?php echo e($isListWithLineBreaks ? 'li' : 'div'); ?>

                    <?php if($itemIsCopyable): ?>
                        x-on:click="
                            window.navigator.clipboard.writeText(<?php echo \Illuminate\Support\Js::from($copyableState)->toHtml() ?>)
                            $tooltip(<?php echo \Illuminate\Support\Js::from($copyMessage)->toHtml() ?>, { timeout: <?php echo \Illuminate\Support\Js::from($copyMessageDuration)->toHtml() ?> })
                        "
                    <?php endif; ?>
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'flex max-w-max',
                        'cursor-pointer' => $itemIsCopyable,
                    ]) ?>"
                >
                    <?php if($isBadge): ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.badge','data' => ['color' => $color,'icon' => $icon,'iconPosition' => $iconPosition]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($color),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'icon-position' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconPosition)]); ?>
                            <?php echo e($formattedState); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php else: ?>
                        <div
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                'fi-ta-text-item inline-flex items-center gap-1.5',
                                'transition duration-75 hover:underline focus:underline' => $url,
                                match ($size) {
                                    TextColumnSize::ExtraSmall, 'xs' => 'text-xs',
                                    TextColumnSize::Small, 'sm', null => 'text-sm',
                                    TextColumnSize::Medium, 'base', 'md' => 'text-base',
                                    TextColumnSize::Large, 'lg' => 'text-lg',
                                    default => $size,
                                },
                                match ($color) {
                                    null => 'text-gray-950 dark:text-white',
                                    'gray' => 'text-gray-500 dark:text-gray-400',
                                    default => 'text-custom-600 dark:text-custom-400',
                                },
                                match ($weight) {
                                    FontWeight::Thin, 'thin' => 'font-thin',
                                    FontWeight::ExtraLight, 'extralight' => 'font-extralight',
                                    FontWeight::Light, 'light' => 'font-light',
                                    FontWeight::Medium, 'medium' => 'font-medium',
                                    FontWeight::SemiBold, 'semibold' => 'font-semibold',
                                    FontWeight::Bold, 'bold' => 'font-bold',
                                    FontWeight::ExtraBold, 'extrabold' => 'font-extrabold',
                                    FontWeight::Black, 'black' => 'font-black',
                                    default => $weight,
                                },
                                match ($fontFamily) {
                                    FontFamily::Sans, 'sans' => 'font-sans',
                                    FontFamily::Serif, 'serif' => 'font-serif',
                                    FontFamily::Mono, 'mono' => 'font-mono',
                                    default => $fontFamily,
                                },
                            ]) ?>"
                            style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                                \Filament\Support\get_color_css_variables($color, shades: [400, 600]) => ! in_array($color, [null, 'gray']),
                            ]) ?>"
                        >
                            <?php if($icon && in_array($iconPosition, [IconPosition::Before, 'before'])): ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $icon,'class' => $iconClasses,'style' => $iconStyles]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconClasses),'style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconStyles)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php endif; ?>

                            <div>
                                <?php echo e($formattedState); ?>

                            </div>

                            <?php if($icon && in_array($iconPosition, [IconPosition::After, 'after'])): ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => $icon,'class' => $iconClasses,'style' => $iconStyles]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconClasses),'style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconStyles)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </<?php echo e($isListWithLineBreaks ? 'li' : 'div'); ?>>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($limitedArrayStateCount = count($limitedArrayState ?? [])): ?>
            <<?php echo e($isListWithLineBreaks ? 'li' : 'div'); ?>

                class="text-sm text-gray-500 dark:text-gray-400"
            >
                <?php echo e(trans_choice('filament-tables::table.columns.text.more_list_items', $limitedArrayStateCount)); ?>

            </<?php echo e($isListWithLineBreaks ? 'li' : 'div'); ?>>
        <?php endif; ?>
    </<?php echo e($isListWithLineBreaks ? 'ul' : 'div'); ?>>

    <?php if(filled($descriptionBelow)): ?>
        <p class="text-sm text-gray-500 dark:text-gray-400">
            <?php echo e($descriptionBelow); ?>

        </p>
    <?php endif; ?>
</div>
<?php /**PATH /Users/ryanhayden/Herd/examplesite/vendor/filament/tables/src/../resources/views/columns/text-column.blade.php ENDPATH**/ ?>