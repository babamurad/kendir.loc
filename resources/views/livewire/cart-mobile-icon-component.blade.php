<div>
    <a href="{{ route('cart') }}" class="indicator__button">
       <span class="indicator__area">
           <svg width="20px" height="20px">
               <use xlink:href="{{ asset('images/sprite.svg#cart-20') }}"></use>
           </svg>
           <span class="indicator__value">
               {{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->count() }}
           </span>
       </span>
    </a>
</div>
