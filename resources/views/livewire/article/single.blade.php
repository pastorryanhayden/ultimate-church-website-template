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
                    <a href="/articles" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">More
                        Information</a>
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
                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"
                        aria-current="page">{{ $article->title }}</a>
                </div>
            </li>
        </ol>
    </nav>
    <img src="{{ $article->featured_image ? Storage::disk('vultr')->url($article->featured_image) : env('APP_URL') . '/images/devotional-placeholder.jpg' }}"
        alt="" class="mx-auto w-full max-w-4xl">
    <div class="py-24 px-6 bg-white sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{ $article->title }}</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">{{ $article->description }}</p>
        </div>
    </div>
    <div class="px-4 pb-24 mx-auto max-w-4xl sm:px-6 lg:px-8 prose">
        @markdown($article->content)
    </div>
</div>
