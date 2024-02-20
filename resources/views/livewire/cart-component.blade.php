<div>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Breadcrumb</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Shopping Cart</h1>
            </div>
        </div>
    </div>

    @if(\Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->count() > 0)
    <div class="cart block">
        <div class="container">
            <table class="cart__table cart-table">
                <thead class="cart-table__head">
                <tr class="cart-table__row">
                    <th class="cart-table__column cart-table__column--image">Image</th>
                    <th class="cart-table__column cart-table__column--product">Product</th>
                    <th class="cart-table__column cart-table__column--price">Price</th>
                    <th class="cart-table__column cart-table__column--quantity">Quantity</th>
                    <th class="cart-table__column cart-table__column--total">Total</th>
                    <th class="cart-table__column cart-table__column--remove"></th>
                </tr>
                </thead>
                <tbody class="cart-table__body">
                    @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->content() as $product)
                        <tr class="cart-table__row">
                    <td class="cart-table__column cart-table__column--image">
                        <div class="product-image">
                            <a href="" class="product-image__body">
                                <img class="product-image__img" src="{{ asset('images/products').'/'.$product->model->image }}" alt="">
                            </a>
                        </div>
                    </td>
                    <td class="cart-table__column cart-table__column--product">
                        <a href="" class="cart-table__product-name">{{ $product->model->name }}</a>
{{--                        <ul class="cart-table__options">--}}
{{--                            <li>Color: Yellow</li>--}}
{{--                            <li>Material: Aluminium</li>--}}
{{--                        </ul>--}}
                    </td>
                    <td class="cart-table__column cart-table__column--price" data-title="Price">{{ $product->model->sale_price }}</td>
                    <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                        <div class="input-number">
                            <input class="form-control input-number__input" type="number" min="1" value="{{ $product->qty }}">
                            <div class="input-number__add" wire:click="increaseQty('{{ $product->rowId }}')"></div>
                            <div class="input-number__sub" wire:click="decreaseQty('{{ $product->rowId }}')"></div>
                        </div>
                    </td>
                    <td class="cart-table__column cart-table__column--total" data-title="Total">{{ $product->subtotal }}</td>
                    <td class="cart-table__column cart-table__column--remove">
                        <button type="button" class="btn btn-light btn-sm btn-svg-icon" wire:click="destroy('{{ $product->rowId }}')">
                            <svg width="12px" height="12px">
                                <use xlink:href="images/sprite.svg#cross-12"></use>
                            </svg>
                        </button>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="cart__actions">
                <form class="cart__coupon-form">
{{--                    <label for="input-coupon-code" class="sr-only">Password</label>--}}
{{--                    <input type="text" class="form-control" id="input-coupon-code" placeholder="Coupon Code">--}}
{{--                    <button type="submit" class="btn btn-primary">Apply Coupon</button>--}}
                </form>
                <div class="cart__buttons">
                    <a href="{{ route('shop') }}" class="btn btn-primary cart__update-button">Continue Shopping</a>
                </div>
            </div>
            <div class="row justify-content-end pt-5">
                <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Cart Totals</h3>
                            <table class="cart__totals">
                                <thead class="cart__totals-header">
                                <tr>
                                    <th>Subtotal</th>
                                    <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</td>
                                </tr>
                                </thead>
                                <tbody class="cart__totals-body">
                                <tr>
                                    <th>{{ __('Shipping') }}</th>
                                    <td>
                                        {{ __('Free Shipping') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{__('Tax 10%')}}</th>
                                    <td>
                                        {{ \Gloudemans\Shoppingcart\Facades\Cart::tax() }}
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot class="cart__totals-footer">
                                <tr>
                                    <th>{{__('Total')}}</th>
                                    <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::total() }}</td>
                                </tr>
                                </tfoot>
                            </table>
                            <a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="#" wire:click="checkout">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="block-empty__body">
        <div class="block-empty__message">Your shopping cart is empty!</div>
        <div class="block-empty__actions">
            <a class="btn btn-primary btn-sm" href="">Continue</a>
        </div>
    </div>
    @endif
</div>
