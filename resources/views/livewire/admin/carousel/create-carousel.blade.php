<div>
    <script>
        window.addEventListener('closeCreateCarousel', event=> {
            $('#CreateItem').modal('hide');
        })

    </script>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="CreateItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                <label for="inputName">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter name" wire:model='title'>
                                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputName">Text</label>
                                <textarea type="text" class="form-control @error('text') is-invalid @enderror"  wire:model='text' minlength="200" maxlength="255"></textarea>
                                @error('text') <span class="text-danger">{{ $message }}</span> @enderror
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
                    <button @click="$dispatch('carousel-add')" type="button" class="btn btn-primary" wire:click='create'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
