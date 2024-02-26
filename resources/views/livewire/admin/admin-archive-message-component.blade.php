@section('title', 'Archive Messages')

<div>
    <div wire:ignore.self class="modal" id="deleteConfirmation">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body pb-30 pt-30">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3"> {{ __('Do you want to delete this record?') }} </br>" "</h4>
                        <button class="btn btn-primary " data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger" wire:click="deleteMessage()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('closeDeleteMessageModal', event=> {
            $('#deleteConfirmation').modal('hide');
        })
    </script>

    <div class="row gutters">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Archive Messages') }}</h4>
                    @include('components.alerts')
                </div>
                <div class="card-body">
                    <div class="row mt-2 mb-0">

                        <div class="col-md-4">
                            <div class="d-flex">
                                <label>Show</label>
                                <select class="form-control form-control-sm mx-2" wire:model.live='perPage' style="width: 20%;">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="40">40</option>
                                </select>
                                <label>entries</label>
                            </div>
                        </div>

                    </div>
                    <table class="table table-hover m-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Phone')}}</th>
                            <th>{{__('Subject')}}</th>
                            <th>{{__('Date')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = ($contacts->currentPage()-1)*$contacts->perPage();
                        @endphp
                        @forelse ( $contacts as $contact )
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ \Carbon\Carbon::create($contact->created_at)->format('d.m.Y') }} </td>
                                <td>
                                    <a href="{{ route('admin.message', ['id' => $contact->id]) }}"
                                       type="button" class="btn btn-warning btn-sm rounded"><i class="icon icon-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <p>Contacts table is empty.</p>
                        @endforelse
                        </tbody>
                    </table>
                    {{$contacts->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
