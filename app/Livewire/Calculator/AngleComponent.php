<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class AngleComponent extends Component
{
    public $length, $weight, $tikness, $sideA, $sideB;

    public $resWeight, $resLength;
    public $lw = true;

    public function render()
    {
        return view('livewire.calculator.angle-component');
    }

    public function mount()
    {
        $this->sideA = 0;
        $this->sideB = 0;
        $this->length = 1;
        $this->tikness = 1;
        $this->weight = 1000;
        $this->resWeight = 0;
        $this->resLength = 0;
    }

    public function CalcAngle()
    {
        $a = floatval($this->sideA);
        $b = floatval($this->sideB);
        $l = floatval($this->length)/100;
        $t = floatval($this->tikness);
        $w = floatval($this->weight) / 1000;
        $ww = (($a + $b - $t) * $t + (1 - pi()/4)) * 0.7850 * $l;
        $this->resWeight = number_format(round($ww, 3), 3, '.', ' ');

        $ll = $w * 1000/((($a + $b - $t) * $t + (1 - pi()/4)) * 0.007850);
        $this->resLength = number_format(round($ll, 3), 3, '.', ' ');

    }

    public function updatedLength()
    {
        $this->CalcAngle();
    }

    public function updatedSideA()
    {
        $this->CalcAngle();
    }

    public function updatedSideB()
    {
        $this->CalcAngle();
    }

    public function updatedTikness()
    {
        $this->CalcAngle();
    }

    public function updatedWeight()
    {
        $this->CalcAngle();
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
