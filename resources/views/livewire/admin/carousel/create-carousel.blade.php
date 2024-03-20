<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="createItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Create Item of Carousel')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title_en">Title EN</label>
                                <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror" placeholder="Enter name" wire:model='title_en'>
                                @error('title_en') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="title_ru">Title RU</label>
                                <input type="text" name="title_ru" class="form-control @error('title_ru') is-invalid @enderror" placeholder="Enter name" wire:model='title_ru'>
                                @error('title_ru') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="title_tm">Title TM</label>
                                <input type="text" name="title_tm" class="form-control @error('title_tm') is-invalid @enderror" placeholder="Enter name" wire:model='title_tm'>
                                @error('title_tm') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="text_en">Text EN</label>
                                <textarea type="text" name="text_en" class="form-control @error('text_en') is-invalid @enderror"  wire:model='text_en' minlength="200" maxlength="255"></textarea>
                                @error('text_en') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="text_ru">Text RU</label>
                                <textarea type="text" name="text_ru" class="form-control @error('text_ru') is-invalid @enderror"  wire:model='text_ru' minlength="200" maxlength="255"></textarea>
                                @error('text_ru') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="text_tm">Text TM</label>
                                <textarea type="text" name="text_en" class="form-control @error('text_tm') is-invalid @enderror"  wire:model='text_tm' minlength="200" maxlength="255"></textarea>
                                @error('text_tm') <span class="text-danger">{{ $message }}</span> @enderror
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
                                @if($image)
                                    <img class="rounded mt-2" src="{{ $image->temporaryUrl() }}" alt="Carousel image" width="120">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancel">Cancel</button>
                    <button type="button" class="btn btn-primary" wire:click='createItem'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
