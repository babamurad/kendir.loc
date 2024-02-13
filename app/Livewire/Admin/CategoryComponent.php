<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CategoryComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 5;
    public $search = '';

    #[Validate('required|min:3')]
    public $name;
    //#[Validate('required|min:3')]
    public $slug;
    //#[Validate('image')]
    public $image;
    //#[Validate('required')]
    public $is_popular;
    //#[Validate('required')]
    public $parent;


    public function render()
    {
        $this->slug = Str::slug($this->name);

        if($this->search==''){
            $categories = Category::orderBy('id', 'DESC')->paginate($this->perPage);
        } else {
            $categories = Category::where('name', 'LIKE', '%'.$this->search.'%')->paginate($this->perPage);
        }

        return view('livewire.admin.category-component', compact('categories'))->layout('components.layouts.admin.app');
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required|min:3',
            'slug' => 'required|min:3',
            'image' => 'image',
        ]);
    }

    public function createCategory()
    {
        $this->validate([
            'name' => 'required|min:3',
            'slug' => 'required|min:3',
            'image' => 'image',
        ]);
        $category = new Category;
        $category->name = $this->name;
        $category->slug = Str::slug($this->slug);
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('categories', $imageName);
        $category->image = $imageName;
        $category->is_popular = $this->is_popular;
        $category->save();

        $this->resetInputFields();
        session()->flash('success', __('Category has been added successfully!'));
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->slug = '';
        $this->image = '';
        $this->parent = '';
        $this->is_popular = '';
    }

    public function getParent($id)
    {
        $parentName = Category::where('parent', '=', $id)->get();
        dd($parentName);
        $parentName = $parentName->name;
        dd($parentName);

        return $parentName;
    }
}
