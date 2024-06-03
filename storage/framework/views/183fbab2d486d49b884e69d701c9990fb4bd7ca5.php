<div>
    <div class="bg-gray-800 px-6 py-12 sm:py-12 lg:px-8">
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">Upcoming Events</h2>
    
  </div>
</div>
    <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-4xl">
      <div class="space-y-20">
        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="relative isolate flex flex-col gap-8 lg:flex-row">
          <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
            <img src="<?php echo e(asset('storage/' . $event->photo )); ?>" alt="" class="absolute inset-0 h-full w-full  bg-gray-50 object-cover">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
          </div>
          <div>
            <div class="flex items-center gap-x-4 text-xs">
              <a href="/events/<?php echo e($event->slug); ?>" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">For <?php echo e(Illuminate\Support\Str::title($event->for)); ?></a>
              <span><?php echo e(date_format($event->start_date, 'F j')); ?><?php if($event->end_date): ?>- <?php echo e(date_format($event->end_date, 'F j')); ?><?php endif; ?></span>
            </div>
            <div class="group relative max-w-xl">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="/events/<?php echo e($event->slug); ?>">
                  <span class="absolute inset-0"></span>
                  <?php echo e($event->title); ?>

                </a>
              </h3>
              <p class="mt-5 text-sm leading-6 text-gray-600"><?php echo e($event->meeting_info); ?></p>
              <a class="mt-2 leading-6 font-bold text-gray-800 underline" href="/event/<?php echo e($event->slug); ?>">Learn More</a>
            </div>

          </div>
        </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- More posts... -->
      </div>
    </div>
  </div>
</div>

</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/livewire/events/index.blade.php ENDPATH**/ ?>