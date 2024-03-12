@section('title', 'Products')
<div>
    <div wire:ignore.self class="modal" id="deleteConfirmation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body pb-30 pt-30">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> {{ __('Do you want to delete this record?') }} </br>"{{ $del_name }} "</h4>
                        <button class="btn btn-primary " data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger" wire:click="deleteProduct()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('closeDeleteProductModal', event=> {
            $('#deleteConfirmation').modal('hide');
        })
    </script>
    <style>
        .btn-primary {
            background-color: #179978;
            border-color: #179978;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #148367;
            border-color: #148367;
            color: #fff;
        }
    </style>

    <div class="row gutters">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products List</h4>
                    @include('components.alerts')
                </div>
                <div class="card-body">
                    <div class="row mt-2 mb-0">
                        <div class="col-md-3">
                            <a href="{{ route('admin.create-product') }}" type="button" class="btn btn-primary rounded"> {{__('Create Product')}} </a>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex">
                                <label>Search:</label>
                                <input type="search" class="form-control form-control-sm ml-1" placeholder="" aria-controls="basicExample" wire:model.live='search'>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex">
                                <label>Show</label>
                                <select class="form-control form-control-sm mx-2" wire:model.live='perPage' style="width: 20%;">
                                    <option selected value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="40">40</option>
                                </select>
                                <label>entries</label>
                            </div>
                        </div>
                        <div class="col-md-2"><label>Count: {{ count($pcount) }}</label></div>
                    </div>
                    <table class="table table-hover m-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('Image')}}</th>
                            <th>{{__('Product Name')}}</th>
                            <th>{{__('Slug')}}</th>
                            <th>{{__('Stock Status')}}</th>
                            <th>{{__('Sale Price')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = ($products->currentPage()-1)*$products->perPage();
                        @endphp
                        @forelse ( $products as $product )
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td><img src="{{ asset('images/products').'/'.$product->image }}" alt="" width="60"></td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->slug}}</td>
                                <td>{{$product->stock_status}}</td>
                                <td>{{$product->sale_price}}</td>
                                <td>
                                    <a href="{{ route('admin.edit-product', ['product_id' => $product->id] ) }}" type="button" class="btn btn-success btn-sm rounded">
                                        <i class="icon icon-pencil3"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm rounded"  data-toggle="modal" data-target="#deleteConfirmation" wire:click="deleteId({{ $product->id }})">
                                        <i class="icon icon-bin"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <p>Products table is empty.</p>
                        @endforelse
                        </tbody>
                    </table>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
