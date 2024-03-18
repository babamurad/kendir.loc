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
        //$currentPath= url()->current();
        //dd($currentPath);
        //App::setLocale($this->lang);
        return view('livewire.localization-component');
    }

    public function mount($locale=null)
    {
        $this->lang = $locale;
        //dd($this->lang);
        if(!$locale = null){
            $this->lang = $locale;
        } else {
            $this->lang = 'ru';
        }

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
        $this->dispatch('locale');
        //dd(url()->previous());
        //return url()->previous();
        return redirect(url()->previous()); //back();
    }
}
