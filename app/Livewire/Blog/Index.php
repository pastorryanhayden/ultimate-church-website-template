<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\BlogPost;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.blog.index', [
            'posts' => BlogPost::where('published', true)->orderBy('created_at', 'desc')->paginate(5),
        ]);
    }
}
