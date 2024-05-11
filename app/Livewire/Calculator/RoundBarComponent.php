<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class RoundBarComponent extends Component
{
    public $diameter, $length, $weight;
    public $lenArm, $weiArm;
    public $lw = true;
    public $resWeight, $resLength;

    public function render()
    {
        return view('livewire.calculator.round-bar-component');
    }

    public function mount()
    {
        $this->diameter = 1;
        $this->length = 1;
        $this->weight = 1000;
        $this->resWeight = 0;
        $this->resLength = 0;
    }

    public function calcRound()
    {
        $r = floatval((($this->diameter) / 1000) / 2);
        //dd($r);
        $l = floatval($this->length);
        $s = pi() * $r ** 2;
        //dd($s);
        $this->resWeight = number_format(round($s * $l * 7850, 3), '3', ',', ' ');

        $w = floatval($this->weight) / 1000;
        //dd($w);
        $this->resLength = number_format(round($w / ($s * 7.850), 3), '0', ',', ' ');
    }

    public function updatedDiameter()
    {
        $this->calcRound();
    }

    public function updatedLength()
    {
        $this->calcRound();
    }

    public function updatedWeight()
    {
        $this->calcRound();
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
