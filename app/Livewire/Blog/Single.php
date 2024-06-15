<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\BlogPost;

class Single extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = BlogPost::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.blog.single');
    }
}
