<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\BlogPost;

class Index extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = BlogPost::where('published', true)->orderBy('created_at', 'desc')->get();
    }
    public function render()
    {
        return view('livewire.blog.index');
    }
}
