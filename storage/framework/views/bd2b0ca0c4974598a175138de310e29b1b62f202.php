<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'actions',
    'alignment' => null,
    'fullWidth' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'actions',
    'alignment' => null,
    'fullWidth' => false,
]); ?>
<?php foreach (array_filter(([
    'actions',
    'alignment' => null,
    'fullWidth' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(count($actions)): ?>
    <div
        <?php if($this->areFormActionsSticky()): ?>
            x-data="{
                isSticky: false,

                evaluatePageScrollPosition: function () {
                    this.isSticky =
                        window.scrollY + window.innerHeight * 2 <=
                        document.body.scrollHeight
                },
            }"
            x-init="evaluatePageScrollPosition"
            x-on:scroll.window="evaluatePageScrollPosition"
            x-bind:class="{
                'fi-form-actions-sticky-panel sticky bottom-0 -mx-4 transform bg-white p-4 shadow-lg ring-1 ring-gray-950/5 transition dark:bg-gray-900 dark:ring-white/10 md:bottom-4 md:rounded-xl':
                    isSticky,
            }"
        <?php endif; ?>
    >
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-actions::components.actions','data' => ['actions' => $actions,'alignment' => $alignment ?? $this->getFormActionsAlignment(),'fullWidth' => $fullWidth,'class' => 'fi-form-actions']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-actions::actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($actions),'alignment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($alignment ?? $this->getFormActionsAlignment()),'full-width' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fullWidth),'class' => 'fi-form-actions']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/vendor/filament/filament/src/../resources/views/components/form/actions.blade.php ENDPATH**/ ?>