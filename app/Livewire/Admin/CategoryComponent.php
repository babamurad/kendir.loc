<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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
    public $perPage = 10;
    public $search = '';


    public $name;

    public $slug;

    public $image = '';

    public $is_popular = 0;

    public $parent;

    public $edit_id, $del_id, $del_name;
    public $edit_mode = 0;
    public $newimage;
//    public $categories;

    protected $rules = [
        'name' => 'required|min:3',
        'slug' => 'required|min:3',
        'image' => 'required|image|mimes:jpeg,png,svg,jpg,gif|max:2048',
    ];

    public function render()
    {
//        $cat = Category::with('cparent')->find(42);
//        dd($cat->cparent->name);

        $this->slug = Str::slug($this->name);
        $categories =
            Category::with('cparent')
            ->where('name', 'like', '%'.$this->search.'%')
            ->orderBy('id', 'desc')
            ->paginate($this->perPage);

        return view('livewire.admin.category-component', compact('categories'))->layout('components.layouts.admin.app');
    }

    public function parentName()
    {
        if ($this->search)
        {
            $query = 'SELECT c.id, c.name, c.slug, c.parent, c.created_at, c.updated_at, c.image, c.is_popular, c1.name AS parent_name
            FROM categories c
            LEFT JOIN categories c1 ON c.parent = c1.id
            WHERE c.name LIKE %'.$this->search.'%';
        } else {
            $query = 'SELECT c.id, c.name, c.slug, c.parent, c.created_at, c.updated_at, c.image, c.is_popular, c1.name AS parent_name
            FROM categories c
            LEFT JOIN categories c1 ON c.parent = c1.id';
        }
        return DB::select($query);
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
            'image' => 'required|image|mimes:jpeg,png,svg,jpg,gif|max:1024',
        ]);
    }

    public function createCategory()
    {
        $this->edit_mode = false;
        $this->validate();
        $category = new Category;
        $category->name = $this->name;
        $category->slug = Str::slug($this->slug);
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('categories', $imageName);
        $category->image = $imageName;
        $category->is_popular = $this->is_popular? $this->is_popular : 0;
        $category->name = $this->name;
        $category->save();
        $this->dispatch('closeCreateCategoryModal');
        $this->resetInputFields();
        session()->flash('success', __('Category has been added successfully!'));
    }

    public function editCategory($id)
    {
        $this->edit_mode = true;

        $category = Category::findOrFail($id);
        $this->edit_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->parent = $category->parent;
        $this->image = $category->image;
        $this->is_popular = $category->is_popular;
    }

    public function updateCategory()
    {
        $this->edit_mode = true;
        $this->validate([
            'name' => 'required|min:3',
            'slug' => 'required|min:3',
            //'image' => 'required|image|mimes:jpeg,png,svg,jpg,gif|max:1024',
        ]);

        $category = Category::findOrFail($this->edit_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->parent = $this->parent;
        if ($this->newimage){
            if (file_exists('images/categories/'.$this->image)){
                unlink('images/categories/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            //dd($imageName);
            $this->newimage->storeAs('categories', $imageName);
            $category->image = $imageName;
        }
        $category->is_popular = $this->is_popular;
        $category->update();
        $this->dispatch('closeEditCategoryModal');
        $this->resetInputFields();
        session()->flash('success', __('Category has been updated successfully!'));
        $this->edit_mode = false;
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->slug = '';
        $this->image = '';
        $this->parent_id = '';
        $this->is_popular = '';
    }

    public function cancel()
    {
        $this->edit_mode = false;
        $this->resetInputFields();
    }

    public function deleteId($id)
    {
       $this->del_id = $id;
       $cat = Category::findOrFail($id);
       $this->del_name = $cat->name;
    }

    public function deleteCategory()
    {
        $category = Category::find($this->del_id);
        $category->delete();
        $this->dispatch('closeDeleteCategoryModal');
        session()->flash('error', 'Category has been deleted!');
    }
}
