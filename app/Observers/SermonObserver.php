<?php

namespace App\Observers;

use App\Models\Sermon;
use App\Services\CleanUpManuscriptService;

class SermonObserver
{
    /**
     * Handle the Sermon "created" event.
     *
     * @return void
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
     *
     * @return void
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
     *
     * @return void
     */
    public function deleted(Sermon $sermon): void
    {
        //
    }

    /**
     * Handle the Sermon "restored" event.
     *
     * @return void
     */
    public function restored(Sermon $sermon): void
    {
        //
    }

    /**
     * Handle the Sermon "force deleted" event.
     *
     * @return void
     */
    public function forceDeleted(Sermon $sermon): void
    {
        //
    }
}
