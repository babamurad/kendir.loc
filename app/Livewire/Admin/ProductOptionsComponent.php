<?php

namespace App\Livewire\Admin;

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Option;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ProductOptionsComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $del_name = '', $del_id;
    public $edit_name = '', $edit_id;
    public $attr_name;
    public $category_id;
    public function render()
    {
        $categories = Category::with('cparent')->with('children')->get();
        $attributes = Attribute::where('category_id', '=', $this->category_id)->get();

        return view('livewire.admin.product-options-component',
            compact('categories', 'attributes'))
            ->layout('components.layouts.admin.app');
    }

    public function createAttr()
    {
        $attr = new Attribute();
        $attr->name = $this->attr_name;
        $attr->category_id = $this->category_id;
        $attr->save();

        $this->dispatch('closeCreateOptionModal');
        session()->flash('success', 'The attribute has been added.');
    }

    public function edit($id)
    {
        $edit = Option::findOrFail($id)->first();
        $this->edit_id = $edit->id;
        $this->edit_name = $edit->name;
    }

    public function update()
    {
        $opt = Option::findOrFail($this->edit_id)->first();
        $opt->name = $this->edit_name;
        $opt->update();
        $this->dispatch('closeEditOptionModal');
        session()->flash('success', 'The attribute has been updated.');
    }

    public function deleteId($id)
    {
        $del_op = Attribute::findOrFail($id)->first();
        $this->del_name = $del_op->name;
        $this->del_id = $del_op->id;
    }

    public function destroy()
    {
        $del_op = Attribute::find($this->del_id);
        $del_op->delete();
        $this->dispatch('closeDeleteOptionsModal');
        session()->flash('error', 'Option has been deleted!');
    }
}
