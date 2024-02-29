<div>
    <script>
        window.addEventListener('closeEditManufacturerModal', event=> {
            $('#EditManufacturer').modal('hide');
        })

    </script>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="EditManufacturer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Edit Manufacturer')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputName">{{__('Name')}}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" wire:model='name'>
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputName">{{__('Code')}}</label>
                                <input type="text" class="form-control @error('code') is-invalid @enderror" placeholder="Enter code" wire:model='code'>
                                @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" accept="image/png, image/jpeg" class="custom-file-input  @error('newimage') is-invalid @enderror" wire:model.live="newimage">
                                        <label class="custom-file-label" for="inputGroupFile01">{{__('Image')}}</label>
                                    </div>
                                </div>
                                @if($newimage)
                                    <img class="rounded mt-2" src="{{ $newimage->temporaryUrl() }}" alt="Post image" width="120">
                                @else
                                    <img class="rounded my-2 pb-2" src="{{ asset('images/manufacturer').'/'.$image }}" alt="Post image" width="120">
                                @endif
                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancel">Cancel</button>
                    <button type="button" class="btn btn-primary" wire:click='update'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
