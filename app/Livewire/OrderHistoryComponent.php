<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderHistoryComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $orders = Order::with('orderItems')->orderBy('id', 'desc')->paginate(6);
        return view('livewire.order-history-component', compact('orders'));
    }
}
