<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PostDetailComponent extends Component
{
    public $id;
    public function render()
    {
        $post = Post::findOrFail($this->id);
        $author = User::where('id', '=', $post->author)->get();
        $posts = Post::where('author', '=', $post->author)->limit(2)->get();
        //dd($author);
        $lposts = Post::orderBy('id', 'desc')->limit(3)->get();
        return view('livewire.post-detail-component', compact('post', 'lposts', 'author', 'posts'));
    }

    public function mount($id)
    {
       $this->id = $id;
    }
}
