<?php

namespace App\Livewire\Admin\Carousel;

use App\Models\Carousel;
use Carbon\Carbon;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateCarousel extends Component
{
    use WithFileUploads;
    #[Rule('required|min:3|max:255')]
    public $title;

    #[Rule('required|min:3|max:255')]
    public $text;

    #[Rule('required|image|max:1024')]
    public $image;

    public function render()
    {
        return view('livewire.admin.carousel.create-carousel');
    }

    public function create()
    {
        $this->validate();
        $item = new Carousel();
        $item->title = $this->title;
        $item->text = $this->text;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('carousel', $imageName);
        $item->image = $imageName;
        $item->save();
        $this->dispatch('closeCreateCarousel');
        $this->resetInputFields();
        session()->flash('success', __('Carousel item has been added successfully!'));

    }

    public function cancel()
    {
        $this->resetInputFields();
    }

    public function resetInputFields()
    {
        $this->title = '';
        $this->text = '';
        $this->image = '';
    }
}
