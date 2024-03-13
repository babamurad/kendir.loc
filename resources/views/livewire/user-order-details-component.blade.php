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
                        <div class="card">
                            <div class="order-header">
                                <div class="order-header__actions">
                                    <a href="{{ route('order-history') }}" class="btn btn-xs btn-secondary" wire:navigate>Back to list</a>
                                </div>
                                <h5 class="order-header__title">Order #{{ $order->id }}</h5>
                                <div class="order-header__subtitle">
                                    Was placed on <mark class="order-header__date">{{ \Carbon\Carbon::create($order->created_at)->format('d F, Y') }}</mark>
                                    and is currently <mark class="order-header__status">{{ $order->status }}</mark>.
                                </div>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-table">
                                <div class="table-responsive-sm">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody class="card-table__body card-table__body--merge-rows">
                                        @foreach($order->orderItems as $product)
                                        <tr>
                                            <td>{{ $product->product->name }} × {{ $product->quantity }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->price * $product->quantity }}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tbody class="card-table__body card-table__body--merge-rows">
                                        <tr>
                                            <th>Subtotal</th>
                                            <th></th>
                                            <td>{{$order->subtotal}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tax 10%</th>
                                            <th></th>
                                            <td>{{ $order->tax }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('Shipping') }}</th>
                                            <th></th>
                                            <td>{{ __('Free Shipping') }}</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <th></th>
                                            <td>{{$order->total}}</td>
                                        </tr>
                                        </tfoot>
                                    </table>
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
