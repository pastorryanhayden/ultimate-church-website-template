<div class="{{$show ? '' : 'hidden'}} bg-gray-700 w-full text-center pt-8 px-8">
   <h2 class="text-white font-sans uppercase font-bold text-3xl mb-4">Something for You and Your Family</h2>
   <a class="text-white mb-4" href="/ministries">See All Ministries @include('partials.icons.chevright', ['classes' => 'h-6 inline'])</a>
   <div class="grid mt-12 mx-auto" id="ministrygrid">
    @foreach($ministries as $ministry)
        <article class="flex h-48 mb-8">
            <img src="{{ Storage::disk('vultr')->url($ministry->image) }}" alt="{{$ministry->name}}" class="object-cover w-1/2">
            <div class="bg-white w-1/2 flex flex-col items-start justify-center p-4 text-left hover:bg-gray-100">
                <h4 class="font-sans text-gray-400 uppercase">{{$ministry->for}}</h4>
                <h3 class="font-sans font-bold text-2xl text-gray-700">{{$ministry->name}}</h3>
                <a class="uppercase font-sans text-gray-400 inline-flex items-center" href="/ministry/{{$ministry->slug}}">Learn More @include('partials.icons.chevright', ['classes' => 'h-4 inline'])</a>
            </div>
        </article>
    @endforeach
   </div>
   <style>
     @media screen {
    #ministrygrid article:nth-child(2), #ministrygrid article:nth-child(4) {
        flex-direction: row-reverse;
    }
    }
    @media screen and (min-width: 1024px)
    {
        #ministrygrid {
        width: 90%;
        grid-template-columns:50% 50%;
        grid-template-rows: 12rem 12rem;
        }
        #ministrygrid article:nth-child(1), #ministrygrid article:nth-child(2) {
        flex-direction: row;
        }
        
        #ministrygrid article:nth-child(3), #ministrygrid article:nth-child(4) {
        flex-direction: row-reverse;
        }
    }

    @media screen and (min-width: 1280px)
    {
        #ministrygrid {
        width: 60%;
        }
    }
    </style>
</div>


