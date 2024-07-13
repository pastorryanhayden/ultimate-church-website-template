<?php

namespace App\Livewire\Devotion;

use App\Models\Devotion;
use App\Services\GetYoutubeIdService;
use Livewire\Component;

class Single extends Component
{
    public $devotion;

    public function mount($id)
    {
        $this->devotion = Devotion::find($id);
        if ($this->devotion->video_url) {
            $vid = GetYoutubeIdService::getId($this->devotion->video_url);
            $this->devotion->video_url = $vid;
        }
    }

    public function render()
    {

        return view('livewire.devotion.single');
    }
}
