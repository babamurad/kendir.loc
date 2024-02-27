<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        return view('livewire.post-component', compact('posts'));
    }

}
