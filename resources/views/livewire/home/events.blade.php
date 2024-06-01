<div>
@if(isset($event))
    <div class="w-full bg-gray-500 p-12 flex flex-col justify-center items-center">
        <a href="/events/{{$event->slug}}"><h2 class="text-white font-serif text-3xl">{{$event->title}}</h2></a>
        <p class="text-gray-200 font-sans text-lg mt-2">{{ date_format($event->start_date, 'F j') }}@if($event->end_date)- {{ date_format($event->end_date, 'F j') }}@endif</p>
        @if($event->photo)
            <a href="/events/{{$event->slug}}"><img class="w-96 mt-4 border border-gray-800" src="{{ asset('storage/'. $event->photo) }}" alt="{{ $event->title }}"></a>
        @else
            <a href="/events/{{$event->slug}}"><img src="/images/placeholder.jpg" alt="placeholder image"></a>
        @endif
        <a href="/events/{{$event->slug}}"  class="mt-4 font-sans rounded-full bg-white px-4 py-2.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Learn More</a>
    </div>
@endif 
</div>
