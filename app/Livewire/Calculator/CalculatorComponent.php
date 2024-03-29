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
    public $metals = [];
    public function render()
    {

        return view('livewire.calculator.calculator-component');
    }

    public function mount()
    {
        //session()->put('active_metal', 'arm');
        $this->showArmature = true;
        $this->metals = [
            [
                'id' => 1,
                'title' => 'Armature',
                'name' => 'clickShowArmature',
                'image' => 'images/calculator/armatura.svg'
            ],
            [
                'id' => 2,
                'title' => 'Tube',
                'name' => 'clickTube',
                'image' => 'images/calculator/truba.svg'
            ],
            [
                'id' => 3,
                'title' => 'Steel Plate',
                'name' => 'clickSteelPlate',
                'image' => 'images/calculator/list.svg'
            ],
            [
                'id' => 4,
                'title' => 'Round bar',
                'name' => 'clickRoubdBar',
                'image' => 'images/calculator/krug.svg'
            ],
            [
                'id' => 5,
                'title' => 'Profil tube',
                'name' => 'clickProfileTube',
                'image' => 'images/calculator/profil.svg'
            ],
            [
                'id' => 6,
                'title' => 'Square bar',
                'name' => 'clickSquareBar',
                'image' => 'images/calculator/kvadrat.svg'
            ],
            [
                'id' => 7,
                'title' => 'Angle',
                'name' => 'clickAngle',
                'image' => 'images/calculator/ugolok.svg'
            ],
            [
                'id' => 8,
                'title' => 'Channel',
                'name' => 'clickChannel',
                'image' => 'images/calculator/shveller.svg'
            ],
            [
                'id' => 9,
                'title' => 'H Beam',
                'name' => 'clickHBeam',
                'image' => 'images/calculator/dvutavr.svg'
            ],
        ];
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
