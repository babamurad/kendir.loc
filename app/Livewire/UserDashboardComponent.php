<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $order = Order::with('strana')->orderBy('id', 'desc')->first();
        $resentOrders = Order::with('orderItems')->orderBy('id', 'desc')->limit(3)->get();

        return view('livewire.user-dashboard-component',
        compact('order', 'resentOrders')
        );
    }
}
