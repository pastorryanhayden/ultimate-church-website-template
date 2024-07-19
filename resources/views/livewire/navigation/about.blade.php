   <div class="hidden lg:flex lg:gap-x-12 font-sans {{ $transparent ? 'text-white' : '' }}">
       @if ($expandabout)
           <div class="relative" x-data="{ showmenu: false }" @mouseover="showmenu = true">
               <button type="button"
                   class="flex items-center gap-x-1 text-sm font-semibold leading-6 {{ $transparent ? 'text-white' : '' }}"
                   aria-expanded="false">
                   About Us
                   <svg class="flex-none w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                       <path fill-rule="evenodd"
                           d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                           clip-rule="evenodd" />
                   </svg>
               </button>

               <div class="flex absolute left-1/2 z-10 px-4 mt-5 w-screen max-w-max -translate-x-1/2" x-show="showmenu"
                   @click.outside="showmenu = false">
                   <div
                       class="overflow-hidden flex-auto w-screen max-w-md text-sm leading-6 bg-white rounded-3xl ring-1 shadow-lg ring-gray-900/5">
                       <div class="p-4">
                           <div class="flex relative gap-x-6 p-4 rounded-lg hover:bg-gray-50 group">
                               <div
                                   class="flex flex-none justify-center items-center mt-1 w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">
                                   <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600"
                                       xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                       stroke-width="1.5" stroke="currentColor" class="size-6">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                           d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                   </svg>
                               </div>
                               <div>
                                   <a href="/about" class="font-semibold text-gray-900">
                                       Start Here
                                       <span class="absolute inset-0"></span>
                                   </a>
                                   <p class="mt-1 text-gray-600">Essential information to know before visiting our
                                       church.</p>
                               </div>
                           </div>
                           @if ($testimonies)
                               <div class="flex relative gap-x-6 p-4 rounded-lg hover:bg-gray-50 group">
                                   <div
                                       class="flex flex-none justify-center items-center mt-1 w-11 h-11 bg-gray-50 rounded-lg group-hover:bg-white">


                                       <svg xmlns="http://www.w3.org/2000/svg"
                                           class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                           viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                           <path stroke-linecap="round" stroke-linejoin="round"
                                               d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                       </svg>
                                   </div>
                                   <div>
                                       <a href="/testimonies" class="font-semibold text-gray-900">
                                           Testimonies
                                           <span class="absolute inset-0"></span>
                                       </a>
                                       <p class="mt-1 text-gray-600">Stories of changed lives.</p>
                                   </div>

                               </div>
                           @endif
                       </div>
                       @if ($articles && $articles->count() > 0)
                           <div class="p-8 bg-gray-50">
                               <div class="flex justify-between">
                                   <h3 class="text-sm font-semibold leading-6 text-gray-500">Other Information</h3>
                                   @if ($morearticles)
                                       <a href="/articles" class="text-sm font-semibold leading-6 text-indigo-600">See
                                           all
                                           <span aria-hidden="true">&rarr;</span></a>
                                   @endif
                               </div>
                               <ul role="list" class="mt-6 space-y-6">
                                   @foreach ($articles as $article)
                                       <li class="relative">
                                           <a href="/articles/{{ $article->slug }}"
                                               class="block text-sm font-semibold leading-6 text-gray-900 truncate">
                                               {{ $article->title }}
                                               <span class="absolute inset-0"></span>
                                           </a>
                                       </li>
                                   @endforeach
                               </ul>
                           </div>
                       @endif
                   </div>
               </div>
           </div>
       @else
           <a href="/about"
               class="text-sm font-semibold leading-6 {{ $transparent ? 'text-white' : 'text-gray-900' }}">About
               Us</a>

       @endif
   </div>
