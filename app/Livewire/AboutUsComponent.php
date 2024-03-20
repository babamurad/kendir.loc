<?php

namespace App\Livewire;

use App\Models\About;
use Livewire\Component;

class AboutUsComponent extends Component
{

    public function render()
    {
        $about = About::first();
        return view('livewire.about-us-component', compact('about'));
    }
}
