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
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; ">
                        <button type="button" class="close {{ request()->is('/') ? '' : ' mt-3' }}" data-dismiss="alert" aria-hidden="true" style="top: -17px;">×</button>
                        <h6><i class="icon fas fa-info"></i> {{ session('error') }}</h6>
                    </div>
                @endif
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
                                <div class="form-group col-md-12">
                                    <label class="required-field" for="checkout-first-name">{{__('First Name')}}</label>
                                    <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="checkout-first-name" placeholder="{{__('First Name')}}" wire:model="firstname">
                                    @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-email">{{__('Email address')}}</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="checkout-email" placeholder="{{__('Email address')}}" wire:model="email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="required-field" for="checkout-phone">

                                        {{__('Phone Number')}}</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="checkout-phone" placeholder="{{__('Phone Number')}}" wire:model="phone">
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="checkout-street-address">{{__('Address')}}</label>
                                <input type="text" class="form-control @error('address1') is-invalid @enderror" id="checkout-street-address" placeholder="{{__('Address')}}"  wire:model="address1">
                                @error('address1') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
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
                            <h3 class="card-title">{{__('Your Order')}}</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                <tr>
                                    <th>{{__('Product')}}</th>
                                    <th>{{__('Total')}}</th>
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
                                    <th>{{__('Subtotal')}} </th>
                                    <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->subtotal() }}</td>
                                </tr>
                                {{-- <tr>
                                    <th>Store Credit</th>
                                    <td>$-20.00</td>
                                </tr> --}}
                                <tr>
                                    <th>{{__('Shipping')}}</th>
                                    <td>{{__('Free Shipping')}}</td>
                                </tr>
                                <tr>
                                    <th>{{__('Tax')}} 10%</th>
                                    <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->tax() }}</td>
                                </tr>
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                <tr>
                                    <th>{{__('Total')}}</th>
                                    <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->total() }}</td>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="payment-methods" wire:ignore>
                                <ul class="payment-methods__list">
                                    <li class="payment-methods__item payment-methods__item--active">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio" value="1" checked wire:model="paymentmode">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">{{__('Cash on delivery')}}</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                {{__('paywithcash')}}
                                            </div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio" value="2" wire:model="paymentmode">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                            <span class="payment-methods__item-title">{{__('Direct bank transfer')}}</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                {{__('makeyourpayment')}}
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="checkout__agree form-group">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="agree" class="custom-control-input cpoint" wire:model="agree">
                                        @error('agree') <span class="text-danger">{{ $message }}</span> @enderror
                                        <label class="custom-control-label cpoint" for="agree">{{__('termcondition')}}
                                            <a href="{{ route('terms') }}">{{__('termsandconditions')}}*</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-xl btn-block" wire:click="placeOrder">{{__('placeorder')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
