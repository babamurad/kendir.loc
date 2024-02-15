<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CarouselForm extends Form
{
    #[Rule('required|min:3|max:255')]
    public $title;

    #[Rule('required|min:3|max:255')]
    public $text;

    #[Rule('required|image|max:2048')]
    public $image;
}
