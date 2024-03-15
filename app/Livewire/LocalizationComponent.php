<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class LocalizationComponent extends Component
{
    public function render()
    {
        return view('livewire.localization-component');
    }

    public function setLang($lang)
    {
        //dd($lang);
        App::setLocale($lang);
        Session::put('locale', $lang);
        return redirect()->back();
    }
}
