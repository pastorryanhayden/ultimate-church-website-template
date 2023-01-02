@extends('layouts.content')

@section('header')
<h1>Upcoming Events</h1>
@endsection
@section('content')
@foreach ($events as $event)
    <article class="event">
    <div class="content">
        <div class="details">
        <h4>Next Event</h4>
        <h3>{{ $event->title }}</h3>
        <p class="dates">{{ \Carbon\Carbon::parse($event->start_date)->format('F j, Y') }} @if($event->end_date)- {{ \Carbon\Carbon::parse($event->end_date)->format('F j, Y') }} @endif</p>
        <p class="description">{{ $event->description }}</p>
        <a class="learn-more" href="/events/{{ $event->slug }}">Learn More @include('partials.icons.chevright')</a>
        </div>
     
        @if($event->photo)
            <img src="{{ asset('storage/'. $event->photo) }}" alt="{{ $event->title }}">
        @else
            <img src="/images/placeholder.jpg" alt="placeholder image">
        @endif

</div>
    </article>    
@endforeach
@endsection