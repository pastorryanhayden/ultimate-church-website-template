@extends('layouts.content')

@section('content')
<section>
<h2>What are your services like?</h2>
<p>If you are planning on visiting a service at Bible Baptist, you probably want to know what the services are like. Services at BBC could be described in the following four ways:</p>
<img src="/images/gospel-centered.jpg" alt="">
<h3>Gospel Centered</h3>
<p>We believe that the gospel (Christ's earning our Salvation through His work on the cross) is to be the central theme of our ministry.  The gospel is thus at the heart of everything we do.  We preach it, sing about it, and try to work out its implications in our lives.  We send missionaries around the world to preach the gospel and meet weekly to help print and prepare Bibles and other gospel literature for them to use.</p>
<img src="/images/bible-based.jpg" alt="">
<h3>Bible Based</h3>
<p>At Bible Baptist we try to live up to our name and keep everything Bible based.  Every service will have a Bible message. Our pastors regularly preach expository sermons through books of the Bible.</p>
<p>We believe that the Bible is our ultimate authority and that God has provided us with everythign we need to live sucessful Christian lives in His word.  So we make a lot of the Bible and spend most of our gathered time in Bible preaching and teaching.</p>
<img src="/images/traditional.jpg" alt="">
<h3>Traditional</h3>
<p>At Bible Baptist, we honor the traditions of our past.  We sing from hymn books.  We have a choir. We sit on pews.  Many of our people still dress up in "church clothes."  While we are not stuffy or legalistic about these things, we are definitely a traditional church.</p>
<p>A typical service at Bible Baptist lasts around an hour.  We sing, we pray, we preach and we break for fellowship.  Everything about our services is intended to be as simple and as close to what the apostles did thousands of years ago as possible.</p>
</section>
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