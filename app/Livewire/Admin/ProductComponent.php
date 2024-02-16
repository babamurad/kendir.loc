<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class ProductComponent extends Component
{

    public function render()
    {
        return view('livewire.admin.product-component')->layout('components.layouts.admin.app');
    }
}
