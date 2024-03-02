@section('title', 'Create Product')
@push('sumcdn')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endpush
<div>
    <div class="row gutters">
        <div class="col-md-12 col-sm-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h5>Create Product</h5>
                    @include('components.alerts')
                </div>
                <div class="card-body" >
                    <div class="col-md-12" x-data="{tab:0}">
                        
                    </div>
                    <form wire:submit.prevent="addProduct()">
                        <div class="row mt-2 mb-0">
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="Enter product name" wire:model="name"
                                                   wire:keyup="generateSlug()">
                                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" placeholder="Enter product slug" wire:model="slug" disabled>
                                            @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="short_description" class="form-label">Short Description</label>
                                            <textarea class="form-control @error('short_description') is-invalid @enderror" name="short_description" placeholder="Enter Short Description" cols="20" rows="4"
                                                      wire:model="short_description" minlength="50" maxlength="100"> </textarea>
                                            @error('short_description') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="description" class="form-label">Description</label>
                                            <div wire:ignore>
                                        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" minlength="400" maxlength="5000"
                                                  placeholder="Enter Description" cols="30" rows="8" wire:model.live="description"> </textarea>
                                            </div>
                                            @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card p-3">
                                    <div class="form-group">
                                        <label for="regular_price" class="form-label">Reqular Price</label>
                                        <input type="text" class="form-control @error('regular_price') is-invalid @enderror" name="regular_price" placeholder="Enter regular price" wire:model="regular_price">
                                        @error('regular_price') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="sale_price" class="form-label">Sale Price</label>
                                        <input type="text" class="form-control @error('sale_price') is-invalid @enderror" name="sale_price" placeholder="Enter sale price" wire:model="sale_price">
                                        @error('sale_price') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="sku" class="form-label">SKU</label>
                                        <input type="text" class="form-control @error('sale_price') is-invalid @enderror" name="sku" placeholder="Enter sku" wire:model="sku">
                                        @error('sku') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="stock" class="form-label" wire:model="stock_status">Stock Status</label>
                                        <select class="form-control @error('stock_status') is-invalid @enderror" name="stock">
                                            <option value="instock">In Stock</option>
                                            <option value="outofstock">Out of Stock</option>
                                        </select>
                                        @error('stock_status') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="featured" class="form-label">Featured</label>
                                        <select class="form-control @error('featured') is-invalid @enderror" name="featured" wire:model="featured">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                        @error('featured') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="number" min="0" class="form-control @error('quantity') is-invalid @enderror" name="quantity" placeholder="Enter product quantity" wire:model="quantity">
                                        @error('quantity') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select class="form-control" name="category_id" wire:model="category_id">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary float-end" type="submit">Submit<i class="icon icon-plus ml-1" style="font-size: 12px;"></i></button>
                                <button type="button" class="btn btn-primary" wire:click="subAndBack">Submit&Back <i class="icon icon-undo2" style="font-size: 14px;"></i></button>
                                <button type="button" class="btn btn-primary" wire:click="toProductsLis">Back <i class="icon icon-undo2" style="font-size: 14px;"></i></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('summernote')
    <script>
        $('#description').summernote({
            placeholder: 'Enter About Us Text',
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function(contents, $editable) {
                @this.set('description', contents);
                }
            }
        });
    </script>
@endpush
