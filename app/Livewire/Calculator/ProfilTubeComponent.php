<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class ProfilTubeComponent extends Component
{
    public $length, $weight, $tikness, $sideA, $sideB;

    public $lw = true;
    public $resWeight, $resLength;

    public function render()
    {
        return view('livewire.calculator.profil-tube-component');
    }

    public function mount()
    {
        $this->length = 1;
        $this->weight = 1000;
        $this->tikness = 1;
        $this->sideA = 0;
        $this->sideB = 0;
        $this->resWeight = 0;
        $this->resLength = 0;
    }

    public function calcProfil()
    {
        $A = floatval($this->sideA);
        $B = floatval($this->sideB);
        $L = floatval($this->length);
        $T = floatval($this->tikness);
        $w = 0.0157 * $T * ($A + $B - 2.86 * $T);

        $this->resWeight = number_format(round($w * $L, 2), 2, '.', ' ');

        $tw = floatval($this->weight);
        $dlina = floatval($this->weight) / $w;
        
        $this->resLength = number_format(round($dlina, 2), 2,'.',' ');
    }

    public function updatedSideA()
    {
        $this->calcProfil();
    }

    public function updatedSideB()
    {
        $this->calcProfil();
    }

    public function updatedLength()
    {
        $this->calcProfil();
    }

    public function updatedWeight()
    {
        $this->calcProfil();
    }

    public function updatedTikness()
    {
        $this->calcProfil();
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
