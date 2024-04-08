<?php

namespace App\Livewire\Roof;

use App\Models\Product;
use Livewire\Component;

class RoofComponent extends Component
{
    public $roofs = [];

    public function render()
    {
        $this->roofs = [
            [
                'title' => 'Односкатная'
            ],
            [
                'title' => 'Двускатная'
            ],
            [
                'title' => 'Многощипцовая'
            ],
            [
                'title' => 'Многощипцовая'
            ],
            [
                'title' => 'Мансардная'
            ],
            [
                'title' => 'Четырехскатная (Вальмовая)'
            ],
            [
                'title' => 'Полувальмовая двускатная'
            ],
            [
                'title' => 'Полувальмовая четырёхскатная'
            ],
        ];
        $product = Product::first();
        return view('livewire.roof.roof-component', compact('product'));
    }

    public function mount()
    {

    }
}
