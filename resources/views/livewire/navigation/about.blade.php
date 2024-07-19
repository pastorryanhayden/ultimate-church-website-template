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
                                   <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                       viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                           d="M16.712 4.33a9.027 9.027 0 011.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 00-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 010 9.424m-4.138-5.976a3.736 3.736 0 00-.88-1.388 3.737 3.737 0 00-1.388-.88m2.268 2.268a3.765 3.765 0 010 2.528m-2.268-4.796a3.765 3.765 0 00-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 01-1.388.88m2.268-2.268l4.138 3.448m0 0a9.027 9.027 0 01-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0l-3.448-4.138m3.448 4.138a9.014 9.014 0 01-9.424 0m5.976-4.138a3.765 3.765 0 01-2.528 0m0 0a3.736 3.736 0 01-1.388-.88 3.737 3.737 0 01-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 01-1.652-1.306 9.027 9.027 0 01-1.306-1.652m0 0l4.138-3.448M4.33 16.712a9.014 9.014 0 010-9.424m4.138 5.976a3.765 3.765 0 010-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 011.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 00-1.652 1.306A9.025 9.025 0 004.33 7.288" />
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
                                   @if ($articles->count() > 3)
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
