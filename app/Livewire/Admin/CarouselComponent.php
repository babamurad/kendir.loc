<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\CarouselForm;
use App\Models\Carousel;
use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Attributes\Validate;

class CarouselComponent extends Component
{
    use WithPagination;
    use WithFileUploads;

    #[Validate('required|min:3|max:255', as: 'Please provide a carousel title')]
    public $title_en;
    #[Rule('required|min:3|max:255')]
    public $text_en;

    #[Validate('required|min:3|max:255', as: 'Please provide a carousel title')]
    public $title_ru;
    #[Rule('required|min:3|max:255')]
    public $text_ru;

    #[Validate('required|min:3|max:255', as: 'Please provide a carousel title')]
    public $title_tm;
    #[Rule('required|min:3|max:255')]
    public $text_tm;

    #[Rule('required|max:2048')]
    public $image;
    public $edit_mode = false;

    //#[Rule('image|max:2048')]
    public $newimage;
    public $del_id, $del_name, $edit_id;

//    #[On('carousel-add')]
//    #[On('carousel-edit')]
//    #[On('carousel-delete')]
    public function render()
    {
        $items = Carousel::all();
        return view('livewire.admin.carousel-component', compact('items'))->layout('components.layouts.admin.app');
    }

    public function createItem()
    {
        $item = new Carousel();
        $item->title_en = $this->title_en;
        $item->title_ru = $this->title_ru;
        $item->title_tm = $this->title_tm;
        $item->text_en = $this->text_en;
        $item->text_ru = $this->text_ru;
        $item->text_tm = $this->text_tm;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('carousel', $imageName);
        $item->image = $imageName;
        $item->save();
        $this->resetInputFields();
        $this->dispatch('closeAddItemModal');
        $this->dispatch('carousel-add');
        session()->flash('success', __('Carousel item has been added successfully!'));
    }

    public function editItem($id)
    {
        $this->edit_mode = true;
        $item = Carousel::findOrFail($id);
        $this->edit_id = $item->id;
        $this->title_en = $item->title_en;
        $this->title_ru = $item->title_ru;
        $this->title_tm = $item->title_tm;
        $this->text_en = $item->text_en;
        $this->text_ru = $item->text_ru;
        $this->text_tm = $item->text_tm;
        $this->image = $item->image;
    }

    public function update()
    {
        $this->validate();
        $item = Carousel::findOrFail($this->edit_id);
        $item->title_en = $this->title_en;
        $item->title_ru = $this->title_ru;
        $item->title_tm = $this->title_tm;
        $item->text_en = $this->text_en;
        $item->text_ru = $this->text_ru;
        $item->text_tm = $this->text_tm;
        if ($this->newimage){
            unlink('images/carousel/'.$this->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            //dd($imageName);
            $this->newimage->storeAs('carousel', $imageName);
            $item->image = $imageName;
        }
        $item->update();
        $this->dispatch('closeEditItemModal');
        $this->resetInputFields();
        $this->edit_mode = false;
        session()->flash('success', __('Carousel item has been updated successfully!'));

    }

    public function deleteId($id)
    {
        $item = Carousel::findOrFail($id);
        $this->del_id = $item->id;
        $this->image = $item->image;
        $this->del_name = $item->title;
    }

    public function deleteItem()
    {
        $item = Carousel::find($this->del_id);
        $item->delete();
        $this->dispatch('closeDeleteItemModal');
        session()->flash('error', 'Carousel item has been deleted!');
    }

    public function cancel()
    {
        $this->resetInputFields();
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
