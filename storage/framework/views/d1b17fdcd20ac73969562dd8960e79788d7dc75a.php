<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 mb-24">
  <img src="<?php echo e(asset('storage/'. $details->image)); ?>" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
  <div class="hidden sm:absolute sm:inset-0 sm:-z-10 sm:block bg-gray-900 opacity-90">
  </div>
  
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl"><?php echo e($details->heading); ?></h2>
      <p class="mt-6 text-lg leading-8 text-gray-300"><?php echo e($details->subheading); ?></p>
    </div>
    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8 ">
      <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a href="#section<?php echo e($loop->iteration); ?>" class="group flex gap-x-4 rounded-xl bg-white/5 p-6 ring-1 ring-inset ring-white/10 hover:bg-gray-200">
        <?php if (isset($component)) { $__componentOriginal779f02523774900e08811a4bd172ab9aa81abe57 = $component; } ?>
<?php $component = BladeUI\Icons\Components\Icon::resolve(['name' => ''.e($section->icon).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-7 w-5 flex-none text-gray-400 group-hover:text-gray-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal779f02523774900e08811a4bd172ab9aa81abe57)): ?>
<?php $component = $__componentOriginal779f02523774900e08811a4bd172ab9aa81abe57; ?>
<?php unset($__componentOriginal779f02523774900e08811a4bd172ab9aa81abe57); ?>
<?php endif; ?>
        <div class="text-base leading-7">
          <h3 class="font-semibold text-white group-hover:text-gray-800"><?php echo e($section->heading); ?></h3>
          <p class="mt-2 text-gray-300 group-hover:text-gray-800"><?php echo e($section->description); ?></p>
        </div>
      </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>


<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/livewire/about/header.blade.php ENDPATH**/ ?>