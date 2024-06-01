<div class="bg-white px-6 pb-24 lg:px-8" id="section{{$place}}">
  <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
    <p class="text-base font-semibold leading-7 text-gray-400">{{$section->heading}}</p>
    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{$section->section_heading}}</h1>
    <div class="prose">
      @markdown($section->content)
    </div>
  </div>
</div>

