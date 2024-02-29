@section('title', 'Manufacturer')
<div>
    <script>
        window.addEventListener('closeDeleteManufacturerModal', event=> {
            $('#deleteConfirmation').modal('hide');
        })
        window.addEventListener('closeEditManufacturerModal', event=> {
            $('#EditManufacturer').modal('hide');
        })
    </script>

    @include('components.partials.manuf.create-manuf')
    @include('components.partials.manuf.edit-manuf')

    <div wire:ignore.self class="modal" id="deleteConfirmation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body pb-30 pt-30">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> {{ __('Do you want to delete this record?') }} </br>"{{ $del_name }} "</h4>
                        <button class="btn btn-primary " data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger" wire:click="deleteManufacturer()">Delete</button>
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CreateManufacturer">
                                {{__('Create Manufacturer')}}
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
                            if ($manufs){
                                $i = ($manufs->currentPage()-1)*$manufs->perPage();
                            }
                        @endphp
                        @forelse ( $manufs as $manuf )
                            <tr>
                                <td wire:key="{{$manuf->id}}">{{ ++$i }}</td>
                                <td><img src="{{ asset('images/manufacturer').'/'.$manuf->image }}" alt="" width="60"></td>
                                <td>{{$manuf->name}}</td>
                                <td>{{$manuf->code}}</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm rounded"data-toggle="modal" data-target="#EditManufacturer"
                                            wire:click="edit({{ $manuf->id }})"> <i class="icon icon-pencil3"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm rounded"  data-toggle="modal" data-target="#deleteConfirmation"
                                            wire:click="deleteId({{ $manuf->id }})"> <i class="icon icon-bin"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <p>Manufacturer table is empty.</p>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $manufs->links() }}

                </div>
            </div>
        </div>
    </div>
</div>

