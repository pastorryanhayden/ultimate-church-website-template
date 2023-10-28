<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'icon',
    'theme',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'icon',
    'theme',
]); ?>
<?php foreach (array_filter(([
    'icon',
    'theme',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $label = __("filament-panels::layout.actions.theme_switcher.{$theme}.label");
?>

<button
    aria-label="<?php echo e($label); ?>"
    type="button"
    x-bind:class="
        theme === <?php echo \Illuminate\Support\Js::from($theme)->toHtml() ?>
            ? 'bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400'
            : 'text-gray-400 hover:text-gray-500 focus:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus:text-gray-400'
    "
    x-on:click="(theme = <?php echo \Illuminate\Support\Js::from($theme)->toHtml() ?>) && close()"
    x-tooltip="{
        content: <?php echo \Illuminate\Support\Js::from($label)->toHtml() ?>,
        theme: $store.theme,
    }"
    class="flex justify-center rounded-lg p-2 outline-none transition duration-75 hover:bg-gray-50 focus:bg-gray-50 dark:hover:bg-white/5 dark:focus:bg-white/5"
>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['alias' => 'panels::theme-switcher.' . $theme . '-button','icon' => $icon,'class' => 'h-5 w-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['alias' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('panels::theme-switcher.' . $theme . '-button'),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'class' => 'h-5 w-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</button>
<?php /**PATH /Users/ryanhayden/code/church/biblebaptistmattoon.org/vendor/filament/filament/src/../resources/views/components/theme-switcher/button.blade.php ENDPATH**/ ?>