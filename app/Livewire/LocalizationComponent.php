<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class LocalizationComponent extends Component
{
    public $lang = 'ru';
    public function render()
    {
        return view('livewire.localization-component');
    }

    public function mount($locale = 'ru')
    {
        //dd($locale);
        $this->lang = $locale;
        //dd($this->lang);
    }

    public function setLang($lang)
    {

        $this->lang = $lang;
        //dd($lang);
        Session::put('locale', $lang);
        //dd($lang.' ---component');
        App::setLocale($lang);
        //dd(app()->getLocale());

        //dd(\session()->get('locale'));
        return redirect()->back();
    }
}
