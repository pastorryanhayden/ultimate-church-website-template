<div x-data="{ showDetails: true }">
    <div class="py-12 px-6 bg-gray-700 sm:py-12 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">Sermons: {{ $sermon->title }}</h2>
        </div>
    </div>
    <nav class="hidden justify-center py-6 mx-auto w-full max-w-4xl md:flex" aria-label="Breadcrumb">
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
                    <a href="/sermons" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Sermons</a>
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
                    <a href="/series/{{ $sermon->series->slug }}"
                        class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ $sermon->series->title }}</a>
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
                        aria-current="page">{{ $sermon->title }}</a>
                </div>
            </li>
        </ol>
    </nav>
    @if ($sermon->youtube_id)
        <div class="my-6 mx-auto max-w-4xl aspect-w-16 aspect-h-6">
            <iframe src="https://www.youtube.com/embed/{{ $sermon->youtube_id }}" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    @elseif($sermon->series->photo)
        <img src="{{ Storage::disk('vultr')->url($sermon->series->photo) }}" alt=""
            class="mx-auto mb-12 w-full max-w-lg">
    @endif
    @if ($sermon->mp3)
        <audio controls class="px-4 mx-auto mt-6 w-full max-w-4xl sm:px-6 lg:px-8">
            <source src="{{ Storage::disk('vultr')->url($sermon->mp3) }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <div class="px-4 mx-auto mt-2 mb-6 w-full max-w-4xl sm:px-6 lg:px-8">
            <button wire:click="downloadMp3" type="button"
                class="inline-flex items-center py-1 px-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded shadow-sm hover:text-gray-100 hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mr-1 w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                </svg>

                Download MP3
            </button>
        </div>
    @endif
    <div x-show="!showDetails" class="p-6 mx-auto w-full max-w-4xl">
        <div class="p-4 bg-gray-50 rounded-md">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex-1 ml-3 md:flex md:justify-between">
                    <p class="text-sm text-gray-700">Show the details for the sermon.</p>
                    <p class="mt-3 text-sm md:mt-0 md:ml-6">
                        <button x-on:click="showDetails = true"
                            class="font-medium text-gray-700 whitespace-nowrap hover:text-gray-600">
                            Show Details
                            <span aria-hidden="true"> &rarr;</span>
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex relative justify-center items-center p-6 w-full bg-gray-50 lg:p-24" x-show="showDetails">
        <button class="absolute top-0 right-0 mt-6 mr-6" title="Hide Details" x-on:click="showDetails = false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                <path fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <div class="overflow-hidden w-full max-w-4xl bg-white shadow sm:rounded-lg">
            <div class="py-6 px-4 sm:px-6">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Sermon Information</h3>
                {{-- <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Details and application.</p> --}}
            </div>
            <div class="border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="py-6 px-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">Title</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $sermon->title }}
                        </dd>
                    </div>
                    <div class="py-6 px-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">Description</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ $sermon->description }}</dd>
                    </div>
                    <div class="py-6 px-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">Date</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ $sermon->date->format('F j, Y') }}</dd>
                    </div>
                    <div class="py-6 px-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">Speaker</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            <div class="flex">
                                <img src="{{ $sermon->speaker->thumbnail ? Storage::disk('vultr')->url($sermon->speaker->thumbnail) : env('APP_URL') . '/images/speaker-placeholder.jpg' }}"
                                    alt="" class="object-cover mr-4 mb-4 w-16 h-16 rounded-full">
                                <div>
                                    <h3 class="font-bold text-indigo-500 underline text-md"><a
                                            href="/speaker/{{ $sermon->speaker->slug }}">{{ $sermon->speaker->name }}</a>
                                    </h3>
                                    <p class="italic">{{ $sermon->speaker->position }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="my-4 prose-sm">{!! $sermon->speaker->bio !!}</div>
                            <a href="/speaker/{{ $sermon->speaker->slug }}"
                                class="py-1 px-2 text-xs font-semibold text-indigo-600 bg-indigo-50 rounded shadow-sm hover:bg-indigo-100">View
                                all from this Speaker</a>

                        </dd>
                    </div>
                    <div class="py-6 px-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">Series</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            <div class="flex">
                                <img src="{{ $sermon->series->photo ? Storage::disk('vultr')->url($sermon->series->photo) : env('APP_URL') . '/images/devotional-placeholder.jpg' }}"
                                    alt="" class="object-cover mr-4 mb-4 w-16 h-16 rounded-full">
                                <div>
                                    <h3 class="font-bold text-indigo-500 underline text-md"><a
                                            href="/series/{{ $sermon->series->slug }}">{{ $sermon->series->title }}</a>
                                    </h3>
                                </div>
                            </div>
                            <hr>
                            <div class="my-4 prose-sm">{!! $sermon->series->description !!}</div>
                            <a href="/series/{{ $sermon->series->slug }}"
                                class="py-1 px-2 text-xs font-semibold text-indigo-600 bg-indigo-50 rounded shadow-sm hover:bg-indigo-100">View
                                all from this Series</a>
                        </dd>
                    </div>

                    @if ($sermon->mp3 || $sermon->handout || $sermon->slides)
                        <div class="py-6 px-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Downloads</dt>
                            <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <ul role="list" class="rounded-md border border-gray-200 divide-y divide-gray-100">
                                    @if ($sermon->mp3)
                                        <li class="flex justify-between items-center py-4 pr-5 pl-4 text-sm leading-6">
                                            <div class="flex flex-1 items-center w-0">
                                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <div class="flex flex-1 gap-2 ml-4 min-w-0">
                                                    <span class="font-medium truncate">Audio (MP3)</span>
                                                    <span class="flex-shrink-0 text-gray-400"></span>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 ml-4">
                                                <button wire:click="downloadMp3"
                                                    class="font-medium text-indigo-600 hover:text-indigo-500">Download</button>
                                            </div>
                                        </li>
                                    @endif
                                    @if ($sermon->slides)
                                        <li class="flex justify-between items-center py-4 pr-5 pl-4 text-sm leading-6">
                                            <div class="flex flex-1 items-center w-0">
                                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <div class="flex flex-1 gap-2 ml-4 min-w-0">
                                                    <span class="font-medium truncate">Slides (PDF)</span>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 ml-4">
                                                <button wire:click="downloadSlides"
                                                    class="font-medium text-indigo-600 hover:text-indigo-500">Download</button>
                                            </div>
                                        </li>
                                    @endif
                                    @if ($sermon->handout)
                                        <li class="flex justify-between items-center py-4 pr-5 pl-4 text-sm leading-6">
                                            <div class="flex flex-1 items-center w-0">
                                                <svg class="flex-shrink-0 w-5 h-5 text-gray-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <div class="flex flex-1 gap-2 ml-4 min-w-0">
                                                    <span class="font-medium truncate">Handout (PDF)</span>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 ml-4">
                                                <button wire:click="downloadHandout"
                                                    class="font-medium text-indigo-600 hover:text-indigo-500">Download</button>
                                            </div>
                                        </li>
                                    @endif
                                </ul>
                            </dd>
                        </div>
                    @endif
                </dl>
            </div>
        </div>

    </div>
    <div class="py-12 px-4 mx-auto max-w-4xl sm:px-6 lg:px-8 prose">
        @if ($moreThanFiftyWords)
            <div class="flex justify-end mb-6 w-full">
                <a target="_blank" href="/print/sermons/{{ $sermon->id }}"
                    class="inline-flex items-center py-1.5 px-2.5 text-sm font-semibold text-indigo-600 bg-indigo-50 rounded-md shadow-sm hover:bg-indigo-100">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="mr-1 w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M5 2.75C5 1.784 5.784 1 6.75 1h6.5c.966 0 1.75.784 1.75 1.75v3.552c.377.046.752.097 1.126.153A2.212 2.212 0 0 1 18 8.653v4.097A2.25 2.25 0 0 1 15.75 15h-.241l.305 1.984A1.75 1.75 0 0 1 14.084 19H5.915a1.75 1.75 0 0 1-1.73-2.016L4.492 15H4.25A2.25 2.25 0 0 1 2 12.75V8.653c0-1.082.775-2.034 1.874-2.198.374-.056.75-.107 1.127-.153L5 6.25v-3.5Zm8.5 3.397a41.533 41.533 0 0 0-7 0V2.75a.25.25 0 0 1 .25-.25h6.5a.25.25 0 0 1 .25.25v3.397ZM6.608 12.5a.25.25 0 0 0-.247.212l-.693 4.5a.25.25 0 0 0 .247.288h8.17a.25.25 0 0 0 .246-.288l-.692-4.5a.25.25 0 0 0-.247-.212H6.608Z"
                            clip-rule="evenodd" />
                    </svg>

                    Print Sermon Manuscript
                </a>

            </div>
        @endif
        @if ($sermon->manuscript && $sermon->manuscript != '')
            @markdown($sermon->manuscript)
        @else
            <p> No manuscript for this sermon.</p>
        @endif
    </div>
</div>
