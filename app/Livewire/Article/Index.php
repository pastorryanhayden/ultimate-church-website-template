<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $articles;

    public function mount()
    {
        $this->articles = Article::where('published', true)->orderBy('order-column', 'asc')->get();
    }

    public function render()
    {
        return view('livewire.article.index')
            ->title('Articles from our church');
    }
}
