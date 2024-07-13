<?php

namespace App\Livewire;

use App\Models\Announcement as Shout;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Announcement extends Component
{
    public $announcement;

    public function mount()
    {
        $announcementId = Cookie::get('announcement_shown');

        if (! $announcementId) {
            $this->announcement = Shout::where('start', '<=', Carbon::now())
                ->where('end', '>=', Carbon::now())
                ->first();

            if ($this->announcement) {
                Cookie::queue('announcement_shown', $this->announcement->id, 30); // The cookie lasts for 60 minutes
            }
        }
    }

    public function render()
    {
        return view('livewire.announcement');
    }
}
