<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class Single extends Component
{
    public $article;

    public function mount($slug)
    {
        $this->article = Article::where('slug', $slug)->first();
    }

    public function render()
    {

        return view('livewire.article.single');
    }
}
