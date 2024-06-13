<?php

namespace App\Livewire\Sermons;

use Livewire\Component;
use App\Models\Sermon;
use Illuminate\Support\Facades\Storage;
use Parsedown;


class Single extends Component
{
    public $sermon;
    public $haswords;

    public function mount($slug)
    {
        $this->sermon = Sermon::where('slug', $slug)->first();
    }

    public function hasMoreThanFiftyWords($markdown)
    {
        $parsedown = new Parsedown();
        $plainText = strip_tags($parsedown->text($markdown));
        $wordCount = str_word_count($plainText);

        return $wordCount > 50;
    }

    public function downloadMp3()
    {
          $name = $this->sermon->slug . '.mp3';
          return Storage::disk('vultr')->download($this->sermon->mp3, $name);
    }
    public function downloadSlides()
    {
          $name = $this->sermon->slug .'-slides.pdf';
          return Storage::disk('vultr')->download($this->sermon->slides, $name);
    }
    public function downloadHandout()
    {
          $name = $this->sermon->slug .'-handout.pdf';
          return Storage::disk('vultr')->download($this->sermon->handout, $name);
    }

    

    public function render()
    {
        $moreThanFiftyWords = $this->hasMoreThanFiftyWords($this->sermon->manuscript);



        return view('livewire.sermons.single', [
            'moreThanFiftyWords' => $moreThanFiftyWords,
        ])->title('Sermons');
    }
}
