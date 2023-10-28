<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'active' => false,
    'activeIcon' => null,
    'badge' => null,
    'badgeColor' => null,
    'grouped' => false,
    'last' => false,
    'first' => false,
    'icon' => null,
    'shouldOpenUrlInNewTab' => false,
    'url',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'active' => false,
    'activeIcon' => null,
    'badge' => null,
    'badgeColor' => null,
    'grouped' => false,
    'last' => false,
    'first' => false,
    'icon' => null,
    'shouldOpenUrlInNewTab' => false,
    'url',
]); ?>
<?php foreach (array_filter(([
    'active' => false,
    'activeIcon' => null,
    'badge' => null,
    'badgeColor' => null,
    'grouped' => false,
    'last' => false,
    'first' => false,
    'icon' => null,
    'shouldOpenUrlInNewTab' => false,
    'url',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li
    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'fi-sidebar-item',
        'fi-sidebar-item-active' => $active,
    ]) ?>"
>
    <a
        href="<?php echo e($url); ?>"
        <?php if($shouldOpenUrlInNewTab): ?>
            target="_blank"
        <?php else: ?>
            
        <?php endif; ?>
        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches && $store.sidebar.close()"
        <?php if(filament()->isSidebarCollapsibleOnDesktop()): ?>
            x-data="{ tooltip: false }"
            x-effect="
                tooltip = $store.sidebar.isOpen
                    ? false
                    : {
                          content: <?php echo \Illuminate\Support\Js::from($slot->toHtml())->toHtml() ?>,
                          placement: document.dir === 'rtl' ? 'left' : 'right',
                          theme: $store.theme,
                      }
            "
            x-tooltip.html="tooltip"
        <?php endif; ?>
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm text-gray-700 outline-none transition duration-75 hover:bg-gray-100 focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/5',
            'font-semibold' => ! $grouped,
            'font-medium' => $grouped,
            'bg-gray-100 text-primary-600 dark:bg-white/5 dark:text-primary-400' => $active,
        ]) ?>"
    >
        <?php if(filled($icon)): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => ($active && $activeIcon) ? $activeIcon : $icon,'class' => \Illuminate\Support\Arr::toCssClasses([
                    'fi-sidebar-item-icon h-6 w-6',
                    'text-gray-400 dark:text-gray-500' => ! $active,
                    'text-primary-600 dark:text-primary-400' => $active,
                ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(($active && $activeIcon) ? $activeIcon : $icon),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
                    'fi-sidebar-item-icon h-6 w-6',
                    'text-gray-400 dark:text-gray-500' => ! $active,
                    'text-primary-600 dark:text-primary-400' => $active,
                ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php elseif($grouped): ?>
            <div
                class="fi-sidebar-item-grouped-border relative flex h-6 w-6 items-center justify-center"
            >
                <?php if(! $first): ?>
                    <div
                        class="absolute -top-1/2 bottom-1/2 w-px bg-gray-300 dark:bg-gray-600"
                    ></div>
                <?php endif; ?>

                <?php if(! $last): ?>
                    <div
                        class="absolute -bottom-1/2 top-1/2 w-px bg-gray-300 dark:bg-gray-600"
                    ></div>
                <?php endif; ?>

                <div
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'relative h-1.5 w-1.5 rounded-full',
                        'bg-gray-400 dark:bg-gray-500' => ! $active,
                        'bg-primary-600 dark:bg-primary-400' => $active,
                    ]) ?>"
                ></div>
            </div>
        <?php endif; ?>

        <span
            <?php if(filament()->isSidebarCollapsibleOnDesktop()): ?>
                x-show="$store.sidebar.isOpen"
                x-transition:enter="lg:transition lg:delay-100"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
            <?php endif; ?>
            class="flex-1 truncate"
        >
            <?php echo e($slot); ?>

        </span>

        <?php if(filled($badge)): ?>
            <span
                <?php if(filament()->isSidebarCollapsibleOnDesktop()): ?>
                    x-show="$store.sidebar.isOpen"
                    x-transition:enter="lg:transition lg:delay-100"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                <?php endif; ?>
            >
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.badge','data' => ['color' => $badgeColor]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badgeColor)]); ?>
                    <?php echo e($badge); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </span>
        <?php endif; ?>
    </a>
</li>
<?php /**PATH /Users/ryanhayden/code/church-web/biblebaptistmattoon/vendor/filament/filament/src/../resources/views/components/sidebar/item.blade.php ENDPATH**/ ?>