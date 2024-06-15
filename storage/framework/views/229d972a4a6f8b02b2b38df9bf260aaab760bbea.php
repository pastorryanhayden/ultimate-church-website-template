<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'paginator',
    'pageOptions' => [],
    'currentPageOptionProperty' => 'tableRecordsPerPage',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'paginator',
    'pageOptions' => [],
    'currentPageOptionProperty' => 'tableRecordsPerPage',
]); ?>
<?php foreach (array_filter(([
    'paginator',
    'pageOptions' => [],
    'currentPageOptionProperty' => 'tableRecordsPerPage',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $isRtl = __('filament-panels::layout.direction') === 'rtl';
    $isSimple = ! $paginator instanceof \Illuminate\Pagination\LengthAwarePaginator;
?>

<nav
    aria-label="<?php echo e(__('filament::components/pagination.label')); ?>"
    role="navigation"
    <?php echo e($attributes->class(['fi-pagination grid grid-cols-3 items-center'])); ?>

>
    <?php if(! $paginator->onFirstPage()): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['color' => 'gray','rel' => 'prev','wire:click' => 'previousPage(\'' . $paginator->getPageName() . '\')','class' => \Illuminate\Support\Arr::toCssClasses([
                'justify-self-start',
                'inline-grid md:hidden' => ! $isSimple,
            ]),'wire:key' => $this->getId() . '.pagination.previous']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'gray','rel' => 'prev','wire:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('previousPage(\'' . $paginator->getPageName() . '\')'),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                'justify-self-start',
                'inline-grid md:hidden' => ! $isSimple,
            ])),'wire:key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getId() . '.pagination.previous')]); ?>
            <?php echo e(__('filament::components/pagination.actions.previous.label')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if(! $isSimple): ?>
        <span
            class="hidden text-sm font-medium text-gray-700 dark:text-gray-200 md:inline"
        >
            <?php echo e(trans_choice(
                    'filament::components/pagination.overview',
                    $paginator->total(),
                    [
                        'first' => \Filament\Support\format_number($paginator->firstItem() ?? 0),
                        'last' => \Filament\Support\format_number($paginator->lastItem() ?? 0),
                        'total' => \Filament\Support\format_number($paginator->total()),
                    ],
                )); ?>

        </span>
    <?php endif; ?>

    <?php if(count($pageOptions) > 1): ?>
        <div class="col-start-2 justify-self-center">
            <label class="sm:hidden">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.wrapper','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::input.wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.select','data' => ['wire:model.live' => $currentPageOptionProperty]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($currentPageOptionProperty)]); ?>
                        <?php $__currentLoopData = $pageOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($option); ?>">
                                <?php echo e($option === 'all' ? __('filament::components/pagination.fields.records_per_page.options.all') : $option); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <span class="sr-only">
                    <?php echo e(__('filament::components/pagination.fields.records_per_page.label')); ?>

                </span>
            </label>

            <label class="hidden sm:inline">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.wrapper','data' => ['prefix' => __('filament::components/pagination.fields.records_per_page.label')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::input.wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['prefix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('filament::components/pagination.fields.records_per_page.label'))]); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.select','data' => ['wire:model.live' => $currentPageOptionProperty]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($currentPageOptionProperty)]); ?>
                        <?php $__currentLoopData = $pageOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($option); ?>">
                                <?php echo e($option === 'all' ? __('filament::components/pagination.fields.records_per_page.options.all') : $option); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </label>
        </div>
    <?php endif; ?>

    <?php if($paginator->hasMorePages()): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['color' => 'gray','rel' => 'next','wire:click' => 'nextPage(\'' . $paginator->getPageName() . '\')','wire:key' => $this->getId() . '.pagination.next','class' => \Illuminate\Support\Arr::toCssClasses([
                'col-start-3 justify-self-end',
                'inline-grid md:hidden' => ! $isSimple,
            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'gray','rel' => 'next','wire:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('nextPage(\'' . $paginator->getPageName() . '\')'),'wire:key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getId() . '.pagination.next'),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                'col-start-3 justify-self-end',
                'inline-grid md:hidden' => ! $isSimple,
            ]))]); ?>
            <?php echo e(__('filament::components/pagination.actions.next.label')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if((! $isSimple) && $paginator->hasPages()): ?>
        <ol
            class="hidden justify-self-end rounded-lg bg-white shadow-sm ring-1 ring-gray-950/10 dark:bg-white/5 dark:ring-white/20 md:flex"
        >
            <?php if(! $paginator->onFirstPage()): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.pagination.item','data' => ['ariaLabel' => __('filament::components/pagination.actions.previous.label'),'icon' => $isRtl ? 'heroicon-m-chevron-right' : 'heroicon-m-chevron-left','iconAlias' => 'pagination.previous-button','rel' => 'prev','wire:click' => 'previousPage(\'' . $paginator->getPageName() . '\')','wire:key' => $this->getId() . '.pagination.previous']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::pagination.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['aria-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('filament::components/pagination.actions.previous.label')),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isRtl ? 'heroicon-m-chevron-right' : 'heroicon-m-chevron-left'),'icon-alias' => 'pagination.previous-button','rel' => 'prev','wire:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('previousPage(\'' . $paginator->getPageName() . '\')'),'wire:key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getId() . '.pagination.previous')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php $__currentLoopData = $paginator->render()->offsetGet('elements'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_string($element)): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.pagination.item','data' => ['disabled' => true,'label' => $element]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::pagination.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['disabled' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.pagination.item','data' => ['active' => $page === $paginator->currentPage(),'ariaLabel' => trans_choice('filament::components.pagination.actions.go_to_page.label', $page, ['page' => $page]),'label' => $page,'wire:click' => 'gotoPage(' . $page . ', \'' . $paginator->getPageName() . '\')','wire:key' => $this->getId() . '.pagination.' . $paginator->getPageName() . '.' . $page]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::pagination.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($page === $paginator->currentPage()),'aria-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans_choice('filament::components.pagination.actions.go_to_page.label', $page, ['page' => $page])),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($page),'wire:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('gotoPage(' . $page . ', \'' . $paginator->getPageName() . '\')'),'wire:key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getId() . '.pagination.' . $paginator->getPageName() . '.' . $page)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($paginator->hasMorePages()): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.pagination.item','data' => ['ariaLabel' => __('filament::components/pagination.actions.next.label'),'icon' => $isRtl ? 'heroicon-m-chevron-left' : 'heroicon-m-chevron-right','iconAlias' => 'pagination.next-button','rel' => 'next','wire:click' => 'nextPage(\'' . $paginator->getPageName() . '\')','wire:key' => $this->getId() . '.pagination.next']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::pagination.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['aria-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('filament::components/pagination.actions.next.label')),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isRtl ? 'heroicon-m-chevron-left' : 'heroicon-m-chevron-right'),'icon-alias' => 'pagination.next-button','rel' => 'next','wire:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('nextPage(\'' . $paginator->getPageName() . '\')'),'wire:key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getId() . '.pagination.next')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>
        </ol>
    <?php endif; ?>
</nav>
<?php /**PATH /Users/ryanhayden/Herd/examplesite/vendor/filament/support/src/../resources/views/components/pagination/index.blade.php ENDPATH**/ ?>