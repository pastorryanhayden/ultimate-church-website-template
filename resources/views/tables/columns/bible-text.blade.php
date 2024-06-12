<div>
    @foreach($getRecord()->chapterSermons as $bibleText)    
            @if($loop->last)
                <span class="text-xs italic">{{ $bibleText->book->name }} {{ $bibleText->chapter->number }}:{{ $bibleText->verse }}</span>
            @else
                <span class="text-xs italic">{{ $bibleText->book->name }} {{ $bibleText->chapter->number }}:{{ $bibleText->verse }}, </span>
            @endif
        
  @endforeach
</div>
