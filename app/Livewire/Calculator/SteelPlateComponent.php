<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class SteelPlateComponent extends Component
{
    public $diameter, $length, $weight, $tickness;
    public $lenArm, $weiArm;
    public $lw = true;
    public $resWeight, $resLength;
    public function render()
    {
        return view('livewire.calculator.steel-plate-component');
    }

    public function changeLW()
    {
        $this->lw = true;
    }
    public function changeWL()
    {
        $this->lw = false;
    }
}
