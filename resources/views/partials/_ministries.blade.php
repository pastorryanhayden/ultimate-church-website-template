@if($ministries->count() > 1)
<section class="ministries">
    <hgroup>
    <h2>Something for you and your family</h2>
    <a href="/ministries">See All Ministries @include('partials.icons.chevright')</a>
   
    </hgroup>
     <div class="grid">
     @foreach ($ministries as $ministry)
         <article>
    <img src="{{ asset('storage/'. $ministry->image) }}" alt="">
    <div>
    <h4>{{ $ministry->for }}</h4>
    <h3>{{ $ministry->name }}</h3>
    <a href="#">Learn More @include('partials.icons.chevright')</a>
    </div>
    </article>
     @endforeach
</section>
@endif