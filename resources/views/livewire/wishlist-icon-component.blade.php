<div>
    <a href="{{ route('wishlist') }}" class="indicator__button" style="margin-top: 0.4rem;">
       <span class="indicator__area">
           <svg width="20px" height="20px">
               <use xlink:href="{{ asset('images/sprite.svg#heart-20') }}"></use>
           </svg>
           <span class="indicator__value">
               {{ \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->count() }}
           </span>
       </span>
    </a>
</div>
