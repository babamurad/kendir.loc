<div>
    @section('title', __('Reset Password'))
    <div class="row">
        <div class="col-sm-4 offset-4">
            <form class="account-menu__form mx-5" wire:submit="resetPass">
                @include('components.alerts')
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="account-menu__form-title">{{__('Change Password')}}</div>

                <div class="form-group">
                    <label for="header-sign-in-email" class="sr-only">{{__('Email address')}}</label>
                    <input id="header-sign-in-email" name="header-sign-in-email" type="email"
                           class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="{{__('Email address')}}" wire:model="email">
                    @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror

                </div>

                <div class="form-group">
{{--                    <label class="required-field">{{__('NPass')}}</label>--}}
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{__('NPass')}}" wire:model="password">
                    @error('password') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>
               <div class="form-group">
{{--                    <label class="required-field">{{__('ReenterPassword')}}</label>--}}
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="{{__('ReenterPassword')}}" wire:model="password_confirmation">
                   @error('password_confirmation') <div class="invalid-feedback">{{$message}}</div> @enderror
                </div>

                <div class="form-group account-menu__form-button">
                    <button type="submit" class="btn btn-primary btn-sm">{{__('Change Password')}}</button>
                </div>

                <div class="account-menu__form-link"><a href="{{ route('register') }}">{{__('Create An Account')}}</a></div>
            </form>
        </div>
    </div>
</div>
