<?php

namespace App\Livewire\Admin;

use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OrderDetailsComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function render()
    {
        $order = OrderItem::findOrFail($this->order_id);
        $or = DB::select('call procOrderTotalSum(?)', array($this->order_id));
//        foreach ($or as $key => $ord){
//             dd($ord->firstname, $ord->id);
//        }


        return view('livewire.admin.order-details-component', compact('order'))
            ->layout('components.layouts.admin.app');
    }
}
