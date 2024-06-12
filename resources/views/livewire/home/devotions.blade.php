<div>
    @php
        use Illuminate\Support\Str;
    @endphp
    @if($show)
        <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Recent Devotions</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600"><a href="/devotion" class="underline">View All</a></p>
    </div>
    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-16 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      @foreach($devotions as $devotion)
      <article class="flex flex-col items-start justify-between">
        <div class="relative w-full">
          @if($devotion->image)
          <img src="{{ Storage::disk('vultr')->url($devotion->image) }}" alt="" class="aspect-[16/9] w-full bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
          @else 
          <img src="/images/bible.jpg" alt="" class="aspect-[16/9] w-full bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
          @endif 
          <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        </div>
        <div class="max-w-xl">
          <div class="mt-8 flex items-center gap-x-4 text-xs">
            <time datetime="{{ date_format($devotion->published_at, 'o-m-d') }}" class="text-gray-500">{{ date_format($devotion->published_at, 'M j, o') }}</time>
            <a href="/devotion/{{$devotion->id}}" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{$devotion->text}}</a>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="/devotion/{{$devotion->id}}">
                <span class="absolute inset-0"></span>
                {{$devotion->title}}
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                @markdown($devotion->excerpt)
            </p>
            <a href="/devotion/{{$devotion->id}}" class="mt-4 text-gray-400">Learn More</a>
          </div>
          
        </div>
      </article>
      @endforeach
      <!-- More posts... -->
    </div>
  </div>
</div>

    @endif
</div>
