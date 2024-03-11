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
                                        <a href="#" class="btn btn-secondary btn-sm">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard__address card address-card address-card--featured">
                                <div class="address-card__badge">Default Address</div>
                                <div class="address-card__body">
                                    <div class="address-card__name">{{ auth()->user()->name }}</div>
                                    <div class="address-card__row">
{{--                                        {{ $order->strana->name }},<br>--}}
                                        {{ $order->zipcode }}, {{ $order->city }}<br>
                                        {{ $order->line1 }}, {{ $order->line2 }}
                                    </div>
                                    <div class="address-card__row">
                                        <div class="address-card__row-title">Phone Number</div>
                                        <div class="address-card__row-content">{{ $order->mobile }}</div>
                                    </div>
                                    <div class="address-card__row">
                                        <div class="address-card__row-title">Email Address</div>
                                        <div class="address-card__row-content">{{ \Illuminate\Support\Facades\Auth::user()->email }}</div>
                                    </div>
                                    <div class="address-card__footer">
                                        <a href="#">Edit Address</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard__orders card">
                                <div class="card-header">
                                    <h5>Recent Orders</h5>
                                </div>
                                <div class="card-divider"></div>
                                @if(@$resentOrders->count()>0)
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($resentOrders as $rorder)
                                            <tr>
                                                <td><a href="{{ route('order-details', ['id' => $order->id]) }}">#{{ $rorder->id }}</a></td>
                                                <td>{{ \Carbon\Carbon::create($rorder->created_at)->format('d F, Y') }}</td>
                                                <td>{{ $rorder->status }}</td>
                                                <td>{{ $rorder->orderItems[0]->price }} for {{ $rorder->orderItems[0]->quantity }} item(s)</td>
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
