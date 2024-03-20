<div>
    <a href="#" class="indicator__button" style="margin-top: 0.4rem;">
       <span class="indicator__area">
           <svg width="20px" height="20px">
               <use xlink:href="{{ asset('images/sprite.svg#cart-20') }}"></use>
           </svg>
           <span class="indicator__value">{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->count() }}</span>
       </span>
    </a>
    <div class="indicator__dropdown">
        <!-- .dropcart -->
        <div class="dropcart dropcart--style--dropdown">
            <div class="dropcart__body">
                @if(\Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->count() > 0)
                <div class="dropcart__products-list">
                    @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->content() as $product)
                        <div class="dropcart__product">
                            <div class="product-image dropcart__product-image">
                                <a href="#" class="product-image__body" style="margin-top: -0.6rem;">
                                    <img class="product-image__img"
                                         src="{{ asset('images/products').'/'.$product->model->image }}" alt="">
                                </a>
                            </div>
                            <div class="dropcart__product-info">
                                <div class="dropcart__product-name"><a
                                        href="product.html">{{ $product->model->name }}</a></div>
                                <div class="dropcart__product-meta">
                                    <span class="dropcart__product-quantity">{{ $product->qty }}</span> ×
                                    <span class="dropcart__product-quantity">{{ $product->model->sale_price }}</span>
                                    <span class="dropcart__product">{{__('Subtotal')}}:<span class="dropcart__product-price">{{ $product->subtotal }}</span></span>

                                </div>
                            </div>
                            <button type="button" wire:click="destroy('{{ $product->rowId }}')"
                                    class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                <svg width="10px" height="10px">
                                    <use xlink:href="{{ asset('images/sprite.svg#cross-10') }}"></use>
                                </svg>
                            </button>
                        </div>
                    @endforeach
                </div>
                <div class="dropcart__totals">
                    <table>
                        <tr>
                            <th>{{__('Subtotal')}}</th>
                            <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->subtotal() }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Shipping') }}</th>
                            <td>{{ __('Free Shipping') }}</td>
                        </tr>
                        <tr>
                            <th>{{__('Tax 10%')}}</th>
                            <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->tax() }}</td>
                        </tr>
                        <tr>
                            <th>{{__('Total')}}</th>
                            <td>{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->total() }}</td>
                        </tr>
                    </table>
                </div>
                <div class="dropcart__buttons">
                    <a class="btn btn-secondary" href="{{ route('cart') }}" wire:navigate>View Cart</a>
                    <a class="btn btn-primary" href="#"  wire:click="checkout">Checkout</a>
                </div>
                @else
                    <div class="block-empty__body">
                        <div class="block-empty__message">Your shopping cart is empty!</div>
                        <div class="block-empty__actions">
                            <a class="btn btn-primary btn-sm" href="{{ route('shop') }}" wire:navigate>Continue</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!-- .dropcart / end -->
    </div>
</div>
