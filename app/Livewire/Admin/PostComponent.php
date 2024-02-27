<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    public $search = '';
    public $title, $image, $text;
    public $del_name = '';
    public $del_id;

    public function render()
    {
        if ($this->search){
            $posts = Post::where('title', 'like', '%'.$this->search.'%')->orderBy('id', 'desc')->paginate($this->perPage);
        } else {
            //$posts = Post::orderBy('id', 'desc')->paginate($this->perPage);
            $posts = DB::table('posts')
                ->join('users', 'users.id', '=', 'posts.author')
                ->select('posts.id', 'posts.title', 'posts.text', 'posts.image', 'posts.created_at', 'users.name')
                ->orderBy('id', 'desc')
                ->paginate($this->perPage);
        }

        return view('livewire.admin.post-component', compact('posts'))
            ->layout('components.layouts.admin.app');
    }

    public function deleteId($id)
    {
        $this->del_id = $id;
        //dd($this->del_id);
        $post = Post::findOrFail($id);
        $this->del_name = $post->title;
    }

    public function deletePost()
    {
        $post = Post::find($this->del_id);
        $post->delete();
        $this->dispatch('closeDeletePostModal');
        session()->flash('error', 'Post has been deleted!');
    }
}
