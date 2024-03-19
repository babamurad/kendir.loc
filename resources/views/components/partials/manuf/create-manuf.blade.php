<div>
    <script>
        window.addEventListener('closeCreateManufacturerModal', event=> {
            $('#CreateManufacturer').modal('hide');
        })

    </script>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="CreateManufacturer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Create New Manufacturer')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name_en">{{__('Name')}} EN</label>
                                <input name="name_en" type="text" class="form-control @error('name_en') is-invalid @enderror" placeholder="Enter name" wire:model='name_en'>
                                @error('name_en') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="name_ru">{{__('Name')}} RU</label>
                                <input name="name_ru" type="text" class="form-control @error('name_ru') is-invalid @enderror" placeholder="Enter name" wire:model='name_ru'>
                                @error('name_ru') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="name_tm">{{__('Name')}} TM</label>
                                <input name="name_tm" type="text" class="form-control @error('name_tm') is-invalid @enderror" placeholder="Enter name" wire:model='name_tm'>
                                @error('name_tm') <span class="text-danger">{{ $message }}</span> @enderror
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
                                        <input type="file" accept="image/png, image/jpeg" class="custom-file-input  @error('image') is-invalid @enderror" wire:model.live="image">
                                        <label class="custom-file-label" for="inputGroupFile01">{{__('Image')}}</label>
                                    </div>
                                </div>
                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                <div wire:loading wire:target="image" class="text-sm text-gray-500 italic">Uploading...</div>
                                @if($image && !$edit_mode)
                                    <img class="rounded mt-2" src="{{ $image->temporaryUrl() }}" alt="Brand image" width="120">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancel">Cancel</button>
                    <button type="button" class="btn btn-primary" wire:click='create'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
