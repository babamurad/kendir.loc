<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Option;
use Livewire\Component;

class ProductOptionsComponent extends Component
{
    public $del_name = '';
    public function render()
    {
        $categories = Category::with('cparent')->with('children')->get();
        return view('livewire.admin.product-options-component',
            compact('categories'))
            ->layout('components.layouts.admin.app');
    }

    public function delete($id)
    {
        $del = Option::find($id);
        $this->del_name = $del->name;
    }
}
