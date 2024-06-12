<div>
   <div class="bg-gray-900 px-6 py-12 sm:py-12 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">Sermon Speakers</h2>
      </div>
    </div>
    <div>
        <?php if (isset($component)) { $__componentOriginal42687394209a6157c6bd072eaf19d515aa4e1649 = $component; } ?>
<?php $component = App\View\Components\Sermontabs::resolve(['selected' => 'Speakers'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sermontabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sermontabs::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42687394209a6157c6bd072eaf19d515aa4e1649)): ?>
<?php $component = $__componentOriginal42687394209a6157c6bd072eaf19d515aa4e1649; ?>
<?php unset($__componentOriginal42687394209a6157c6bd072eaf19d515aa4e1649); ?>
<?php endif; ?>
    </div>
    <div class="max-w-5xl mx-auto py-24">
    <?php echo e($this->table); ?>

    </div>
</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/livewire/sermons/speaker/index.blade.php ENDPATH**/ ?>