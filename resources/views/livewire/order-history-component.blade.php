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
                        <div class="account-nav flex-grow-1">
                            <h4 class="account-nav__title">Navigation</h4>
                            <ul>
                                <li class="account-nav__item">
                                    <a href="{{ route('dashboard') }}" wire:navigate>Dashboard</a>
                                </li>
                                <li class="account-nav__item ">
                                    <a href="{{ route('edit-profile') }}" wire:navigate>Edit Profile</a>
                                </li>
                                <li class="account-nav__item account-nav__item--active">
                                    <a href="{{ route('order-history') }}" wire:navigate>Order History</a>
                                </li>
                                <li class="account-nav__item ">
                                    <a href="account-order-details.html">Order Details</a>
                                </li>
                                <li class="account-nav__item ">
                                    <a href="account-addresses.html">Addresses</a>
                                </li>
                                <li class="account-nav__item ">
                                    <a href="account-edit-address.html">Edit Address</a>
                                </li>
                                <li class="account-nav__item ">
                                    <a href="account-password.html">Password</a>
                                </li>
                                <li class="account-nav__item ">
                                    <a href="account-login.html">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <div class="card">
                            <div class="card-header">
                                <h5>Order History</h5>
                            </div>
                            <div class="card-divider"></div>
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
                                        @foreach($orders as $order)
                                            <tr>
                                                <td><a href="">#{{ $order->id }}</a></td>
                                                <td>{{ \Carbon\Carbon::create($order->created_at)->format('d F, Y') }}</td>
                                                <td>{{ $order->status }}</td>
                                                <td>{{ $order->orderItems[0]->price }} for {{ $order->orderItems[0]->quantity }} item(s)</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-footer">
                                {{ $orders->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site__body / end -->
</div>
