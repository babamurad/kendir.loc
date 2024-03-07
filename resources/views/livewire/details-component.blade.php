

@section('title', __('Product Details').': '.$product->name)
<div>
    @php
        $wproducts = \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->content()->pluck('id');
    @endphp
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <div class="row">
                        <div class="col-6">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/">Home</a>
                                        <svg class="breadcrumb-arrow" width="6px" height="9px">
                                            <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                                        </svg>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('shop') }}">Shop</a>
                                        <svg class="breadcrumb-arrow" width="6px" height="9px">
                                            <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                                        </svg>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-6">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem;">
                                    <button type="button" class="close  mt-3" data-dismiss="alert" aria-hidden="true" style="top: -16px;">×</button>
                                    <h6><i class="icon fas fa-check"></i> Item added in Cart</h6>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @php
        $images = explode(",", $product->images)
    @endphp
        <div class="block">
            <div class="container">
                <div class="product product--layout--columnar" data-layout="columnar">
                    <div class="product__content">
                        <!-- .product__gallery -->
                        <div class="product__gallery">
                            <div class="product-gallery">
                                <div class="product-gallery__featured">
                                    <button class="product-gallery__zoom">
                                        <svg width="24px" height="24px">
                                            <use xlink:href="{{ asset('images/sprite.svg#zoom-in-24') }}"></use>
                                        </svg>
                                    </button>
                                    <div class="owl-carousel" id="product-image" wire:ignore>
                                        <div class="product-image product-image--location--gallery">
                                            <a href="{{ asset('images/products').'/'.$product->image }}" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                <img class="product-image__img" src="{{ asset('images/products').'/'.$product->image }}" alt="">
                                            </a>
                                        </div>
                                        @foreach($images as $image)
                                        <div class="product-image product-image--location--gallery">
                                            <a href="{{ asset('images/products').'/'.$image }}" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                <img class="product-image__img" src="{{ asset('images/products').'/'.$image }}" alt="">
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="product-gallery__carousel">
                                    <div class="owl-carousel" id="product-carousel">
                                        <a href="{{ asset('images/products').'/'.$product->image }}" class="product-image product-gallery__carousel-item">
                                            <div class="product-image__body">
                                                <img class="product-image__img product-gallery__carousel-image" src="{{ asset('images/products').'/'.$product->image }}" alt="">
                                            </div>
                                        </a>
                                        @foreach($images as $image)
                                        <a href="{{ asset('images/products').'/'.$image }}" class="product-image product-gallery__carousel-item">
                                            <div class="product-image__body">
                                                <img class="product-image__img product-gallery__carousel-image" src="{{ asset('images/products').'/'.$image }}" alt="">
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .product__gallery / end -->
                        <!-- .product__info -->
                        <div class="product__info">
                            <div class="product__wishlist-compare">
                                @if($wproducts->contains($id))
                                    <button wire:click="removeWishlist('{{ $product->id }}')" type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist">
                                        <svg width="16px" height="16px" style="fill: #ff3333;">
                                            <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
                                        </svg>
                                    </button>
                                @else
                                    <button wire:click="addToWishlist({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})" type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
                                        </svg>
                                    </button>
                                @endif
                                <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Compare" data-original-title="Compare">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="{{ asset('images/sprite.svg#compare-16') }}"></use>
                                    </svg>
                                </button>
                            </div>
                            <h1 class="product__name">{{ $product->name }}</h1>

                            <div class="product__description">{{ $product->short_description }}
                            </div>
                            <ul class="product__features">
                                <li>Model: {{ $product->specification->model }}</li>
                                <li>Dimension L: {{ $product->specification->dl }}</li>
                                <li>Dimension W: {{ $product->specification->dw }}</li>
                                <li>Dimension H: {{ $product->specification->dh }}</li>
                                <li>Weight: {{ $product->specification->weight }}</li>
                            </ul>
                            <ul class="product__meta">
                                <li class="product__meta-availability">Availability: <span class="text-success">In Stock</span></li>
                                <li><strong>Brand:</strong>  <a href="">{{ $product->brands->name }}</a></li>
                                <li><strong>Manufacturer:</strong> {{ $product->manufacturers->name }}</li>
                            </ul>
                        </div>
                        <!-- .product__info / end -->
                        <!-- .product__sidebar -->
                        <div class="product__sidebar">
                            <div class="product__availability">
                                Availability: <span class="text-success">{{ $product->stock_status }}</span>
                            </div>
                            <div class="product__prices">
                                {{ $product->sale_price }} man
                            </div>
                            <!-- .product__options -->
                            <form class="product__options">

                                <div class="form-group product__option">
                                    <label class="product__option-label" for="product-quantity">Quantity {{$qty}}</label>
                                    <div class="product__actions">
                                        <script>
                                            $(document).ready(function () {
                                            var aa='';
                                            $('.input-number__add').click(function () {
                                                aa=$("#product-quantity").val();
                                                @this.set('qty', aa)
                                                // alert(aa)

                                            })
                                            $('.input-number__sub').click(function () {
                                                aa=$("#product-quantity").val();
                                            @this.set('qty', aa)
                                                // alert(aa)
                                            })
                                            })
                                        </script>
                                        <div class="product__actions-item">
                                            <div class="input-number product__quantity">
                                                <input id="product-quantity" class="input-number__input form-control" type="number" min="1" wire:model.live="qty">

                                                <div class="input-number__add"></div>
                                                <div class="input-number__sub"></div>

                                            </div>
                                        </div>
                                        <div class="product__actions-item product__actions-item--addtocart">
                                            <button class="btn btn-primary" wire:click.prevent="storeProduct({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- .product__options / end -->
                        </div>
                        <!-- .product__end -->

                    </div>
                </div>
                <div class="product-tabs  product-tabs--sticky">
                    <div class="product-tabs__list">
                        <div class="product-tabs__list-body">
                            <div class="product-tabs__list-container container">
                                <a href="#tab-description" class="product-tabs__item product-tabs__item--active">Description</a>
                                <a href="#tab-specification" class="product-tabs__item">Specification</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-tabs__content">
                        <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                            <div class="typography">
                                <h3>Product Full Description</h3>
                                    {!! $product->description !!}
                            </div>
                        </div>
                        <div class="product-tabs__pane" id="tab-specification">
                            <div class="spec">
                                <h3 class="spec__header">Specification</h3>
                                <div class="spec__section">
                                    <h4 class="spec__section-title">General</h4>
                                    <div class="spec__row">
                                        <div class="spec__name">Model</div>
                                        <div class="spec__value">{{ $product->specification->model }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Dimension L</div>
                                        <div class="spec__value">{{ $product->specification->dl }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Dimension W</div>
                                        <div class="spec__value">{{ $product->specification->dw }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Dimension H</div>
                                        <div class="spec__value">{{ $product->specification->dh }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Weight</div>
                                        <div class="spec__value">{{ $product->specification->weight }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Unit</div>
                                        <div class="spec__value">{{ $product->specification->unit }}</div>
                                    </div>
                                    <div class="spec__row">
                                        <div class="spec__name">Weight</div>
                                        <div class="spec__value">{{ $product->specification->weight }}</div>
                                    </div>
                                </div>
                                <div class="spec__disclaimer">
                                    Information on technical characteristics, the delivery set, the country of manufacture and the appearance
                                    of the goods is for reference only and is based on the latest information available at the time of publication.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-products-carousel -->
        <div class="block block-products-carousel" data-layout="grid-5" data-mobile-grid-columns="2">
            <div class="container">
                <div class="block-header">
                    <h3 class="block-header__title">Related Products</h3>
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
                <div class="block-products-carousel__slider" wire:ignore>
                    <div class="block-products-carousel__preloader"></div>
                    <div class="owl-carousel">
                        @foreach($relatedProducts as $relproduct)
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--hidden-actions ">
                                    <button class="product-card__quickview" type="button">
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
                                            <img class="product-image__img" src="{{ asset('images/products').'/'.$relproduct->image }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                            <a href="{{ route('product.details', ['slug' => $relproduct->slug]) }}">{{ $relproduct->name }}</a>
                                        </div>
                                        <ul class="product-card__features-list">
                                            <li>Model: {{ $relproduct->specification->model }}</li>
                                            <li>Dimension L: {{ $relproduct->specification->dl }}</li>
                                            <li>Dimension W: {{ $relproduct->specification->dw }}</li>
                                            <li>Dimension H: {{ $relproduct->specification->dh }}</li>
                                            <li>Weight: {{ $relproduct->specification->weight }}</li>
                                        </ul>
                                    </div>
                                    <div class="product-card__actions">
                                        <div class="product-card__availability">
                                            Availability: <span class="text-success">{{ $relproduct->stock_status }}</span>
                                        </div>
                                        <div class="product-card__prices">
                                            $749.00
                                        </div>
                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="button" wire:click.prevent="storeProduct({{$relproduct->id}}, '{{$relproduct->name}}', {{ $relproduct->sale_price }})">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button" wire:click.prevent="storeProduct({{$relproduct->id}}, '{{$relproduct->name}}', {{ $relproduct->sale_price }})">Add To Cart</button>
                                            @if($wproducts->contains($relproduct->id))
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"
                                                        wire:click="removeWishlist('{{ $relproduct->id }}')">
                                                    <svg width="16px" height="16px" style="fill: #ff3333;">
                                                        <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                </button>
                                            @else
                                                <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"
                                                        wire:click="addToWishlist({{$relproduct->id}}, '{{$relproduct->name}}', {{ $relproduct->sale_price }})">
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
</div>
