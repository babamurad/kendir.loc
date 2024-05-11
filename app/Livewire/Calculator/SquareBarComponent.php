<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class SquareBarComponent extends Component
{
    public $length, $weight, $tikness, $sideA;

    public $lw = true;
    public $resWeight, $resLength;

    public function render()
    {
        return view('livewire.calculator.square-bar-component');
    }

    public function mount()
    {
        $this->length = 1;
        $this->weight = 1000;
        $this->tikness = 1;
        $this->sideA = 0;
        $this->resWeight = 0;
        $this->resLength = 0;
    }

    public function calcProfil()
    {
        $A = floatval($this->sideA) / 1000;
        $L = floatval($this->length);
        $w = $A ** 2 * 7850;

        $this->resWeight = number_format(round($w * $L, 3), 3, '.', ' ');

        $S = $A ** 2 * 7850;
        if ($S>0) {
            $dlina = number_format(round(floatval($this->weight) / $S, 2), '0', '.', ' ');
        } else {
            $dlina = 0;
        }

        $this->resLength = $dlina;
    }

    public function updatedSideA()
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
