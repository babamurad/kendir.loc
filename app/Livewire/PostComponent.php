<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class PostComponent extends Component
{
    public function render()
    {
        $posts = Post::all();
        return view('livewire.post-component', compact('posts'));
    }

}
