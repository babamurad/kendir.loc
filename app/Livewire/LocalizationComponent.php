<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Url;
use Livewire\Component;

class LocalizationComponent extends Component
{
    public $lang = 'ru';


    public function render()
    {

        return view('livewire.localization-component');
    }

    public function mount($locale=null)
    {
        $this->lang = $locale;

        if(!$locale = null){
            $this->lang = $locale;
        } else {
            $this->lang = 'ru';
        }
    }

    public function setLang($lang)
    {
        $this->lang = $lang;
        Session::put('locale', $lang);

        App::setLocale($lang);

        $this->dispatch('locale');

        return redirect(url()->previous()); //back();
    }
}
