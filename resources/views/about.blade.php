@extends('layouts.content')

@section('content')
<section>
<h2>{{ $about->what_services_like_title }}</h2>
{!! $about->what_services_like !!}
</section>
@if($about->show_pastors)
<section>
<h2>Who are your pastors?</h2>
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
<section>
<h2>Other Information</h2>
<p>Below you'll find links to important information that can answer other questions you may have about Bible Baptist.</p>
<ul class="link-list">
<li><a href="/documents/sof.pdf" target="blank">Statement of Faith</a></li>
<li><a href="/documents/ChurchCovenant.pdf" target="blank">Church Covenant</a></li>
<li><a href="/documents/constitution.pdf" target="blank">Church Constituation</a></li>
</ul>
</section>
@endif 
@endsection