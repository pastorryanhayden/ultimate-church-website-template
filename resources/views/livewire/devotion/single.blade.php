<div>
    <div class="bg-gray-800 px-6 py-12 sm:py-12 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">Devotion: {{$devotion->title}}</h2>
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
                <a href="/devotion" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Devotions</a>
              </div>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">{{$devotion->title}}</a>
              </div>
            </li>
          </ol>
        </nav>

    @if($devotion->video_url)
    <iframe 
    src="https://www.youtube.com/embed/{{ $devotion->video_url }}" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen
    class="w-full aspect-video mb-6 max-w-4xl mx-auto">
    </iframe>
    @elseif($devotion->image_url)
    <img src="/{{ $devotion->image_url }}" alt="" class="w-full  max-w-4xl mx-auto">
    @endif 
    @if($devotion->audio_url)
    <audio controls class="w-full mt-6 max-w-4xl px-4 sm:px-6 lg:px-8 mx-auto">
        <source src="/{{ $devotion->audio_url }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <div class="w-full mt-2 max-w-4xl px-4 sm:px-6 lg:px-8 mx-auto">
        <button wire:click="download" type="button" class="rounded bg-gray-200 px-2 py-1 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-500 hover:text-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
        </svg>

        Download MP3
        </button>
    </div>
    @endif
    
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 py-12 prose">
        @markdown($devotion->body)
    </div>
</div>
