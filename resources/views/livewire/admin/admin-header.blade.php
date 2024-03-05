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
                            <i class="icon-notifications_none"></i>
                            <span class="count-label">7</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
                            <ul class="imp-notify">
                                <li>
                                    <div class="icon">W</div>
                                    <div class="details">
                                        <p><span>Wilson</span> The best Dashboard design I have seen ever.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">J</div>
                                    <div class="details">
                                        <p><span>John Smith</span> Jhonny sent you a message. Read now!</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon secondary">R</div>
                                    <div class="details">
                                        <p><span>Justin Mezzell</span> Stella, Added you as a Friend. Accept it!</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" id="todos" data-toggle="dropdown" aria-haspopup="true">
                            <i class="icon-person_outline"></i>
                            <span class="count-label red">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
                            <ul class="stats-widget">
                                <li>
                                    <h4>$37895</h4>
                                    <p>Revenue <span>+2%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h4>4,897</h4>
                                    <p>Downloads <span>+39%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 65%">
                                            <span class="sr-only">65% Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h4>2,219</h4>
                                    <p>Uploads <span class="text-secondary">-7%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0"
                                             aria-valuemax="100" style="width: 42%">
                                            <span class="sr-only">42% Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
