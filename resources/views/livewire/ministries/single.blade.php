<div>
    <div class="relative isolate overflow-hidden bg-gray-700 py-24 sm:py-32">
      <img src="{{ asset('storage/' . $ministry->image )}}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover opacity-20">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">{{$ministry->name}}</h2>
          <p class="mt-6 text-lg leading-8 text-gray-300">{{$ministry->meeting_info}}</p>
        </div>
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
                <a href="/ministries" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Ministries</a>
              </div>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">{{$ministry->name}}</a>
              </div>
            </li>
          </ol>
        </nav>

    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 py-12 prose">
        
        @if(isset($ministry->image))
        <img src="{{ asset('storage/' . $ministry->image )}}" alt="" class="w-full block mx-auto">
        @endif 

        @markdown($ministry->body)
        
    </div>
</div>
