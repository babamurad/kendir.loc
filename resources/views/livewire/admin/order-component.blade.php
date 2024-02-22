@section('title', 'Orders')
<div>
    <div wire:ignore.self class="modal" id="deleteConfirmation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body pb-30 pt-30">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> {{ __('Do you want to delete this record?') }} </br>" "</h4>
                        <button class="btn btn-primary " data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger" wire:click="deleteCategory()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('closeCreateCategoryModal', event=> {
            $('#CreateCategory').modal('hide');
        })
        window.addEventListener('closeDeleteCategoryModal', event=> {
            $('#deleteConfirmation').modal('hide');
        })
        window.addEventListener('closeEditCategoryModal', event=> {
            $('#EditCategory').modal('hide');
        })
        // function deleteConfirmation(id)
        // {
        //      @this.set('category_id', id);
        //      $('#deleteConfirmation').modal('show');
        // }

        // function deleteCategory()
        // {
        //     @this.call('deleteCategory');
        //     $('#deleteConfirmation').modal('hide');
        // }
    </script>

    <div class="row gutters">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories</h4>
                    @include('components.alerts')
                </div>
                <div class="card-body">
                    <div class="row mt-2 mb-0">
                        <div class="col-md-4">
                            <div class="d-flex">
                                <label>Search:</label>
                                <input type="search" class="form-control form-control-sm ml-1" placeholder="" aria-controls="basicExample" wire:model.live='search'>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex">
                                <label>Show</label>
                                <select class="form-control form-control-sm mx-2" wire:model.live='perPage' style="width: 20%;">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="40">40</option>
                                </select>
                                <label>entries</label>
                            </div>
                        </div>

                    </div>
                    <table class="table table-hover m-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('OrderID')}}</th>
                            <th>{{__('SubTotal')}}</th>
                            <th>{{__('Tax')}}</th>
                            <th>{{__('Total')}}</th>
                            <th>{{__('First Name')}}</th>
                            <th>{{__('Last Name')}}</th>
                            <th>{{__('Mobile')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Zipcode')}}</th>
                            <th>{{__('Status')}}</th>
                            <th>{{__('Order Date')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = ($orders->currentPage()-1)*$orders->perPage();
                        @endphp
                        @forelse ( $orders as $order )
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->subtotal }}</td>
                                <td>{{ $order->tax }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->firstname }}</td>
                                <td>{{ $order->lastname }}</td>
                                <td>{{ $order->mobile }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->zipcode }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ \Carbon\Carbon::create($order->created_at)->format('d.m.Y') }} </td>
                                <td>
                                    <a href="{{ route('admin.order-details', ['order_id' => $order->id]) }}"
                                       type="button" class="btn btn-warning btn-sm rounded"><i class="icon icon-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <p>Orders table is empty.</p>
                        @endforelse
                        </tbody>
                    </table>
                    {{$orders->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
