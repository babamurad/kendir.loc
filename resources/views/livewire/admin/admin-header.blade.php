<header class="app-header">
    <div class="container-fluid">
        <div class="row gutters">
            <div class="col-sm-7 col-8">
                <a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
                    <i class="icon-arrow_back"></i>
                </a>
                <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
                    <i class="icon-chevron-thin-left"></i>
                </a>
                <div class="custom-search hidden-sm hidden-xs">
                    <i class="icon-magnifying-glass"></i>
                    <input type="text" class="search-query" placeholder="Search ...">
                </div>
            </div>
            <div class="col-sm-5 col-4">
                <ul class="header-actions">
                    <li>
                        <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                            <span class="mt-1">{{ mb_strtoupper(\Illuminate\Support\Facades\App::getLocale()) }}</span>
                            <i class="icon-language"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
                            <ul class="imp-notify">
                                <li>
                                    <a href="{{ route('locale', ['locale' => 'en']) }}">English</a>
                                </li>
                                <li>
                                    <a href="{{ route('locale', ['locale' => 'ru']) }}">Русский</a>
                                </li>
                                <li>
                                    <a href="{{ route('locale', ['locale' => 'tm']) }}">Türkmençe</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('admin.contacts')}}">
                            <i class="icon-envelop"></i>
                            @if(\App\Models\Contact::where('arhiw', '=', 0)->count()>0)
                            <span class="count-label red">{{ \App\Models\Contact::where('arhiw', '=', 0)->count() }}</span>
                            @endif
                        </a>
                    </li>

                    <li>
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                            <img class="avatar" src="{{asset('admin/img/user.png')}}" alt="Admin Dashboards" />
                            <span class="user-name">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                            <i class="icon-chevron-small-down"></i>
                        </a>
                        <div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
                            <ul class="user-settings-list">
                                <li>
                                    <a href="/" target="_blank">
                                        <div class="icon">
                                            <i class="icon-sphere"></i>
                                        </div>
                                        <p>Main Page</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon red">
                                            <i class="icon-cog3"></i>
                                        </div>
                                        <p>Settings</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="icon yellow">
                                            <i class="icon-schedule"></i>
                                        </div>
                                        <p>Activity</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="logout-btn">
                                <a href="#" class="btn btn-primary" wire:click.prevent="logout">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
