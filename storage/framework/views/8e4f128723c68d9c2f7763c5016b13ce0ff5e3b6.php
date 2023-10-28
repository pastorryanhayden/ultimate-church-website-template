<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'navigation',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'navigation',
]); ?>
<?php foreach (array_filter(([
    'navigation',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $openSidebarClasses = 'fi-sidebar-open max-w-none translate-x-0 shadow-xl ring-1 ring-gray-950/5 rtl:-translate-x-0 dark:ring-white/10';
    $isRtl = __('filament-panels::layout.direction') === 'rtl';
?>

<aside
    x-data="{}"
    <?php if(filament()->isSidebarCollapsibleOnDesktop()): ?>
        x-cloak
        x-bind:class="
            $store.sidebar.isOpen
                ? <?php echo \Illuminate\Support\Js::from($openSidebarClasses)->toHtml() ?>
                : 'lg:max-w-[--collapsed-sidebar-width] -translate-x-full rtl:translate-x-full lg:translate-x-0 rtl:lg:-translate-x-0'
        "
    <?php else: ?>
        <?php if(filament()->hasTopNavigation() || filament()->isSidebarFullyCollapsibleOnDesktop()): ?>
            x-cloak
        <?php else: ?>
            x-cloak="-lg"
        <?php endif; ?>
        x-bind:class="$store.sidebar.isOpen ? <?php echo \Illuminate\Support\Js::from($openSidebarClasses)->toHtml() ?> : '-translate-x-full rtl:translate-x-full'"
    <?php endif; ?>
    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'fi-sidebar fixed inset-y-0 start-0 z-30 grid h-screen w-[--sidebar-width] content-start overflow-hidden bg-white transition-all dark:bg-gray-900 lg:z-0 lg:bg-transparent lg:shadow-none lg:ring-0 dark:lg:bg-transparent',
        'lg:translate-x-0 rtl:lg:-translate-x-0' => ! (filament()->isSidebarCollapsibleOnDesktop() || filament()->isSidebarFullyCollapsibleOnDesktop() || filament()->hasTopNavigation()),
        'lg:-translate-x-full rtl:lg:translate-x-full' => filament()->hasTopNavigation(),
    ]) ?>"
>
    <header
        class="fi-sidebar-header flex h-16 items-center bg-white px-6 ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 lg:shadow-sm"
    >
        
        <div
            <?php if(filament()->isSidebarCollapsibleOnDesktop()): ?>
                x-show="$store.sidebar.isOpen"
                x-transition:enter="lg:transition lg:delay-100"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
            <?php endif; ?>
        >
            <?php if($homeUrl = filament()->getHomeUrl()): ?>
                <a href="<?php echo e($homeUrl); ?>">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </a>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
        

        <?php if(filament()->isSidebarCollapsibleOnDesktop()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon-button','data' => ['color' => 'gray','icon' => $isRtl ? 'heroicon-o-chevron-left' : 'heroicon-o-chevron-right','iconAlias' => 'panels::sidebar.expand-button','iconSize' => 'lg','label' => __('filament-panels::layout.actions.sidebar.expand.label'),'xCloak' => true,'xData' => '{}','xOn:click' => '$store.sidebar.open()','xShow' => '! $store.sidebar.isOpen','class' => '-mx-1.5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'gray','icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isRtl ? 'heroicon-o-chevron-left' : 'heroicon-o-chevron-right'),'icon-alias' => 'panels::sidebar.expand-button','icon-size' => 'lg','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('filament-panels::layout.actions.sidebar.expand.label')),'x-cloak' => true,'x-data' => '{}','x-on:click' => '$store.sidebar.open()','x-show' => '! $store.sidebar.isOpen','class' => '-mx-1.5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if(filament()->isSidebarCollapsibleOnDesktop() || filament()->isSidebarFullyCollapsibleOnDesktop()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon-button','data' => ['color' => 'gray','icon' => $isRtl ? 'heroicon-o-chevron-right' : 'heroicon-o-chevron-left','iconAlias' => 'panels::sidebar.collapse-button','iconSize' => 'lg','label' => __('filament-panels::layout.actions.sidebar.collapse.label'),'xCloak' => true,'xData' => '{}','xOn:click' => '$store.sidebar.close()','xShow' => '$store.sidebar.isOpen','class' => '-mx-1.5 ms-auto hidden lg:flex']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'gray','icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isRtl ? 'heroicon-o-chevron-right' : 'heroicon-o-chevron-left'),'icon-alias' => 'panels::sidebar.collapse-button','icon-size' => 'lg','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('filament-panels::layout.actions.sidebar.collapse.label')),'x-cloak' => true,'x-data' => '{}','x-on:click' => '$store.sidebar.close()','x-show' => '$store.sidebar.isOpen','class' => '-mx-1.5 ms-auto hidden lg:flex']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>
    </header>

    <nav
        class="fi-sidebar-nav grid gap-y-7 overflow-y-auto overflow-x-hidden px-6 py-8"
    >
        <?php echo e(\Filament\Support\Facades\FilamentView::renderHook('panels::sidebar.nav.start')); ?>


        <?php if(filament()->hasTenancy()): ?>
            <div
                <?php if(filament()->isSidebarCollapsibleOnDesktop()): ?>
                    x-bind:class="$store.sidebar.isOpen ? '-mx-2' : '-mx-4'"
                <?php endif; ?>
            >
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.tenant-menu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::tenant-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if(filament()->hasNavigation()): ?>
            <ul
                class="-mx-2 grid gap-y-7"
                <?php if(filament()->isSidebarCollapsibleOnDesktop()): ?>
                    x-bind:class="{ 'auto-cols-min': ! $store.sidebar.isOpen }"
                <?php endif; ?>
            >
                <?php $__currentLoopData = $navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.sidebar.group','data' => ['collapsible' => $group->isCollapsible(),'icon' => $group->getIcon(),'items' => $group->getItems(),'label' => $group->getLabel()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::sidebar.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['collapsible' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($group->isCollapsible()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($group->getIcon()),'items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($group->getItems()),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($group->getLabel())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <?php
                $collapsedNavigationGroupLabels = collect($navigation)
                    ->filter(fn (\Filament\Navigation\NavigationGroup $group): bool => $group->isCollapsed())
                    ->map(fn (\Filament\Navigation\NavigationGroup $group): string => $group->getLabel())
                    ->values();
            ?>

            <script>
                let collapsedGroups = JSON.parse(
                    localStorage.getItem('collapsedGroups'),
                )

                if (collapsedGroups === null || collapsedGroups === 'null') {
                    localStorage.setItem(
                        'collapsedGroups',
                        JSON.stringify(<?php echo \Illuminate\Support\Js::from($collapsedNavigationGroupLabels)->toHtml() ?>),
                    )
                }

                collapsedGroups = JSON.parse(
                    localStorage.getItem('collapsedGroups'),
                )

                document
                    .querySelectorAll('.fi-sidebar-group')
                    .forEach((group) => {
                        if (
                            !collapsedGroups.includes(group.dataset.groupLabel)
                        ) {
                            return
                        }

                        // Alpine.js loads too slow, so attempt to hide a
                        // collapsed sidebar group earlier.
                        group.querySelector(
                            '.fi-sidebar-group-items',
                        ).style.display = 'none'
                        group
                            .querySelector('.fi-sidebar-group-collapse-button')
                            .classList.add('rotate-180')
                    })
            </script>
        <?php endif; ?>

        <?php echo e(\Filament\Support\Facades\FilamentView::renderHook('panels::sidebar.nav.end')); ?>

    </nav>

    <?php echo e(\Filament\Support\Facades\FilamentView::renderHook('panels::sidebar.footer')); ?>

</aside>
<?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/vendor/filament/filament/src/../resources/views/components/sidebar/index.blade.php ENDPATH**/ ?>