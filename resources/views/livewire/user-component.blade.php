<div>
    <div class="account-menu">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h6><i class="icon fas fa-check"></i> {{ session('success') }}</h6>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; ">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h6><i class="icon fas fa-info"></i> {{ session('error') }}</h6>
                <h6><i class="icon fas fa-info"></i> {{ session('error') }}</h6>
            </div>
        @endif
        @guest()
        <form class="account-menu__form" wire:submit="login">
            @csrf
            <div class="account-menu__form-title">{{__('Log In to Your Account')}}</div>
            <div class="form-group">
                <label for="header-signin-email" class="sr-only">{{__('Email address')}}</label>
                <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder={{__('Email address')}} wire:model="email">
            </div>
            <div class="form-group">
                <label for="header-signin-password" class="sr-only">{{__('Password')}}</label>
                <div class="account-menu__form-forgot">
                    <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" placeholder={{__('Password')}} wire:model="password">
                    <a href="" class="account-menu__form-forgot-link">{{__('Forgot?')}}</a>
                </div>
            </div>
            <div class="form-group account-menu__form-button">
                <button type="submit" class="btn btn-primary btn-sm">{{__('Login')}}</button>
            </div>

            <div class="account-menu__form-link"><a href="{{ route('register') }}">{{__('Create An Account')}}</a></div>
        </form>
        <div class="account-menu__divider"></div>
        @endguest
        @auth()
        <a href="{{ route('dashboard') }}" class="account-menu__user">
            <div class="account-menu__user-avatar">
                <img src="{{asset('images/avatars/avatar-3.jpg')}}" alt="">
            </div>
            <div class="account-menu__user-info">
                <div class="account-menu__user-name">{{auth()->user()->name}}</div>
                <div class="account-menu__user-email">{{auth()->user()->email}}</div>
            </div>
        </a>
        <div class="account-menu__divider"></div>
        <ul class="account-menu__links">
            @if(auth()->user()->utype === 'ADM' )
            <li><a href="{{ route('admin.dashboard') }}">{{__('Admin Dashboard')}}</a></li>
            @else
            <li><a href="{{ route('dashboard') }}">{{__('User Dashboard')}}</a></li>
            @endif
            <li><a href="{{ route('edit-profile') }}">{{__('Edit Profile')}}</a></li>
            <li><a href="#">{{__('Order History')}}</a></li>
            <li><a href="#">{{__('Addresses')}}</a></li>
            <li><a href="#">{{__('Password')}}</a></li>
        </ul>
        <div class="account-menu__divider"></div>
        <form class="account-menu__form " wire:submit="logout">
            @csrf
            <ul class="account-menu__links">
                <li><button class="btn btn-sm btn-primary">{{__('Logout')}}</button></li>
            </ul>
        </form>
        @endauth
    </div>
</div>

