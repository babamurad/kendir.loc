<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class SearchMobileComponent extends Component
{
    public function render()
    {
        return view('livewire.search-mobile-component');
    }
}
