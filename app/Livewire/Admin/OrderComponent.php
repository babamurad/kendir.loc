<?php

namespace App\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10;
    public $search = '';

    public function render()
    {
        $orders = Order::
        where('id', 'like', '%'.$this->search.'%')
            ->orwhere('firstname', 'like', '%'.$this->search.'%')
            ->orwhere('lastname', 'like', '%'.$this->search.'%')
            ->orderBy('created_at', 'desc')
            ->paginate($this->perPage);

        return view('livewire.admin.order-component', compact('orders'))
            ->layout('components.layouts.admin.app');
    }
}
