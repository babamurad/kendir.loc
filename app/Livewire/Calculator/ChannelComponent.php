<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class ChannelComponent extends Component
{
    public $height, $sbold, $wtikness, $stikness;

    public $length, $width;

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

        $this->length = 0;
        $this->width = 0;

        $this->resWeight = 0;
        $this->resLength = 0;
    }

    public function calcChannel()
    {
        $this->height = floatval($this->height);
        $this->sbold = floatval($this->sbold);
        $this->wtikness = (float) $this->wtikness;

        $this->stikness = floatval($this->stikness);
        $this->length = (float) $this->length;
        $this->width = (float) $this->width;

        $h = $this->height;
        $b = $this->sbold;
        $wt = $this->wtikness;
        $bt = $this->stikness;
        $l = $this->length / 1000;

        $s = $h * $wt + ($b * ($b - $bt));
        $this->resWeight = $s;

        //S = 2 * b * t + (h - 2 * t) * s
        //$s = $wt * $h - 2 * $bt * ($b - $wt);
        //M = (46 + 46 + 100 - 4 * 4.2) / 1000 * 4.2 * L * 7850
        $m = ($b + $b + $h - 4 * $bt) / 1000 * $wt * $l * 7850;

        //$m = $s * 0.7850 * $l;
        // $this->resWeight = number_format(round($m, 3), 3, '.', '');
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

    public function updatedWidth()
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
