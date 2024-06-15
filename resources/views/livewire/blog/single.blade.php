<div>
   <div class="bg-gray-900 px-6 py-12 sm:py-12 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">{{ env('CHURCH_NAME') }} Articles</h2>
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
                <a href="/blog" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Articles</a>
              </div>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">{{$post->title}}</a>
              </div>
            </li>
          </ol>
        </nav>
      <img src="{{$post->image ? Storage::disk('vultr')->url($post->image) : env('APP_URL') .'/images/devotional-placeholder.jpg' }}" alt="" class="w-full  max-w-4xl mx-auto">  
      <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
          <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{$post->title}}</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">{{$post->description}}</p>
            <div class="flex justify-center mt-4">
                <div class="relative flex items-center gap-x-4">
                <img src="{{$post->author->thumbnail ? Storage::disk('vultr')->url($post->author->thumbnail) : env('APP_URL') .'/images/speaker-placeholder.jpg' }}" alt="" class="h-10 w-10 object-cover rounded-full bg-gray-50">
                <div class="text-sm leading-6">
                  <p class="font-semibold text-gray-900">
                    <a href="/speaker/{{$post->author->slug}}">
                      <span class="absolute inset-0"></span>
                      {{$post->author->name}}
                    </a>
                  </p>
                  <p class="text-gray-600">{{$post->author->position}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 prose">
        @markdown($post->body)
    </div>
    <livewire:blog.morefrom author="{{$post->author->id}}" post="{{$post->id}}" /> 
</div>