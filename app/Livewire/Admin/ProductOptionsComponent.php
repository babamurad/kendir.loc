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
    public $attr_name;
    public $category_id;
    public function render()
    {
        $categories = Category::with('cparent')->with('children')->get();
        $attributes = Attribute::with('category')->where('category_id', '=', $this->category_id)->paginate(5);
        if ($this->category_id) {
            $options = DB::select('SELECT o.attribute_id, a.name, a.category_id FROM options o, attributes a WHERE o.attribute_id=a.id AND a.category_id='
                . $this->category_id );
            $options = Option::hydrate($options);
        } else {
            $options = '';
        }
        return view('livewire.admin.product-options-component',
            compact('categories', 'options', 'attributes'))
            ->layout('components.layouts.admin.app');
    }

    public function createAttr()
    {
        //dd($this->attr_name);
        $attr = new Attribute();
        $attr->name = $this->attr_name;
        $attr->category_id = $this->category_id;
        $attr->save();
        $option = new Option();
        $option->attribute_id = $attr->id;
        $option->name = $attr->name;
        $option->save();
        $this->attr_name = '';
        $this->dispatch('closeCreateOptionModal');
        session()->flash('success', 'The attribute has been added.');
    }

    public function deleteId($id)
    {
        $del_op = Option::where('attribute_id', '=', $id)->first();
        $this->del_name = $del_op->name;
        $this->del_id = $del_op->id;
    }

    public function destroy()
    {
        $del_op = Option::find($this->del_id);
        $del_op->delete();
        $this->dispatch('closeDeleteOptionsModal');
        session()->flash('error', 'Option has been deleted!');
    }
}
