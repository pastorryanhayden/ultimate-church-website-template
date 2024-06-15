<div>
    <?php if($show): ?>
    <div class="overflow-hidden bg-white py-24 ">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
      <div class="lg:ml-auto lg:pl-4 lg:pt-4 flex flex-col justify-between">
        <div class="lg:max-w-lg">
          <h2 class="text-base font-semibold leading-7 text-indigo-600"><?php echo e($featured ? 'Featured' : 'Recent'); ?> Article</h2>
          <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><a href="/blog/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?></a></p>
          <p class="mt-6 text-lg leading-8 text-gray-600"><?php echo e($post->description); ?></p>
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
        <a href="/blog" class="underline text-lg mt-12 text-gray-400 block font-semibold">View All Articles</a>
      </div>
      <div class="flex items-start justify-end lg:order-first">
        <img src="<?php echo e($post->image ? Storage::disk('vultr')->url($post->image) : env('APP_URL') .'/images/devotional-placeholder.jpg'); ?>" alt="Product screenshot" class="w-[48rem] max-w-none  shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" width="2432" height="1442">
      </div>
    </div>
  </div>
</div>

    <?php endif; ?>
</div>
<?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/livewire/home/blog.blade.php ENDPATH**/ ?>