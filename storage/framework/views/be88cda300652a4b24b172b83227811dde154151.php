<div>
    <?php
        use Illuminate\Support\Str;
    ?>
    <?php if($show): ?>
        <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Recent Devotions</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600"><a href="/devotion" class="underline">View All</a></p>
    </div>
    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-16 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <?php $__currentLoopData = $devotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $devotion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <article class="flex flex-col items-start justify-between">
        <div class="relative w-full">
          <?php if($devotion->image): ?>
          <img src="<?php echo e(asset('storage/'. $devotion->image)); ?>" alt="" class="aspect-[16/9] w-full bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
          <?php else: ?> 
          <img src="/images/bible.jpg" alt="" class="aspect-[16/9] w-full bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
          <?php endif; ?> 
          <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        </div>
        <div class="max-w-xl">
          <div class="mt-8 flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16 <?php echo e(date_format($devotion->published_at, 'o-m-d')); ?>" class="text-gray-500"><?php echo e(date_format($devotion->published_at, 'M j, o')); ?></time>
            <a href="/devotion/<?php echo e($devotion->id); ?>" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"><?php echo e($devotion->text); ?></a>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="/devotion/<?php echo e($devotion->id); ?>">
                <span class="absolute inset-0"></span>
                <?php echo e($devotion->title); ?>

              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                <?php echo app(App\Services\MarkdownService::class)->toHtml($devotion->excerpt); ?>
            </p>
            <a href="/devotion/<?php echo e($devotion->id); ?>" class="mt-4 text-gray-400">Learn More</a>
          </div>
          
        </div>
      </article>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <!-- More posts... -->
    </div>
  </div>
</div>

    <?php endif; ?>
</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/livewire/home/devotions.blade.php ENDPATH**/ ?>