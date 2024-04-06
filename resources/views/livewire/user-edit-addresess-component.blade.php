@section('title', __('User Dashboard'))
<div>
    <!-- site__body -->
    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="">Breadcrumb</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">My Account</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>My Account</h1>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="row">
                    @include('components.alerts')
                    <div class="col-12 col-lg-3 d-flex">
                        <livewire:user-navigation-component />
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <div class="card">
                            <div class="card-header">
                                <h5>{{__('Edit Address')}}</h5>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        @if($order != null)
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="required-field" for="checkout-first-name">First Name</label>
                                                <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="checkout-first-name" placeholder="First Name" wire:model="firstname">
                                                @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="required-field" for="checkout-last-name">Last Name</label>
                                                <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="checkout-last-name" placeholder="Last Name" wire:model="lastname">
                                                @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="" for="checkout-company-name">Company Name <span class="text-muted">(Optional)</span></label>
                                            <input type="text" class="form-control @error('companyname') is-invalid @enderror" id="checkout-company-name" placeholder="Company Name" wire:model="companyname">
                                            @error('companyname') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="checkout-country">Country</label>
                                            <select class="form-control">
                                                <option selected >Select a country...</option>
                                                @foreach($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="required-field" for="checkout-state">State / County</label>
                                            <input type="text" class="form-control @error('state') is-invalid @enderror" id="checkout-state" wire:model="state">
                                            @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="required-field" for="checkout-city">Town / City</label>
                                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="checkout-city" wire:model="city">
                                            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="required-field" for="checkout-street-address">Address</label>
                                            <input type="text" class="form-control @error('address1') is-invalid @enderror" id="checkout-street-address" placeholder="Street Address"  wire:model="address1">
                                            @error('address1') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="" for="checkout-address">Address Line 2 <span class="text-muted">(Optional)</span></label>
                                            <input type="text" class="form-control" id="checkout-address"  wire:model="address2">
                                            @error('address2') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="required-field" for="checkout-postcode">Postcode / ZIP</label>
                                            <input type="text" class="form-control @error('zipcode') is-invalid @enderror" id="checkout-postcode" wire:model="zipcode">
                                            @error('zipcode') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="required-field" for="checkout-email">Email address</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="checkout-email" placeholder="Email address" wire:model="email">
                                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="required-field" for="checkout-phone">Phone</label>
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="checkout-phone" placeholder="Phone" wire:model="phone">
                                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group mt-3 mb-0">
                                            <button class="btn btn-primary" wire:click="updateAddress">Save</button>
                                        </div>
                                        @else
                                            <div class="address-card__name"> {{__('No Address')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site__body / end -->
</div>
