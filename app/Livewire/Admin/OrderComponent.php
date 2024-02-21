<?php

namespace App\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.admin.order-component', compact('orders'))
            ->layout('components.layouts.admin.app');
    }
}
