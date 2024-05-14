<?php

namespace App\Observers;


use App\Models\ChapterSermon;
use App\Models\BookSermon;


class ChapterSermonObserver
{
    /**
     * Handle the ChapterSermon "created" event.
     *
     * @param  \App\Models\ChapterSermon  $chapterSermon
     * @return void
     */
    public function created(ChapterSermon $chapterSermon)
    {
            $bookSermon = new BookSermon();
            $bookSermon->book_id = $chapterSermon->book_id;
            $bookSermon->sermon_id = $chapterSermon->sermon_id;
            $bookSermon->save();
    }

    /**
     * Handle the ChapterSermon "updated" event.
     *
     * @param  \App\Models\ChapterSermon  $chapterSermon
     * @return void
     */
    public function updated(ChapterSermon $chapterSermon)
    {
        $booksermon = BookSermon::where('sermon_id', $chapterSermon->sermon_id)->where('book_id', $chapterSermon->book_id)->first();
        $booksermon->book_id = $chapterSermon->book_id;
        $booksermon->save();
    }

    /**
     * Handle the ChapterSermon "deleted" event.
     *
     * @param  \App\Models\ChapterSermon  $chapterSermon
     * @return void
     */
    public function deleted(ChapterSermon $chapterSermon)
    {
        $booksermon = BookSermon::where('sermon_id', $chapterSermon->sermon_id)->where('book_id', $chapterSermon->book_id)->first();
        if ($booksermon)
        {
            $booksermon->delete();
        }

    }

    /**
     * Handle the ChapterSermon "restored" event.
     *
     * @param  \App\Models\ChapterSermon  $chapterSermon
     * @return void
     */
    public function restored(ChapterSermon $chapterSermon)
    {
        //
    }

    /**
     * Handle the ChapterSermon "force deleted" event.
     *
     * @param  \App\Models\ChapterSermon  $chapterSermon
     * @return void
     */
    public function forceDeleted(ChapterSermon $chapterSermon)
    {
        //
    }
}
