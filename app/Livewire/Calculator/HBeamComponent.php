<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class HBeamComponent extends Component
{
    public $height, $sbold, $wtikness, $stikness;

    public $length, $weight;

    public $resWeight, $resLength;
    public $lw = true;

    public function render()
    {
        return view('livewire.calculator.h-beam-component');
    }

    public function mount()
    {
        $this->height = 0;
        $this->sbold = 0;
        $this->wtikness = 0;
        $this->stikness = 0;
        $this->length = 1;
        $this->weight = 1000;

        $this->resWeight = 0;
        $this->resLength = 0;
    }

    public function calcHBeam()
    {
        $h = (float) $this->height;
        $b = (float) $this->sbold;
        $ht = (float) $this->wtikness;
        $bt = (float) $this->stikness;
        $len = (float) $this->length / 1000;
        $w = (float) $this->weight;

        $s1 = ($h - 2 * $bt) * $ht;
        $s2 = $b * $bt;
        $s = $s1 + 2 * $s2;
        $ww = $s * 7850 * $len / 1000;
        if ($s != 0) {
            $weight = $w * 100/( $s*0.7850 );
        } else {
            $weight = 0;
        }
        if ($ww > 0) {
            $ww = $s * 7850 * $len / 1000;
        } else {
            $ww = 0;
        }

        //dd($this->weight * 100/( $s*0.7850 ));
        $this->resLength = number_format(round( $weight, 3 ), 3, '.', ' ');
        $this->resWeight = number_format(round($ww, 3), 3, '.', ' ');
    }

    public function updatedLength()
    {
        $this->calcHBeam();
    }

    public function updatedHeight()
    {
        $this->calcHBeam();
    }

    public function updatedSbold()
    {
        $this->calcHBeam();
    }

    public function updatedWtikness()
    {
        $this->calcHBeam();
    }

    public function updatedStikness()
    {
        $this->calcHBeam();
    }

    public function updatedWeight()
    {
        $this->calcHBeam();
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
