
@section('title', 'Search')
<div>
    @php
        $wproducts = \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->content()->pluck('id');
    @endphp
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
                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                                <h6><i class="icon fas fa-check"></i> Item added in Cart</h6>
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
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Categories
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-categories">
                                                        <ul class="filter-categories__list">
                                                            <li class="filter-categories__item filter-categories__item--parent">
                                                                <a href="#"
                                                                   wire:click="allCategory">{{ __(' All Category') }}</a>
                                                                <div id="prodCount" class="filter-categories__counter">{{ $prodCount }}</div>
                                                            </li>
                                                            @foreach($categories as $category)
                                                                <li class="filter-categories__item filter-categories__item--parent">
                                                                    <a href="#"
                                                                       wire:click="selectCategory('{{ $category->id }}')">{{ $category->name }}</a>
                                                                    <div class="filter-categories__counter">{{ $category->products->count() }}</div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                    <div class="widget-filters__item">--}}
                                    {{--                                        <div class="filter filter--opened" data-collapse-item>--}}
                                    {{--                                            <button type="button" class="filter__title" data-collapse-trigger>--}}
                                    {{--                                                {{ __('Filter by Price') }}--}}
                                    {{--                                                <svg class="filter__arrow" width="12px" height="7px">--}}
                                    {{--                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>--}}
                                    {{--                                                </svg>--}}
                                    {{--                                            </button>--}}
                                    {{--                                            <div class="filter__body" data-collapse-content>--}}
                                    {{--                                                <div class="filter__container">--}}
                                    {{--                                                    <script>--}}
                                    {{--                                                        $(document).ready(function(){--}}
                                    {{--                                                            var minPrice = {{ $minPrice }}--}}
                                    {{--                                                            var maxPrice={{ $maxPrice }}--}}
                                    {{--                                                            $(".filter-price").data("min", minPrice)--}}
                                    {{--                                                            $(".filter-price").data("max", maxPrice)--}}



                                    {{--                                                        });--}}
                                    {{--                                                    </script>--}}

                                    {{--                                                    <div class="filter-price" data-min="" data-max="" data-from="250" data-to="500">--}}
                                    {{--                                                        <div class="filter-price__slider" wire:ignore></div>--}}
                                    {{--                                                        <div class="filter-price__title">--}}
                                    {{--                                                            Price: $--}}
                                    {{--                                                            <span class="filter-price__min-value" wire:model="minPrice">--}}
                                    {{--                                                            {{ $minPrice }}--}}
                                    {{--                                                            </span>--}}
                                    {{--                                                            – $--}}
                                    {{--                                                            <span class="filter-price__max-value" wire:model="maxPrice">--}}
                                    {{--                                                            {{ $maxPrice }}--}}
                                    {{--                                                            </span>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Brand
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-list">
                                                        <div class="filter-list__list">
                                                            <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input" name="filter_radio" type="radio">
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                                <span class="filter-list__title">
                                                                            Wakita
                                                                        </span>
                                                                <span class="filter-list__counter">7</span>
                                                            </label>
                                                            <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input" name="filter_radio" type="radio">
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                                <span class="filter-list__title">
                                                                            Zosch
                                                                        </span>
                                                                <span class="filter-list__counter">42</span>
                                                            </label>
                                                            <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input" name="filter_radio" type="radio" checked disabled>
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                                <span class="filter-list__title">
                                                                            WeVALT
                                                                        </span>
                                                            </label>
                                                            <label class="filter-list__item  filter-list__item--disabled ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input" name="filter_radio" type="radio" disabled>
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                                <span class="filter-list__title">
                                                                            Hammer
                                                                        </span>
                                                            </label>
                                                            <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input" name="filter_radio" type="radio">
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                                <span class="filter-list__title">
                                                                            Mitasia
                                                                        </span>
                                                                <span class="filter-list__counter">1</span>
                                                            </label>
                                                            <label class="filter-list__item ">
                                                                        <span class="filter-list__input input-radio">
                                                                            <span class="input-radio__body">
                                                                                <input class="input-radio__input" name="filter_radio" type="radio">
                                                                                <span class="input-radio__circle"></span>
                                                                            </span>
                                                                        </span>
                                                                <span class="filter-list__title">
                                                                            Metaggo
                                                                        </span>
                                                                <span class="filter-list__counter">25</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Color
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-color">
                                                        <div class="filter-color__list">
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  input-check-color--white  " style="color: #fff;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color   input-check-color--light " style="color: #d9d9d9;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #b3b3b3;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #808080;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #666;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #4d4d4d;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #262626;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #ff4040;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox" checked>
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #ff8126;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color   input-check-color--light " style="color: #ffd440;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color   input-check-color--light " style="color: #becc1f;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #8fcc14;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox" checked>
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #47cc5e;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #47cca0;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #47cccc;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #40bfff;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox" disabled>
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #3d6dcc;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox" checked>
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #7766cc;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #b852cc;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                        <span class="filter-color__check input-check-color  " style="color: #e53981;">
                                                                            <label class="input-check-color__body">
                                                                                <input class="input-check-color__input" type="checkbox">
                                                                                <span class="input-check-color__box"></span>
                                                                                <svg class="input-check-color__icon" width="12px" height="9px">
                                                                                    <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                                </svg>
                                                                                <span class="input-check-color__stick"></span>
                                                                            </label>
                                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-filters__actions d-flex">
                                    <button class="btn btn-primary btn-sm">Filter</button>
                                    <button class="btn btn-secondary btn-sm">Reset</button>
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
                                                    <a href="#" class="product-image__body">
                                                        <img class="product-image__img" src="{{ asset('images/products').'/'.$latestProduct->image }}" alt="{{ $latestProduct->name }} image" style="margin-top: -10px;">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="widget-products__info">
                                                <div class="widget-products__name">
                                                    <a href="product.html">{{ $latestProduct->name }}</a>
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
                                                    <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                                                </svg>
                                            </button>
                                            <button data-layout="grid-3-sidebar" data-with-features="true" title="Grid With Features" type="button" class="layout-switcher__button ">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-with-details-16x16"></use>
                                                </svg>
                                            </button>
                                            <button data-layout="list" data-with-features="false" title="List" type="button" class="layout-switcher__button ">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-list-16x16"></use>
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
                                        <h5 class="modal-title" id="exampleModalLabel">{{__('Product Details')}} - {{$pqty}}</h5>
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
                                                <h1 class="product__name mb-0 mt-2">{{ $name }}</h1>
                                            </div>
                                            <div class="col-12">
                                                <div class="product__prices">
                                                    {{ $sale_price }} man.
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group product__option">
                                                    <label class="product__option-label" for="product-quantity">Quantity</label>
                                                    <div class="product__actions">
                                                        <div class="product__actions-item">
                                                            <div class="input-number product__quantity">
                                                                <input id="product-quantity" class="input-number__input form-control form-control-lg" type="number" min="1" value="1" wire:model.live="pqty">
                                                                <div class="input-number__add" wire:click="qtyInc"></div>
                                                                <div class="input-number__sub" wire:click="qtyDec"></div>
                                                            </div>
                                                        </div>
                                                        <div class="product__actions-item product__actions-item--addtocart">
                                                            <button class="btn btn-primary btn-lg" wire:click="store({{$id}}, '{{$name}}', {{ $sale_price }})">Add to cart</button>
                                                        </div>

                                                        <div class="product__actions-item product__actions-item--wishlist">
                                                            @if($wproducts->contains($id))
                                                                <button type="button" class="btn btn-secondary btn-svg-icon btn-lg" data-toggle="tooltip" title="" data-original-title="Wishlist"
                                                                        wire:click="removeWishlist('{{ $id }}')">
                                                                    <svg width="16px" height="16px" style="fill: #ff3333;">
                                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                                    </svg>
                                                                </button>
                                                            @else
                                                                <button type="button" class="btn btn-secondary btn-svg-icon btn-lg" data-toggle="tooltip" title="" data-original-title="Wishlist"
                                                                        wire:click="addToWishlist({{$id}}, '{{$name}}', {{ $sale_price }})">
                                                                    <svg width="16px" height="16px">
                                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                                    </svg>
                                                                </button>
                                                            @endif
                                                        </div>

                                                        <div class="product__actions-item product__actions-item--compare">
                                                            <button type="button" class="btn btn-secondary btn-svg-icon btn-lg" data-toggle="tooltip" title="" data-original-title="Compare">
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
                        <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false" data-mobile-grid-columns="2">
                            <div class="products-list__body">
                                @foreach($products as $product)
                                    <div class="products-list__item">
                                        <div class="product-card product-card--hidden-actions ">
                                            <button class="product-card__quickview" type="button" data-toggle="modal" data-target="#productDetails" wire:click="productDetails('{{$product->id}}')">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#quickview-16"></use>
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
                                                <a href="#" class="product-image__body">
                                                    <img class="product-image__img" src="{{ asset('images/products').'/'.$product->image }}" alt="Product Image">
                                                </a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <a href="#">{{ $product->name }}</a>
                                                </div>
                                                <div class="product-card__rating">
                                                    <div class="product-card__rating-stars">
                                                        <div class="rating">
                                                            <div class="rating__body">
                                                                <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                    <g class="rating__fill">
                                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                        <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                    </g>
                                                                    <g class="rating__stroke">
                                                                        <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
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
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg>
                                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                        </button>
                                                    @else
                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button" wire:click="addToWishlist({{$product->id}}, '{{$product->name}}', {{ $product->sale_price }})">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg>
                                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                        </button>
                                                    @endif
                                                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                        <svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#compare-16"></use>
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
        </div>
    </div>
</div>
@push('priceFilter')
    <script>
        /*
        // price filter
        */
        $(function () {
            $('.filter-price').each(function (i, element) {
                const min = $(element).data('min');
                const max = $(element).data('max');
                const from = $(element).data('from');
                const to = $(element).data('to');
                const slider = element.querySelector('.filter-price__slider');

                noUiSlider.create(slider, {
                    start: [from, to],
                    connect: true,
                    direction: isRTL() ? 'rtl' : 'ltr',
                    range: {
                        'min': min,
                        'max': max
                    }
                });

                const titleValues = [
                    $(element).find('.filter-price__min-value')[0],
                    $(element).find('.filter-price__max-value')[0]
                ];


                slider.noUiSlider.on('update', function (values, handle) {
                    titleValues[handle].innerHTML = values[handle];
                });
            });
        });
    </script>
@endpush
