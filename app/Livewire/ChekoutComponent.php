<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChekoutComponent extends Component
{
    public $ship_to_different = 0;
    public $firstname;
    public $lastname;
    public $companyname;
    public $country = 1;
    public $address1;
    public $address2;
    public $city;
    public $state;
    public $zipcode;
    public $phone;
    public $email;
    public $addinfo;
    public $s_firstname;
    public $s_lastname;
    public $s_companyname;
    public $s_address1;
    public $s_address2;
    public $s_city;
    public $s_state;
    public $s_zipcode;
    public $s_phone;
    public $s_addinfo;

    public $createAcc = 0, $password;

    public $paymentmode = 1;
    public $thankyou;
    public $agree = false;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'firstname' => 'required',
            'phone' => 'required|numeric',
            'agree' => 'accepted'
        ]);

    }

    public function placeOrder()
    {
        //dd($this->agree);
        $this->validate([
            'firstname' => 'required|max:200',
//                'email' => 'required|email|unique:users',
//                'password' => 'required|min:6',
            'phone' => 'required|numeric',
            'agree' => 'accepted'
        ],
            [
                'agree.accepted' => __('You must agree to the terms of use'), // Передача собственного сообщения
            ]
        );

        if ($this->agree) {
            $order = new Order();
            //User
            if(Auth::check()) { $order->user_id = Auth::user()->id; } else { $order->user_id = 1; }
            $nom = session()->get('checkout', Cart::instance('cart')->subtotal());
            $order->subtotal = (float) str_replace(' ', '', Cart::instance('cart')->subtotal()) ;
            $order->tax = (float) str_replace(' ', '', Cart::instance('cart')->tax());
            $order->total = (float) str_replace(' ', '', Cart::instance('cart')->total());

            $order->firstname = $this->firstname;
            $order->mobile = $this->phone;
            $order->status = 'ordered';
            $order->is_shipping_different = 0;
            $order->save();

            foreach (Cart::instance('cart')->content() as $item)
            {
                $orderItem = new OrderItem();
                $orderItem->product_id = $item->id;
                $orderItem->order_id = $order->id;
                $orderItem->price = $item->price;
                $orderItem->quantity = $item->qty;
                $orderItem->save();
            }

            $transaction = new Transaction();
            if(Auth::check()) { $transaction->user_id = Auth::user()->id; } else { $transaction->user_id = 1; }

            $transaction->order_id = $order->id;
            $this->paymentmode == 1 ? $transaction->mode = 'cash' : $transaction->mode = 'code';
            $transaction->status = 'pending';
            $transaction->save();

            $this->thankyou = 1;

            Cart::instance('cart')->destroy();
            session()->forget('checkout');
        } else {
            session()->flash('error', __('You must agree to the terms and conditions'));
        }

    }

    public function verifyForCheckout()
    {
        if ($this->thankyou){
           return redirect()->route('thankyou');
        }
    }

    public function render()
    {
        $this->verifyForCheckout();
        return view('livewire.chekout-component');
    }
}
