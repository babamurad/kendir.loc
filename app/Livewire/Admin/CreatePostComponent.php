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
    public $title;
    #[Validate('image')]
    public $image;
    #[Validate('required|min:20')]
    public $text;

    public function render()
    {
        return view('livewire.admin.create-post-component')
            ->layout('components.layouts.admin.app');
    }

    public function addPost()
    {
        $this->validate();

        $post = new Post();
        $post->title = $this->title;
        $post->text = $this->text;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('posts', $imageName);
        $post->image = $imageName;
        $post->save();
        $this->resetFields();
        redirect()->route('admin.posts');
        session()->flash('success', __('Post has been added successfully!'));
    }

    public function resetFields()
    {
        $this->title = '';
        $this->text = '';
        $this->image = '';
    }
}
