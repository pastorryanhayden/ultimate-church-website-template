<?php

namespace App\Livewire\Blog;

use App\Models\BlogPost;
use Livewire\Component;

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
