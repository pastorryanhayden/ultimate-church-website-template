<header 
 <?php if($transparent): ?>
 class="absolute inset-x-0 top-0 z-50"
 <?php else: ?> 
 class="bg-white" 
 <?php endif; ?> 
 x-data="{showmenu: false}"
 >
    <nav class="mx-auto flex max-w-7xl items-center justify-between gap-x-6 p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="/" class="-m-1.5 p-1.5">
          <span class="sr-only"><?php echo e(env('CHURCH_NAME')); ?></span>
          <h1 class="text-lg uppercase <?php echo e($transparent ? 'text-white' : ''); ?>"><?php echo e(env('CHURCH_NAME')); ?></h1>
          
        </a>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 font-sans <?php echo e($transparent ? 'text-white' : ''); ?>">
        <a href="/about" class="text-sm font-semibold leading-6 <?php echo e($transparent ? 'text-white' : 'text-gray-900'); ?>">About Us</a>
        <?php if($ministries): ?>
        <a href="/ministries" class="text-sm font-semibold leading-6 <?php echo e($transparent ? 'text-white' : 'text-gray-900'); ?>">Ministries</a>
        <?php endif; ?> 
        <?php if($events): ?>
        <a href="/events" class="text-sm font-semibold leading-6 <?php echo e($transparent ? 'text-white' : 'text-gray-900'); ?>">Upcoming Events</a>
        <?php endif; ?> 
        <?php if($resources): ?>
        <div class="relative" x-data="{showmenu: false}" @mouseover="showmenu = true" >
        <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 <?php echo e($transparent ? 'text-white' : ''); ?>" aria-expanded="false">
          Resources
          <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>

        <!--
          'Product' flyout menu, show/hide based on flyout menu state.

          Entering: "transition ease-out duration-200"
            From: "opacity-0 translate-y-1"
            To: "opacity-100 translate-y-0"
          Leaving: "transition ease-in duration-150"
            From: "opacity-100 translate-y-0"
            To: "opacity-0 translate-y-1"
        -->
        <div x-show="showmenu" class="absolute -right-4 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5" @mouseleave="showmenu = false">
          <div class="p-4">
            <?php if($sermons): ?>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-microphone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6 text-gray-600 group-hover:text-indigo-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                  Sermons
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Listen to our sermons</p>
              </div>
            </div>
            <?php endif; ?>
            <?php if($blog): ?>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-document-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6 text-gray-600 group-hover:text-indigo-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                  Blog
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Articles from our pastor and staff</p>
              </div>
            </div>
            <?php endif; ?>
            <?php if($devotions): ?>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-book-open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6 text-gray-600 group-hover:text-indigo-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                  Devotions
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Devotional content.</p>
              </div>
            </div>
            <?php endif; ?>
          </div>
          
        </div>
      </div>
        <?php else: ?> 
        <?php if($devotions): ?>
        <a href="/devotion" class="text-sm font-semibold leading-6 <?php echo e($transparent ? 'text-white' : 'text-gray-900'); ?>">Devotions</a>
        <?php endif; ?>
        <?php if($sermons): ?>
        <a href="/sermons" class="text-sm font-semibold leading-6 <?php echo e($transparent ? 'text-white' : 'text-gray-900'); ?>">Sermons</a>
        <?php endif; ?> 
        <?php endif; ?> 
      </div>
      
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 <?php echo e($transparent ? 'text-white' : 'text-gray-700'); ?>" x-on:click="showmenu = ! showmenu">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="showmenu">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10"></div>
      <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-end gap-x-6">
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="showmenu = false">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6 font-sans">
              <a href="/about" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">About Us</a>
              <?php if($ministries): ?>
              <a href="/ministries" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Ministries</a>
              <?php endif; ?> 
              <?php if($events): ?>
              <a href="/events" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Upcoming Events</a>
              <?php endif; ?> 
              <?php if($devotions): ?>
              <a href="/devotion" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Devotions</a>
              <?php endif; ?> 
              <?php if($sermons): ?>
              <a href="/sermons" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Sermons</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header><?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/livewire/navigation.blade.php ENDPATH**/ ?>