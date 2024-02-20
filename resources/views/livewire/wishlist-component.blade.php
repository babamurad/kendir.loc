<div>
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
                        <li class="breadcrumb-item">
                            <a href="#">Breadcrumb</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Wish List</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <div class="row">
                    <div class="col-md-6"><h1>Wish List</h1></div>
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
    <div class="block">
        <div class="container">
            <table class="wishlist">
                <thead class="wishlist__head">
                <tr class="wishlist__row">
                    <th class="wishlist__column wishlist__column--image">Image</th>
                    <th class="wishlist__column wishlist__column--product">Product</th>
                    <th class="wishlist__column wishlist__column--stock">Stock Status</th>
                    <th class="wishlist__column wishlist__column--price">Price</th>
                    <th class="wishlist__column wishlist__column--tocart"></th>
                    <th class="wishlist__column wishlist__column--remove"></th>
                </tr>
                </thead>
                <tbody class="wishlist__body">
                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->content() as $wproduct)
                    <tr class="wishlist__row">
                        <td class="wishlist__column wishlist__column--image">
                            <div class="product-image">
                                <a href="" class="product-image__body">
                                    <img class="product-image__img" src="{{ asset('images/products').'/'.$wproduct->model->image }}" alt="">
                                </a>
                            </div>
                        </td>
                        <td class="wishlist__column wishlist__column--product">
                            <a href="" class="wishlist__product-name">{{ $wproduct->model->name }}</a>
                            <div class="wishlist__product-rating">
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
                                <div class="wishlist__product-rating-legend">
                                    9 Reviews
                                </div>
                            </div>
                        </td>
                        <td class="wishlist__column wishlist__column--stock">
                            <div class="badge badge-success">{{ $wproduct->model->stock_status }}</div>
                        </td>
                        <td class="wishlist__column wishlist__column--price">{{ $wproduct->model->sale_price }}</td>
                        <td class="wishlist__column wishlist__column--tocart">
                            <button type="button" class="btn btn-primary btn-sm" wire:click="store({{$wproduct->model->id}}, '{{$wproduct->model->name}}', {{ $wproduct->model->sale_price }})">Add To Cart</button>
                        </td>
                        <td class="wishlist__column wishlist__column--remove">
                            <button type="button" class="btn btn-light btn-sm btn-svg-icon" wire:click="removeWishlist('{{ $wproduct->id }}')">
                                <svg width="12px" height="12px">
                                    <use xlink:href="{{ asset('images/sprite.svg#cross-12') }}"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
