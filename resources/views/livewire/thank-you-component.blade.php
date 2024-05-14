@section('title', __('Thank You!'))
<div>
    <div class="block order-success">
        <div class="container">
            <div class="order-success__body">
                <div class="order-success__header">
                    <svg class="order-success__icon" width="100" height="100">
                        <use xlink:href="images/sprite.svg#check-100"></use>
                    </svg>
                    <h1 class="order-success__title">{{__('Thank you')}}</h1>
                    <div class="order-success__subtitle">{{__('Your order has been received')}}</div>
                    <div class="order-success__actions">
                        <a href="/" class="btn btn-xs btn-secondary">{{__('Go To Homepage')}}</a>
                    </div>
                </div>
                <div class="order-success__meta">
                    <ul class="order-success__meta-list">
                        <li class="order-success__meta-item">
                            <span class="order-success__meta-title">{{__('Order number')}}:</span>
                            <span class="order-success__meta-value">#{{ $order->id }}</span>
                        </li>
                        <li class="order-success__meta-item">
                            <span class="order-success__meta-title">{{__('Created at')}}:</span>
                            <span class="order-success__meta-value">{{ \Carbon\Carbon::create($order->created_at)->format('F d, Y') }} </span>
                        </li>
                        <li class="order-success__meta-item">
                            <span class="order-success__meta-title">{{__('Total')}}:</span>
                            <span class="order-success__meta-value">{{ $order_sum[0]->ototal }}</span>
                        </li>
                        <li class="order-success__meta-item">
                            <span class="order-success__meta-title">{{__('Payment method')}}:</span>
                            <span class="order-success__meta-value">{{ $order->transaction->mode }}</span>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="order-list">
                        <table>
                            <thead class="order-list__header">
                            <tr>
                                <th class="order-list__column-label" colspan="2">{{__('Product')}}</th>
                                <th class="order-list__column-quantity">{{__('Quantity')}}</th>
                                <th class="order-list__column-total">{{__('Total')}}</th>
                            </tr>
                            </thead>
                            <tbody class="order-list__products">
                            @foreach($order_items as $order_item)
                            <tr>
                                <td class="order-list__column-image">
                                    <div class="product-image">
                                        <a href="" class="product-image__body">
                                            <img class="product-image__img" src="{{ asset('images/products').'/'.$order_item->product->image }}" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="order-list__column-product">
                                    <a href="{{ route('product.details', ['slug' => $order_item->product->slug]) }}">{{ $order_item->product->name }}</a>
                                </td>
                                <td class="order-list__column-quantity" data-title="Qty:">{{ $order_item->quantity }}</td>
                                <td class="order-list__column-total">{{ $order_item->price*$order_item->quantity }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tbody class="order-list__subtotals">
                            <tr>
                                <th class="order-list__column-label" colspan="3">{{__('Subtotal')}}</th>
                                <td class="order-list__column-total">{{ number_format($total[0]->ototal, 2) }}</td>
                            </tr>
                            <tr>
                                <th class="order-list__column-label" colspan="3">{{__('Shipping')}}</th>
                                <td class="order-list__column-total">{{__('Free Shipping')}}</td>
                            </tr>
                            <tr>
                                <th class="order-list__column-label" colspan="3">{{__('Tax')}}</th>
                                <td class="order-list__column-total">{{ $order->tax }}</td>
                            </tr>
                            </tbody>
                            <tfoot class="order-list__footer">
                            <tr>
                                <th class="order-list__column-label" colspan="3">{{__('Total')}}</th>
                                <td class="order-list__column-total">{{ number_format($total[0]->ototal+$order->tax,2) }}</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row mt-3 no-gutters mx-n2">
                    <div class="col-sm-6 col-12 px-2">
                        <div class="card address-card">
                            <div class="address-card__body">
                                <div class="address-card__badge address-card__badge--muted">{{__('Shipping Address')}}</div>
                                <div class="address-card__name">{{ auth()->user()?auth()->user()->name:'' }}</div>
                                <div class="address-card__row">
                                    {{ $order->line1 }}<br>
                                    {{ $order->line2 }}<br>
                                    {{ $order->city }} {{ $order->province }}<br>
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">{{__('Phone Number')}}</div>
                                    <div class="address-card__row-content">{{ $order->mobile }}</div>
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">{{__('Email Address')}}</div>
                                    <div class="address-card__row-content">{{ $order->email }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 px-2 mt-sm-0 mt-3">
                        <div class="card address-card">
                            <div class="address-card__body">
                                <div class="address-card__badge address-card__badge--muted">{{__('Billing Address')}}</div>
                                <div class="address-card__name">{{ auth()->user()?auth()->user()->name:'' }}</div>
                                <div class="address-card__row">
                                    {{ $order->line1 }}<br>
                                    {{ $order->line2 }}<br>
                                    {{ $order->city }} {{ $order->province }}<br>
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">{{__('Phone Number')}}</div>
                                    <div class="address-card__row-content">{{ $order->mobile }}</div>
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">{{__('Email Address')}}</div>
                                    <div class="address-card__row-content">{{ $order->email }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
