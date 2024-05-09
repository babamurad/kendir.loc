<div>
    @section('title', __('Login/Register'))
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">{{__('Home')}}</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('shop') }}">{{__('Shop')}}</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('My Account')}}</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>{{__('My Account')}}</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column mt-4 mt-md-0 mx-auto offset-3">
                    <div class="card flex-grow-1 mb-0">
                        <div class="card-body">
                            <h3 class="card-title">{{__('Register')}}</h3>
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; ">
                                    <button type="button" class="close {{ request()->is('/') ? '' : ' mt-3' }}" data-dismiss="alert" aria-hidden="true" style="top: -16px;">×</button>
                                    <h6><i class="icon fas fa-check"></i> {{ session('success') }}</h6>
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; ">
                                    <button type="button" class="close {{ request()->is('/') ? '' : ' mt-3' }}" data-dismiss="alert" aria-hidden="true" style="top: -16px;">×</button>
                                    <h6><i class="icon fas fa-info"></i> {{ session('error') }}</h6>
                                </div>
                            @endif
                            <form wire:submit="registerUser">
                                <div class="form-group">
                                    <label class="required-field">{{__('Name')}}</label>
                                    <input type="text" name="firstname" class="form-control @error('rname') is-invalid @enderror"
                                           placeholder="{{__('Enter Name')}}" wire:model="rname">
                                    @error('rname') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="required-field">{{__('Email address')}}</label>
                                    <input type="email" class="form-control @error('remail') is-invalid @enderror" placeholder="{{__('Enter email')}}" wire:model="remail">
                                    @error('remail') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="required-field">{{__('Password')}}</label>
                                    <input type="password" class="form-control @error('rpassword') is-invalid @enderror" placeholder="{{__('Password')}}" wire:model="rpassword">
                                    @error('rpassword') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">{{__('Register')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
