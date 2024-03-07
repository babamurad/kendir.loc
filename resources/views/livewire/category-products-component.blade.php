@php
    $wproducts = \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->content()->pluck('id');
@endphp
@section('title', __('Shop'))
<div class="shop-layout__content">
    <div class="block">
        <div class="products-view">
            <div class="products-view__options">
                <div class="view-options view-options--offcanvas--mobile">
                    <div class="view-options__filters-button">
                        <button type="button" class="filters-button">
                            <svg class="filters-button__icon" width="16px" height="16px">
                                <use xlink:href="images/sprite.svg#filters-16"></use>
                            </svg>
                            <span class="filters-button__title">Filters</span>
                            <span class="filters-button__counter">3</span>
                        </button>
                    </div>
                    <div class="view-options__layout">
                        <div class="layout-switcher">
                            <div class="layout-switcher__list">
                                <button data-layout="grid-3-sidebar" data-with-features="false" title="Grid" type="button" class="layout-switcher__button  layout-switcher__button--active ">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="{{ asset('images/sprite.svg#layout-grid-16x16') }}"></use>
                                    </svg>
                                </button>
                                <button data-layout="grid-3-sidebar" data-with-features="true" title="Grid With Features" type="button" class="layout-switcher__button ">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="{{ asset('images/sprite.svg#layout-grid-with-details-16x16') }}"></use>
                                    </svg>
                                </button>
                                <button data-layout="list" data-with-features="false" title="List" type="button" class="layout-switcher__button ">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="{{ asset('images/sprite.svg#layout-list-16x16') }}"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="view-options__legend">Showing {{ $products->count() }} of {{ $products->total() }} products  </div>
                    <div class="view-options__divider"></div>
                    <div class="view-options__control">
                        <label for="">Sort By</label>
                        <div>
                            <select class="form-control form-control-sm" name="" id="" wire:model.live="sort">
                                <option value="ASC">Default</option>
                                <option value="ASC">Name (A-Z)</option>
                                <option value="DESC">Name (Z-A)</option>
                            </select>
                        </div>
                    </div>
                    <div class="view-options__control">
                        <label for="">Show</label>
                        <div>
                            <select class="form-control form-control-sm" name="" id="" wire:model.live="perPage">
                                <option value="12">12</option>
                                <option value="18">18</option>
                                <option value="24">24</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
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
                                                            <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
                                                        </svg>
                                                    </button>
                                                @else
                                                    <button type="button" class="btn btn-secondary btn-svg-icon" data-toggle="tooltip" title="" data-original-title="Wishlist"
                                                            wire:click="addToWishlist({{$id}}, '{{$name}}', {{ $sale_price }})">
                                                        <svg width="16px" height="16px">
                                                            <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
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
            <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false" data-mobile-grid-columns="2">
                <div class="products-list__body">
                    @foreach($products as $product)
                        <div class="products-list__item">
                            <div class="product-card product-card--hidden-actions ">
                                <button class="product-card__quickview" type="button" data-toggle="modal" data-target="#productDetails" wire:click="productDetails('{{$product->id}}')">
                                    <svg width="16px" height="16px">
                                        <use xlink:href="{{ asset('images/sprite.svg#quickview-16') }}"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span>
                                </button>
                                <div class="product-card__badges-list">
                                    @if($newArrivals->contains($product->id))
                                        <div class="product-card__badge product-card__badge--new">New</div>
                                    @elseif($product->featured)
                                        <div class="product-card__badge product-card__badge--hot">Hot</div>
                                    @else
                                        <div class="product-card__badge product-card__badge--sale">Sale</div>
                                    @endif
                                </div>
                                <div class="product-card__image product-image">
                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}" class="product-image__body" wire:navigate>
                                        <img class="product-image__img" src="{{ asset('images/products').'/'.$product->image }}" alt="Product Image">
                                    </a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name">
                                        <a href="{{ route('product.details', ['slug' => $product->slug]) }}" wire:navigate>{{ $product->name }}</a>
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
                                        Availability: <span class="text-success">{{ $product->stock_status }}</span>
                                    </div>
                                    <div class="product-card__prices">
                                        {{ $product->sale_price }}
                                    </div>
                                    <div class="product-card__buttons">
                                        <button class="btn btn-primary product-card__addtocart" type="button" wire:click="store({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})">Add To Cart</button>
                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button" wire:click="store({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})">Add To Cart</button>
                                        @if($wproducts->contains($product->id))
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
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="products-view__pagination">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
