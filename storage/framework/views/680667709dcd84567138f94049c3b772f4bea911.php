<div>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('ministries.header', []);

$__html = app('livewire')->mount($__name, $__params, 'KHA7dP4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-4xl">
      <div class="space-y-20">
        <?php $__currentLoopData = $ministries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ministry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="relative isolate flex flex-col gap-8 lg:flex-row">
          <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
            <img src="<?php echo e(Storage::disk('vultr')->url($ministry->image)); ?>" alt="" class="absolute inset-0 h-full w-full  bg-gray-50 object-cover">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
          </div>
          <div>
            <div class="flex items-center gap-x-4 text-xs">
              <a href="/ministry/<?php echo e($ministry->slug); ?>" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"><?php echo e(Illuminate\Support\Str::title($ministry->for)); ?></a>
            </div>
            <div class="group relative max-w-xl">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="/ministry/<?php echo e($ministry->slug); ?>">
                  <span class="absolute inset-0"></span>
                  <?php echo e($ministry->name); ?>

                </a>
              </h3>
              <p class="mt-5 text-sm leading-6 text-gray-600"><?php echo e($ministry->meeting_info); ?></p>
              <a class="mt-2 leading-6 font-bold text-gray-800 underline" href="/ministry/<?php echo e($ministry->slug); ?>">Learn More</a>
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
<?php /**PATH /Users/ryanhayden/Herd/examplesite/resources/views/livewire/ministries/index.blade.php ENDPATH**/ ?>