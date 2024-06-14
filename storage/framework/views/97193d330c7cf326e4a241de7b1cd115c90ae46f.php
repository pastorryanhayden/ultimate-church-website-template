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
        $containers = $getChildComponentContainers();

        $addAction = $getAction($getAddActionName());
        $cloneAction = $getAction($getCloneActionName());
        $deleteAction = $getAction($getDeleteActionName());
        $moveDownAction = $getAction($getMoveDownActionName());
        $moveUpAction = $getAction($getMoveUpActionName());
        $reorderAction = $getAction($getReorderActionName());

        $isAddable = $isAddable();
        $isCloneable = $isCloneable();
        $isCollapsible = $isCollapsible();
        $isDeletable = $isDeletable();
        $isReorderableWithButtons = $isReorderableWithButtons();
        $isReorderableWithDragAndDrop = $isReorderableWithDragAndDrop();

        $statePath = $getStatePath();
    ?>

    <div
        x-data="{}"
        <?php echo e($attributes
                ->merge($getExtraAttributes(), escape: false)
                ->class(['fi-fo-repeater grid gap-y-4'])); ?>

    >
        <?php if((count($containers) > 1) && $isCollapsible): ?>
            <div class="flex gap-x-3">
                <span
                    x-on:click="$dispatch('repeater-collapse', '<?php echo e($statePath); ?>')"
                >
                    <?php echo e($getAction('collapseAll')); ?>

                </span>

                <span
                    x-on:click="$dispatch('repeater-expand', '<?php echo e($statePath); ?>')"
                >
                    <?php echo e($getAction('expandAll')); ?>

                </span>
            </div>
        <?php endif; ?>

        <?php if(count($containers)): ?>
            <ul>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.grid.index','data' => ['default' => $getGridColumns('default'),'sm' => $getGridColumns('sm'),'md' => $getGridColumns('md'),'lg' => $getGridColumns('lg'),'xl' => $getGridColumns('xl'),'twoXl' => $getGridColumns('2xl'),'wire:end.stop' => 'mountFormComponentAction(\'' . $statePath . '\', \'reorder\', { items: $event.target.sortable.toArray() })','xSortable' => true,'class' => 'gap-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['default' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getGridColumns('default')),'sm' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getGridColumns('sm')),'md' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getGridColumns('md')),'lg' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getGridColumns('lg')),'xl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getGridColumns('xl')),'two-xl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getGridColumns('2xl')),'wire:end.stop' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('mountFormComponentAction(\'' . $statePath . '\', \'reorder\', { items: $event.target.sortable.toArray() })'),'x-sortable' => true,'class' => 'gap-4']); ?>
                    <?php $__currentLoopData = $containers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uuid => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $itemLabel = $getItemLabel($uuid);
                        ?>

                        <li
                            wire:key="<?php echo e($this->getId()); ?>.<?php echo e($item->getStatePath()); ?>.<?php echo e($field::class); ?>.item"
                            x-data="{
                                isCollapsed: <?php echo \Illuminate\Support\Js::from($isCollapsed($item))->toHtml() ?>,
                            }"
                            x-on:expand-concealing-component.window="
                                error = $el.querySelector('[data-validation-error]')

                                if (! error) {
                                    return
                                }

                                isCollapsed = false

                                if (document.body.querySelector('[data-validation-error]') !== error) {
                                    return
                                }

                                setTimeout(
                                    () =>
                                        $el.scrollIntoView({
                                            behavior: 'smooth',
                                            block: 'start',
                                            inline: 'start',
                                        }),
                                    200,
                                )
                            "
                            x-on:repeater-expand.window="$event.detail === '<?php echo e($statePath); ?>' && (isCollapsed = false)"
                            x-on:repeater-collapse.window="$event.detail === '<?php echo e($statePath); ?>' && (isCollapsed = true)"
                            x-sortable-item="<?php echo e($uuid); ?>"
                            class="fi-fo-repeater-item rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:bg-white/5 dark:ring-white/10"
                        >
                            <?php if($isReorderableWithDragAndDrop || $isReorderableWithButtons || filled($itemLabel) || $isCloneable || $isDeletable || $isCollapsible): ?>
                                <div
                                    class="flex items-center gap-x-3 px-4 py-2"
                                >
                                    <?php if($isReorderableWithDragAndDrop || $isReorderableWithButtons): ?>
                                        <ul class="-ms-1.5 flex">
                                            <?php if($isReorderableWithDragAndDrop): ?>
                                                <li x-sortable-handle>
                                                    <?php echo e($reorderAction); ?>

                                                </li>
                                            <?php endif; ?>

                                            <?php if($isReorderableWithButtons): ?>
                                                <li
                                                    class="flex items-center justify-center"
                                                >
                                                    <?php echo e($moveUpAction(['item' => $uuid])->disabled($loop->first)); ?>

                                                </li>

                                                <li
                                                    class="flex items-center justify-center"
                                                >
                                                    <?php echo e($moveDownAction(['item' => $uuid])->disabled($loop->last)); ?>

                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <?php if(filled($itemLabel)): ?>
                                        <h4
                                            class="truncate text-sm font-medium text-gray-950 dark:text-white"
                                        >
                                            <?php echo e($itemLabel); ?>

                                        </h4>
                                    <?php endif; ?>

                                    <?php if($isCloneable || $isDeletable || $isCollapsible): ?>
                                        <ul class="-me-1.5 ms-auto flex">
                                            <?php if($cloneAction->isVisible()): ?>
                                                <li>
                                                    <?php echo e($cloneAction(['item' => $uuid])); ?>

                                                </li>
                                            <?php endif; ?>

                                            <?php if($isDeletable): ?>
                                                <li>
                                                    <?php echo e($deleteAction(['item' => $uuid])); ?>

                                                </li>
                                            <?php endif; ?>

                                            <?php if($isCollapsible): ?>
                                                <li
                                                    class="relative transition"
                                                    x-on:click.stop="isCollapsed = !isCollapsed"
                                                    x-bind:class="{ '-rotate-180': isCollapsed }"
                                                >
                                                    <div
                                                        class="transition"
                                                        x-bind:class="{ 'opacity-0 pointer-events-none': isCollapsed }"
                                                    >
                                                        <?php echo e($getAction('collapse')); ?>

                                                    </div>

                                                    <div
                                                        class="absolute inset-0 rotate-180 transition"
                                                        x-bind:class="{ 'opacity-0 pointer-events-none': ! isCollapsed }"
                                                    >
                                                        <?php echo e($getAction('expand')); ?>

                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <div
                                class="border-t border-gray-100 p-4 dark:border-white/10"
                                x-show="! isCollapsed"
                            >
                                <?php echo e($item); ?>

                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </ul>
        <?php endif; ?>

        <?php if($isAddable): ?>
            <div class="flex justify-center">
                <?php echo e($addAction); ?>

            </div>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/vendor/filament/forms/src/../resources/views/components/repeater.blade.php ENDPATH**/ ?>