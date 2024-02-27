<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        //$posts = Post::orderBy('id', 'desc')->paginate(6);
        //$posts = DB::select('SELECT p.id, p.title, p.text, p.created_at, p.image, u.name FROM posts p, users u WHERE u.id=p.author');
        $posts = DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.author')
            ->select('posts.id', 'posts.title', 'posts.text', 'posts.image', 'posts.created_at', 'users.name' )->paginate(6);

        $latestPosts = Post::orderBy('id', 'desc')->limit(3)->get();

        return view('livewire.post-component', compact('posts', 'latestPosts'));
    }

}
