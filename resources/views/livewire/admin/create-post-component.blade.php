@section('title', 'Create Post')
<div>
    <!-- BEGIN .main-heading -->
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="page-icon">
                        <a href="{{ route('admin.posts') }}"><i class="icon-undo2"></i></a>
                    </div>
                    <div class="page-title">
                        <h5>Create Post</h5>
                        <h6 class="sub-heading">Welcome to Kendir Admin Template</h6>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="right-actions mr-3">
                        <a href="#" id="action-print" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="top"
                           title="Print Invoice">
                            <i class="icon-printer2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END: .main-heading -->
    <div class="row gutters">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    @include('components.alerts')
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="addPost()">
                        <div class="row mt-2 mb-0">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Title</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"  placeholder="Enter post title" wire:model="title">
                                            @error('title') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control @error('text') is-invalid @enderror" name="text" minlength="1000" maxlength="10000"
                                                      placeholder="Enter post text" cols="30" rows="8" wire:model="text"> </textarea>
                                            @error('text') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" id="inputGroupFile02" class="custom-file-input" wire:model="image">
                                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Product Image</label>
                                                @if($image)
                                                    <img class="mt-2 pb-2 mb-4 rounded" src="{{ $image->temporaryUrl() }}" alt="Post Image" style="width: 120px; max-height: 200px;">
                                                @endif
                                                @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label">{{ __('Author') }}</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label" value="{{ auth()->user()->name }}" readonly="">
                                            </div>
                                        </div>
                                    <div class="card-footer">
                                        <div class="col-md-12 pt-3">
                                            <button type="submit" class="btn btn-primary rounded">
                                                Save Post
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
