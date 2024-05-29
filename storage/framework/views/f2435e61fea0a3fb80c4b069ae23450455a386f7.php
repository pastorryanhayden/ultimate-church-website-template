<div class="flex flex-col items-center justify-center">
	<div class="relative w-full !h-16 flex flex-col items-center justify-center py-2">
		<div class="relative w-12 h-12 grow-1 shrink-0 gap-1">
			<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.icon','data' => ['icon' => ''.e($icon).'','class' => 'w-full h-full absolute']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => ''.e($icon).'','class' => 'w-full h-full absolute']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
			
			<div class="w-full h-full absolute z-10"></div>
		</div>
		<small class="w-full text-center grow-0 shrink-0 h-4 truncate"><?php echo e($icon); ?></small>
	</div>
</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/vendor/guava/filament-icon-picker/src/../resources/views/item.blade.php ENDPATH**/ ?>