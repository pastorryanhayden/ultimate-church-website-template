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
<section>
<h2>What is your church like?</h2>
<h3>Friendly</h3>
<p>Bible Baptist church is a friendly church made up of a bunch of imperfect people who really love each other and try to serve each other.  You'll often find our people fellowshipping together at a local restaurant. It's not uncommon to find them still fellowshipping together an hour after a service has ended. Despite their closeness, they will welcome you in and make you a part of the family.</p>
<h3>Multi-generational</h3>
<p>BBC is a church full of young people and young families. Our nurseries are full and it's very common to hear babies making sounds during a service.  On any given sunday, you'll worship with children as young as 2 and people as old as 92. </p>
<h3>Diverse</h3>
<p>We believe that the church is best when it reflects the diversity of God's people.  In our church you'll find rich and poor, educated and drop outs, people of all ages and from many different walks of life worshipping Christ together.</p>
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

@endsection