@section('title', 'Brands')
<div>
    <script>
        window.addEventListener('closeDeleteBrandModal', event=> {
            $('#deleteConfirmation').modal('hide');
        })
        window.addEventListener('closeEditItemModal', event=> {
            $('#EditItem').modal('hide');
        })
    </script>

    @include('components.partials.brand.create-brand')
    @include('components.partials.brand.edit-brand')

    <div wire:ignore.self class="modal" id="deleteConfirmation">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body pb-30 pt-30">
                        <div class="col-md-12 text-center">
                            <h4 class="pb-3"> {{ __('Do you want to delete this record?') }} </br>"{{ $del_name }} "</h4>
                            <button class="btn btn-primary rounded" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-danger" wire:click="deleteBrand()">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gutters">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Brands</h4>
                        @include('components.alerts')
                    </div>
                    <div class="card-body">
                        <div class="row mt-2 mb-0">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#CreateBrand">
                                    {{__('Create Brand')}}
                                </button>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex">
                                    {{--                                <label>Search:</label>--}}
                                    {{--                                <input type="search" class="form-control form-control-sm ml-1" placeholder="" aria-controls="basicExample" wire:model.live='search'>--}}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="d-flex">
                                    {{--                                <label>Show</label>--}}
                                    {{--                                <select class="form-control form-control-sm mx-2" wire:model.live='perPage' style="width: 20%;">--}}
                                    {{--                                    <option value="5">5</option>--}}
                                    {{--                                    <option value="10">10</option>--}}
                                    {{--                                    <option value="20">20</option>--}}
                                    {{--                                </select>--}}
                                    {{--                                <label>entries</label>--}}
                                </div>
                            </div>

                        </div>
                        <table class="table table-hover m-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{__('Image')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Code')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                if ($brands){
                                    $i = ($brands->currentPage()-1)*$brands->perPage();
                                }
                            @endphp
                            @forelse ( $brands as $brand )
                                <tr>
                                    <td wire:key="{{$brand->id}}">{{ ++$i }}</td>
                                    <td><img class="rounded" src="{{ asset('images/brands').'/'.$brand->image }}" alt="" width="60"></td>
                                    <td>{{$brand->name}}</td>
                                    <td>{{$brand->code}}</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm rounded"data-toggle="modal" data-target="#EditBrand"
                                                wire:click="editBrand({{ $brand->id }})"> <i class="icon icon-pencil3"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm rounded"  data-toggle="modal" data-target="#deleteConfirmation"
                                                wire:click="deleteId({{ $brand->id }})"> <i class="icon icon-bin"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <p>Brands table is empty.</p>
                            @endforelse
                            </tbody>
                        </table>
                                             {{ $brands->links() }}

                    </div>
                </div>
            </div>
        </div>
</div>

