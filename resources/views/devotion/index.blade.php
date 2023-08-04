@extends('layouts.content')
@section('header')
<h1>Devotions</h1>
@endsection
@section('content')
@foreach ($devotions as $devotion)
<article class="devotions-list-item">
    <div class="content">
        <div class="details">
            <h3>{{ $devotion->title }}</h3>
            <p class="dates">{{ \Carbon\Carbon::parse($devotion->date)->format('F j, Y') }}</p>
            <p class="description">{{ $devotion->description }}</p>
            <a class="learn-more" href="/devotion/{{ $devotion->slug }}">Read More @include('partials.icons.chevright')</a>
        </div>
        @if($devotion->photo)
        <img src="{{ asset('storage/'. $devotion->photo) }}" alt="{{ $devotion->title }}">
        @else
        <img src="/images/placeholder.jpg" alt="placeholder image">
        @endif
    </div>
</article>
@endforeach

@endsection
