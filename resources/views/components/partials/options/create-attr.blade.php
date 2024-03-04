<div>
    <script>
        window.addEventListener('closeCreateOptionModal', event=> {
            $('#CreateOption').modal('hide');
        })

    </script>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="CreateOption" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Create New Attribute')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputName">{{__('Attribute Name')}}</label>
                                <input type="text" class="form-control @error('attr_name') is-invalid @enderror" placeholder="Enter attribute name" wire:model='attr_name'>
                                @error('attr_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button @click="$dispatch('brand-add')" type="button" class="btn btn-primary" wire:click='createAttr'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
