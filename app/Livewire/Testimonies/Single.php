<?php

namespace App\Livewire\Testimonies;

use App\Models\Testimony;
use Livewire\Component;

class Single extends Component
{
    public $article;

    public function mount($slug)
    {
        $this->article = Testimony::where('slug', $slug)->first();
    }

    public function render()
    {
	    return view('livewire.testimonies.single')
		    ->title($this->article->title);
    }
}
