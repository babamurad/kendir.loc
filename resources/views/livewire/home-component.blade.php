@section('title', __('Home'))
<div>
@php
    $wproducts = \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->content()->pluck('id');
@endphp
    <div class="block-slideshow block-slideshow--layout--with-departments block" wire:ignore>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block"></div>
                <div class="col-12 col-lg-9">
                    <div class="block-slideshow__body">
                        <div class="owl-carousel">
                            @foreach($carousels as $carousel)
                                <a class="block-slideshow__slide img-fluid" href="#">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop">
                                        <img src="{{asset('images/carousel').'/'.$carousel->image}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title text-white">
                                            <h4 class="shadow-lg">{{ $carousel->title }}</h4>
                                        </div>
                                        <div class="block-slideshow__slide-text">
                                            <h6 class="h3-responsive text-white">{!! \Illuminate\Support\Str::wordWrap($carousel->text, characters: 70, break: "<br />\n"); !!}</h6>

                                        </div>
                                        <div class="block-slideshow__slide-button">
                                            <span class="btn btn-primary btn-lg" wire:click='toShop'>Shop Now</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-slideshow / end -->
    <!-- .block-features -->
    @include('components.alerts')
    <div class="block block-features block-features--layout--classic">
        <div class="container">
            <div class="block-features__list">
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="{{ asset('images/sprite.svg#fi-free-delivery-48') }}"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">Free Shipping</div>
                        <div class="block-features__subtitle">For orders from 100 man.</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="{{ asset('images/sprite.svg#fi-24-hours-48') }}"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">Support 24/7</div>
                        <div class="block-features__subtitle">Call us anytime</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="{{ asset('images/sprite.svg#fi-payment-security-48') }}"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">100% Safety</div>
                        <div class="block-features__subtitle">Only secure payments</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon">
                        <svg width="48px" height="48px">
                            <use xlink:href="{{ asset('images/sprite.svg#fi-tag-48') }}"></use>
                        </svg>
                    </div>
                    <div class="block-features__content">
                        <div class="block-features__title">Hot Offers</div>
                        <div class="block-features__subtitle">Discounts up to 90%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-features / end -->

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="productDetails" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{__('Product Details')}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <img class="img-fluid" src="{{ asset('images/products').'/'.$image }}" alt="">
                                            </div>
                                            <div class="col-12">
                                                <h5 class="product__name mb-0 mt-2">{{ $name }}</h5>
                                            </div>
                                            <div class="col-12">
                                                <div class="product__prices">
                                                    <h6>{{ $sale_price }} man.</h6>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group product__option">
                                                    <label class="product__option-label" for="product-quantity">Quantity</label>
                                                    <div class="product__actions">
                                                        <div class="product__actions-item">
                                                            <div class="input-number product__quantity">
                                                                <input id="product-quantity" class="input-number__input form-control" type="number" min="1" value="1" wire:model.live="pqty">
                                                                <div class="input-number__add" wire:click="qtyInc"></div>
                                                                <div class="input-number__sub" wire:click="qtyDec"></div>
                                                            </div>
                                                        </div>
                                                        <div class="product__actions-item product__actions-item--addtocart">
                                                            <button class="btn btn-primary" wire:click="store({{$id}}, '{{$name}}', {{ $sale_price }})">Add to cart</button>
                                                        </div>

                                                        <div class="product__actions-item product__actions-item--wishlist">
                                                            @if($wproducts->contains($id))
                                                            <button type="button" class="btn btn-secondary btn-svg-icon" data-toggle="tooltip" title="" data-original-title="Wishlist"
                                                                    wire:click="removeWishlist('{{ $id }}')">
                                                                <svg width="16px" height="16px" style="fill: #ff3333;">
                                                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                                </svg>
                                                            </button>
                                                            @else
                                                            <button type="button" class="btn btn-secondary btn-svg-icon" data-toggle="tooltip" title="" data-original-title="Wishlist"
                                                                        wire:click="addToWishlist({{$id}}, '{{$name}}', {{ $sale_price }})">
                                                                    <svg width="16px" height="16px">
                                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                                    </svg>
                                                            </button>
                                                            @endif
                                                        </div>

                                                        <div class="product__actions-item product__actions-item--compare">
                                                            <button type="button" class="btn btn-secondary btn-svg-icon" data-toggle="tooltip" title="" data-original-title="Compare">
                                                                <svg width="16px" height="16px">
                                                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}
                                        </button>
                                        <button type="button" class="btn btn-primary">{{__('Read more...')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
    <!-- /Modal -->

    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="grid-4" data-mobile-grid-columns="2">
        <div class="container">
            <div class="block-header">
{{--                @if(session('success'))--}}
{{--                <div class="alert alert-success alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; top: -2rem;">--}}
{{--                    <button type="button" class="close  mt-3" data-dismiss="alert" aria-hidden="true" style="top: -16px;">×</button>--}}
{{--                    <h6><i class="icon fas fa-check"></i> {{ session('success') }}</h6>--}}
{{--                </div>--}}
{{--                @endif--}}
                <h3 class="block-header__title">Featured Products</h3>
                <div class="block-header__divider"></div>
                <ul class="block-header__groups-list">
                    <li><bu\tton type="button" class="block-header__group  block-header__group--active ">All</button></li>
                    <li><button type="button" class="block-header__group ">Power Tools</button></li>
                    <li><button type="button" class="block-header__group ">Hand Tools</button></li>
                    <li><button type="button" class="block-header__group ">Plumbing</button></li>
                </ul>
                <div class="block-header__arrows-list">
                    <button class="block-header__arrow block-header__arrow--left" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-left-7x11') }}"></use>
                        </svg>
                    </button>
                    <button class="block-header__arrow block-header__arrow--right" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-7x11') }}"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="block-products-carousel__slider">
                <div class="owl-carousel" wire:ignore>
                    @foreach($products as $product)
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button" data-toggle="modal" data-target="#productDetails" wire:click="productDetails('{{ $product->id }}')">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="{{ asset('images/sprite.svg#quickview-16') }}"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span>
                                    </button>
                                    <div class="product-card__badges-list">
                                        @if($newArrivals->contains($product->id))
                                        <div class="product-card__badge product-card__badge--new">New</div>
                                        @endif
                                    </div>
                                    <div class="product-card__image product-image">
                                        <a href="{{ route('product.details', ['slug' => $product->slug]) }}" class="product-image__body">
                                            <img class="product-image__img" src="{{ asset('images/products').'/'.$product->image }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                            <a href="{{ route('product.details', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">
                                            Availability: <span class="text-success">{{ $product->stock_status }}</span>
                                        </div>
                                        <div class="product-card__prices">
                                            {{ $product->sale_price }}
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button" wire:click="store({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})">Add To Cart</button>
                                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button" wire:click="store({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})">Add To Cart</button>
                                                    {{-- @if($wproducts->contains($product->id))
                                                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button" wire:click="removeWishlist('{{ $product->id }}')">
                                                        <svg width="16px" height="16px" style="fill: #ff3333;">
                                                            <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
                                                        </svg>
                                                        <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                    </button>
                                                    @else
                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button" wire:click="addToWishlist({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
                                                            </svg>
                                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                        </button>
                                                    @endif
                                                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                        <svg width="16px" height="16px">
                                                            <use xlink:href="{{ asset('images/sprite.svg#compare-16') }}"></use>
                                                        </svg>
                                                        <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                    </button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- .block-products-carousel / end -->
    <!-- .block-banner -->
    <div class="block block-banner">
        <div class="container">
            <a href="{{ route('shop') }}" class="block-banner__body">
                <div class="block-banner__image block-banner__image--desktop" style="background-image: url('images/kendir/kupit armaturu.jpg'); opacity: 0.7;"></div>
                <div class="block-banner__image block-banner__image--mobile" style="background-image: url('images/kendir/kupit armaturu.jpg')"></div>
                <div class="block-banner__title">Hundreds <br class="block-banner__mobile-br"> Hand Tools</div>
                <div class="block-banner__text text-black">Hammers, Chisels, Universal Pliers, Nippers, Jigsaws, Saws</div>
                <div class="block-banner__button">
                   <span class="btn btn-sm btn-primary">Shop Now</span>
                </div>
            </a>
        </div>
    </div>
    <!-- .block-banner / end -->

    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="horizontal" data-mobile-grid-columns="2">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">New Arrivals</h3>
                <div class="block-header__divider"></div>
                <ul class="block-header__groups-list">
                    <li><button type="button" class="block-header__group  block-header__group--active ">All</button></li>
                    <li><button type="button" class="block-header__group ">Power Tools</button></li>
                    <li><button type="button" class="block-header__group ">Hand Tools</button></li>
                    <li><button type="button" class="block-header__group ">Plumbing</button></li>
                </ul>
                <div class="block-header__arrows-list">
                    <button class="block-header__arrow block-header__arrow--left" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-left-7x11') }}"></use>
                        </svg>
                    </button>
                    <button class="block-header__arrow block-header__arrow--right" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-7x11') }}"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="block-products-carousel__slider">
                <div class="owl-carousel" wire:ignore>
                    @foreach($newArrivals as $newArrival)
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--hidden-actions ">
                                    <button class="product-card__quickview" type="button" data-toggle="modal" data-target="#productDetails" wire:click="productDetails('{{ $newArrival->id }}')">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="{{ asset('images/sprite.svg#quickview-16') }}"></use>
                                        </svg>
                                        <span class="fake-svg-icon"></span>
                                    </button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--new">New</div>
                                    </div>
                                    <div class="product-card__image product-image">
                                        <a href="product.html" class="product-image__body">
                                            <img class="product-image__img" src="{{ asset('images/products').'/'.$newArrival->image }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                            <a href="product.html">{{ $newArrival->name }}</a>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="product-card__rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="{{ asset('images/sprite.svg#star-normal') }}"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="{{ asset('images/sprite.svg#star-normal-stroke') }}"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="{{ asset('images/sprite.svg#star-normal') }}"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="{{ asset('images/sprite.svg#star-normal-stroke') }}"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="{{ asset('images/sprite.svg#star-normal') }}"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="{{ asset('images/sprite.svg#star-normal-stroke') }}"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="{{ asset('images/sprite.svg#star-normal') }}"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="{{ asset('images/sprite.svg#star-normal-stroke') }}"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge rating__star--active">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                        <svg class="rating__star " width="13px" height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="{{ asset('images/sprite.svg#star-normal') }}"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="{{ asset('images/sprite.svg#star-normal-stroke') }}"></use>
                                                            </g>
                                                        </svg>
                                                        <div class="rating__star rating__star--only-edge ">
                                                            <div class="rating__fill">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                            <div class="rating__stroke">
                                                                <div class="fake-svg-icon"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">
                                            Availability: <span class="text-success">{{ $newArrival->stock_status }}</span>
                                        </div>
                                        <div class="product-card__prices">
                                            {{ $newArrival->sale_price }}
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                            </button>
                                            <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="{{ asset('images/sprite.svg#compare-16') }}"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- .block-products-carousel / end -->
    <!-- .block-posts -->
    <div class="block block-posts" data-layout="list" data-mobile-columns="1">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Latest News</h3>
                <div class="block-header__divider"></div>
                <div class="block-header__arrows-list">
                    <button class="block-header__arrow block-header__arrow--left" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-left-7x11') }}"></use>
                        </svg>
                    </button>
                    <button class="block-header__arrow block-header__arrow--right" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-7x11') }}"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="block-posts__slider" wire:ignore>
                <div class="owl-carousel">
                    @foreach($posts as $post)
                    <div class="post-card  ">
                        <div class="post-card__image">
                            <a href="">
                                <img src="{{ asset('images/posts').'/'.$post->image }}" alt="{{ $post->title }}">
                            </a>
                        </div>
                        <div class="post-card__info">
                            <div class="post-card__category">
                                <a href="">Special Offers</a>
                            </div>
                            <div class="post-card__name">
                                <a href="{{ route('post-detail', ['id' => $post->id]) }}">
                                    {{ $post->title }}
                                </a>
                            </div>
                            <div class="post-card__date">{{ \Carbon\Carbon::create($post->created_at)->format('F d, Y') }}</div>
                            <div class="post-card__content">
                                {{ \Illuminate\Support\Str::of($post->text)->words(25) }}
                            </div>
                            <div class="post-card__read-more">
                                <a href="{{ route('post-detail', ['id' => $post->id]) }}" class="btn btn-secondary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- .block-posts / end -->
    <!-- .block-brands -->
    <div class="block block-brands">
        <div class="container">
            <div class="block-brands__slider">
                <div class="owl-carousel" wire:ignore>
                    <div class="block-brands__item">
                        <a href=""><img src="{{ asset('images/kendir/logo1.png') }}" alt=""></a>
                    </div>
                    <div class="block-brands__item">
                        <a href=""><img src="{{ asset('images/kendir/logo2.png') }}" alt=""></a>
                    </div>
                    <div class="block-brands__item">
                        <a href=""><img src="{{ asset('images/kendir/logo3.png') }}" alt=""></a>
                    </div>
                    <div class="block-brands__item">
                        <a href=""><img src="{{ asset('images/kendir/logo4.png') }}" alt=""></a>
                    </div>
                    <div class="block-brands__item">
                        <a href=""><img src="{{ asset('images/kendir/logo5.png') }}" alt=""></a>
                    </div>
                    <div class="block-brands__item">
                        <a href=""><img src="images/logos/logo-6.png" alt=""></a>
                    </div>
                    <div class="block-brands__item">
                        <a href=""><img src="images/logos/logo-7.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-brands / end -->

</div>
