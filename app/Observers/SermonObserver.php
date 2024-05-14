<?php

namespace App\Observers;

use App\Models\Sermon;

class SermonObserver
{
    /**
     * Handle the Sermon "created" event.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return void
     */
    public function created(Sermon $sermon)
    {
        //
    }

    /**
     * Handle the Sermon "updated" event.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return void
     */
    public function updated(Sermon $sermon)
    {
        //
    }

    /**
     * Handle the Sermon "deleted" event.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return void
     */
    public function deleted(Sermon $sermon)
    {
        //
    }

    /**
     * Handle the Sermon "restored" event.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return void
     */
    public function restored(Sermon $sermon)
    {
        //
    }

    /**
     * Handle the Sermon "force deleted" event.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return void
     */
    public function forceDeleted(Sermon $sermon)
    {
        //
    }
}
