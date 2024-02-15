<?php

namespace App\Livewire\Admin\Carousel;

use App\Models\Carousel;
use Carbon\Carbon;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCarousel extends Component
{
    use WithFileUploads;
    #[Rule('required|min:3|max:255')]
    public $title;

    #[Rule('required|min:3|max:255')]
    public $text;

    #[Rule('required|image|max:1024', onUpdate: false)]
    public $image;

    #[Rule('image|max:1024')]
    public $newimage;
    public $edit_id;

    public function render()
    {
        return view('livewire.admin.carousel.edit-carousel');
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
