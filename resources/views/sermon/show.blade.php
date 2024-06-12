@extends('layouts.content')
@section('header')
<div class="breadcrumbs">
    <a href="/sermons">Back to sermons</a>
</div>
<h1>Sermon: {{$sermon->title}}</h1>
@endsection
@section('content')
{{}}
@endsection