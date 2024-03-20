@section('title', 'Edit Product')
<div>
    <div class="row gutters">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Product</h5>
                    @include('components.alerts')
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="updateProduct">
                        <div class="row mt-2 mb-0">
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name_en" class="form-label">Name EN</label>
                                            <input type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en"  placeholder="Enter product name" wire:model="name_en"
                                                   wire:keyup="generateSlug()">
                                            @error('name_en') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" placeholder="Enter product slug" wire:model="slug" disabled>
                                            @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name_ru" class="form-label">Name RU</label>
                                            <input type="text" class="form-control @error('name_ru') is-invalid @enderror" name="name_ru"  placeholder="Enter product name" wire:model="name_ru"
                                                   wire:keyup="generateSlug()">
                                            @error('name_ru') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name_tm" class="form-label">Name TM</label>
                                            <input type="text" class="form-control @error('name_tm') is-invalid @enderror" name="name_tm"  placeholder="Enter product name" wire:model="name_tm"
                                                   wire:keyup="generateSlug()">
                                            @error('name_tm') <p class="text-danger">{{$message}}</p> @enderror
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
                                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" minlength="400" maxlength="500"
                                                      placeholder="Enter Description" cols="30" rows="8" wire:model="description"> </textarea>
                                            @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" id="inputGroupFile02" class="custom-file-input" wire:model="newimage">
                                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Product Image</label>
                                                @if($newimage)
                                                    <img class="mt-2 mb-5 rounded" src="{{ $newimage->temporaryUrl() }}" alt="Product Image" style="max-height: 120px;">
                                                @else
                                                    <img class="mt-2 mb-5 rounded" src="{{ asset('images/products') }}/{{ $image }}" alt="Product Image" style="max-height: 120px;">
                                                @endif
                                                @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" id="images" class="custom-file-input @error('images') is-invalid @enderror" wire:model="newimages" multiple>
                                                <label class="custom-file-label" for="images" aria-describedby="inputGroupFileAddon02">Product Image Galley</label>
                                                @if($newimages)
                                                    @foreach($newimages as $newimage)
                                                        @if($newimage)
                                                            <img class="mt-2 mb-5 rounded" src="{{ $newimage->temporaryUrl() }}" alt="" width="120">
                                                        @endif
                                                    @endforeach
                                                @else
                                                    @foreach($images as $image)
                                                        @if($image)
                                                            <img class="mt-2 mb-5 rounded" src="{{ asset('images/products') }}/{{ $image }}" alt="" width="120">
                                                        @endif
                                                    @endforeach
                                                @endif
                                                @error('newimages') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
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
                                <button class="btn btn-primary float-end" type="submit">Submit</button>
                                <button type="button" class="btn btn-primary" wire:click="subBack">Submit&Back <i class="icon icon-undo2" style="font-size: 14px;"></i></button>
                                <button type="button" class="btn btn-primary" wire:click="toProductsLis">Back <i class="icon icon-undo2" style="font-size: 14px;"></i></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
