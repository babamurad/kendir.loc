<?php

namespace App\Livewire;

use App\Models\Country;
use App\Models\Order;
use Livewire\Component;

class UserEditAddresessComponent extends Component
{
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

    public function render()
    {
        $order = Order::with('strana')->where('user_id', '=', auth()->user()->id)->orderBy('id', 'desc')->first();
        $countries = Country::all();
        return view('livewire.user-edit-addresess-component', compact('order', 'countries'));
    }

    public function mount()
    {
        $order = Order::with('strana')->where('user_id', '=', auth()->user()->id)->orderBy('id', 'desc')->first();
        if($order != null) {
            $this->firstname = $order->firstname;
            $this->lastname = $order->lastname;
            $this->companyname = $order->companyname;
            $this->country = $order->country;
            $this->address1 = $order->line1;
            $this->address2 = $order->line2;
            $this->city = $order->city;
            $this->state = $order->province;
            $this->zipcode = $order->zipcode;
            $this->phone = $order->mobile;
            $this->email = $order->email;
        }


    }

    public function updateAddress()
    {
        $order = Order::where('user_id', '=', auth()->user()->id)->orderBy('id', 'desc')->first();
        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->companyname = $this->companyname;
        $order->country = $this->country;
        $order->line1 = $this->address1;
        $order->line2 = $this->address2;
        $order->city = $this->city;
        $order->province = $this->state;
        $order->zipcode = $this->zipcode;
        $order->mobile = $this->phone;
        $order->email = $this->email;
        $order->update();

        redirect()->route('addresses');
        session()->flash('success', __('User address changed successfully.'));
    }
}
