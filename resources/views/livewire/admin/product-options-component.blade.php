@section('title', 'Options')
<div>
    <script>
        window.addEventListener('closeDeleteOptionsModal', event=> {
            $('#deleteConfirmation').modal('hide');
        })
        window.addEventListener('closeEditItemModal', event=> {
            $('#EditItem').modal('hide');
        })
    </script>

{{--    @include('components.partials.brand.create-brand')--}}
{{--    @include('components.partials.brand.edit-brand')--}}

    <div wire:ignore.self class="modal" id="deleteConfirmation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body pb-30 pt-30">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> {{ __('Do you want to delete this record?') }} </br>"{{ $del_name }} "</h4>
                        <button class="btn btn-primary rounded" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger" wire:click="destroy()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.partials.options.create-attr')
    @include('components.partials.options.edit-attr')

    <div class="row gutters">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products Options</h4>
                    @include('components.alerts')
                </div>
                <div class="card-body">
                    <div class="row mt-2 mb-0">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="categories" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-8">
                                    <select name="categories" class="form-control" name="category_id" wire:model.live="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            @if($category->parent_id==0)
                                                <option value="{{ $category->id }}" style="font-weight:500;" disabled>{{ ucfirst($category->name) }}</option>
                                                @if($category->children->count()>0)
                                                    @foreach($category->children as $subcategory)
                                                        <option value="{{ $subcategory->id }}">-- {{ ucfirst($subcategory->name) }}</option>
                                                    @endforeach
                                                @endif
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('category_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="col-sm-2">
                                    <button name="add_attr" class="form-control btn-sm btn btn-primary rounded"
                                            data-toggle="modal" data-target="#CreateOption" {{ $category_id? '':'disabled' }}>
                                        <i class="icon-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    @if($attributes)
                    <table class="table table-hover m-0">
                        <thead>
                        <tr>
                            <th>{{__('id')}}</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Value')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ( $attributes as $attr )
                            <tr>
                                <td wire:key="{{$attr->id}}">{{$attr->id}}</td>
                                <td>{{$attr->name}}</td>
                                <td>
                                    <input type="text" id="disabledInput" class="form-control" disabled placeholder="On the product page">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm rounded" data-toggle="modal" data-target="#EditOption"
                                            wire:click="edit({{ $attr->id }})"> <i class="icon icon-pencil3"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm rounded"  data-toggle="modal" data-target="#deleteConfirmation"
                                            wire:click="deleteId('{{$attr->id}}')"> <i class="icon icon-bin"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <p>Options table is empty.</p>
                        @endforelse

                        </tbody>
                    </table>

                    @endif


                </div>
            </div>
        </div>
    </div>
</div>

