<?php

namespace App\Livewire\Admin;

use App\Models\About;
use Livewire\Component;

class AdminAboutUsComponent extends Component
{
    public $title, $text;
    public $edit = 1;

    public function render()
    {
        $about = About::first();
        $this->title = $about->title;
        $this->text = $about->text;
        return view('livewire.admin.admin-about-us-component',
            compact('about'))
            ->layout('components.layouts.admin.app');
    }

    public function editMode()
    {
        //$this->edit = !$this->edit;
    }
    public function update()
    {
        $about = About::first();
        $about->title = $this->title;
        $about->text = $this->text;
        $about->update();
        $this->editMode();
        session()->flash('success', 'About Us Page successfully updated.');
    }
}
