<div>
   <div class="bg-gray-900 px-6 py-12 sm:py-12 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">{{ env('CHURCH_NAME') }} Blog</h2>
      </div>
    </div>
<div class="bg-white pb-24 sm:pb-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-4xl">
      <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
        @foreach($posts as $post)
        <article class="relative isolate flex flex-col gap-8 lg:flex-row">
          <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
            <img src="{{$post->image ? Storage::disk('vultr')->url($post->image) : env('APP_URL') .'/images/devotional-placeholder.jpg' }}" alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
          </div>
          <div>
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="{{ date_format($post->created_at, 'Y-m-d') }}" class="text-gray-500">{{ date_format($post->created_at, 'F j, Y') }}</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
            </div>
            <div class="group relative max-w-xl">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  {{$post->title}}
                </a>
              </h3>
              <p class="mt-5 text-sm leading-6 text-gray-600">{{$post->description}}</p>
            </div>
            <div class="mt-6 flex border-t border-gray-900/5 pt-6">
              <div class="relative flex items-center gap-x-4">
                <img src="{{$post->author->thumbnail ? Storage::disk('vultr')->url($post->author->thumbnail) : env('APP_URL') .'/images/speaker-placeholder.jpg' }}" alt="" class="h-10 w-10 object-cover rounded-full bg-gray-50">
                <div class="text-sm leading-6">
                  <p class="font-semibold text-gray-900">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      {{$post->author->name}}
                    </a>
                  </p>
                  <p class="text-gray-600">{{$post->author->position}}</p>
                </div>
              </div>
            </div>
          </div>
        </article>
        @endforeach
      </div>
    </div>

  </div>
  <div class="flex justify-center mt-12">
   {{ $posts->links() }}
   </div>
</div>
</div>
