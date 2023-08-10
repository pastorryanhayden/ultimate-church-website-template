@extends('layouts.content')
@section('header')
<h1 class="devotion-header"><a href="/devotion">Devotions</a> / {{ $devotion->title }}</h1>
@endsection
@section('content')
<div class="devotion">
{{-- If there is a video_url show an embed --}}
@if($devotion->video_url)
<div class="video-wrapper">
    <iframe width="560" height="315"   src="https://www.youtube.com/embed/{{ $devotion->youtube_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
@elseif($devotion->image_url)
<img class="header-image" src="{{ asset('storage/'. $devotion->image_url) }}" alt="{{ $devotion->title }}">
@endif

<h1>{{ $devotion->title }}</h1>
<div class="details">
<p class="dates">Written On: {{ \Carbon\Carbon::parse($devotion->date)->format('F j, Y') }}</p>
<p class="author">Written by: {{ $devotion->author->name }}</p>
</div>
@if($devotion->audio_url)
<figure class="audio">
  <figcaption>Listen to "{{ $devotion->title }}":</figcaption>
  <audio controls src="{{ asset('storage/'. $devotion->audio_url) }}">
    <a href="{{ asset('storage/'. $devotion->audio_url) }}"> Download audio </a>
  </audio>
</figure>
@endif 
<article class="prose">
{!!  $devotion->body !!}
</article>
<hr>

</div>
@endsection 
