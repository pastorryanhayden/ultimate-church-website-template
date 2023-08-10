@extends('layouts.content')
@section('header')
<h1>Devotions</h1>
@endsection
@section('content')
@foreach ($devotions as $devotion)
<article class="devotions-list-item">
    <div class="content">
        <div class="details">
            <h3><a href="/devotion/{{ $devotion->id }}">{{ $devotion->title }}</a></h3>
            <p class="dates">{{ \Carbon\Carbon::parse($devotion->date)->format('F j, Y') }}</p>
            <p class="description">{{ $devotion->text }}</p>
            <a class="learn-more" href="/devotion/{{ $devotion->id }}">Read More @include('partials.icons.chevright')</a>
        </div>
        @if($devotion->image_url)
        <img src="{{ asset('storage/'. $devotion->image_url) }}" alt="{{ $devotion->title }}">
        @elseif($devotion->youtube_id)
         <img src="http://img.youtube.com/vi/{{ $devotion->youtube_id }}/maxresdefault.jpg" alt="placeholder image">
        @else 
        <img src="/images/devotional-placeholder.jpg" alt="placeholder image">
        @endif
    </div>
</article>
@endforeach


{{ $devotions->links('partials._pagination') }}

@endsection
