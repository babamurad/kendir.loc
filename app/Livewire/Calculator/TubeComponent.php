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
        $this->diameter = 1;
        $this->tickness = 1;
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

        $ur = ($this->diameter/1000)/2;

        $kr = (($this->diameter/2 - $this->tickness)/1000);

        if ($ur>$kr) {
            $skrug = pi() * ($ur**2 - $kr**2);
        } else {
            $skrug = 0;
        }

        if ($skrug > 0) {
            $w = $skrug * $this->length*7850;
        } else {
            $w = 0;
        }
        $this->resWeight = number_format(round($w, 3), '3', '.', ' ');

        //L = (m * 1000) / (π * ρ * (R^2 - r^2))
        $mayd = ( pi() * 7850 * ( $ur**2 - $kr**2 ) );

        if ($mayd > 0 ) {
            $dlina = ( $this->weight ) / ( pi() * 7850 * ( $ur**2 - $kr**2 ) );
        } else {
            $dlina = 0;
        }

        $this->resLength = number_format(round($dlina, 2), '2', '.', ' ');

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

    public function updatedWeight()
    {
        $this->CalcWeight();
    }
}
