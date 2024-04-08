<div>
    <div class="account-menu">
        <form class="account-menu__form">
            <div class="account-menu__form-title">{{__('Log In to Your Account')}}</div>
            <div class="form-group">
                <label for="header-sign-in-email" class="sr-only">{{__('Email address')}}</label>
                <input id="header-sign-in-email" name="header-sign-in-email" type="email" class="form-control form-control-sm" placeholder={{__('Email address')}}>
            </div>
            <div class="form-group">
                <label for="header-sign-in-password" class="sr-only">{{__('Password')}}</label>
                <div class="account-menu__form-forgot">
                    <input id="header-sign-in-password" name="header-sign-in-password" type="password" class="form-control form-control-sm" placeholder={{__('Password')}}>
                    <a href="" class="account-menu__form-forgot-link">{{__('Forgot?')}}</a>
                </div>
            </div>
            <div class="form-group account-menu__form-button">
                <button type="submit" class="btn btn-primary btn-sm">{{__('Login')}}</button>
            </div>
            <div class="account-menu__form-link"><a href="account-login.html">{{__('Create An Account')}}</a></div>
        </form>
        <div class="account-menu__divider"></div>
        <a href="account-dashboard.html" class="account-menu__user">
            <div class="account-menu__user-avatar">
                <img src="images/avatars/avatar-3.jpg" alt="">
            </div>
            <div class="account-menu__user-info">
                <div class="account-menu__user-name">Helena Garcia</div>
                <div class="account-menu__user-email">stroyka@example.com</div>
            </div>
        </a>
        <div class="account-menu__divider"></div>
        <ul class="account-menu__links">
            <li><a href="account-profile.html">{{__('Edit Profile')}}</a></li>
            <li><a href="account-orders.html">{{__('Order History')}}</a></li>
            <li><a href="account-addresses.html">{{__('Addresses')}}</a></li>
            <li><a href="account-password.html">{{__('Password')}}</a></li>
        </ul>
        <div class="account-menu__divider"></div>
        <ul class="account-menu__links">
            <li><a href="account-login.html">{{__('Logout')}}</a></li>
        </ul>
    </div>
</div>
