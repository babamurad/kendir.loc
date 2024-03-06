@section('title', 'Create Product')
@push('sumcdn')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endpush
<div>
    <header class="main-heading">
        @if ($errors->any())
            <div class="alert alert-danger mt-4 alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{--                                    {{ $error }}--}}
                            <button type="button" class="close {{ request()->is('/') ? '' : ' mt-3' }}" data-dismiss="alert" aria-hidden="true">×</button>
                            <h6><i class="icon fas fa-info"></i> {{ $error }}</h6>
                        </li>
                    @endforeach
                </ul>

            </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-icon">
                        <a href="{{ route('admin.products') }}"><i class="icon-undo2"></i></a>
                    </div>
                    <div class="page-title">
                        <h4>Create Product</h4>
                        <h6 class="sub-heading">Welcome to Kendir Admin Template</h6>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row">
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-primary float-end rounded" wire:click="subAndBack">Submit&Back
                                    <i class="icon icon-undo2" style="font-size: 12px;"></i>
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-primary float-end rounded" type="submit" wire:click.prevent="addProduct()">Submit&Add
                                    <i class="icon icon-plus" style="font-size: 12px;"></i>
                                </button>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="row gutters">
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

        <div class="col-md-12 col-sm-12">
            <div class="card">

                <div class="card-header">

                </div>
                <div class="card-body">
                    <ul class="nav md-tabs">
                        <li class="nav-item waves-effect waves-light">
                            <a style="color: #2e323c;" class="nav-link {{ $activeTab=='details'? 'active':'' }}" wire:click="acTab('{{ "details" }}')" data-toggle="tab" href="#details" role="tab" aria-selected={{ $activeTab=='details'? "true":"false" }}>Product Details</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a style="color: #2e323c;" class="nav-link {{ $activeTab=='imageTab'? 'active':'' }}" wire:click="acTab('{{ "imageTab" }}')" data-toggle="tab" href="#imageTab" role="tab" aria-selected={{ $activeTab=='imageTab'? "true":"false" }}>Images</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a style="color: #2e323c;" class="nav-link {{ $activeTab=='options'? 'active':'' }}" wire:click="acTab('{{ "options" }}')" data-toggle="tab" href="#options" role="tab" role="tab" aria-selected={{ $activeTab=='options'? "true":"false" }}>Options</a>
                        </li>
                    </ul>
                    <div class="tab-content card">
                        <!-- Panel 1 -->
                        <div class="tab-pane fade in {{ $activeTab=='details'? 'active show':'' }} " id="details" role="tabpanel">

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
                                                              wire:model="short_description" minlength="20" maxlength="100"> </textarea>
                                                    @error('short_description') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label for="description" class="form-label">Description</label>
                                                    <div wire:ignore>
                                        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" minlength="20" maxlength="5000"
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
                                                    <option value="In Stock">In Stock</option>
                                                    <option value="Out of Stock">Out of Stock</option>
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

                                        </div>

                                    </div>
                                </div>

                        </div>

                        <div class="tab-pane fade in {{ $activeTab=='imageTab'? 'active show':'' }}" id="imageTab" role="tabpanel">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" id="inputGroupFile02" class="custom-file-input" wire:model="image">
                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Product Image</label>
                                        @if($image)
                                            <img class="mt-2 mb-4 rounded" src="{{ $image->temporaryUrl() }}" alt="Product Image" style="width: 120px; max-height: 200px;">
                                        @endif
                                        @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" id="images" class="custom-file-input @error('images') is-invalid @enderror" wire:model="images" multiple>
                                        <label class="custom-file-label" for="images" aria-describedby="inputGroupFileAddon02">Product Image Gallery</label>
                                        @if($images)
                                            @foreach($images as $image)
                                                <img class="mt-2 mb-5 rounded" src="{{ $image->temporaryUrl() }}" alt="Product Image Galley" style="width: 120px; max-height: 200px;">
                                            @endforeach
                                        @endif
                                        @error('images') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Panel 2 -->
                        <!-- Panel 3 -->
                        <div class="tab-pane fade in {{ $activeTab=='options'? 'active show':'' }} " id="options" role="tabpanel">


                        <div class="row mt-2 mb-0">

                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-4 col-form-label text-right">Category</label>
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
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label for="brands" class="col-sm-4 col-form-label text-right">Brands</label>
                                    <div class="col-sm-8">
                                        <select name="brands" class="form-control" wire:model.live="brand_id">
                                            <option value="">Select Brand</option>
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}" style="font-weight:500;" >{{ ucfirst($brand->name) }}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group row">
                                    <label for="manuf_id" class="col-sm-4 col-form-label text-right">Manufacturer</label>
                                    <div class="col-sm-8">
                                        <select name="brands" class="form-control" name="manuf_id" wire:model.live="manuf_id">
                                            <option value="">Select Manufacturer</option>
                                            @foreach($manufacturers as $manufacturer)
                                                <option value="{{ $manufacturer->id }}" style="font-weight:500;" >{{ ucfirst($manufacturer->name) }}</option>
                                            @endforeach
                                        </select>
                                        @error('manuf_id') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>


                                    <form action="">
                                        <h4>Specification</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="model" class="form-label">Model</label>
                                                    <input type="text" class="form-control" name="model" placeholder="Model" wire:model="model">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="weight" class="form-label">Weight</label>
                                                    <input type="number" class="form-control" name="weight" placeholder="Weight" wire:model="weight">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label for="dl" class="form-label">Dimensions Long</label>
                                                    <input type="number" class="form-control" name="dl" placeholder="Dimensions Long" wire:model="dl">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label for="dw" class="form-label">Dimensions Width</label>
                                                    <input type="number" class="form-control" name="dw" placeholder="Dimensions Width" wire:model="dw">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label for="dh" class="form-label">Dimensions Hight</label>
                                                    <input type="number" class="form-control" name="dh" placeholder="Dimensions Hight" wire:model="dh">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label for="unit" class="form-label">Unit</label>
                                                    <input type="text" class="form-control" name="unit" placeholder="Unit" wire:model="unit">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select name="status" class="form-control" wire:model="status">
                                                        <option value="1" selected>Enabled</option>
                                                        <option value="0">Disabled</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </form>


                        </div>
                        <!-- Panel 3 -->
                    </div>

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
