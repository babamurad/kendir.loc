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
                                <a href="/">{{__('Home')}}</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">{{__('Dashboard')}}</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('My Account')}}</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>{{__('My Account')}}</h1>
                    @include('components.alerts')
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
                        <div class="dashboard">
                            <div class="dashboard__profile card profile-card">
                                <div class="card-body profile-card__body">
                                    <div class="profile-card__avatar">
                                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" alt="">
                                    </div>
                                    <div class="profile-card__name">{{ auth()->user()->name }}</div>
                                    <div class="profile-card__email">{{ auth()->user()->email }}</div>
                                    <div class="profile-card__edit">
                                        <a href="#" class="btn btn-secondary btn-sm">{{__('Edit Profile')}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard__address card address-card address-card--featured">
                                <div class="address-card__badge">{{__('Default Address')}}</div>
                                <div class="address-card__body">
                                    <div class="address-card__name">{{ auth()->user()->name }}</div>
                                    <div class="address-card__row">
{{--                                        {{ $order->strana->name }},<br>--}}
                                        {{ $order->zipcode }}, {{ $order->city }}<br>
                                        {{ $order->line1 }}, {{ $order->line2 }}
                                    </div>
                                    <div class="address-card__row">
                                        <div class="address-card__row-title">{{__('Phone Number')}}</div>
                                        <div class="address-card__row-content">{{ $order->mobile }}</div>
                                    </div>
                                    <div class="address-card__row">
                                        <div class="address-card__row-title">{{__('Email Address')}}</div>
                                        <div class="address-card__row-content">{{ \Illuminate\Support\Facades\Auth::user()->email }}</div>
                                    </div>
                                    <div class="address-card__footer">
                                        <a href="#">{{__('Edit Address')}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard__orders card">
                                <div class="card-header">
                                    <h5>{{__('Recent Orders')}}</h5>
                                </div>
                                <div class="card-divider"></div>
                                @if(@$resentOrders->count()>0)
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>{{__('Order')}}</th>
                                                <th>{{__('Date')}}</th>
                                                <th>{{__('Status')}}</th>
                                                <th>{{__('Total')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($resentOrders as $rorder)
                                            <tr>
                                                <td><a href="{{ route('order-details', ['id' => $order->id]) }}" wire:navigate>#{{ $rorder->id }}</a></td>
                                                <td>{{ \Carbon\Carbon::create($rorder->created_at)->format('d F, Y') }}</td>
                                                <td>{{ $rorder->status }}</td>
                                                <td>{{ $rorder->price }} for {{ $rorder->quantity }} item(s)</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site__body / end -->
</div>
