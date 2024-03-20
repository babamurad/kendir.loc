<?php

namespace App\Livewire\Admin;

use App\Models\About;
use Livewire\Component;

class AdminAboutUsComponent extends Component
{
    public $title, $text;
    public $title_en, $text_en;
    public $title_ru, $text_ru;
    public $title_tm, $text_tm;

    public function render()
    {
        $about = About::first();

        return view('livewire.admin.admin-about-us-component',
            compact('about'))
            ->layout('components.layouts.admin.app');
    }

    public function mount()
    {
        $about = About::first();
        $this->title = $about->title;
        $this->text = $about->text;
        $this->title_en = $about->title_en;
        $this->text_en = $about->text_en;
        $this->title_ru = $about->title_ru;
        $this->text_ru = $about->text_ru;
        $this->title_tm = $about->title_tm;
        $this->text_tm = $about->text_tm;
    }

    public function update()
    {
        //dd($this->text_en);
        $about = About::first();

        $about->title_en = $this->title_en;
        $about->text = $this->text_en;

        $about->text_en = $this->text_en;
        $about->title_ru = $this->title_ru;
        $about->text_ru = $this->text_ru;
        $about->title_tm = $this->title_tm;
        $about->text_tm = $this->text_tm;
        $about->update();
        session()->flash('success', 'About Us Page successfully updated.');
    }
}
