<header @if ($transparent) class="absolute inset-x-0 top-0 z-50"
 @else
 class="bg-white" @endif
    x-data="{ showmenu: false, aboutmenu: false }">
    <nav class="flex gap-x-6 justify-between items-center p-6 mx-auto max-w-7xl lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="p-1.5 -m-1.5">
                <span class="sr-only">{{ env('CHURCH_NAME') }}</span>
                <h1 class="text-lg uppercase {{ $transparent ? 'text-white' : '' }}">{{ env('CHURCH_NAME') }}</h1>
                {{-- <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""> --}}
            </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-12 font-sans {{ $transparent ? 'text-white' : '' }}">
            @if ($expandAbout)
                <div class="relative" x-data="{ showmenu: false }" @mouseover="showmenu = true">
                    <button type="button"
                        class="flex items-center gap-x-1 text-sm font-semibold leading-6 {{ $transparent ? 'text-white' : '' }}"
                        aria-expanded="false">
                        About Us
                        <svg class="flex-none w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div class="flex absolute right-0 z-10 px-4 mt-5 w-screen max-w-max" x-show="showmenu">
                        <div
                            class="flex-auto p-4 w-screen max-w-sm text-sm leading-6 bg-white rounded-3xl ring-1 shadow-lg ring-gray-900/5">
                            <div class="relative p-4 rounded-lg hover:bg-gray-50">
                                <a href="/about" class="font-semibold text-gray-900">
                                    Plan A Visit
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Learn the essentials information about our church before
                                    visiting.</p>
                            </div>
                            @if ($articles)
                                @foreach ($articles as $article)
                                    <div class="relative p-4 rounded-lg hover:bg-gray-50">
                                        <a href="/articles/{{ $article->slug }}" class="font-semibold text-gray-900">
                                            {{ $article->title }}
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">{{ $article->description }}</p>
                                    </div>
                                @endforeach
                            @endif
                            @if ($testimonies)
                                <div class="relative p-4 rounded-lg hover:bg-gray-50">
                                    <a href="/testimonies" class="font-semibold text-gray-900">
                                        Testimonies
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Stories of God's work in our lives.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @else
                <a href="/about"
                    class="text-sm font-semibold leading-6 {{ $transparent ? 'text-white' : 'text-gray-900' }}">About
                    Us</a>
            @endif
            @if ($ministries)
                <a href="/ministries"
                    class="text-sm font-semibold leading-6 {{ $transparent ? 'text-white' : 'text-gray-900' }}">Ministries</a>
            @endif
            @if ($events)
                <a href="/events"
                    class="text-sm font-semibold leading-6 {{ $transparent ? 'text-white' : 'text-gray-900' }}">Upcoming
                    Events</a>
            @endif
            @if ($resources)
                <div class="relative" x-data="{ showmenu: false }" @mouseover="showmenu = true">
                    <button type="button"
                        class="flex items-center gap-x-1 text-sm font-semibold leading-6 {{ $transparent ? 'text-white' : '' }}"
                        aria-expanded="false">
                        Resources
                        <svg class="flex-none w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="showmenu"
                        class="overflow-hidden absolute -right-4 top-full z-10 mt-3 w-screen max-w-md bg-white rounded-3xl ring-1 shadow-lg ring-gray-900/5"
                        @mouseleave="showmenu = false">
                        <div class="p-4">
                            @if ($sermons)
                                <div
                                    class="flex relative gap-x-6 items-center p-4 text-sm leading-6 rounded-lg hover:bg-gray-50 group">
                                    <div
                                        class="flex flex-none justify-center items-center w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                                        <x-heroicon-o-microphone
                                            class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" />
                                    </div>
                                    <div class="flex-auto">
                                        <a href="/sermons" class="block font-semibold text-gray-900">
                                            Sermons
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Listen to our sermons</p>
                                    </div>
                                </div>
                            @endif
                            @if ($blog)
                                <div
                                    class="flex relative gap-x-6 items-center p-4 text-sm leading-6 rounded-lg hover:bg-gray-50 group">
                                    <div
                                        class="flex flex-none justify-center items-center w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                                        <x-heroicon-o-document-text
                                            class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" />
                                    </div>
                                    <div class="flex-auto">
                                        <a href="/blog" class="block font-semibold text-gray-900">
                                            Articles
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-600">Articles from our pastor and staff</p>
                                    </div>
                                </div>
                            @endif
                            @if ($devotions)
                                <div
                                    class="flex relative gap-x-6 items-center p-4 text-sm leading-6 rounded-lg hover:bg-gray-50 group">
                                    <div
                                        class="flex flex-none justify-center items-center w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                                        <x-heroicon-o-book-open
                                            class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" />
                                    </div>
                                    <div class="flex-auto">
                                        <a href="/devotion" class="block font-semibold text-gray-900">
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
                @if ($devotions)
                    <a href="/devotion"
                        class="text-sm font-semibold leading-6 {{ $transparent ? 'text-white' : 'text-gray-900' }}">Devotions</a>
                @endif
                @if ($sermons)
                    <a href="/sermons"
                        class="text-sm font-semibold leading-6 {{ $transparent ? 'text-white' : 'text-gray-900' }}">Sermons</a>
                @endif
                @if ($blog)
                    <a href="/blog"
                        class="text-sm font-semibold leading-6 {{ $transparent ? 'text-white' : 'text-gray-900' }}">Articles</a>
                @endif
            @endif
        </div>

        <div class="flex lg:hidden">
            <button type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 {{ $transparent ? 'text-white' : 'text-gray-700' }}"
                x-on:click="showmenu = ! showmenu">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="showmenu">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div
            class="overflow-y-auto fixed inset-y-0 right-0 z-10 py-6 px-6 w-full bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex gap-x-6 justify-end items-center">
                <button type="button" class="p-2.5 -m-2.5 text-gray-700 rounded-md" x-on:click="showmenu = false">
                    <span class="sr-only">Close menu</span>
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flow-root mt-6">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="py-6 space-y-2 font-sans">
                        <a href="/about"
                            class="block py-2 px-3 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">About
                            Us</a>
                        @if ($articles->count() > 0)
                            @foreach ($articles as $article)
                                <a href="/articles/{{ $article->slug }}"
                                    class="block py-2 px-8 -mx-3 text-base font-semibold leading-7 text-gray-600 rounded-lg hover:bg-gray-50">{{ $article->title }}
                                </a>
                            @endforeach

                        @endif
                        @if ($testimonies)
                            <a href="/testimonies"
                                class="block py-2 px-8 -mx-3 text-base font-semibold leading-7 text-gray-600 rounded-lg hover:bg-gray-50">Testimonies
                            </a>
                        @endif
                        @if ($ministries)
                            <a href="/ministries"
                                class="block py-2 px-3 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Ministries</a>
                        @endif
                        @if ($events)
                            <a href="/events"
                                class="block py-2 px-3 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Upcoming
                                Events</a>
                        @endif
                        @if ($devotions)
                            <a href="/devotion"
                                class="block py-2 px-3 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Devotions</a>
                        @endif
                        @if ($sermons)
                            <a href="/sermons"
                                class="block py-2 px-3 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Sermons</a>
                        @endif
                        @if ($blog)
                            <a href="/blog"
                                class="block py-2 px-3 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Articles</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
