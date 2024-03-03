@section('title', 'Carousel')
<div>
    <script>
        window.addEventListener('closeDeleteItemModal', event=> {
            $('#deleteConfirmation').modal('hide');
        })
        window.addEventListener('closeEditItemModal', event=> {
            $('#EditItem').modal('hide');
        })

    </script>
    <livewire:admin.carousel.create-carousel>
        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="EditItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{__('Edit Item of Carousel')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputName">Title</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" wire:model='title'>
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="inputName">Text</label>
                                    <textarea type="text" class="form-control @error('slug') is-invalid @enderror"  wire:model='text' minlength="200" maxlength="255"></textarea>
                                    @error('text') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" accept="image/png, image/jpeg" class="custom-file-input  @error('image') is-invalid @enderror" wire:model.live="newimage">
                                            <label class="custom-file-label" for="inputGroupFile01">{{__('Image')}}</label>
                                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div wire:loading wire:target="newimage" class="text-sm text-gray-500 italic">Uploading...</div>
                                    @if($newimage)
                                        <img class="rounded mt-2" src="{{ $newimage->temporaryUrl() }}" alt="Category image" width="120">
                                    @else
                                        <img class="rounded mt-2" src="{{ asset('images/carousel').'/'.$image }}" alt="Carousel image" width="120">
                                    @endif
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancel">Cancel</button>
                        <button @click="$dispatch('carousel-edit')" @click="$dispatch('carousel-add')" type="button" class="btn btn-primary rounded" wire:click='update'>Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->


        <div wire:ignore.self class="modal" id="deleteConfirmation">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body pb-30 pt-30">
                        <div class="col-md-12 text-center">
                            <h4 class="pb-3"> {{ __('Do you want to delete this record?') }} </br>"{{ $del_name }} "</h4>
                            <button class="btn btn-primary rounded" data-dismiss="modal">Cancel</button>
                            <button @click="$dispatch('carousel-delete')" class="btn btn-danger" wire:click="deleteItem()">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="row gutters">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Carousel</h4>
                    @include('components.alerts')
                </div>
                <div class="card-body">
                    <div class="row mt-2 mb-0">
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#CreateItem">
                                {{__('Create Carousel Item')}}
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
                            <th>{{__('Title')}}</th>
                            <th>{{__('Text')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @dd($items)--}}
                        @php
                        if ($items){
//                            $i = ($items->currentPage()-1)*$items->perPage();
$i=1;
                        }
                        @endphp
                        @forelse ( $items as $item )
                            <tr>
                                <td wire:key="{{$item->id}}">{{ ++$i }}</td>
                                <td><img src="{{ asset('images/carousel').'/'.$item->image }}" alt="" width="60"></td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->text}}</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm rounded"data-toggle="modal" data-target="#EditItem"
                                            wire:click="editItem({{ $item->id }})"> <i class="icon icon-pencil3"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm rounded"  data-toggle="modal" data-target="#deleteConfirmation"
                                            wire:click="deleteId({{ $item->id }})"> <i class="icon icon-bin"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <p>Carousel table is empty.</p>
                        @endforelse
                        </tbody>
                    </table>
{{--                     {{ $items->links() }}--}}

                </div>
            </div>
        </div>
    </div>
</div>

