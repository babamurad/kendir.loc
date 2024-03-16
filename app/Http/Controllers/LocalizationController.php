<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLang($locale)
    {
        Session::put('locale', $locale);
        //dd($lang.' ---component');
        App::setLocale($locale);
        //dd(app()->getLocale());

        //dd(\session()->get('locale'));
        return redirect()->back();
    }
}
