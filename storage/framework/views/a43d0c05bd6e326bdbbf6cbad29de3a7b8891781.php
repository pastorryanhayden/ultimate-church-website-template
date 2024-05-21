<header class="bg-white" x-data="{showmenu: false}">
    <nav class="mx-auto flex max-w-7xl items-center justify-between gap-x-6 p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only"><?php echo e(env('CHURCH_NAME')); ?></span>
          <h1 class="text-lg uppercase"><?php echo e(env('CHURCH_NAME')); ?></h1>
          
        </a>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 font-sans">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">About Us</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Ministries</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Upcoming Events</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Devotions</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Sermons</a>
        
      </div>
      
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" x-on:click="showmenu = ! showmenu">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="showmenu" x-on:click="showmenu = ! showmenu">
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
              <a href="/ministries" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Ministries</a>
              <a href="/events" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Upcoming Events</a>
              <a href="/devotion" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Devotions</a>
              <a href="/sermons" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Sermons</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header><?php /**PATH /Users/ryanhayden/Herd/biblebaptistmattoon/resources/views/partials/_navigation.blade.php ENDPATH**/ ?>