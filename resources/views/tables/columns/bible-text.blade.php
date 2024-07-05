<div>
    @foreach ($getRecord()->chapterSermons as $bibleText)
        @if (isset($bibleText->book))
            @if ($loop->last)
                <span class="text-xs italic">{{ $bibleText->book->name }}
                    {{ $bibleText->chapter->number }} @if ($bibleText->verse)
                        :{{ $bibleText->verse }}
                    @endif
                </span>
            @else
                <span class="text-xs italic">{{ $bibleText->book->name }}
                    {{ $bibleText->chapter->number }}@if ($bibleText->verse)
                        :{{ $bibleText->verse }}
                    @endif, </span>
            @endif
        @endif
    @endforeach
</div>
