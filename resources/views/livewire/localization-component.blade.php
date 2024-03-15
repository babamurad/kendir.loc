<div>
    <div class="topbar__item">
        <div class="topbar-dropdown">
            <button class="topbar-dropdown__btn" type="button">
                {{ __('Language') }}: <span class="topbar__item-value">{{ mb_strtoupper(App::getLocale()) }}</span>
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
                            <a class="menu__item-link" href="" wire:click="setLang('en')">
                                <div class="menu__item-icon"><img
                                        srcset="{{ asset('images/languages/language-1-2.png') }} 1x, {{ asset('images/languages/language-1@2x.png') }} 2x"
                                        src="{{ asset('images/languages/language-1.png') }}" alt="" style="width: 88%;"></div>
                                English
                            </a>
                        </li>
                        <li class="menu__item">
                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                            <div class="menu__item-submenu-offset"></div>
                            <a class="menu__item-link" href="" wire:click="setLang('ru')">
                                <div class="menu__item-icon"><img
                                        srcset="images/languages/language-6-2.png 1x, images/languages/language-6@2x.png 2x"
                                        src="{{ asset('images/languages/language-2.png') }}" alt="" style="width: 88%;"></div>
                                Русский
                            </a>
                        </li>
                        <li class="menu__item">
                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                            <div class="menu__item-submenu-offset"></div>
                            <a class="menu__item-link" href="" wire:click="setLang('tm')">
                                <div class="menu__item-icon"><img
                                        srcset="images/languages/language-7-3.png 1x, images/languages/language-7@2x.png 2x"
                                        src="images/languages/language-7-2.png" alt="" style="width: 88%;"></div>
                                Turkmence
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- .menu / end -->
            </div>
        </div>
    </div>
</div>
