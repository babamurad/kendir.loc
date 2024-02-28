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
                    <div class="col-12 col-lg-3 d-flex">
                        <livewire:user-navigation-component />
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <div class="addresses-list">
{{--                            <a href="" class="addresses-list__item addresses-list__item--new">--}}
{{--                                <div class="addresses-list__plus"></div>--}}
{{--                                <div class="btn btn-secondary btn-sm">Add New</div>--}}
{{--                            </a>--}}
{{--                            <div class="addresses-list__divider"></div>--}}
                            <div class="addresses-list__item card address-card">
                                <div class="address-card__badge">Default</div>
                                <div class="address-card__body">
                                    <div class="address-card__name">{{ $order->firstname . ' ' . $order->lastname }}</div>
                                    <div class="address-card__row">
                                        {{ $order->strana->name }}<br>
                                        Zip Code: {{ $order->zipcode }}, <br>
                                        {{ $order->city }}<br>
                                        {{ $order->line1 }}, {{ $order->line2 }}
                                    </div>
                                    <div class="address-card__row">
                                        <div class="address-card__row-title">Phone Number</div>
                                        <div class="address-card__row-content">{{ $order->mobile }}</div>
                                    </div>
                                    <div class="address-card__row">
                                        <div class="address-card__row-title">Email Address</div>
                                        <div class="address-card__row-content">{{ $order->email }}</div>
                                    </div>
                                    <div class="address-card__footer">
                                        <a href="{{ route('edit-address') }}">Edit</a>&nbsp;&nbsp;
                                        <a href="#">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="addresses-list__divider"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site__body / end -->
</div>
