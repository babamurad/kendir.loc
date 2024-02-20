<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChekoutComponent extends Component
{
    public $ship_to_different;
    public $firstname;
    public $lastname;
    public $companyname;
    public $country;
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

    public $paymentmode;
    public $thankyou;
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'firstname' => 'required',
            'lastname' => 'required',
            'companyname' => 'required',
//            'country' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'paymentmode' => 'required',
        ]);

        if ($this->ship_to_different)
        {
            $this->validateOnly($fields,[
                's_firstname' => 'required',
                's_lastname' => 'required',
//                's_country' => 'required',
                's_address1' => 'required',
                's_city' => 'required',
                's_state' => 'required',
                's_zipcode' => 'required',
                's_phone' => 'required|numeric',

            ]);
        }
    }

    public function placeOrder()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'companyname' => 'required',
//            'country' => 'required',
            'address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'paymentmode' => 'required',
        ]);

        $order = new Order();
        $order->user_id = Auth::user()->id;
//        $order->subtotal = session()->get('checout')['subtotal'];
//        $order->tax = session()->get('checout')['tax'];
//        $order->total = session()->get('checout')['total'];
//
//        dd(((float)Cart::instance('cart')->subtotal()*100)/100);
        $order->subtotal = (float)Cart::instance('cart')->subtotal();
        $order->tax = (float)Cart::instance('cart')->tax();
        $order->total = (float)Cart::instance('cart')->total();

        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->companyname = $this->companyname;
//        $order->country = $this->country;
        $order->address1 = $this->address1;
        $order->address2 = $this->address2;
        $order->city = $this->city;
        $order->state = $this->state;
        $order->zipcode = $this->zipcode;
        $order->phone = $this->phone;
        $order->email = $this->email;
        $order->addinfo = $this->addinfo;
        $order->status = 'ordered';
        $order->ship_to_different = $this->ship_to_different ? 1:0;
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

        if ($this->ship_to_different)
        {
            $this->validate([
                's_firstname' => 'required',
                's_lastname' => 'required',
//                's_country' => 'required',
                's_address1' => 'required',
                's_city' => 'required',
                's_state' => 'required',
                's_zipcode' => 'required',
                's_phone' => 'required|numeric',
            ]);

            $shipping = new Shipping();
            $shipping->order_id = $order->id;
            $shipping->firstname = $this->s_firstname;
            $shipping->lastname = $this->s_lastname;
            $shipping->country = $this->country;
            $shipping->address1 = $this->s_address1;
            $shipping->address2 = $this->s_address2;
            $shipping->city = $this->s_city;
            $shipping->state = $this->s_state;
            $shipping->zipcode = $this->s_zipcode;
            $shipping->phone = $this->s_phone;
            $shipping->addinfo = $this->s_addinfo;
            $shipping->save();
        }

        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->order_id = $order->id;
        $this->paymentmode == 'code' ? $transaction->mode = 'code' : $transaction->mode = 'card';
        $transaction->status = 'pending';
        $transaction->save();

        $this->thankyou = 1;

        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

    public function verifyForCheckout()
    {
        if (!Auth::check())
        {
            return redirect()->route('register');
        }
        elseif ($this->thankyou)
        {
            return redirect()->route('thankyou');
        }
//        elseif (!session()->get('checkout'))
//        {
//            return redirect()->route('cart');
//        }
    }

    public function render()
    {
        $this->verifyForCheckout();
        return view('livewire.chekout-component');
    }
}
