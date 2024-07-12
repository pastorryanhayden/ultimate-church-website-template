<?php

namespace App\Observers;

use App\Models\Sermon;
use App\Services\CleanUpManuscriptService;

class SermonObserver
{
    /**
     * Handle the Sermon "created" event.
     */
    public function created(Sermon $sermon): void
    {
        if ($sermon->manuscript && $sermon->manuscript != '') {
            $sermon->manuscript = CleanUpManuscriptService::clean($sermon->manuscript);
        }
        $sermon->save();
    }

    /**
     * Handle the Sermon "updated" event.
     */
    public function updated(Sermon $sermon): void
    {
        if ($sermon->manuscript && $sermon->manuscript != '') {
            $sermon->manuscript = CleanUpManuscriptService::clean($sermon->manuscript);
        }
        $sermon->save();
    }

    /**
     * Handle the Sermon "deleted" event.
     */
    public function deleted(Sermon $sermon): void
    {
        //
    }

    /**
     * Handle the Sermon "restored" event.
     */
    public function restored(Sermon $sermon): void
    {
        //
    }

    /**
     * Handle the Sermon "force deleted" event.
     */
    public function forceDeleted(Sermon $sermon): void
    {
        //
    }
}
