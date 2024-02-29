<?php

namespace App\Livewire\Admin;

use App\Models\Manufacturer;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class ManufacturerComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    #[Validate('required')]
    public $code;
    #[Validate('required')]
    public $name;
    #[Validate('max:1024')]
    public $image;
    #[Validate('max:1024')]
    public $newimage;

    public $del_id, $del_name, $edit_id;
    public $edit_mode = 0;

    public function render()
    {
        $manufs = Manufacturer::orderBy('id', 'desc')->paginate(5);
        return view('livewire.admin.manufacturer-component', compact('manufs'))
            ->layout('components.layouts.admin.app');
    }

    public function create()
    {
        $this->validate();

        $manuf = new Manufacturer();
        $manuf->code = $this->code;
        $manuf->name = $this->name;
        if ($this->image) {
            $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('manufacturer', $imageName);
            $manuf->image = $imageName;
        }
        $manuf->save();
        $this->dispatch('closeCreateManufacturerModal');
        $this->resetInputFields();
        session()->flash('success', __('Manufacturer has been added successfully!'));
    }

    public function resetInputFields()
    {
        $this->code = '';
        $this->name = '';
        $this->image = '';
    }

    public function deleteId($id)
    {
        $manuf = Manufacturer::findOrFail($id);
        $this->del_id = $manuf->id;
        $this->del_name = $manuf->name;
    }

    public function cancel()
    {
        $this->resetInputFields();
        $this->edit_mode = 0;
    }

    public function deleteManufacturer()
    {
        $manuf = Manufacturer::find($this->del_id);
        $manuf->delete();
        $this->dispatch('closeDeleteManufacturerModal');
        session()->flash('error', 'Manufacturer has been deleted!');
    }

    public function edit($id)
    {
        $this->edit_mode = 1;
        $manuf = Manufacturer::findOrFail($id);
        $this->edit_id = $manuf->id;
        $this->code = $manuf->code;
        $this->name = $manuf->name;
        $this->image = $manuf->image;
    }

    public function update()
    {
        $this->validate();

        $manuf = Manufacturer::findOrFail($this->edit_id);
        $manuf->name = $this->name;
        $manuf->code = $this->code;
        if ($this->newimage){
            if (file_exists('images/manufacturer/'.$this->image)){
                unlink('images/manufacturer/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('manufacturer', $imageName);
            $manuf->image = $imageName;
        }
        $manuf->update();
        $this->dispatch('closeEditManufacturerModal');
        $this->resetInputFields();
        session()->flash('success', __('Manufacturer has been updated successfully!'));
        $this->edit_mode = false;
    }
}
