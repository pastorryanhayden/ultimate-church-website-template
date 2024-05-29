<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 mb-24">
  <img src="{{ asset('storage/'. $details->image) }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
  <div class="hidden sm:absolute sm:inset-0 sm:-z-10 sm:block bg-gray-900 opacity-90">
  </div>
  {{-- <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#f9fafb] to-[#e5e7eb] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#f9fafb] to-[#e5e7eb] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div> --}}
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">{{$details->heading}}</h2>
      <p class="mt-6 text-lg leading-8 text-gray-300">{{$details->subheading}}</p>
    </div>
    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8 ">
      @foreach($sections as $section)
      <a href="#section{{$loop->iteration}}" class="group flex gap-x-4 rounded-xl bg-white/5 p-6 ring-1 ring-inset ring-white/10 hover:bg-gray-200">
        <x-icon name="{{$section->icon}}" class="h-7 w-5 flex-none text-gray-400 group-hover:text-gray-600" />
        <div class="text-base leading-7">
          <h3 class="font-semibold text-white group-hover:text-gray-800">{{$section->heading}}</h3>
          <p class="mt-2 text-gray-300 group-hover:text-gray-800">{{$section->description}}</p>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</div>

{{-- <div class="bg-white py-24 sm:py-12">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{$details->heading}}</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600">{{$details->subheading}}</p>
    </div>
    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
      <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
        @foreach($sections as $section)
        <div class="flex flex-col">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-gray-600">
            <x-icon name="{{$section->icon}}" class="h-6 w-6 text-white" />
            </div>
            {{$section->heading}}
          </dt>
          <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
            <p class="flex-auto">{{$section->description}}  </p>
            <p class="mt-6">
              <a href="#section{{$loop->iteration}}" class="text-sm font-semibold leading-6 text-gray-600">Learn more <span aria-hidden="true">→</span></a>
            </p>
          </dd>
        </div>
        @endforeach
      </dl>
    </div>
  </div>
  <img src="{{ asset('storage/'. $details->image) }}" alt="{{$details->heading}}" class="my-12 h-72 w-full object-cover">
</div> --}}
