<div>
    @section('title', __('Compare'))

    @php
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
                        <li class="breadcrumb-item">
                            <a href="{{ route('shop') }}">Shop</a>
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
                    <div class="col-md-6"><h1>Compare List</h1></div>
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
            @if(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content()->count()>0)
                <div class="table-responsive">
                    <table class="compare-table">
                        <tbody>
                        <tr>
                            <th>Product</th>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $product)
                            <td>
                                <a class="compare-table__product-link" href="{{ route('product.details', ['slug' => $product->model->slug]) }}">
                                    <div class="compare-table__product-image product-image">
                                        <div class="product-image__body">
                                            <img class="product-image__img" src="{{ asset('images/products').'/'.$product->model->image }}" alt="">
                                        </div>
                                    </div>
                                    <div class="compare-table__product-name">{{ $product->model->name }}</div>
                                </a>
                            </td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Availability</th>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $product)
                            <td><span class="compare-table__product-badge badge badge-success">{{ $product->model->stock_status }}</span></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Price</th>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $product)
                            <td>{{ $product->model->sale_price }} man</td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Add To Cart</th>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $product)
                            <td><button class="btn btn-primary" wire:click="addToCart({{$product->id}}, '{{$product->name}}', {{ $product->model->sale_price }})">Add To Cart</button></td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>SKU</th>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $product)
                            <td>{{ $product->model->SKU }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Weight</th>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $product)
                                <td>{{ $product->model->specification->weight }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Unit</th>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $product)
                                <td>{{ $product->model->specification->unit }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Dimensions (L x W x H)</th>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $product)
                                <td>{{ $product->model->specification->dl.'x'.$product->model->specification->dw.'x'.$product->model->specification->dh }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <th>Model</th>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $product)
                                <td>{{ $product->model->specification->model }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <th></th>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $product)
                            <td><button class="btn btn-secondary btn-sm" wire:click="removeCompare({{$product->id}})">Remove</button></td>
                            @endforeach
                        </tr>

                        </tbody>
                    </table>
                </div>
            @else
                <p>{{ __('Compare List is empty.') }}</p>
            @endif
        </div>
    </div>
</div>
