<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePostComponent extends Component
{
    use WithFileUploads;

    #[Validate('required|min:3')]
    public $title_en, $title_ru, $title_tm;

    #[Validate('required|min:20')]
    public $text_en, $text_ru, $text_tm;

    #[Validate('image')]
    public $image;


    public function render()
    {
        return view('livewire.admin.create-post-component')
            ->layout('components.layouts.admin.app');
    }

    public function addPost()
    {
        $this->validate();

        //$post = Post::with('authorPost')->findOrFail($this->id);
        $post = new Post();
        //dd($this->text_ru);
        $post->title_en = $this->title_en;
        $post->title_ru = $this->title_ru;
        $post->title_tm = $this->title_tm;
        $post->text_en = $this->text_en;
        $post->text_ru = $this->text_ru;
        $post->text_tm = $this->text_tm;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('posts', $imageName);
        $post->image = $imageName;
        $post->author = auth()->user()->id;
        $post->save();
        $this->resetFields();
        redirect()->route('admin.posts');
        session()->flash('success', __('Post has been added successfully!'));
    }

    public function resetFields()
    {
        $this->title_en = '';
        $this->title_ru = '';
        $this->title_tm = '';
        $this->text_en = '';
        $this->text_ru = '';
        $this->text_tm = '';
        $this->image = '';
    }
}
