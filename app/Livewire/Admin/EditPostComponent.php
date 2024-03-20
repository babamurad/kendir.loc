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
    public $title_en, $title_ru, $title_tm;

    #[Validate('required|min:20')]
    public $text_en, $text_ru, $text_tm;

    public $image;

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
        $this->title_en = $post->title_en;
        $this->text_en = $post->text_en;
        $this->title_ru = $post->title_ru;
        $this->text_ru = $post->text_ru;
        $this->title_tm = $post->title_tm;
        $this->text_tm = $post->text_tm;
        $this->image = $post->image;
    }

    public function updatePost()
    {

        $this->validate();
        //dd('update validate');
        $post = Post::findOrFail($this->id);
        $post->title_en = $this->title_en;
        $post->text_en = $this->text_en;
        $post->title_ru = $this->title_ru;
        $post->text_ru = $this->text_ru;
        $post->title_tm = $this->title_tm;
        $post->text_tm = $this->text_tm;

        if ($this->newimage){
            if (file_exists('images/posts/'.$this->image)){
                unlink('images/posts/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('posts', $imageName);
            $post->image = $imageName;
        }
        $post->update();
        $this->resetInputFields();
        redirect()->route('admin.posts');
        session()->flash('success', __('Post has been updated successfully!'));
    }

    public function resetInputFields()
    {
        $this->title_en = '';
        $this->text_en = '';
        $this->title_ru = '';
        $this->text_ru = '';
        $this->title_tm = '';
        $this->text_tm = '';
        $this->image = '';
    }
}
