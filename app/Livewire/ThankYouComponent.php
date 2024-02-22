<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ThankYouComponent extends Component
{
    public function render()
    {
        $order = Order::orderBy('id', 'desc')->first();
        //dd($order->id);
        $order_sum = DB::select('SELECT sum(oi.price*oi.quantity) AS ototal FROM order_items oi WHERE oi.order_id='.$order->id);
        //dd($order_sum[0]);
        $order_items = OrderItem::where('order_id', $order->id)->get();
        $total = DB::select('call procOrderTotalSum(?)', array($order->id));
//dd($total);
        return view('livewire.thank-you-component', compact('order', 'order_items', 'order_sum', 'total'));
    }
}
