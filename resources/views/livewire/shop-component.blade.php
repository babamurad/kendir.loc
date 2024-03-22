
@section('title', __('Shop'))
<div>
    @php
        $wproducts = \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->content()->pluck('id');
        $cproducts = \Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content()->pluck('id');
    @endphp
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
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ route('shop') }}">{{ __('Shop') }}</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $cat_name }}</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <div class="row">
                    <div class="col-md-6"><h1>Shop</h1></div>
                    <div class="col-md-6">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; top: -2rem;">
                            <button type="button" class="close  mt-3" data-dismiss="alert" aria-hidden="true" style="top: -16px;">×</button>
                            <h6><i class="icon fas fa-check"></i> {{ session('success') }}</h6>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">
            <div class="shop-layout__sidebar">
                <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                    <div class="block-sidebar__backdrop"></div>
                    <div class="block-sidebar__body">
                        <div class="block-sidebar__header">
                            <div class="block-sidebar__title">Filters</div>
                            <button class="block-sidebar__close" type="button">
                                <svg width="20px" height="20px">
                                    <use xlink:href="images/sprite.svg#cross-20"></use>
                                </svg>
                            </button>
                        </div>

                        <div class="block-sidebar__item">
                            <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                                <h4 class="widget-filters__title widget__title">Filters</h4>
                                <div class="widget-filters__list">

                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item="">
                                            <button type="button" class="filter__title" data-collapse-trigger="">
                                                {{__('Categories')}}
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-down-12x7') }}"></use>
                                                </svg>

                                            </button>
                                            <div class="filter__body" data-collapse-content="">
                                                <div class="filter__container"  wire:ignore>
                                                    <div class="filter-categories-alt">
                                                        <ul class="filter-categories-alt__list filter-categories-alt__list--level--1" data-collapse-opened-class="filter-categories-alt__item--open">
                                                            <li class="filter-categories-alt__item d-flex" data-collapse-item="">
                                                                <a href="{{route('shop')}}"><strong>{{ __('All Categories') }}</strong></a>
                                                                <div class="filter-categories__counter">{{$prCount}}</div>
                                                            </li>
                                                            @foreach($categories as $category)
                                                                @if($category->parent_id == 0)
                                                                    <li class="filter-categories-alt__item" data-collapse-item="">
                                                                        @if($category->children->count()>0)
                                                                        <button class="filter-categories-alt__expander" data-collapse-trigger=""></button>
                                                                        @endif
                                                                        <a href="">{{ $category->name }}</a>
                                                                        @if($category->children->count()>0)
                                                                            <div class="filter-categories-alt__children" data-collapse-content="">
                                                                            <ul class="filter-categories-alt__list filter-categories-alt__list--level--2">
                                                                                @foreach($category->children as $subcategory)
                                                                                    <li class="filter-categories-alt__item d-flex" data-collapse-item="" style="cursor: pointer;" wire:key="{{$subcategory->id}}">
                                                                                    <a class="cat " wire:click="getCategoryProducts({{ $subcategory->id }})">{{ $subcategory->name }}</a>
                                                                                    <div class="filter-categories__counter">{{ $subcategory->products->count() ?? '0' }}</div>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                            </div>
                                                                        @endif
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        $(document).ready(function(){
                                        $("li").click(function(){
                                            $(".cat").toggleClass("active");
                                        });
                                        });
                                    </script>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item="">
                                            <button type="button" class="filter__title" data-collapse-trigger="">
                                                {{__('Brand')}}
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-down-12x7') }}"></use>
                                                </svg>
{{--                                                <button class="btn btn-outline-danger btn-sm mb-1" wire:click="dbr">ChBr</button>--}}
                                            </button>
                                            <div class="filter__body" data-collapse-content="">
                                                <div class="filter__container">
                                                    <div class="filter-list">
                                                        <div class="filter-list__list">

                                                            @foreach($brands as $brand)
                                                                <div class="form-check mb-2" style="font-size: 14px;">
                                                                    <input class="form-check-input" type="checkbox" value="{{ $brand->id }}" id="brand{{ $brand->id }}"
                                                                           wire:click="checkBrand('{{ $brand->id }}')">
                                                                    <label class="form-check-label" for="defaultCheck{{ $brand->id }}">
                                                                        {{ $brand->name }}
                                                                    </label>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item="">
                                            <button type="button" class="filter__title" data-collapse-trigger="">
                                                {{__('Manufacturer')}}
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-down-12x7') }}"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content="">
                                                <div class="filter__container">
                                                    <div class="filter-list">
                                                        <div class="filter-list__list">
                                                            @foreach($manufacturers as $manufacturer)
                                                                <div class="form-check mb-2" style="font-size: 14px;">
                                                                    <input class="form-check-input" type="checkbox" value="{{ $manufacturer->id }}"
                                                                           id="manuf{{ $manufacturer->id }}" wire:click="checkManuf('{{ $manufacturer->id }}')">
                                                                    <label class="form-check-label" for="defaultCheck{{ $manufacturer->id }}">
                                                                        {{ $manufacturer->name }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class=" widget-filters__list widget-filters__actions d-flex">
{{--                                    <button class="btn btn-primary btn-sm">Filter</button>--}}
                                    <button class="btn btn-secondary btn-sm" wire:click="resetAll" wire:navigate>Reset</button>
                                </div>
                            </div>
                        </div>
                        <div class="block-sidebar__item d-none d-lg-block">
                            <div class="widget-products widget">
                                <h4 class="widget__title">Latest Products</h4>
                                <div class="widget-products__list">
                                    @foreach($latestProducts as $latestProduct)
                                    <div class="widget-products__item">
                                        <div class="widget-products__image">
                                            <div class="product-image">
                                                <a href="{{ route('product.details', ['slug' => $latestProduct->slug]) }}" class="product-image__body">
                                                    <img class="product-image__img" src="{{ asset('images/products').'/'.$latestProduct->image }}" alt="{{ $latestProduct->name }} image" style="margin-top: -10px;">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="widget-products__info">
                                            <div class="widget-products__name">
                                                <a href="{{ route('product.details', ['slug' => $latestProduct->slug]) }}">{{ $latestProduct->name }}</a>
                                            </div>
                                            <div class="widget-products__prices">
                                                {{ $latestProduct->sale_price }}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-layout__content">
                <div class="block">
                    <div class="products-view">
                        <div class="products-view__options">
                            <div class="view-options view-options--offcanvas--mobile">
                                <div class="view-options__filters-button">
                                    <button type="button" class="filters-button">
                                        <svg class="filters-button__icon" width="16px" height="16px">
                                            <use xlink:href="{{ asset('images/sprite.svg#filters-16') }}"></use>
                                        </svg>
                                        <span class="filters-button__title">Filters</span>
                                        <span class="filters-button__counter">3</span>
                                    </button>
                                </div>
                                <div class="view-options__layout">
                                    <div class="layout-switcher">
                                        <div class="layout-switcher__list">
                                            <button data-layout="grid-3-sidebar" data-with-features="false" title="Grid" type="button" class="layout-switcher__button  ">
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
                                                                <button type="button" class="btn btn-secondary btn-svg-icon" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"
                                                                        wire:click="removeWishlist('{{ $id }}')">
                                                                    <svg width="16px" height="16px" style="fill: #ff3333;">
                                                                        <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
                                                                    </svg>
                                                                </button>
                                                            @else
                                                                <button type="button" class="btn btn-secondary btn-svg-icon" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"
                                                                        wire:click="addToWishlist({{$id}}, '{{$name}}', {{ $sale_price }})">
                                                                    <svg width="16px" height="16px">
                                                                        <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
                                                                    </svg>
                                                                </button>
                                                            @endif
                                                        </div>
                                                        @if($cproducts->contains($id))
                                                            <div class="product__actions-item product__actions-item--compare">
                                                                <button type="button" class="btn btn-secondary btn-svg-icon" data-toggle="tooltip" title=""
                                                                        data-original-title="Compare" wire:click="removeCompare({{$id}}, '{{$name}}', {{ $sale_price }})">
                                                                    <svg width="16px" height="16px" style="fill: #ff3333;">
                                                                        <use xlink:href="{{ asset('images/sprite.svg#compare-16') }}"></use>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        @else
                                                            <div class="product__actions-item product__actions-item--compare">
                                                                <button type="button" class="btn btn-secondary btn-svg-icon" data-toggle="tooltip" title=""
                                                                        data-original-title="Compare" wire:click="addToCompare({{$id}})">
                                                                    <svg width="16px" height="16px">
                                                                        <use xlink:href="{{ asset('images/sprite.svg#compare-16') }}"></use>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        @endif
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
                        <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false" data-mobile-grid-columns="2" wire:ignore.self>
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
                                                    <div class="product-card__rating-legend"> <strong>{{__('Brand')}}: </strong> {{ $product->brands->name }} </div>
                                                    <div class="product-card__rating-legend"> <strong>{{__('Manufacturer')}}: </strong> {{ $product->manufacturers->name }} </div>
                                                </div>
                                                <ul class="product-card__features-list">
                                                    <li>Model: {{ $product->specification->model }}</li>
                                                    <li>Dimension L: {{ $product->specification->dl }}</li>
                                                    <li>Dimension W: {{ $product->specification->dw }}</li>
                                                    <li>Dimension H: {{ $product->specification->dh }}</li>
                                                    <li>Weight: {{ $product->specification->weight }}</li>
                                                </ul>
                                            </div>
                                            <div class="product-card__actions">
                                                <div class="product-card__availability">
                                                    Availability: <span class="text-success {{ $product->stock_status=='In Stock'? '': 'text-danger' }}"> <br> {{ $product->stock_status }}</span>
                                                </div>
                                                <div class="product-card__prices">
                                                    {{ $product->sale_price }}
                                                </div>
                                                <div class="product-card__buttons">
                                                    <button class="btn btn-primary product-card__addtocart" type="button" wire:click="store({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})">Add To Cart</button>
                                                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button" wire:click="store({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})">Add To Cart</button>
                                                    @if($wproducts->contains($product->id))
                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"
                                                                wire:click="removeWishlist('{{ $product->id }}')">
                                                            <svg width="16px" height="16px" style="fill: #ff3333;">
                                                                <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
                                                            </svg>
                                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                        </button>
                                                    @else
                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"
                                                                wire:click="addToWishlist({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="{{ asset('images/sprite.svg#wishlist-16') }}"></use>
                                                            </svg>
                                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                        </button>
                                                    @endif
                                                    @if($cproducts->contains($product->id))
                                                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                            type="button" wire:click="removeCompare({{$product->id}})">
                                                        <svg width="16px" height="16px" style="fill: #ffd333;">
                                                            <use xlink:href="{{ asset('images/sprite.svg#compare-16') }}"></use>
                                                        </svg>
                                                        <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                    </button>
                                                    @else
                                                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                                            type="button" wire:click="addToCompare({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})">
                                                        <svg width="16px" height="16px">
                                                            <use xlink:href="{{ asset('images/sprite.svg#compare-16') }}"></use>
                                                        </svg>
                                                        <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                    </button>
                                                    @endif
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
        </div>
    </div>
</div>
@push('priceFilter')
    <script>

        // /*
        // // price filter
        // */
        // $(function () {
        //     $('.filter-price').each(function (i, element) {
        //         const min = $(element).data('min');
        //         const max = $(element).data('max');
        //         const from = $(element).data('from');
        //         const to = $(element).data('to');
        //         const slider = element.querySelector('.filter-price__slider');
        //
        //         noUiSlider.create(slider, {
        //             start: [from, to],
        //             connect: true,
        //             direction: isRTL() ? 'rtl' : 'ltr',
        //             range: {
        //                 'min': min,
        //                 'max': max
        //             }
        //         });
        //
        //         const titleValues = [
        //             $(element).find('.filter-price__min-value')[0],
        //             $(element).find('.filter-price__max-value')[0]
        //         ];
        //
        //
        //         slider.noUiSlider.on('update', function (values, handle) {
        //             titleValues[handle].innerHTML = values[handle];
        //         });
        //     });
        // });
    </script>
@endpush
