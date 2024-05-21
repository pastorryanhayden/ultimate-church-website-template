<div>
    <ul>
 @foreach($sermons as $sermon)
<li><a href="/sermons/{{$sermon->slug}}">{{ $sermon->title }}</a></li>
@endforeach
</ul>
</div>
