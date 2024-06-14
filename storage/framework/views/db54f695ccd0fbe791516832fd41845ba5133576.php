<div class="filament-icon-picker-icon-column px-4 py-3">
	<?php if($icon = $getState()): ?>
		<?php if (isset($component)) { $__componentOriginal779f02523774900e08811a4bd172ab9aa81abe57 = $component; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => ''.e($icon).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal779f02523774900e08811a4bd172ab9aa81abe57)): ?>
<?php $component = $__componentOriginal779f02523774900e08811a4bd172ab9aa81abe57; ?>
<?php unset($__componentOriginal779f02523774900e08811a4bd172ab9aa81abe57); ?>
<?php endif; ?>
	<?php endif; ?>
</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/vendor/guava/filament-icon-picker/src/../resources/views/tables/icon-column.blade.php ENDPATH**/ ?>