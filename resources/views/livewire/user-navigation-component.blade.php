<div class="account-nav flex-grow-1">
    <h4 class="account-nav__title">Navigation</h4>
    <ul>
        <li class="account-nav__item {{ request()->is('dashboard') ? 'account-nav__item--active' : '' }}">
            <a href="{{ route('dashboard') }}" wire:navigate>Dashboard</a>
        </li>
        <li class="account-nav__item {{ request()->is('edit-profile') ? 'account-nav__item--active' : '' }}">
            <a href="{{ route('edit-profile') }}" wire:navigate>Edit Profile</a>
        </li>
        <li class="account-nav__item {{ request()->is('order-history') ? 'account-nav__item--active' : '' }}">
            <a href="{{ route('order-history') }}" wire:navigate>Order History</a>
        </li>
        <li class="account-nav__item {{ request()->is('order-details') ? 'account-nav__item--active' : '' }}">
            <a href="{{ route('order-details') }}" wire:navigate>Order Details</a>
        </li>
        <li class="account-nav__item {{ request()->is('addresses') ? 'account-nav__item--active' : '' }}">
            <a href="{{ route('addresses') }}" wire:navigate>Addresses</a>
        </li>
        <li class="account-nav__item {{ request()->is('edit-address') ? 'account-nav__item--active' : '' }}">
            <a href="{{ route('edit-address') }}" wire:navigate>Edit Address</a>
        </li>
        <li class="account-nav__item {{ request()->is('password') ? 'account-nav__item--active' : '' }}">
            <a href="{{ route('password') }}" wire:navigate>Password</a>
        </li>
        <li class="account-nav__item ">
            <a href="#" wire:click="logout">Logout</a>
        </li>
    </ul>
</div>
