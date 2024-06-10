<header 
 @if($transparent)
 class="absolute inset-x-0 top-0 z-50"
 @else 
 class="bg-white" 
 @endif 
 x-data="{showmenu: false}"
 >
    <nav class="mx-auto flex max-w-7xl items-center justify-between gap-x-6 p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="/" class="-m-1.5 p-1.5">
          <span class="sr-only">{{ env('CHURCH_NAME')}}</span>
          <h1 class="text-lg uppercase {{$transparent ? 'text-white' : ''}}">{{ env('CHURCH_NAME')}}</h1>
          {{-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""> --}}
        </a>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 font-sans {{$transparent ? 'text-white' : ''}}">
        <a href="/about" class="text-sm font-semibold leading-6 {{$transparent ? 'text-white' : 'text-gray-900'}}">About Us</a>
        @if($ministries)
        <a href="/ministries" class="text-sm font-semibold leading-6 {{$transparent ? 'text-white' : 'text-gray-900'}}">Ministries</a>
        @endif 
        @if($events)
        <a href="/events" class="text-sm font-semibold leading-6 {{$transparent ? 'text-white' : 'text-gray-900'}}">Upcoming Events</a>
        @endif 
        @if($resources)
        <div class="relative" x-data="{showmenu: false}" @mouseover="showmenu = true" >
        <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 {{$transparent ? 'text-white' : ''}}" aria-expanded="false">
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
            @if($sermons)
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <x-heroicon-o-microphone class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" />
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                  Sermons
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Listen to our sermons</p>
              </div>
            </div>
            @endif
            @if($blog)
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <x-heroicon-o-document-text class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" />
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                  Blog
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Articles from our pastor and staff</p>
              </div>
            </div>
            @endif
            @if($devotions)
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <x-heroicon-o-book-open class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" />
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                  Devotions
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Devotional content.</p>
              </div>
            </div>
            @endif
          </div>
          
        </div>
      </div>
        @else 
        @if($devotions)
        <a href="/devotion" class="text-sm font-semibold leading-6 {{$transparent ? 'text-white' : 'text-gray-900'}}">Devotions</a>
        @endif
        @if($sermons)
        <a href="/sermons" class="text-sm font-semibold leading-6 {{$transparent ? 'text-white' : 'text-gray-900'}}">Sermons</a>
        @endif 
        @endif 
      </div>
      
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 {{$transparent ? 'text-white' : 'text-gray-700'}}" x-on:click="showmenu = ! showmenu">
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
              @if($ministries)
              <a href="/ministries" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Ministries</a>
              @endif 
              @if($events)
              <a href="/events" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Upcoming Events</a>
              @endif 
              @if($devotions)
              <a href="/devotion" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Devotions</a>
              @endif 
              @if($sermons)
              <a href="/sermons" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Sermons</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>