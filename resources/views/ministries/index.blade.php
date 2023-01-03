@extends('layouts.content')

@section('header')
<h1>Ministries</h1>
@endsection
@section('content')
<div class="container">
@foreach ($ministries as $ministry)
    <article class="ministry">
        <img src="{{ asset('/storage/' . $ministry->image ) }}" alt="{{ $ministry->name }}">
        <div class="content">
        <h3>{{ $ministry->name }}</h3>
        <p class="for">{{ $ministry->for }}</p>
        <p class="info">{{ $ministry->meeting_info }}</p>
        <a class="learn-more" href="/ministry/{{ $ministry->slug }}">Learn More @include('partials.icons.chevright')</a>
        </div>
    </article>    
@endforeach
</div>
@endsection