@section('title', __('Checkout'))
<div>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">{{__('Home')}}</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('shop') }}">{{__('Shop')}}</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Checkout')}}</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>{{__('Checkout')}}</h1>
                @include('components.alerts')
            </div>
        </div>
    </div>
    <div class="checkout block">
        <div class="container">
            <div class="row">
                    <div class="col-12 mb-3">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <div class="mb-0">
                                <div class="alert alert-lg alert-primary">
                                    <p>{{__('Order for')}} {{ \Illuminate\Support\Facades\Auth::user()->name }}</p>
                                </div>
                            </div>
                        @else
                            {{-- Accordion --}}
                            <div id="accordionIcons" class="accordion-icons" role="tablist">
                                <div class="">
                                    <div class="alert alert-lg alert-primary" role="tab" id="headingFour">Returning customer?
                                        <a data-toggle="collapse" href="#collapseLogin" aria-expanded="false" aria-controls="collapseLogin" class="collapsed">
                                            Click here to login or register
                                        </a>
                                    </div>
                                    <div id="collapseLogin" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionIcons" style="">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 d-flex flex-column">
                                                    <div class="card flex-grow-1 mb-md-0">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Login</h4>
                                                            <form wire:submit="login">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label class="required-field">Email address</label>
                                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" wire:model="email">
                                                                    @error('email') <p class="text-danger">{{$message}}</p> @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="required-field">Password</label>
                                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" wire:model="password">
                                                                    @error('password') <p class="text-danger">{{$message}}</p> @enderror
                                                                    <small class="form-text text-muted">
                                                                        <a href="">Forgotten Password</a>
                                                                    </small>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-check">
                                                                            <span class="form-check-input input-check">
                                                                                <span class="input-check__body">
                                                                                    <input class="input-check__input" type="checkbox" id="login-remember">
                                                                                    <span class="input-check__box"></span>
                                                                                    <svg class="input-check__icon" width="9px" height="7px">
                                                                                        <use xlink:href="{{ asset('images/sprite.svg#check-9x7') }}"></use>
                                                                                    </svg>
                                                                                </span>
                                                                            </span>
                                                                        <label class="form-check-label" for="login-remember">Remember Me</label>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary mt-4">Login</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex flex-column mt-4 mt-md-0 mx-auto">
                                                    <div class="card flex-grow-1 mb-0">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Register</h4>
                                                            @include('components.alerts')
                                                            <form wire:submit="registerUser">
                                                                <div class="form-group">
                                                                    <label class="required-field">Name</label>
                                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" wire:model="name">
                                                                    @error('name') <span>{{ session('error') }}</span> @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="required-field">Email address</label>
                                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" wire:model="email">
                                                                    @error('email') <span>{{ session('error') }}</span> @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="required-field">Password</label>
                                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" wire:model="password">
                                                                    @error('password') <span>{{ session('error') }}</span> @enderror
                                                                </div>
                                                                <button type="submit" class="btn btn-primary mt-4">Register</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- /Accordion --}}
                        @endif
                    </div>

                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <h3 class="card-title">{{__('Billing details')}}</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="required-field" for="checkout-first-name">{{__('First Name')}}</label>
                                    <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="checkout-first-name" placeholder="{{__('First Name')}}" wire:model="firstname">
                                    @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="required-field" for="checkout-last-name">{{__('Last Name')}}</label>
                                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="checkout-last-name" placeholder="{{__('Last Name')}}" wire:model="lastname">
                                    @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="" for="checkout-company-name">{{__('Company Name')}} <span class="text-muted">({{__('Optional')}})</span></label>
                                <input type="text" class="form-control @error('companyname') is-invalid @enderror" id="checkout-company-name" placeholder="{{__('Company Name')}}" wire:model="companyname">
                                @error('companyname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="required-field" for="checkout-country">{{__('Country')}}</label>
                                <select id="checkout-country" class="form-control form-control-select2" wire:model="country">
                                    <option value="0">{{ __('Select a country...') }}</option>
                                    <option value="1" selected>{{ __('Turkmenistan') }}</option>
                                    <option value="2">{{ __('Uzbekistan') }}</option>
                                    <option value="3">{{ __('Turkiye') }}</option>
                                    <option value="4">{{ __('Russia') }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="required-field" for="checkout-state">{{__('State')}} / {{__('Country')}}</label>
                                <input type="text" class="form-control @error('state') is-invalid @enderror" id="checkout-state" wire:model="state">
                                @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="required-field" for="checkout-city">{{__('Town / City')}}</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" id="checkout-city" wire:model="city">
                                @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="required-field" for="checkout-street-address">{{__('Address')}}</label>
                                <input type="text" class="form-control @error('address1') is-invalid @enderror" id="checkout-street-address" placeholder="{{__('Address')}}"  wire:model="address1">
                                @error('address1') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="" for="checkout-address">{{__('Address')}} {{__('Line')}} 2 <span class="text-muted">({{__('Optional')}})</span></label>
                                <input type="text" class="form-control" id="checkout-address"  wire:model="address2">
                                @error('address2') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label class="required-field" for="checkout-postcode">{{__('Postcode / ZIP')}}</label>
                                <input type="text" class="form-control @error('zipcode') is-invalid @enderror" id="checkout-postcode" wire:model="zipcode">
                                @error('zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="required-field" for="checkout-email">{{__('Email address')}}</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="checkout-email" placeholder="{{__('Email address')}}" wire:model="email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="required-field" for="checkout-phone">{{__('Phone Number')}}</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="checkout-phone" placeholder="{{__('Phone Number')}}" wire:model="phone">
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input cpoint" id="createAcc" wire:model.live="createAcc">
                                        <label class="custom-control-label cpoint" for="createAcc">{{__('Create An Account')}}?</label>
                                </div>
                            </div>
                            @if ($createAcc)
                            <div class="form-group">
                                <label class="required-field">{{__('Password')}}</label>
                                <input type="password" class="form-control " placeholder="{{__('Password')}}" wire:model="password">
                            </div>
                            @endif
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <h3 class="card-title">{{__('Shipping Details')}}</h3>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input cpoint" id="ship_to_different" wire:model.live="ship_to_different">
                                    <label class="custom-control-label cpoint" for="ship_to_different">{{__('Ship to a different address')}}?</label>
                                </div>
                            </div>
                            @if ($ship_to_different)
                            <div class="ship-diff">
                                <h3 class="card-title">Billing details</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="checkout-first-name">First Name</label>
                                        <input type="text" class="form-control" id="checkout-first-name" placeholder="First Name" wire:model="s_firstname">
                                        @error('s_firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="checkout-last-name">Last Name</label>
                                        <input type="text" class="form-control" id="checkout-last-name" placeholder="Last Name" wire:model="s_lastname">
                                        @error('s_lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="" for="checkout-company-name">Company Name <span class="text-muted">(Optional)</span></label>
                                    <input type="text" class="form-control" id="checkout-company-name" placeholder="Company Name" wire:model="s_companyname">
                                    @error('s_companyname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="required-field" for="checkout-country">Country</label>
                                    <select id="checkout-country" class="form-control form-control-select2" wire:model="s_country">
                                        <option value="0">{{ __('Select a country...') }}</option>
                                        <option value="1" selected>{{ __('Turkmenistan') }}</option>
                                        <option value="2">{{ __('Uzbekistan') }}</option>
                                        <option value="3">{{ __('Turkiye') }}</option>
                                        <option value="4">{{ __('Russia') }}</option>
                                        <option value="5">{{ __('Ukraine') }}</option>
                                        <option value="6">{{ __('Kazakhstan') }}</option>
                                        <option value="7">{{ __('Kyrgyzstan') }}</option>
                                        <option value="8">{{ __('Iran') }}</option>
                                        <option value="9">{{ __('Georgia') }}</option>
                                        <option value="10">{{ __('Tadjikistan') }}</option>
                                        <option value="11">{{ __('Afghanistan') }}</option>
                                        <option value="12">{{ __('Azerbaijan') }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required-field" for="checkout-state">State / County</label>
                                    <input type="text" class="form-control" id="checkout-state" wire:model="s_state">
                                    @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="required-field" for="checkout-city">Town / City</label>
                                    <input type="text" class="form-control" id="checkout-city" wire:model="s_city">
                                    @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="required-field" for="checkout-street-address">Address</label>
                                    <input type="text" class="form-control" id="checkout-street-address" placeholder="Street Address"  wire:model="s_address1">
                                    @error('address1') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="" for="checkout-address">Address Line 2 <span class="text-muted">(Optional)</span></label>
                                    <input type="text" class="form-control" id="checkout-address"  wire:model="s_address2">
                                    @error('address2') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="required-field" for="checkout-postcode">Postcode / ZIP</label>
                                    <input type="text" class="form-control" id="checkout-postcode" wire:model="s_zipcode">
                                    @error('zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="required-field" for="checkout-email">Email address</label>
                                        <input type="email" class="form-control" id="checkout-email" placeholder="Email address" wire:model="s_email">
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="required-field" for="checkout-phone">Phone</label>
                                        <input type="text" class="form-control" id="checkout-phone" placeholder="Phone" wire:model="s_phone">
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="checkout-comment">{{__('Order notes')}} <span class="text-muted">({{__('Optional')}})</span></label>
                                <textarea id="checkout-comment" class="form-control" rows="4" wire:model="addinfo"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Your Order</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                @foreach(Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->content() as $item)
                                <tr>
                                    <td><a href="{{ route('product.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a> × {{$item->qty}}</td>
                                    <td>{{ $item->subtotal }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                <tr>
                                    <th>Subtotal</th>
                                    <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->subtotal() }}</td>
                                </tr>
                                {{-- <tr>
                                    <th>Store Credit</th>
                                    <td>$-20.00</td>
                                </tr> --}}
                                <tr>
                                    <th>Shipping</th>
                                    <td>Free Shipping</td>
                                </tr>
                                <tr>
                                    <th>Tax 10%</th>
                                    <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->tax() }}</td>
                                </tr>
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                <tr>
                                    <th>Total</th>
                                    <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->total() }}</td>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="payment-methods">
                                <ul class="payment-methods__list">
                                    <li class="payment-methods__item payment-methods__item--active">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio" checked>
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">Direct bank transfer</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Make your payment directly into our bank account. Please use your Order ID as the payment
                                                reference. Your order will not be shipped until the funds have cleared in our account.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">Check payments</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">Cash on delivery</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Pay with cash upon delivery.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">PayPal</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="checkout__agree form-group">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input cpoint" id="ship_to_different" wire:model.live="terms">
                                        <label class="custom-control-label cpoint" for="ship_to_different">I have read and agree to the website
                                            <a href="{{ route('terms') }}">terms and conditions*</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-xl btn-block" wire:click="placeOrder">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
