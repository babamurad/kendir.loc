<?php

namespace App\Livewire\Calculator;

use Livewire\Component;

class CalculatorComponent extends Component
{
    public $showArmature = false;
    public $showTube = false;
    public $showSteelPlate = false;
    public $showRoundBar = false;
    public $showProfilTube = false;
    public $showSquareBar = false;
    public $showAngle = false;
    public $showChannel = false;
    public $showHBeam = false;
    public function render()
    {

        return view('livewire.calculator.calculator-component');
    }

    public function mount()
    {
        $this->showArmature = true;
    }

    public function clickShowArmature()
    {
        $this->resetShow();
        $this->showArmature = !$this->showArmature;
    }

    public function clickTube()
    {
        $this->resetShow();
        $this->showTube = !$this->showTube;
    }

    public function clickSteelPlate()
    {
        $this->resetShow();
        $this->showSteelPlate = !$this->showSteelPlate;
    }

    public function clickRoubdBar()
    {
        $this->resetShow();
        $this->showRoundBar = !$this->showRoundBar;
    }
    public function clickProfileTube()
    {
            $this->resetShow();
            $this->showProfilTube = !$this->showProfilTube;
    }

    public function clickSquareBar()
    {
        $this->resetShow();
        $this->showSquareBar = !$this->showSquareBar;
    }

    public function clickAngle()
    {
        $this->resetShow();
        $this->showAngle = !$this->showAngle;
    }

    public function clickChannel()
    {
        $this->resetShow();
        $this->showChannel = !$this->showChannel;
    }

    public function clickHBeam()
    {
        $this->resetShow();
        $this->showHBeam = !$this->showHBeam;
    }
    public function resetShow()
    {
        $this->showArmature = false;
        $this->showTube = false;
        $this->showSteelPlate = false;
        $this->showRoundBar = false;
        $this->showProfilTube = false;
        $this->showSquareBar = false;
        $this->showAngle = false;
        $this->showChannel = false;
        $this->showHBeam = false;
    }
}
