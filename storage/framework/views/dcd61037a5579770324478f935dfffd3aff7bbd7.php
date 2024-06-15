<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['badge','badgeColor','form','tag','xOn:click','wire:click','wire:target','href','target','type','color','keyBindings','tooltip','disabled','icon','iconSize','size','labelSrOnly','class','iconPosition','iconSize','iconPosition']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['badge','badgeColor','form','tag','xOn:click','wire:click','wire:target','href','target','type','color','keyBindings','tooltip','disabled','icon','iconSize','size','labelSrOnly','class','iconPosition','iconSize','iconPosition']); ?>
<?php foreach (array_filter((['badge','badgeColor','form','tag','xOn:click','wire:click','wire:target','href','target','type','color','keyBindings','tooltip','disabled','icon','iconSize','size','labelSrOnly','class','iconPosition','iconSize','iconPosition']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.link','data' => ['badge' => $badge,'badgeColor' => $badgeColor,'form' => $form,'tag' => $tag,'xOn:click' => $xOnClick,'wire:click' => $wireClick,'wire:target' => $wireTarget,'href' => $href,'target' => $target,'type' => $type,'color' => $color,'keyBindings' => $keyBindings,'tooltip' => $tooltip,'disabled' => $disabled,'icon' => $icon,'iconSize' => $iconSize,'size' => $size,'labelSrOnly' => $labelSrOnly,'class' => $class,'iconPosition' => $iconPosition]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['badge' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badge),'badge-color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badgeColor),'form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form),'tag' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tag),'x-on:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($xOnClick),'wire:click' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($wireClick),'wire:target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($wireTarget),'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($href),'target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($target),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type),'color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($color),'key-bindings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($keyBindings),'tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tooltip),'disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disabled),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($icon),'icon-size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconSize),'size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($size),'label-sr-only' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($labelSrOnly),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class),'iconPosition' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconPosition),'iconSize' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconSize),'icon-position' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($iconPosition)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /Users/ryanhayden/Herd/examplesite/storage/framework/views/f274cb72649c5b8deac7c16cdd49a4d8555b8bff.blade.php ENDPATH**/ ?>