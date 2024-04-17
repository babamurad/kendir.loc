<!DOCTYPE html>
<html lang="{{ session()->get('locale', default: 'ru') }}" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>@yield('title') - Kendir</title>
    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/photoswipe/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/photoswipe/default-skin/default-skin.css')}}">
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/all.min.css')}}">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="{{asset('fonts/stroyka/stroyka.css')}}">
</head>

<body>
    <!-- site -->
    <div class="site">
        <!-- mobile site__header -->
        <header class="site__header d-lg-none">
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            <div class="mobile-header mobile-header--sticky" data-sticky-mode="alwaysOnTop">
                <div class="mobile-header__panel">
                    <div class="container">
                        <div class="mobile-header__body">
                            <button class="mobile-header__menu-button">
                                <svg width="18px" height="14px">
                                    <use xlink:href="{{ asset('images/sprite.svg#menu-18x14') }}"></use>
                                </svg>
                            </button>
                            <a class="mobile-header__logo" href="/">
                                <!-- mobile-logo -->
                                <img src="{{ asset('images/kendir/kendir-logo-white.png') }}" alt="Kendir logo" style="width:120px; height:30px;">
                                <!-- mobile-logo / end -->
                            </a>

                            <livewire:search-mobile-component />

                            <div class="mobile-header__indicators">
                                <div class="indicator indicator--mobile-search indicator--mobile d-sm-none">
                                    <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{ asset('images/sprite.svg#search-20') }}"></use>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="indicator indicator--mobile d-sm-flex d-sm-none">
                                    <livewire:wishlist-mobile-icon-component />
                                </div>
                                <div class="indicator indicator--mobile">
                                    <livewire:cart-mobile-icon-component />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile site__header / end -->
        <!-- desktop site__header -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <!-- .topbar -->

                <!-- .topbar / end -->
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <a href="/">
                            <!-- logo -->
                            <img src="{{ asset('images/kendir/kendir-logo-white.png') }}" alt="Kendir Logo" style="width: 14rem;">
                            <!-- logo / end -->
                        </a>
                    </div>

                        <livewire:header-search-component />

                    <div class="site-header__phone">
                        <livewire:localization-component />
                    </div>

                </div>
                <div class="site-header__nav-panel">
                    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                    <div class="nav-panel nav-panel--sticky" data-sticky-mode="alwaysOnTop">
                        <div class="nav-panel__container container">
                            <div class="nav-panel__row">
                                @if ( request()->is('/'))
                                <div class="nav-panel__departments">
                                    <!-- .departments -->
                                    <div class="departments  departments--open departments--fixed "
                                        data-departments-fixed-by=".block-slideshow">
                                        <div class="departments__body">
                                            <div class="departments__links-wrapper">
                                                <div class="departments__submenus-container"></div>
                                                <ul class="departments__links">
                                                    @foreach($rcategories as $rcategory)
                                                        <li class="departments__item">
                                                        <a class="departments__item-link" href="{{ route('shop', ['id' => $rcategory->id]) }}">
{{--                                                        <a class="departments__item-link" href="#">--}}
                                                            {{ $rcategory->name }}
                                                            @if($rcategory->children->count()>0)
                                                            <svg class="departments__item-arrow" width="6px" height="9px"> <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use> </svg>
                                                            @endif
                                                        </a>
                                                        @if($rcategory->children->count()>0)
                                                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--lg">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu  megamenu--departments">
                                                                <div class="megamenu__body">
                                                                    <div class="row">
                                                                        <div class="col-5">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item  megamenu__item--with-submenu">
                                                                                    <a href="{{ route('shop', ['id' => $rcategory->id]) }}">
                                                                                        {{ $rcategory->name }}
                                                                                    </a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        @foreach($rcategory->children as $category)
                                                                                        <li class="megamenu__item">
                                                                                            <a href="{{ route('shop', ['id' => $category->id]) }}">
                                                                                                {{$category->name}}
                                                                                            </a>
                                                                                        </li>
                                                                                        @endforeach
                                                                                    </ul>

                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-7">
                                                                            <img src="{{ asset('images/categories'. '/'. $rcategory->image) }}" alt="" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                        @endif
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <button class="departments__button">
                                            <svg class="departments__button-icon" width="18px" height="14px">
                                                <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                            </svg>
                                            {{ __('Shop By Category') }}
                                            {{-- @lang('Shop By Category') --}}
                                            <svg class="departments__button-arrow" width="9px" height="6px">
                                                <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-down-9x6') }}"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <!-- .departments / end -->
                                </div>
                                @endif
                                @if(!request()->is('/'))
{{--                                <livewire:shop-category-component />--}}
                                @endif
                                <!-- .nav-links -->
                                <div class="nav-panel__nav-links nav-links">
                                    <ul class="nav-links__list">
                                        <li class="nav-links__item ">
                                            <a class="nav-links__item-link" href="/" wire:navigate>
                                                <div class="nav-links__item-body">
                                                    @lang('Home')
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item">
                                            <a class="nav-links__item-link" href="{{ route('shop') }}" wire:navigate>
                                                <div class="nav-links__item-body">
                                                    {{__('Shop')}}
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item">
                                            <a class="nav-links__item-link" href="{{ route('calculator') }}" wire:navigate>
                                                <div class="nav-links__item-body">
                                                    {{__('Calculator')}}
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="{{ route('posts') }}" wire:navigate>
                                                <div class="nav-links__item-body">
                                                    {{__('News')}}
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="{{ route('contacts') }}" wire:navigate>
                                                <div class="nav-links__item-body">
                                                    {{__('ContactUs')}}
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item ">
                                            <a class="nav-links__item-link"
                                               href="{{ route('about-us') }}" wire:navigate>
                                                <div class="nav-links__item-body">
                                                    {{__('About us')}}
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .nav-links / end -->
                                <div class="nav-panel__indicators">
                                    <div class="indicator">
                                        <livewire:compare-icon-component />
                                    </div>
                                    <div class="indicator">
                                        <livewire:wishlist-icon-component />
                                    </div>
                                    <div class="indicator indicator--trigger--click">
                                        <livewire:cart-icon-component />

                                    </div>
                                    <div class="indicator indicator--trigger--click">
                                        <a href="#" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="{{ asset('images/sprite.svg#person-20') }}"></use>
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="indicator__dropdown">
                                            <livewire:user-component />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- desktop site__header / end -->
        <!-- site__body -->
        <div class="site__body">
            <!-- .block-slideshow -->

            {{ $slot}}

            <!-- .block-product-columns / end -->
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
        <footer class="site__footer">
            <div class="site-footer">
                <div class="container">
                    <div class="site-footer__widgets">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="site-footer__widget footer-contacts">
                                    <h5 class="footer-contacts__title">{{__('kendir_hk')}}</h5>
                                    <div class="footer-contacts__text">
                                        {{ __('kendir') }}
                                    </div>

                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">{{__('Information')}}</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href="{{ route('about-us') }}" class="footer-links__link">{{__('About Us')}}</a></li>
                                        <li class="footer-links__item"><a href="{{route('delivery')}}" class="footer-links__link">{{__('Delivery Information')}}</a></li>
                                        <li class="footer-links__item"><a href="{{ route('terms') }}" class="footer-links__link">{{__('Privacy Policy')}}</a></li>
{{--                                        <li class="footer-links__item"><a href="#" class="footer-links__link">{{__('Brands')}}</a>--}}
                                        </li>
                                        <li class="footer-links__item"><a href="{{ route('contacts') }}" class="footer-links__link">{{__('Contact Us')}}</a></li>
                                        <li class="footer-links__item"><a href="{{ route('return') }}" class="footer-links__link">{{__('Returns')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">{{__('My Account')}}</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href="{{ route('contacts') }}" class="footer-links__link">{{__('Store Location')}}</a></li>
                                        <li class="footer-links__item"><a href="{{ route('order-history') }}" class="footer-links__link">{{__('Order History')}}</a></li>
                                        <li class="footer-links__item"><a href="{{ route('wishlist') }}" class="footer-links__link">{{__('Wish List')}}</a></li>
{{--                                        <li class="footer-links__item"><a href="{{ route('roof') }}" class="footer-links__link">{{__('Roof')}}</a></li>--}}
{{--                                        <li class="footer-links__item"><a href="" class="footer-links__link">{{__('Specials')}}</a></li>--}}
{{--                                        <li class="footer-links__item"><a href="" class="footer-links__link">{{__('Gift Certificates')}}</a></li>--}}
{{--                                        <li class="footer-links__item"><a href="" class="footer-links__link">{{__('Affiliate')}}</a></li>--}}
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="site-footer__widget footer-newsletter">
                                    <h5 class="footer-contacts__title">{{__('Contact Us')}}</h5>
                                    <ul class="footer-contacts__contacts">
                                        <li><i class="footer-contacts__icon fas fa-globe-americas"></i> Täze zaman köçesi 180/2 jaýy, Bagtyýarlyk etrap, Aşgabat, Türkmenistan</li>
                                        <li><i class="footer-contacts__icon far fa-envelope"></i>  info@kendirtm.com
                                        </li>
                                        <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> (+993) 12 24-77-80,
                                            (+993) 12 24-77-81</li>
                                        <li><i class="footer-contacts__icon far fa-clock"></i> {{__('Mon-Fri')}} 08:00 - 18:00
                                            <i class="footer-contacts__icon far fa-clock"></i> {{__('Sat')}} 08:00 - 17:00
                                        </li>
                                    </ul>
                                    <div class="footer-newsletter__text footer-newsletter__text--social">
                                        {{__('Follow us on social networks')}}
                                    </div>
                                    <!-- social-links -->
                                    <div
                                        class="social-links footer-newsletter__social-links social-links--shape--circle">
                                        <ul class="social-links__list">
                                            <li class="social-links__item">
                                                <a class="social-links__link" href=""
                                                    target="_blank">
                                                    <i class="fab fa-tiktok"></i>
                                                </a>
                                            </li>
{{--                                            <li class="social-links__item">--}}
{{--                                                <a class="social-links__link social-links__link--type--youtube" href=""--}}
{{--                                                    target="_blank">--}}
{{--                                                    <i class="fab fa-youtube"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--facebook" href=""
                                                    target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
{{--                                            <li class="social-links__item">--}}
{{--                                                <a class="social-links__link social-links__link--type--twitter" href=""--}}
{{--                                                    target="_blank">--}}
{{--                                                    <i class="fab fa-twitter"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--instagram"
                                                    href="" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- social-links / end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="site-footer__copyright">
                            <!-- copyright -->
                            Powered by Kendir
                            <!-- copyright / end -->
                        </div>
                        <div class="site-footer__payments">
{{--                            <img src="{{ asset('images/payments.png') }}" alt="">--}}
                            <a href="/"><img src="{{ asset('images/kendir/footer-logo.png') }}" alt="Kendir logo" style="width: 50%;"></a>

                        </div>
                    </div>
                </div>
                <div class="totop">
                    <div class="totop__body">
                        <div class="totop__start"></div>
                        <div class="totop__container container"></div>
                        <div class="totop__end">
                            <button type="button" class="totop__button">
                                <svg width="13px" height="8px">
                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-up-13x8') }}"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div>
    <!-- quickview-modal / end -->
    <!-- mobilemenu -->
    <div class="mobilemenu">
        <div class="mobilemenu__backdrop"></div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__header">
                <div class="mobilemenu__title">{{__('Menu')}}</div>
                <button type="button" class="mobilemenu__close">
                    <svg width="20px" height="20px">
                        <use xlink:href="{{ asset('images/sprite.svg#cross-20') }}"></use>
                    </svg>
                </button>
            </div>
            <div class="mobilemenu__content">
                <ul class="mobile-links mobile-links--level--0" data-collapse
                    data-collapse-opened-class="mobile-links__item--open">
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="/" class="mobile-links__item-link">{{__('Home')}}</a>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="" class="mobile-links__item-link">
                                {{ __('Categories') }}
                            </a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-down-12x7') }}"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                @foreach($categories as $category)
                                    @if($category->parent_id == 0)
                                        <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">
                                            {{ $category->name }}
                                        </a>
                                        @if($category->children->count() > 0)
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-down-12x7') }}"></use>
                                            </svg>
                                        </button>
                                        @endif
                                    </div>
                                    @if($category->children->count() > 0)
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            @foreach($category->children as $subcategory)
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a  wire:navigate href="{{ route('shop', ['id' => $subcategory->id]) }}" class="mobile-links__item-link">{{ $subcategory->name }}</a>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="{{ route('shop') }}" class="mobile-links__item-link">{{__('Shop')}}</a>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="{{ route('calculator') }}" class="mobile-links__item-link">{{__('Calculator')}}</a>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="{{ route('posts') }}" class="mobile-links__item-link">{{__('News')}}</a>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link">
                                {{__('Account')}}
                            </a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-down-12x7') }}"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                @guest()
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="{{ route('register') }}" class="mobile-links__item-link" wire:navigate>{{__('Login')}}/{{__('Register')}}</a>
                                    </div>
                                </li>
                                @endguest
                                @auth()
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="a{{ route('dashboard') }}" class="mobile-links__item-link" wire:navigate>{{__('Dashboard')}}</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="{{ route('edit-profile') }}" class="mobile-links__item-link" wire:navigate>{{__('Edit Profile')}}</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="{{ route('order-history') }}" class="mobile-links__item-link" wire:navigate>{{__('Order History')}}</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="{{ route('addresses') }}" class="mobile-links__item-link" wire:navigate>{{__('Address Book')}}
                                            </a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="{{ route('edit-address') }}" class="mobile-links__item-link" wire:navigate>{{__('Edit Address')}}</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="{{ route('password') }}" class="mobile-links__item-link" wire:navigate>{{__('Change Password')}}</a>
                                    </div>
                                </li>
                                    <livewire:mobile-logout-component />
                                @endauth
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a data-collapse-trigger class="mobile-links__item-link">{{ __('Language') }}</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-down-12x7') }}"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="{{ route('home', ['locale' => 'en']) }}" class="mobile-links__item-link" wire:navigate>English</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="{{ route('home', ['locale' => 'ru']) }}" class="mobile-links__item-link" wire:navigate>Русский</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="{{ route('home', ['locale' => 'tm']) }}" class="mobile-links__item-link" wire:navigate>Turkmence</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- mobilemenu / end -->

    <div class="mobile-footer">
        <div class="mobile-list">
            <ul class="mobile-ul">
                <li>
                    <a href="/" class="{{ request()->is('/')? 'active':'' }}" wire:navigate>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home center"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>{{__('Home')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('shop') }}" class="{{ request()->is('shop')? 'active':'' }}" wire:navigate>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify center"><line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line></svg>
                        <span>{{ __('Shop') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cart') }}" class="{{ request()->is('cart')? 'active':'' }}" wire:navigate>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag center"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                        <span>{{ __('Cart') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('wishlist') }}" class="{{ request()->is('wishlist')? 'active':'' }}" wire:navigate>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart center"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <span>{{ __('Wishlist') }}</span>
                    </a>
                </li>
                @auth()
                <li>
                    <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard')? 'active':'' }}" wire:navigate>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user center"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span>{{ __('Account') }}</span>
                    </a>
                </li>
                @endauth
                @guest()
                <li>
                    <a href="{{ route('register') }}" class="{{ request()->is('dashboard')? 'active':'' }}" wire:navigate>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user center"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span>Login</span>
                    </a>
                </li>
                @endguest
            </ul>
        </div>

    </div>  </body>

    <!-- js -->

    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('vendor/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('vendor/photoswipe/photoswipe-ui-default.min.js')}}"></script>

    <script src="{{asset('js/number.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('vendor/svg4everybody/svg4everybody.min.js')}}"></script>
    <script>
        svg4everybody();
    </script>

@stack('zoom')
@stack('roof')

</body>

</html>
