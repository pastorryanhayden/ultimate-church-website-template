<div>
<?php if($series->count() > 0): ?>
<div class="bg-gray-200">
  <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
    <div class="sm:flex sm:items-baseline sm:justify-between">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Featured Series</h2>
      <a href="/series" class="hidden text-sm font-semibold text-gray-600 hover:text-indigo-500 sm:block">
        View All Series
        <span aria-hidden="true"> &rarr;</span>
      </a>
  </div>
   
    <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
       <?php $__currentLoopData = $series; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($loop->count == 1 && $loop->first): ?>
       <div class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-2 sm:row-span-2 sm:col-span-2">
        <img src="<?php echo e($single->photo ? Storage::disk('vultr')->url($single->photo)  : '/images/devotional-placeholder.jpg'); ?>" alt="<?php echo e($single->desciption); ?>" class="object-cover object-center group-hover:opacity-75">
        <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50"></div>
        <div class="flex items-end p-6">
          <div>
            <h3 class="font-semibold text-white">
              <a href="/series/<?php echo e($single->slug); ?>">
                <span class="absolute inset-0"></span>
                <?php echo e($single->title); ?>

              </a>
            </h3>
            <p aria-hidden="true" class="mt-1 text-sm text-white"><?php echo e($single->description); ?></p>
          </div>
        </div>
      </div>
       <?php elseif($loop->first): ?>
      <div class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-1 sm:row-span-2">
        <img src="<?php echo e($single->photo ? Storage::disk('vultr')->url($single->photo)  : '/images/devotional-placeholder.jpg'); ?>" alt="<?php echo e($single->desciption); ?>" class="object-cover object-center group-hover:opacity-75">
        <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50"></div>
        <div class="flex items-end p-6">
          <div>
            <h3 class="font-semibold text-white">
              <a href="/series/<?php echo e($single->slug); ?>">
                <span class="absolute inset-0"></span>
                <?php echo e($single->title); ?>

              </a>
            </h3>
            <p aria-hidden="true" class="mt-1 text-sm text-white"><?php echo e($single->description); ?></p>
          </div>
        </div>
      </div>
      <?php elseif($loop->count == 2): ?>
      <div class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-1 sm:row-span-2">
        <img src="<?php echo e($single->photo ? Storage::disk('vultr')->url($single->photo)  : '/images/devotional-placeholder.jpg'); ?>" alt="<?php echo e($single->desciption); ?>" class="object-cover object-center group-hover:opacity-75">
        <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50"></div>
        <div class="flex items-end p-6">
          <div>
            <h3 class="font-semibold text-white">
              <a href="/series/<?php echo e($single->slug); ?>">
                <span class="absolute inset-0"></span>
                <?php echo e($single->title); ?>

              </a>
            </h3>
            <p aria-hidden="true" class="mt-1 text-sm text-white"><?php echo e($single->description); ?></p>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
        <img src="<?php echo e($single->photo ? Storage::disk('vultr')->url($single->photo)  : '/images/devotional-placeholder.jpg'); ?>" class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
        <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>
        <div class="flex items-end p-6 sm:absolute sm:inset-0">
          <div>
            <h3 class="font-semibold text-white">
              <a href="/series/<?php echo e($single->slug); ?>">
                <span class="absolute inset-0"></span>
                <?php echo e($single->title); ?>

              </a>
            </h3>
            <p aria-hidden="true" class="mt-1 text-sm text-white"><?php echo e($single->description); ?></p>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    <div class="mt-6 sm:hidden">
      <a href="/series" class="block text-sm font-semibold text-gray-600 hover:text-gray-500">
        Browse all sermon series
        <span aria-hidden="true"> &rarr;</span>
      </a>
    </div>
  </div>
</div>
<?php endif; ?>
</div><?php /**PATH /Users/ryanhayden/Herd/examplesite/resources/views/livewire/home/featured-series.blade.php ENDPATH**/ ?>