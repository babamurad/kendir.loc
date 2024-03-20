@section('title', 'Posts')
<div>
    <div wire:ignore.self class="modal" id="deleteConfirmation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body pb-30 pt-30">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> {{ __('Do you want to delete this record?') }} </br>" {{ $del_name }} "</h4>
                        <button class="btn btn-primary " data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger" wire:click="deletePost()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('closeDeletePostModal', event=> {
            $('#deleteConfirmation').modal('hide');
        })
    </script>

    <div class="row gutters">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Posts</h4>
                    @include('components.alerts')
                </div>
                <div class="card-body">
                    <div class="row mt-2 mb-0">
                        <div class="col-md-4">
                            <a href="{{ route('admin.create-post') }}" type="button" class="btn btn-primary rounded">
                                {{__('Create Post')}}
                            </a>
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
                            <th>{{__('Post Title')}}</th>
                            <th>{{__('Author')}}</th>
                            <th>{{__('Date')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = ($posts->currentPage()-1)*$posts->perPage();
                        @endphp
                        @forelse ( $posts as $post )
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $post->id }}</td>
                                <td><a href="{{ route('admin.edit-post', ['id' => $post->id]) }}"><img src="{{ asset('images/posts').'/'.$post->image }}" alt="" width="60"></a></td>
                                <td><a href="{{ route('admin.edit-post', ['id' => $post->id]) }}">{{$post->title}}</a></td>
                                <td>{{$post->authorPost->name}}</td>
                                <td>{{ \Carbon\Carbon::create($post->created_at)->format('y.m.Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.edit-post', ['id' => $post->id]) }}" type="button" class="btn btn-success btn-sm rounded">
                                        <i class="icon icon-pencil3"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm rounded"  data-toggle="modal" data-target="#deleteConfirmation" wire:click="deleteId({{ $post->id }})">
                                        <i class="icon icon-bin"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <p>Posts table is empty.</p>
                        @endforelse
                        </tbody>
                    </table>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

