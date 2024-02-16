<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AddProductComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-product-component')->layout('components.layouts.admin.app');
    }
}
