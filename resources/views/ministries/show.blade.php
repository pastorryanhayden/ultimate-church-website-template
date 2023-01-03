@extends('layouts.content')
@section('header')
<h1>{{ $ministry->name }}</h1>

@endsection
@section('content')
<article class="single-ministry">
<img src="{{ asset('/storage/' . $ministry->image ) }}" alt="{{ $ministry->name }}">
<div class="content">
<h2>{{ $ministry->name }}</h2>
<p class="for">{{ $ministry->for }}</p>
<section class="meeting-info">
    <h3>Meeting Info</h3>
    <p>{{ $ministry->meeting_info }}</p>
</section>
@if($ministry->leader->name)
<section class="contact">
    <h3>Contact</h3>
    <img src="{{ asset('/storage/' . $ministry->leader->photo ) }}" alt="{{ $ministry->leader->name }}">
    <h4>{{ $ministry->leader->name }}, {{ $ministry->leader->position }}</h4>
    <p><strong>Email: </strong> {{ $ministry->leader->email }}</p>
    <p><strong>Phone: </strong> {{ $ministry->leader->phone }}</p>
</section>
</div>
<section class="body">
    {!! $ministry->body !!}
</section>
</article>
@endif
@endsection