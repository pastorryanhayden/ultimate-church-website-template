@extends('layouts.content')

@section('content')
<section>
<h2>{{ $about->what_services_like_title }}</h2>
{!! $about->what_services_like !!}
</section>
@if($about->show_pastors)
<section>
@if($leaders->count() > 1)
<h2>Who are your pastors?</h2>
@else 
<h2>Who is your pastor?</h2>
@endif
@foreach ($leaders as $leader)
    
@if($leader->lead_pastor == true)
<article>

<h3>{{ $leader->name }}, {{ $leader->position }}</h3>
<img src="{{ asset('storage/'. $leader->photo) }}" alt="{{ $leader->name }}">
{!! $leader->bio !!}
</article>
@endif
@if($leader->lead_pastor == false)


<article>

<h3>{{ $leader->name }}, {{ $leader->position }}</h3>
<img src="{{ asset('storage/'. $leader->photo) }}" alt="{{ $leader->name }}">
{!! $leader->bio !!}
</article>
@endif 
@endforeach
</section>
@endif 
@if($about->what_church_like)
<section>
<h2>{{ $about->what_church_like_title }}</h2>
{!! $about->what_church_like !!}
</section>
@endif 
@if($about->other_info)
<section>
<h2>{{ $about->other_info_title }}</h2>
{!! $about->other_info !!}
</section>
@endif 

@endsection