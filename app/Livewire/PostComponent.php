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

    public $searchTerm = '';
    public function render()
    {
        $title = 'title_'.session()->get('locale');

        if ( strlen($this->searchTerm) >=3 ) {
            $posts = Post::where($title, 'like', '%'.$this->searchTerm.'%')->with('authorPost')->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $posts = Post::with('authorPost')->orderBy('created_at', 'desc')->paginate(6);
        }

        $latestPosts = Post::orderBy('id', 'desc')->limit(3)->get();

        return view('livewire.post-component', compact('posts', 'latestPosts'));
    }

    public function search()
    {
        //
    }

}
