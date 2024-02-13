<div>
    <div class="account-menu">
        @guest()
        <form class="account-menu__form" wire:submit="login">
            @csrf
            <div class="account-menu__form-title">Log In to Your Account</div>
            <div class="form-group">
                <label for="header-signin-email" class="sr-only">Email address</label>
                <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="Email address" wire:model="email">
            </div>
            <div class="form-group">
                <label for="header-signin-password" class="sr-only">Password</label>
                <div class="account-menu__form-forgot">
                    <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" placeholder="Password" wire:model="password">
                    <a href="" class="account-menu__form-forgot-link">Forgot?</a>
                </div>
            </div>
            <div class="form-group account-menu__form-button">
                <button type="submit" class="btn btn-primary btn-sm">Login</button>
            </div>

            <div class="account-menu__form-link"><a href="{{ route('register') }}">Create An Account</a></div>
        </form>
        <div class="account-menu__divider"></div>
        @endguest
        @auth()
        <a href="#" class="account-menu__user">
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
            <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
            @else
            <li><a href="{{ route('dashboard') }}">User Dashboard</a></li>
            @endif
            <li><a href="#">Edit Profile</a></li>
            <li><a href="#">Order History</a></li>
            <li><a href="#">Addresses</a></li>
            <li><a href="#">Password</a></li>
        </ul>
        <div class="account-menu__divider"></div>
        <form class="account-menu__form " wire:submit="logout">
            @csrf
            <ul class="account-menu__links">
                <li><button class="btn btn-sm btn-primary" >Logout</button></li>
            </ul>
        </form>
        @endauth
    </div>
</div>

