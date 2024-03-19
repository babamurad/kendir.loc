@section('title', 'Create Post')
@push('sumcdn')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endpush
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
                                            <label for="title_en" class="form-label">Title EN</label>
                                            <input type="text_en" class="form-control @error('title_en') is-invalid @enderror"
                                                   name="title_en" placeholder="Enter post title" wire:model="title_en">
                                            @error('title_en') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title_ru" class="form-label">Title RU</label>
                                            <input type="text_ru" class="form-control @error('title_ru') is-invalid @enderror"
                                                   name="title_ru" placeholder="Enter post title" wire:model="title_ru">
                                            @error('title_ru') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="title_tm" class="form-label">Title TM</label>
                                            <input type="text_tm" class="form-control @error('title_tm') is-invalid @enderror"
                                                   name="title_tm" placeholder="Enter post title" wire:model="title_tm">
                                            @error('title_tm') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="text_en" class="form-label">Description EN </label>
                                            <div wire:ignore>
                                            <textarea class="form-control @error('text_en') is-invalid @enderror"
                                                      name="text_en" id="text_en" minlength="255" maxlength="10000"
                                                      placeholder="Enter post text" cols="30" rows="8"
                                                      wire:model="text_en"> </textarea>
                                            @error('text_en') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="text_ru" class="form-label">Description RU</label>
                                            <div wire:ignore>
                                            <textarea class="form-control @error('text_ru') is-invalid @enderror"
                                                      name="text_ru" id="text_ru" minlength="255" maxlength="10000"
                                                      placeholder="Enter post text" cols="30" rows="8"
                                                      wire:model="text_ru"> </textarea>
                                            @error('text_ru') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="text_tm" class="form-label">Description TM</label>
                                            <div wire:ignore>
                                            <textarea class="form-control @error('text_tm') is-invalid @enderror"
                                                      name="text_tm" id="text_tm" minlength="255" maxlength="10000"
                                                      placeholder="Enter post text" cols="30" rows="8"
                                                      wire:model="text_tm"> </textarea>
                                            </div>
                                            @error('text_tm') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" id="inputGroupFile02" class="custom-file-input"
                                                       wire:model="image">
                                                <label class="custom-file-label" for="inputGroupFile02"
                                                       aria-describedby="inputGroupFileAddon02">Post Image</label>
                                                @if($image)
                                                    <img class="mt-2 pb-2 mb-4 rounded"
                                                         src="{{ $image->temporaryUrl() }}" alt="Post Image"
                                                         style="width: 120px; max-height: 200px;">
                                                @endif
                                                @error('image') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="colFormLabel"
                                                   class="col-sm-2 col-form-label">{{ __('Author') }}</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="colFormLabel"
                                                       placeholder="col-form-label" value="{{ auth()->user()->name }}"
                                                       readonly="">
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
@push('summernote')
    <script>
        $(document).ready(function() {
            $('#text_en').summernote({
                height: 200,
            });
        });
        $('#text_en').on('summernote.change', function(we, contents, $editable) {
        @this.set('text_en', contents)
        });

        $(document).ready(function() {
            $('#text_ru').summernote({
                height: 200,
            });
            $('#text_tm').summernote({
                height: 200,
            });
        });

        $('#text_ru').on('summernote.change', function(we, contents, $editable) {
        @this.set('text_ru', contents)
        });
        $('#text_tm').on('summernote.change', function(we, contents, $editable) {
        @this.set('text_tm', contents)
        });
    </script>
@endpush
