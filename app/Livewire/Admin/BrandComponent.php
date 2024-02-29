<?php

namespace App\Livewire\Admin;

use App\Models\Brand;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class BrandComponent extends Component
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
        $brands = Brand::orderBy('id', 'desc')->paginate(5);
        return view('livewire.admin.brand-component', compact('brands'))
            ->layout('components.layouts.admin.app');
    }

    public function create()
    {
        $this->validate();

        $brand = new Brand();
        $brand->code = $this->code;
        $brand->name = $this->name;
        if ($this->image) {
            $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('brands', $imageName);
            $brand->image = $imageName;
        }
        $brand->save();
        $this->dispatch('closeCreateBrandModal');
        $this->resetInputFields();
        session()->flash('success', __('Brand has been added successfully!'));
    }

    public function resetInputFields()
    {
        $this->code = '';
        $this->name = '';
        $this->image = '';
    }

    public function deleteId($id)
    {
        $brand = Brand::findOrFail($id);
        $this->del_id = $brand->id;
        $this->del_name = $brand->name;
    }

    public function cancel()
    {
        $this->resetInputFields();
        $this->edit_mode = 0;
    }

    public function deleteBrand()
    {
        $brand = Brand::find($this->del_id);
        $brand->delete();
        $this->dispatch('closeDeleteBrandModal');
        session()->flash('error', 'Brand has been deleted!');
    }

    public function editBrand($id)
    {
        $this->edit_mode = 1;
        $brand = Brand::findOrFail($id);
        $this->edit_id = $brand->id;
        $this->code = $brand->code;
        $this->name = $brand->name;
        $this->image = $brand->image;
    }

    public function updateBrand()
    {
        $this->validate();

        $brand = Brand::findOrFail($this->edit_id);
        $brand->name = $this->name;
        $brand->code = $this->code;
        if ($this->newimage){
            if (file_exists('images/brands/'.$this->image)){
                unlink('images/brands/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('brands', $imageName);
            $brand->image = $imageName;
        }
        $brand->update();
        $this->dispatch('closeEditBrandModal');
        $this->resetInputFields();
        session()->flash('success', __('Brand has been updated successfully!'));
        $this->edit_mode = false;
    }
}
