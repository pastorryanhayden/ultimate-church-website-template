<div>
    <div class="py-12 px-6 bg-gray-900 sm:py-12 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">About {{ env('CHURCH_NAME') }}</h2>
        </div>
    </div>
    <nav class="flex justify-center py-6 mx-auto w-full max-w-4xl" aria-label="Breadcrumb">
        <ol role="list" class="flex items-center space-x-4">
            <li>
                <div>
                    <a href="/" class="text-gray-400 hover:text-gray-500">
                        <svg class="flex-shrink-0 w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Home</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                    <a href="/about" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">About Us</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">About Us
                        Articles</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="pb-24 bg-white sm:pb-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                    @foreach ($articles as $post)
                        <article class="flex relative flex-col gap-8 lg:flex-row isolate">
                            <div class="relative lg:w-64 aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:shrink-0">
                                <img src="{{ $post->featured_image ? Storage::disk('vultr')->url($post->featured_image) : env('APP_URL') . '/images/devotional-placeholder.jpg' }}"
                                    alt=""
                                    class="object-cover absolute inset-0 w-full h-full bg-gray-50 rounded-2xl">
                                <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                            </div>
                            <div>
                                <div class="flex gap-x-4 items-center text-xs">
                                    <time datetime="{{ date_format($post->created_at, 'Y-m-d') }}"
                                        class="text-gray-500">{{ date_format($post->created_at, 'F j, Y') }}</time>
                                    <a href="/articles/{{ $post->slug }}"
                                        class="relative z-10 py-1.5 px-3 font-medium text-gray-600 bg-gray-50 rounded-full hover:bg-gray-100">Marketing</a>
                                </div>
                                <div class="relative max-w-xl group">
                                    <h3
                                        class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                        <a href="/articles/{{ $post->slug }}">
                                            <span class="absolute inset-0"></span>
                                            {{ $post->title }}
                                        </a>
                                    </h3>
                                    <p class="mt-5 text-sm leading-6 text-gray-600">{{ $post->description }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="flex justify-center mt-12">
        </div>
    </div>
</div>
