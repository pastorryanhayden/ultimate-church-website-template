<?php
    $canSelectPlaceholder = $canSelectPlaceholder();
    $isDisabled = $isDisabled();
    $isPrefixInline = $isPrefixInline();
    $isSuffixInline = $isSuffixInline();
    $prefixActions = $getPrefixActions();
    $prefixIcon = $getPrefixIcon();
    $prefixLabel = $getPrefixLabel();
    $suffixActions = $getSuffixActions();
    $suffixIcon = $getSuffixIcon();
    $suffixLabel = $getSuffixLabel();
    $statePath = $getStatePath();
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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.wrapper','data' => ['disabled' => $isDisabled,'inlinePrefix' => $isPrefixInline,'inlineSuffix' => $isSuffixInline,'prefix' => $prefixLabel,'prefixActions' => $prefixActions,'prefixIcon' => $prefixIcon,'suffix' => $suffixLabel,'suffixActions' => $suffixActions,'suffixIcon' => $suffixIcon,'valid' => ! $errors->has($statePath),'class' => 'fi-fo-select','attributes' => \Filament\Support\prepare_inherited_attributes($getExtraAttributeBag())]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::input.wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isDisabled),'inline-prefix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isPrefixInline),'inline-suffix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isSuffixInline),'prefix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($prefixLabel),'prefix-actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($prefixActions),'prefix-icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($prefixIcon),'suffix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($suffixLabel),'suffix-actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($suffixActions),'suffix-icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($suffixIcon),'valid' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(! $errors->has($statePath)),'class' => 'fi-fo-select','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Filament\Support\prepare_inherited_attributes($getExtraAttributeBag()))]); ?>
        <?php if((! ($isSearchable() || $isMultiple()) && $isNative())): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.select','data' => ['autofocus' => $isAutofocused(),'disabled' => $isDisabled,'id' => $getId(),'inlinePrefix' => $isPrefixInline && (count($prefixActions) || $prefixIcon || filled($prefixLabel)),'inlineSuffix' => $isSuffixInline && (count($suffixActions) || $suffixIcon || filled($suffixLabel)),'required' => $isRequired() && ((bool) $isConcealed()),'attributes' => 
                    $getExtraInputAttributeBag()
                        ->merge([
                            $applyStateBindingModifiers('wire:model') => $statePath,
                        ], escape: false)
                ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['autofocus' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAutofocused()),'disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isDisabled),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getId()),'inline-prefix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isPrefixInline && (count($prefixActions) || $prefixIcon || filled($prefixLabel))),'inline-suffix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isSuffixInline && (count($suffixActions) || $suffixIcon || filled($suffixLabel))),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isRequired() && ((bool) $isConcealed())),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(
                    $getExtraInputAttributeBag()
                        ->merge([
                            $applyStateBindingModifiers('wire:model') => $statePath,
                        ], escape: false)
                )]); ?>
                <?php
                    $isHtmlAllowed = $isHtmlAllowed();
                ?>

                <?php if($canSelectPlaceholder): ?>
                    <option value="">
                        <?php if(! $isDisabled): ?>
                            <?php echo e($getPlaceholder()); ?>

                        <?php endif; ?>
                    </option>
                <?php endif; ?>

                <?php $__currentLoopData = $getOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(is_array($label)): ?>
                        <optgroup label="<?php echo e($value); ?>">
                            <?php $__currentLoopData = $label; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupedValue => $groupedLabel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    <?php if($isOptionDisabled($groupedValue, $groupedLabel)): echo 'disabled'; endif; ?>
                                    value="<?php echo e($groupedValue); ?>"
                                >
                                    <?php if($isHtmlAllowed): ?>
                                        <?php echo $groupedLabel; ?>

                                    <?php else: ?>
                                        <?php echo e($groupedLabel); ?>

                                    <?php endif; ?>
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </optgroup>
                    <?php else: ?>
                        <option
                            <?php if($isOptionDisabled($value, $label)): echo 'disabled'; endif; ?>
                            value="<?php echo e($value); ?>"
                        >
                            <?php if($isHtmlAllowed): ?>
                                <?php echo $label; ?>

                            <?php else: ?>
                                <?php echo e($label); ?>

                            <?php endif; ?>
                        </option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php else: ?>
            <div
                x-ignore
                ax-load
                ax-load-src="<?php echo e(\Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('select', 'filament/forms')); ?>"
                x-data="selectFormComponent({
                            canSelectPlaceholder: <?php echo \Illuminate\Support\Js::from($canSelectPlaceholder)->toHtml() ?>,
                            isHtmlAllowed: <?php echo \Illuminate\Support\Js::from($isHtmlAllowed())->toHtml() ?>,
                            getOptionLabelUsing: async () => {
                                return await $wire.getFormSelectOptionLabel(<?php echo \Illuminate\Support\Js::from($statePath)->toHtml() ?>)
                            },
                            getOptionLabelsUsing: async () => {
                                return await $wire.getFormSelectOptionLabels(<?php echo \Illuminate\Support\Js::from($statePath)->toHtml() ?>)
                            },
                            getOptionsUsing: async () => {
                                return await $wire.getFormSelectOptions(<?php echo \Illuminate\Support\Js::from($statePath)->toHtml() ?>)
                            },
                            getSearchResultsUsing: async (search) => {
                                return await $wire.getFormSelectSearchResults(<?php echo \Illuminate\Support\Js::from($statePath)->toHtml() ?>, search)
                            },
                            isAutofocused: <?php echo \Illuminate\Support\Js::from($isAutofocused())->toHtml() ?>,
                            isMultiple: <?php echo \Illuminate\Support\Js::from($isMultiple())->toHtml() ?>,
                            isSearchable: <?php echo \Illuminate\Support\Js::from($isSearchable())->toHtml() ?>,
                            livewireId: <?php echo \Illuminate\Support\Js::from($this->getId())->toHtml() ?>,
                            hasDynamicOptions: <?php echo \Illuminate\Support\Js::from($hasDynamicOptions())->toHtml() ?>,
                            hasDynamicSearchResults: <?php echo \Illuminate\Support\Js::from($hasDynamicSearchResults())->toHtml() ?>,
                            loadingMessage: <?php echo \Illuminate\Support\Js::from($getLoadingMessage())->toHtml() ?>,
                            maxItems: <?php echo \Illuminate\Support\Js::from($getMaxItems())->toHtml() ?>,
                            maxItemsMessage: <?php echo \Illuminate\Support\Js::from($getMaxItemsMessage())->toHtml() ?>,
                            noSearchResultsMessage: <?php echo \Illuminate\Support\Js::from($getNoSearchResultsMessage())->toHtml() ?>,
                            options: <?php echo \Illuminate\Support\Js::from($getOptionsForJs())->toHtml() ?>,
                            optionsLimit: <?php echo \Illuminate\Support\Js::from($getOptionsLimit())->toHtml() ?>,
                            placeholder: <?php echo \Illuminate\Support\Js::from($getPlaceholder())->toHtml() ?>,
                            position: <?php echo \Illuminate\Support\Js::from($getPosition())->toHtml() ?>,
                            searchDebounce: <?php echo \Illuminate\Support\Js::from($getSearchDebounce())->toHtml() ?>,
                            searchingMessage: <?php echo \Illuminate\Support\Js::from($getSearchingMessage())->toHtml() ?>,
                            searchPrompt: <?php echo \Illuminate\Support\Js::from($getSearchPrompt())->toHtml() ?>,
                            searchableOptionFields: <?php echo \Illuminate\Support\Js::from($getSearchableOptionFields())->toHtml() ?>,
                            state: $wire.<?php echo e($applyStateBindingModifiers("entangle('{$statePath}')")); ?>,
                            statePath: <?php echo \Illuminate\Support\Js::from($statePath)->toHtml() ?>,
                        })"
                wire:ignore
                x-on:keydown.esc="select.dropdown.isActive && $event.stopPropagation()"
                <?php echo e($attributes
                        ->merge($getExtraAttributes(), escape: false)
                        ->merge($getExtraAlpineAttributes(), escape: false)); ?>

            >
                <select
                    x-ref="input"
                    <?php echo e($getExtraInputAttributeBag()
                            ->merge([
                                'disabled' => $isDisabled,
                                'id' => $getId(),
                                'multiple' => $isMultiple(),
                            ], escape: false)); ?>

                ></select>
            </div>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/Herd/examplesite/vendor/filament/forms/src/../resources/views/components/select.blade.php ENDPATH**/ ?>