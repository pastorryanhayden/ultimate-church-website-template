<div>
    <livewire:ministries.header />
    <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-4xl">
      <div class="space-y-20">
        @foreach($ministries as $ministry)
        <article class="relative isolate flex flex-col gap-8 lg:flex-row">
          <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
            <img src="{{ asset('storage/' . $ministry->image )}}" alt="" class="absolute inset-0 h-full w-full  bg-gray-50 object-cover">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
          </div>
          <div>
            <div class="flex items-center gap-x-4 text-xs">
              <a href="/ministry/{{$ministry->slug}}" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ Illuminate\Support\Str::title($ministry->for) }}</a>
            </div>
            <div class="group relative max-w-xl">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="/ministry/{{$ministry->slug}}">
                  <span class="absolute inset-0"></span>
                  {{$ministry->name}}
                </a>
              </h3>
              <p class="mt-5 text-sm leading-6 text-gray-600">{{$ministry->meeting_info}}</p>
              <a class="mt-2 leading-6 font-bold text-gray-800 underline" href="/ministry/{{$ministry->slug}}">Learn More</a>
            </div>

          </div>
        </article>
        @endforeach
        <!-- More posts... -->
      </div>
    </div>
  </div>
</div>

</div>
