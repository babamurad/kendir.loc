<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserOrderDetailsComponent extends Component
{
    public $id;

    public function render()
    {

        if ($this->id)
        {
            $order = Order::with('orderItems')->where('id', '=', $this->id)->first();
        } else {
            $order = Order::with('orderItems')->where('id', '=', $this->id)->first();
        }
        //dd($order);
        $total = DB::select('call procOrderTotalSum(?)', array($this->id));
        //dd($total);
        return view('livewire.user-order-details-component', compact('order', 'total'));
    }

    public function mount($id = null)
    {
        if($id)
        {
            $this->id = $id;
        } else {
            $order = Order::orderBy('id', 'desc')->first();
            $this->id = $order->id;
        }
    }
}
