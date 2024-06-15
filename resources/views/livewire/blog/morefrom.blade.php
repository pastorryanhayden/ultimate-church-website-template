<div>
@if($show)
<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">More from {{$author->name}}</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">Most recent articles from {{$author->name}}. <a href="/blog" class="underline">See all articles.</a></p>
    </div>
    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      @foreach($posts as $post)
      <article class="flex flex-col items-start justify-between">
        <div class="relative w-full">
          <img src="{{$post->image ? Storage::disk('vultr')->url($post->image) : env('APP_URL') .'/images/devotional-placeholder.jpg' }}" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
          <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        </div>
        <div class="max-w-xl">
          <div class="mt-8 flex items-center gap-x-4 text-xs">
            <time datetime="{{ date_format($post->created_at, 'Y-m-d') }}" class="text-gray-500">{{ date_format($post->created_at, 'F j, Y') }}</time>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 min-h-12">
              <a href="/blog/{{$post->slug}}">
                <span class="absolute inset-0 "></span>
                {{$post->title}}
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{$post->description}}</p>
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

