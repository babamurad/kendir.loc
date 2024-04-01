<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class SteelPlateComponent extends Component
{
    public $length, $width, $tickness, $qty;
    public $lenArm, $weiArm;
    public $lw = true;
    public $resWeight, $resKv;
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
        $this->length = 1;
        $this->width = 1;
    }

    public function mount()
    {
       $this->length = 0;
       $this->width = 0;
       $this->tickness = 0;
       $this->qty = 1;
    }

    public function calcPlate()
    {
        $length = floatval($this->length);
        $width = floatval($this->width);
        $tik = floatval($this->tickness);
        $qt = floatval($this->qty);
        $this->resWeight = $length * $width * $tik * $qt * 7850*0.0000001;
        $this->resKv = $qt * $tik * 7850*0.0001;
    }

    public function updatedLength()
    {
        $this->calcPlate();
    }

    public function updatedWidth()
    {
        $this->calcPlate();
    }
    public function updatedTickness()
    {
        $this->calcPlate();
    }

    public function updatedQty()
    {
        $this->calcPlate();
    }
}
