@section('title', 'Categories')
<div>
    <div wire:ignore.self class="modal" id="deleteConfirmation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body pb-30 pt-30">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> {{ __('Do you want to delete this record?') }} </br>"{{ $del_name }} "</h4>
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

    <!-- Edit Modal -->
    <div wire:ignore.self class="modal fade" id="EditCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Edit Category')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputName">Input Category Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" wire:model.live='name' wire:keyup="generateSlug()">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputName">Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" readonly  wire:model.live='slug' >
                                @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">{{__('Parent')}} {{ $parent }}</label>
                                </div>
                                <select class="custom-select @error('parent') is-invalid @enderror" id="inputGroupSelect01"  wire:model='parent'>
                                    <option selected="">Root</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
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
                                    </div>
                                </div>
                                <div wire:loading wire:target="newimage" class="text-sm text-gray-500 italic">Uploading...</div>
                                @if($newimage)
                                    <img class="rounded mt-2" src="{{ $newimage->temporaryUrl() }}" alt="Category image" width="120">
                                @else
                                    <img class="rounded mt-2" src="{{ asset('images/categories').'/'.$image }}" alt="Category image" width="120">
                                @endif
                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-inline">
                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">{{__('Is Popular')}}</label>
                                <select class="custom-select my-1 mr-sm-2  @error('is_popular') is-invalid @enderror" id="inlineFormCustomSelectPref"  wire:model.live='is_popular'>
                                    <option value="0">{{__('No')}}</option>
                                    <option value="1">{{__('Yes')}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancel">Cancel</button>
                    <button type="button" class="btn btn-primary" wire:click='updateCategory'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="CreateCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{__('Create Category')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="inputName">Input Category Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" wire:model.live='name' wire:keyup="generateSlug()">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="inputName">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" readonly  wire:model.live='slug' >
                    @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">{{__('Parent')}} {{ $parent }}</label>
                    </div>
                    <select class="custom-select @error('parent') is-invalid @enderror" id="inputGroupSelect01"  wire:model='parent'>
                        <option selected="">Root</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
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
                    <div wire:loading wire:target="image" class="text-sm text-gray-500 italic">Uploading...</div>
                    @if($image && !$edit_mode)
                        <img class="rounded mt-2" src="{{ $image->temporaryUrl() }}" alt="Category image" width="120">
                    @endif
                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">{{__('Is Popular')}}</label>
                    <select class="custom-select my-1 mr-sm-2  @error('is_popular') is-invalid @enderror" id="inlineFormCustomSelectPref"  wire:model.live='is_popular'>
                        <option value="0">{{__('No')}}</option>
                        <option value="1">{{__('Yes')}}</option>
                    </select>
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancel">Cancel</button>
          <button type="button" class="btn btn-primary" wire:click='createCategory'>Save changes</button>
        </div>
      </div>
    </div>
  </div>

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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CreateCategory">
                            {{__('Create Category')}}
                        </button>
                    </div>
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
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                </select>
                            <label>entries</label>
                        </div>
                    </div>

                </div>
                <table class="table table-hover m-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('ID')}}</th>
                            <th>{{__('Image')}}</th>
                            <th>{{__('Category Name')}}</th>
                            <th>{{__('Slug')}}</th>
                            <th>{{__('Is Popular')}}</th>
                            <th>{{__('Parent')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                       @php
                            $i = ($categories->currentPage()-1)*$categories->perPage();
                       @endphp
                        @forelse ( $categories as $category )
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $category->id }}</td>
                            <td><img src="{{ asset('images/categories').'/'.$category->image }}" alt="" width="60"></td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->is_popular? 'Yes':'No'}}</td>
                            <td>{{ $category->cparent->name? $category->cparent->name : 'Root'}}</td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm"data-toggle="modal" data-target="#EditCategory" wire:click="editCategory({{ $category->id }})">
                                    <i class="icon icon-pencil3"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#deleteConfirmation" wire:click="deleteId({{ $category->id }})">
                                    <i class="icon icon-bin"></i>
                                </button>
                            </td>
                        </tr>
                        @empty
                        <p>Category table is empty.</p>
                        @endforelse
                    </tbody>
                </table>
                {{$categories->links()}}
            </div>
        </div>
    </div>
</div>
</div>
