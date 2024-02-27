<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPostComponent extends Component
{
    use WithFileUploads;
    #[Validate('required|min:3')]
    public $title;

    public $image;
    #[Validate('required|min:20')]
    public $text;
    public $id, $newimage;

    public function render()
    {
        $post = Post::with('authorPost')->findOrFail($this->id);
        //dd($post->authorPost->name);
        $author = User::where('id', '=', $post->author)->get();
        return view('livewire.admin.edit-post-component',compact('post', 'author'))
            ->layout('components.layouts.admin.app');
    }

    public function mount($id)
    {
        $this->id = $id;
        $post = Post::findOrFail($this->id);
        $this->title = $post->title;
        $this->text = $post->text;
        $this->image = $post->image;

    }

    public function updatePost()
    {
        $this->validate();
        $post = Post::findOrFail($this->id);
        $post->title = $this->title;
        if ($this->newimage){
            if (file_exists('images/posts/'.$this->image)){
                unlink('images/posts/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('posts', $imageName);
            $post->image = $imageName;
        }
        $post->text = $this->text;
        $post->update();
        $this->resetInputFields();
        redirect()->route('admin.posts');
        session()->flash('success', __('Post has been updated successfully!'));
    }

    public function resetInputFields()
    {
        $this->title = '';
        $this->text = '';
        $this->image = '';
    }
}
