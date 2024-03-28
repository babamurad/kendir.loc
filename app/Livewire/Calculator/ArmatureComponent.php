<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class ArmatureComponent extends Component
{
    public $diameter, $length, $weight;
    public $lenArm, $weiArm;
    public $lw = true;
    public $resWeight, $resLength;

    public function render()
    {
        return view('livewire.calculator.armature-component');
    }

    public function mount()
    {
        $this->diameter = 0;
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
        $s = floatval($this->diameter);
        $s= $s/2;
        $s = ($s*$s);
        $s = pi()*$s;
        $this->resWeight = round($s * $this->length * (0.00785), 3);
    }

    public function updatedDiameter()
    {
        $this->CalcWeight();
        $this->CalcLength();
    }

    public function updatedLength()
    {
        $this->CalcWeight();
        $this->CalcLength();
    }

    public function updatedWeight()
    {
        //dd('weight');
        $this->CalcLength();
    }

    public function CalcLength()
    {
        $s = floatval($this->diameter);
        $s= $s/2;
        $s = ($s*$s);
        $s = pi()*$s;
        //dd((1000/$s));
        $this->resLength = number_format($this->weight/($s*0.00785), 2, '.', ' ') ;
    }


}
