<div>
    <a href="{{ route('compare') }}" class="indicator__button" style="margin-top: 0.4rem;" wire:navigate>
       <span class="indicator__area">
           <svg width="20px" height="20px">
               <use xlink:href="{{ asset('images/sprite.svg#compare-16') }}"></use>
           </svg>
           <span class="indicator__value">
               {{ \Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->count() }}
           </span>
       </span>
    </a>
</div>
