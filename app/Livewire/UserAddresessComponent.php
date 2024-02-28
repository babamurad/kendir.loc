<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class UserAddresessComponent extends Component
{
    public function render()
    {
        $order = Order::with('strana')->where('user_id', '=', auth()->user()->id)->orderBy('id', 'desc')->first();
        //dd($order);
        return view('livewire.user-addresess-component', compact('order'));
    }
}
