<div class="relative isolate overflow-hidden pt-14">
    <img src="{{ Storage::disk('vultr')->url($settings->header_image) }}" alt="" class="absolute inset-0 -z-20 h-full w-full object-cover">
    @if($settings->header_video)
    <video id="video" autoplay muted loop playsinline poster="/storage/{{$settings->header_image}}" class="absolute inset-0 -z-20 h-full w-full object-cover">
      <source src="{{ Storage::disk('vultr')->url($settings->header_video) }}" type="video/mp4">
        {{-- <source src="/images/hero.mp4" type="video/mp4"> --}}
      </video>
      <script>
        document.getElementById('video').play();
    </script>
    @endif
    <div class="absolute inset-0 -z-10 overflow-hidden bg-black opacity-30" aria-hidden="true"></div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      {{-- <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
          Announcing our next round of funding. <a href="#" class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div> --}}
      <div class="text-center">
        <h1 class="text-3xl tracking-tight text-white sm:text-6xl">{{ $settings->heading }}</h1>
        {{-- <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p> --}}
       
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>