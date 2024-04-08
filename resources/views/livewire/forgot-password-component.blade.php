<div>
    @section('title', __('Forgotten Password'))
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column offset-3 mt-4">
                    <div class="card flex-grow-1 mb-md-0">
                        <div class="card-body">
                            <h3 class="card-title">{{__('Password reset link')}}</h3>
                            @include('components.alerts')
                            <form wire:submit="sendPasswordResetLink">
                                @csrf
                                <div class="form-group">
                                    <label class="required-field">{{__('Email address')}}</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('Email address')}}" wire:model="email">
                                    @error('email') <p class="text-danger">{{$message}}</p> @enderror

                                </div>
                                <button type="submit" class="btn btn-primary">{{__('Send')}}</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
