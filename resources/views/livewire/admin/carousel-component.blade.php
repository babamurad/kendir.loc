@section('title', 'Carousel')
<div>
    <script>
        window.addEventListener('closeDeleteItemModal', event=> {
            $('#deleteConfirmation').modal('hide');
        })
        window.addEventListener('closeEditItemModal', event=> {
            $('#EditItem').modal('hide');
        })
        window.addEventListener('closeAddItemModal', event=> {
            $('#createItem').modal('hide');
        })

    </script>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="createItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Create Item of Carousel')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title_en">Title EN</label>
                                <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror" placeholder="Enter name" wire:model='title_en'>
                                @error('title_en') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="title_ru">Title RU</label>
                                <input type="text" name="title_ru" class="form-control @error('title_ru') is-invalid @enderror" placeholder="Enter name" wire:model='title_ru'>
                                @error('title_ru') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="title_tm">Title TM</label>
                                <input type="text" name="title_tm" class="form-control @error('title_tm') is-invalid @enderror" placeholder="Enter name" wire:model='title_tm'>
                                @error('title_tm') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="text_en">Text EN</label>
                                <textarea type="text" name="text_en" class="form-control @error('text_en') is-invalid @enderror"  wire:model='text_en' minlength="200" maxlength="255"></textarea>
                                @error('text_en') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="text_ru">Text RU</label>
                                <textarea type="text" name="text_ru" class="form-control @error('text_ru') is-invalid @enderror"  wire:model='text_ru' minlength="200" maxlength="255"></textarea>
                                @error('text_ru') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="text_tm">Text TM</label>
                                <textarea type="text" name="text_en" class="form-control @error('text_tm') is-invalid @enderror"  wire:model='text_tm' minlength="200" maxlength="255"></textarea>
                                @error('text_tm') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" accept="image/png, image/jpeg" class="custom-file-input  @error('image') is-invalid @enderror" wire:model.live="image">
                                        <label class="custom-file-label" for="inputGroupFile01">{{__('Image')}}</label>
                                    </div>
                                </div>
                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                <div wire:loading wire:target="image" class="text-sm text-gray-500 italic">Uploading...</div>
                                @if($image && !$edit_mode && in_array($image->getClientOriginalExtension(), ['jpg', 'jpeg', 'png']))
                                    <img class="rounded mt-2" src="{{ $image->temporaryUrl() }}" alt="Carousel image" width="120">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancel">Cancel</button>
                    <button type="button" class="btn btn-primary" wire:click='createItem'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
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
                                    <label for="title_en">Title EN</label>
                                    <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror" placeholder="Enter name" wire:model='title_en'>
                                    @error('title_en') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title_ru">Title RU</label>
                                    <input type="text" name="title_ru" class="form-control @error('title_ru') is-invalid @enderror" placeholder="Enter name" wire:model='title_ru'>
                                    @error('title_ru') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title_tm">Title TM</label>
                                    <input type="text" name="title_tm" class="form-control @error('title_tm') is-invalid @enderror" placeholder="Enter name" wire:model='title_tm'>
                                    @error('title_tm') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="text_en">Text EN</label>
                                    <textarea type="text" name="text_en" class="form-control @error('text_en') is-invalid @enderror"  wire:model='text_en' minlength="200" maxlength="255"></textarea>
                                    @error('text_en') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="text_ru">Text RU</label>
                                    <textarea type="text" name="text_ru" class="form-control @error('text_ru') is-invalid @enderror"  wire:model='text_ru' minlength="200" maxlength="255"></textarea>
                                    @error('text_ru') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="text_tm">Text TM</label>
                                    <textarea type="text" name="text_en" class="form-control @error('text_tm') is-invalid @enderror"  wire:model='text_tm' minlength="200" maxlength="255"></textarea>
                                    @error('text_tm') <span class="text-danger">{{ $message }}</span> @enderror
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

                                    @if($newimage && $edit_mode)
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
                        <button @click="$dispatch('carousel-edit')" type="button" class="btn btn-primary rounded" wire:click='update'>Save changes</button>
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
                            <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#createItem">
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

                        @php $i=1; @endphp
                        @forelse ($items as $item)
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
