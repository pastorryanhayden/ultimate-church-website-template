<div>
   <div class="bg-gray-900 px-6 py-12 sm:py-12 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl"><?php echo e(env('CHURCH_NAME')); ?> Articles</h2>
      </div>
    </div>
      <nav class="flex max-w-4xl mx-auto py-6 w-full justify-center" aria-label="Breadcrumb">
          <ol role="list" class="flex items-center space-x-4">
            <li>
              <div>
                <a href="/" class="text-gray-400 hover:text-gray-500">
                  <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Home</span>
                </a>
              </div>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Articles</a>
              </div>
            </li>
          </ol>
        </nav>

<div class="bg-white pb-24 sm:pb-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-4xl">
      <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="relative isolate flex flex-col gap-8 lg:flex-row">
          <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
            <img src="<?php echo e($post->image ? Storage::disk('vultr')->url($post->image) : env('APP_URL') .'/images/devotional-placeholder.jpg'); ?>" alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
          </div>
          <div>
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="<?php echo e(date_format($post->created_at, 'Y-m-d')); ?>" class="text-gray-500"><?php echo e(date_format($post->created_at, 'F j, Y')); ?></time>
              <a href="/blog/<?php echo e($post->slug); ?>" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
            </div>
            <div class="group relative max-w-xl">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="/blog/<?php echo e($post->slug); ?>">
                  <span class="absolute inset-0"></span>
                  <?php echo e($post->title); ?>

                </a>
              </h3>
              <p class="mt-5 text-sm leading-6 text-gray-600"><?php echo e($post->description); ?></p>
            </div>
            <div class="mt-6 flex border-t border-gray-900/5 pt-6">
              <div class="relative flex items-center gap-x-4">
                <img src="<?php echo e($post->author->thumbnail ? Storage::disk('vultr')->url($post->author->thumbnail) : env('APP_URL') .'/images/speaker-placeholder.jpg'); ?>" alt="" class="h-10 w-10 object-cover rounded-full bg-gray-50">
                <div class="text-sm leading-6">
                  <p class="font-semibold text-gray-900">
                    <a href="/speaker/<?php echo e($post->author->slug); ?>">
                      <span class="absolute inset-0"></span>
                      <?php echo e($post->author->name); ?>

                    </a>
                  </p>
                  <p class="text-gray-600"><?php echo e($post->author->position); ?></p>
                </div>
              </div>
            </div>
          </div>
        </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>

  </div>
  <div class="flex justify-center mt-12">
   <?php echo e($posts->links()); ?>

   </div>
</div>
</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/livewire/blog/index.blade.php ENDPATH**/ ?>