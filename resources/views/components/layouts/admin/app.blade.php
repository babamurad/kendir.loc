<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="AI Admin Dashboards" />
		<meta name="keywords"
			content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}" />
		<title>@yield('title') - Kendir</title>

		<!-- Common CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/fonts/icomoon/icomoon.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/css/main.min.css')}}" />

		<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
		<!-- Chartist css -->
		<link href="{{asset('admin/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet" />
		<link href="{{asset('admin/vendor/chartist/css/chartist-custom.css')}}" rel="stylesheet" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}">

        <script src="{{asset('admin/js/jquery.js')}}"></script>
        <script src="{{asset('admin/js/popper.min.js')}}"></script>

        @stack('sumcdn')

{{--        <link href="{{asset('admin/css/quill.snow.css')}}" rel="stylesheet" />--}}
{{--        <script src="{{asset('admin/js/quill.js')}}"></script>--}}

		<link href="{{asset('admin/css/style.css')}}" rel="stylesheet" />


        @stack('dateTables')
	</head>

	<body>


		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">
			<!-- BEGIN .app-heading -->
			<livewire:admin.admin-header />
			<!-- END: .app-heading -->
			<!-- BEGIN .app-container -->
			<div class="app-container">
				<!-- BEGIN .app-side -->
				<aside class="app-side" id="app-side">
					<!-- BEGIN .side-content -->
					<div class="side-content ">
						<!-- BEGIN .user-profile -->
						<div class="user-profile">
							<a href="{{route('admin.dashboard')}}" class="logo">
								<img src="{{asset('admin/img/logo.png')}}" alt="Admin Dashboards" />
							</a>
							<h6 class="location-name">Ashgabat</h6>

						</div>
						<!-- END .user-profile -->
						<!-- BEGIN .side-nav -->
                        {{-- @dd(request()) --}}
						<nav class="side-nav">
							<!-- BEGIN: side-nav-content -->
							<ul class="unifyMenu" id="unifyMenu">
								<li class=" {{ request()->is('admin/dashboard') ? 'active selected' : '' }}">
									<a href="{{route('admin.dashboard')}}" wire:navigate>
										<span class="has-icon">
											<i class="icon-library"></i>
										</span>
										<span class="nav-title">Dashboards</span>
									</a>
								</li>
                                <li class=" {{ request()->is('admin/carousel') ? 'active selected' : '' }}">
                                    <a href="{{route('admin.carousel')}}" wire:navigate>
										<span class="has-icon">
											<i class="icon-image"></i>
										</span>
                                        <span class="nav-title">Carousel</span>
                                    </a>
                                </li>

                                <li class=" {{ request()->is('admin/orders') ? 'active selected' : '' }}">
                                    <a href="{{route('admin.orders')}}" wire:navigate>
										<span class="has-icon">
											<i class="icon-cart"></i>
										</span>
                                        <span class="nav-title">Orders</span>
                                    </a>
                                </li>

                                <li class="{{ request()->is('admin/contacts') || request()->is('admin/archive-messages') ? 'active selected' : '' }}">
                                    <a href="{{route('admin.contacts')}}" class="has-arrow" aria-expanded="{{ request()->is('admin/contacts') || request()->is('admin/archive-messages') ? 'true' : 'false' }}" wire:navigate>
										<span class="has-icon">
											<i class="icon-profile"></i>
										</span>
                                        <span class="nav-title">Contacts</span>
                                        @if(\App\Models\Contact::where('arhiw', '=', 0)->count()>0)
                                        <span class="count-label bg-danger contact-label">{{ \App\Models\Contact::where('arhiw', '=', 0)->count() }}</span>
                                        @endif
                                    </a>
                                    <ul aria-expanded="true" class="collapse {{ request()->is('admin/contacts') || request()->is('admin/archive-messages') ? 'in' : '' }}" style="">
                                        <li>
                                            <a class="{{ request()->is('admin/contacts') ? 'current-page' : '' }}" href="{{route('admin.contacts')}}" wire:navigate>Messages
                                                @if(\App\Models\Contact::where('arhiw', '=', 0)->count()>0)
                                                <span class="count-label bg-danger contact-label">{{ \App\Models\Contact::where('arhiw', '=', 0)->count() }}</span>
                                                @endif
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->is('admin/archive-messages') ? 'current-page' : '' }}" href="{{route('admin.archive-messages')}}" wire:navigate>Archive
                                                @if(\App\Models\Contact::where('arhiw', '=', 1)->count()>0)
                                                <span class="count-label contact-label bg-primary">{{ \App\Models\Contact::where('arhiw', '=', 1)->count() }}</span>
                                                @endif
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class=" {{ request()->is('admin/about-us') ? 'active selected' : '' }}">
                                    <a href="{{route('admin.about-us')}}" wire:navigate>
										<span class="has-icon">
											<i class="icon-info-with-circle"></i>
										</span>
                                        <span class="nav-title">About Us</span>
                                    </a>
                                </li>

                                <li class=" {{ request()->is('admin/posts') ? 'active selected' : '' }}">
                                    <a href="{{route('admin.posts')}}" wire:navigate>
										<span class="has-icon">
											<i class="icon-file-text"></i>
										</span>
                                        <span class="nav-title">Posts</span>
                                    </a>
                                </li>

                                <li class=" {{ request()->is('admin/brands') ? 'active selected' : '' }}">
                                    <a href="{{route('admin.brands')}}" wire:navigate>
										<span class="has-icon">
											<i class="icon-price-tag"></i>
										</span>
                                        <span class="nav-title">Brands</span>
                                    </a>
                                </li>

                                <li class="{{ request()->is('admin/manufacturers') ? 'active selected' : '' }}">
                                    <a href="{{route('admin.manufacturers')}}" wire:navigate>
										<span class="has-icon">
											<i class="icon-office"></i>
										</span>
                                        <span class="nav-title">Manufacturer</span>
                                    </a>
                                </li>

                                <li class="{{ request()->is('admin/options') ? 'active selected' : '' }}">
                                    <a href="{{route('admin.options')}}" wire:navigate>
										<span class="has-icon">
											<i class="icon-cog"></i>
										</span>
                                        <span class="nav-title">Options</span>
                                    </a>
                                </li>

                                <li class=" {{ request()->is('admin/categories') ? 'active selected' : '' }}">
                                    <a href="{{route('admin.categories')}}" wire:navigate>
										<span class="has-icon">
											<i class="icon-list2"></i>
										</span>
                                        <span class="nav-title">Categories</span>
                                    </a>
                                </li>

                                <li class="{{ request()->is('admin/products') || request()->is('admin/create-product') ? 'active selected' : '' }}">
                                    <a href="{{route('admin.products')}}" class="has-arrow" aria-expanded="false" wire:navigate>
										<span class="has-icon">
											<i class="icon-drawer"></i>
										</span>
                                        <span class="nav-title">Products</span>
                                    </a>
                                    <ul aria-expanded="true" class="collapse" style="height: 0px;">
                                        <li>
                                            <a class="{{ request()->is('admin/products') ? 'current-page' : '' }}" href="{{route('admin.products')}}" wire:navigate>Product List</a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->is('admin/create-product') ? 'current-page' : '' }}" href="{{route('admin.create-product')}}" wire:navigate>Create Product</a>
                                        </li>
                                    </ul>
                                </li>

							</ul>
							<!-- END: side-nav-content -->
						</nav>
						<!-- END: .side-nav -->
					</div>
					<!-- END: .side-content -->
				</aside>
				<!-- END: .app-side -->

				<!-- BEGIN .app-main -->
				<div class="app-main">
					<!-- BEGIN .main-heading -->
{{$slot}}
				</div>
				<!-- END: .app-main -->
			</div>
			<!-- END: .app-container -->
			<!-- BEGIN .main-footer -->
			<footer class="main-footer fixed-btm">
				© Kendir HJ 2024
			</footer>
			<!-- END: .main-footer -->
		</div>
		<!-- END: .app-wrap -->

		<!-- jQuery first, then Tether, then other JS. -->

		<script src="{{asset('admin/js/tether.min.js')}}"></script>
        <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('admin/vendor/unifyMenu/unifyMenu.js')}}"></script>
		<script src="{{asset('admin/vendor/onoffcanvas/onoffcanvas.js')}}"></script>
		<script src="{{asset('admin/js/moment.js')}}"></script>

		<!-- Sparkline JS -->
		<script src="{{asset('admin/vendor/sparkline/sparkline-retina.js')}}"></script>
		<script src="{{asset('admin/vendor/sparkline/custom-sparkline.js')}}"></script>

		<!-- Slimscroll JS -->
		<script src="{{asset('admin/vendor/slimscroll/slimscroll.min.js')}}"></script>
		<script src="{{asset('admin/vendor/slimscroll/custom-scrollbar.js')}}"></script>

		<!-- Chartist JS -->
		<script src="{{asset('admin/vendor/chartist/js/chartist.min.js')}}"></script>
		<script src="{{asset('admin/vendor/chartist/js/chartist-tooltip.js')}}"></script>
		<script src="{{asset('admin/vendor/chartist/js/custom/custom-line-chart3.js')}}"></script>
		<script src="{{asset('admin/vendor/chartist/js/custom/custom-area-chart.js')}}"></script>
		<script src="{{asset('admin/vendor/chartist/js/custom/donut-chart2.js')}}"></script>
		<script src="{{asset('admin/vendor/chartist/js/custom/custom-line-chart4.js')}}"></script>

		<!-- Common JS -->
		<script src="{{asset('admin/js/common.js')}}"></script>
        @stack('print')

        @stack('summernote')
	</body>

</html>
