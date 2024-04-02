<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class ChannelComponent extends Component
{
    public $height, $sbold, $wtikness, $stikness;

    public $length, $weight;

    public $resWeight, $resLength;
    public $lw = true;

    public function render()
    {
        return view('livewire.calculator.channel-component');
    }

    public function mount()
    {
        $this->height = 0;
        $this->sbold = 0;
        $this->length = 0;
        $this->wtikness = 0;
        $this->stikness = 0;

        $this->length = 1;
        $this->weight = 1000;

        $this->resWeight = 0;
        $this->resLength = 0;
    }

    public function calcChannel()
    {
        $this->height = (float) $this->height;
        $this->sbold = (float) $this->sbold;
        $this->wtikness = (float) $this->wtikness;

        $this->stikness = (float) $this->stikness;
        $this->length = (float) $this->length;
        $this->weight = (float) $this->weight;

        $h = $this->height;
        $b = $this->sbold;
        $ht = $this->wtikness;
        $bt = $this->stikness;
        $l = $this->length / 100;
        $we = $this->weight;

        $s1 = $h * $ht;
        $s2 = $bt * ($b - $ht);
        $s = $s1 + 2 * $s2;

        $ww = (2*$b + 2*$ht);
        //dd($we*1000/$s);
        if ($s != 0) {
            $len = $we * 100 / ($s * 0.7850);
            $this->resLength = number_format(round($len, 3), 2, '.', ' ');
        }

        $w = $s * 0.7850 * $l;
        $this->resWeight = number_format(round($w, 2), 2, '.', ' ');
    }

    public function updatedLength()
    {
        $this->calcChannel();
    }

    public function updatedHeight()
    {
        $this->calcChannel();
    }

    public function updatedSbold()
    {
        $this->calcChannel();
    }

    public function updatedWtikness()
    {
        $this->calcChannel();
    }

    public function updatedStikness()
    {
        $this->calcChannel();
    }

    public function updatedWeight()
    {
        $this->calcChannel();
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
