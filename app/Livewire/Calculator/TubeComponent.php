<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class TubeComponent extends Component
{
    public $diameter, $length, $weight, $tickness;
    public $lenArm, $weiArm;
    public $lw = true;
    public $resWeight, $resLength;
    public function render()
    {
        return view('livewire.calculator.tube-component');
    }
    public function mount()
    {
        $this->diameter = 0;
        $this->tickness = 0;
        $this->length = 1;
        $this->weight =1000;
        $this->resWeight = 0;
        $this->resLength = 0;
    }

    public function changeLW()
    {
        $this->lw = true;
    }
    public function changeWL()
    {
        $this->lw = false;
    }

    public function CalcWeight()
    {
        $this->diameter = floatval($this->diameter);
        $this->tickness = floatval($this->tickness);
        $this->length = floatval($this->length);
        $sec_stenki = (pi()*($this->diameter-(2*$this->tickness)))*($this->tickness/2);
        //M = (удельный вес кг/м3 * 0.000001 * 3.141592 * L) * S (Dн — S) S — толщина стенки Dн — наружный диаметр L — длина трубы.
        $w = (0.785*0.01*pi()*$this->length)*$this->tickness*($this->diameter-$this->tickness);

        $this->resWeight = round($w, 3);
    }

    public function updatedDiameter()
    {
        $this->CalcWeight();
    }

    public function updatedTickness()
    {
        $this->CalcWeight();
    }

    public function updatedLength()
    {
        $this->CalcWeight();
    }
}
