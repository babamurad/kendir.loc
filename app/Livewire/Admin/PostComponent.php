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

    public $title_en, $text_en;
    public $title_ru, $text_ru;
    public $title_tm, $text_tm;

    public $image;
    public $del_name = '';
    public $del_id;

    public function render()
    {
        if ($this->search){
            $posts = Post::with('authorPost')->where('title', 'like', '%'.$this->search.'%')->orderBy('created_at', 'desc')->paginate($this->perPage);
        } else {
            $posts = Post::with('authorPost')->orderBy('created_at', 'desc')->paginate($this->perPage);
        }
        return view('livewire.admin.post-component', compact('posts'))
            ->layout('components.layouts.admin.app');
    }

    public function deleteId($id)
    {
        $this->del_id = $id;
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
