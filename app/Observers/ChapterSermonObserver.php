<?php

namespace App\Observers;

use App\Models\BookSermon;
use App\Models\ChapterSermon;

class ChapterSermonObserver
{
    /**
     * Handle the ChapterSermon "created" event.
     *
     * @return void
     */
    public function created(ChapterSermon $chapterSermon): void
    {
        $bookSermon = new BookSermon();
        $bookSermon->book_id = $chapterSermon->book_id;
        $bookSermon->sermon_id = $chapterSermon->sermon_id;
        $bookSermon->save();
    }

    /**
     * Handle the ChapterSermon "updated" event.
     *
     * @return void
     */
    public function updated(ChapterSermon $chapterSermon): void
    {
        $booksermon = BookSermon::where('sermon_id', $chapterSermon->sermon_id)->where('book_id', $chapterSermon->book_id)->first();
        $booksermon->book_id = $chapterSermon->book_id;
        $booksermon->save();
    }

    /**
     * Handle the ChapterSermon "deleted" event.
     *
     * @return void
     */
    public function deleted(ChapterSermon $chapterSermon): void
    {
        $booksermon = BookSermon::where('sermon_id', $chapterSermon->sermon_id)->where('book_id', $chapterSermon->book_id)->first();
        if ($booksermon) {
            $booksermon->delete();
        }

    }

    /**
     * Handle the ChapterSermon "restored" event.
     *
     * @return void
     */
    public function restored(ChapterSermon $chapterSermon): void
    {
        //
    }

    /**
     * Handle the ChapterSermon "force deleted" event.
     *
     * @return void
     */
    public function forceDeleted(ChapterSermon $chapterSermon): void
    {
        //
    }
}
