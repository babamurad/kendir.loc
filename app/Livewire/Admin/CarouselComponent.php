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
    public $items;
    #[Validate('required|min:3|max:255', as: 'Please provide a carousel title')]
    public $title;

    #[Rule('required|min:3|max:255')]
    public $text;

    #[Rule('required|max:2048')]
    public $image;

    //#[Rule('image|max:2048')]
    public $newimage;
    public $del_id, $del_name, $edit_id;

    public function render()
    {
        //dd('render');
        $items = Carousel::all();
        //dd($items->count());
        return view('livewire.admin.carousel-component',
        compact('items')
        )->layout('components.layouts.admin.app');
    }

    #[On('carousel-add')]
    #[On('carousel-edit')]
    #[On('carousel-delete')]
    public function mount()
    {
        //dd('mount');
        $this->items = Carousel::all();
        //dd($this->items[0]);
    }

    public function editItem($id)
    {
        $item = Carousel::findOrFail($id);
        $this->edit_id = $item->id;
        $this->title = $item->title;
        $this->text = $item->text;
        $this->image = $item->image;
    }

    public function update()
    {
        $this->validate();
        $item = Carousel::findOrFail($this->edit_id);
        $item->title = $this->title;
        $item->text = $this->text;
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
        session()->flash('success', __('Carousel item has been added successfully!'));

    }

    public function deleteId($id)
    {
        $item = Carousel::findOrFail($id);
        $this->del_id = $item->id;
        $this->title = $item->title;
        $this->text = $item->text;
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
        $this->title = '';
        $this->text = '';
        $this->image = '';
    }
}
