<?php

namespace App\Livewire\Admin;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OrderDetailsComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        //dd('OrderDetails');
        $this->order_id = $order_id;
        //dd($this->order_id);
    }

    public function render()
    {
        $order = Order::findOrFail($this->order_id);

        $total = DB::select('call procOrderTotalSum(?)', array($this->order_id));

        //$payment = Transaction::where('order_id', '=', $this->order_id)->get();
        //dd($this->order_id);
        //dd($order->transaction);
        return view('livewire.admin.order-details-component', compact('order', 'total'))
            ->layout('components.layouts.admin.app');
    }
}
