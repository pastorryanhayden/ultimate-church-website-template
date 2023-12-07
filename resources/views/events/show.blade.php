
@extends('layouts.content')
@section('header')
<h1>{{ $event->title }}</h1>

@endsection
@section('content')
<style>
article.single-ministry section.meeting-info {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
    padding: 1rem;
    margin-top: 1rem;
    background-color: #CFFAFE;
}
article.single-ministry section.meeting-info h3 {
    margin-top: 0;
}
</style>
<article class="single-ministry">
<img src="{{ asset('/storage/' . $event->photo ) }}" alt="{{ $event->title }}">
<div class="content">
<h2>{{ $event->title }}</h2>
<p class="for">For: {{ $event->for }}</p>
<section class="meeting-info">
    <h3>Main Info</h3>
    <p>{{ date_format($event->start_date, 'F j') }} @if($event->end_date)-{{ date_format($event->end_date, 'F j')}} @endif</p>
    <p>{{ $event->description }}</p>
</section>

</div>
<section class="body">
    {!! $event->body !!}
</section>
</article>

@endsection