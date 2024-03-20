<div>

    <div class="topbar__item">
        <div class="topbar-dropdown">
            <button class="topbar-dropdown__btn" type="button">
                {{ __('Language') }}:
                <span class="topbar__item-value">
                @if(strlen(session()->get('locale'))==0)
                    {{ session()->put('locale', 'ru') }}
                @endif

                {{ mb_strtoupper(session()->get('locale')) }}
                </span>
                <svg width="7px" height="5px">
                    <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-down-7x5') }}"></use>
                </svg>
            </button>
            <div class="topbar-dropdown__body">
                <!-- .menu -->
                <div class="menu menu--layout--topbar  menu--with-icons mt-2">
                    <div class="menu__submenus-container"></div>
                    <ul class="menu__list">
                        <li class="menu__item">
                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                            <div class="menu__item-submenu-offset"></div>
                            <a class="menu__item-link" href="{{ route('locale', ['locale' => 'en']) }}" wire:navigate>
                                <div class="menu__item-icon"><img
                                        srcset="images/languages/language-6-2.png 1x, images/languages/language-7@2x.png 2x"
                                        src="images/languages/language-7-2.png" alt="" style="width: 88%;"></div>
                            English
                            </a>
                        </li>
                        <li class="menu__item">
                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                            <div class="menu__item-submenu-offset"></div>
                            <a class="menu__item-link" href="{{ route('locale', ['locale' => 'ru']) }}" wire:navigate>
                                <div class="menu__item-icon"><img
                                        srcset="images/languages/language-6-2.png 1x, images/languages/language-7@2x.png 2x"
                                        src="images/languages/language-7-2.png" alt="" style="width: 88%;"></div>
                            Русский
                            </a>
                        </li>
                        <li class="menu__item">
                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                            <div class="menu__item-submenu-offset"></div>
                            <a class="menu__item-link" href="{{ route('locale', ['locale' => 'tm']) }}" wire:navigate>
                                <div class="menu__item-icon"><img
                                        srcset="images/languages/language-7-3.png 1x, images/languages/language-7@2x.png 2x"
                                        src="images/languages/language-7-2.png" alt="" style="width: 88%;"></div>
                                Türkmençe
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- .menu / end -->
            </div>
        </div>
    </div>
</div>
