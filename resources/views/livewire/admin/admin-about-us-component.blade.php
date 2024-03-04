@section('title', 'Admin About Us')
@push('sumcdn')
{{--    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>--}}

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>--}}

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
                        <a href="#"><i class="icon-pencil2"></i></a>
                    </div>
                    <div class="page-title">
                        <h5>About Us</h5>
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
                    <form wire:submit.prevent="update()">
                        <div class="row mt-2 mb-0">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Title</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title" wire:model="title"
                                            {{ $edit? '' : 'readonly' }}>
                                            @error('title') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="description" class="form-label">About Us Text </label>
                                            <div wire:ignore>
                                                <textarea id="summernote" class="form-control @error('text') is-invalid @enderror" name="text" minlength="255"
                                                          placeholder="Enter text" cols="30" rows="8" wire:model="text" {{ $edit? '' : 'readonly' }}> </textarea>
                                            </div>
                                            @error('text') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                        {{ $text }}
                                    </div>
{{--                                    <div class="col-sm-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <div class="custom-file">--}}
{{--                                                <input type="file" id="inputGroupFile02" class="custom-file-input" wire:model="image">--}}
{{--                                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Product Image</label>--}}
{{--                                                @if($image)--}}
{{--                                                    <img class="mt-2 pb-2 mb-4 rounded" src="{{ $image->temporaryUrl() }}" alt="Post Image" style="width: 120px; max-height: 200px;">--}}
{{--                                                @endif--}}
{{--                                                @error('image') <p class="text-danger">{{$message}}</p> @enderror--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-sm-12">

                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-md-6 pt-3">
{{--                                                    <div class="form-group">--}}
{{--                                                        <div class="custom-control custom-checkbox">--}}
{{--                                                            <input type="checkbox" class="custom-control-input cpoint" id="ship_to_different" wire:model.live="edit">--}}
{{--                                                            <label class="custom-control-label" for="ship_to_different" style="display: inline;">Edit?</label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                </div>
                                                <div class="col-md-6 pt-3">
                                                    <button type="submit" class="btn btn-primary rounded">
                                                        Save Post
                                                    </button>
                                                </div>
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
{{--    <script>--}}
{{--        const quill = new Quill('#editor', {--}}
{{--            theme: 'snow'--}}
{{--        });--}}
{{--    </script>--}}
</div>
@push('summernote')
    <script>
        $('#summernote').summernote({
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
                    @this.set('text', contents);
                }
            }
        });
    </script>
@endpush

