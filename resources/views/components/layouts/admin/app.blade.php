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
		<link rel="shortcut icon" href="{{asset('admin/img/favicon.svg')}}" />
		<title>Premium Admin Dashboards</title>

		<!-- Common CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/fonts/icomoon/icomoon.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/css/main.min.css')}}" />

		<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
		<!-- Chartist css -->
		<link href="{{asset('admin/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet" />
		<link href="{{asset('admin/vendor/chartist/css/chartist-custom.css')}}" rel="stylesheet" />

	</head>

	<body>

		<!-- Loading starts -->
		<div class="loading-wrapper">
			<div class="loading">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!-- Loading ends -->

		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">
			<!-- BEGIN .app-heading -->
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
										<span class="user-name">Irina Shayk Lewes</span>
										<i class="icon-chevron-small-down"></i>
									</a>
									<div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
										<ul class="user-settings-list">
											<li>
												<a href="profile.html">
													<div class="icon">
														<i class="icon-account_circle"></i>
													</div>
													<p>Profile</p>
												</a>
											</li>
											<li>
												<a href="profile.html">
													<div class="icon red">
														<i class="icon-cog3"></i>
													</div>
													<p>Settings</p>
												</a>
											</li>
											<li>
												<a href="filters.html">
													<div class="icon yellow">
														<i class="icon-schedule"></i>
													</div>
													<p>Activity</p>
												</a>
											</li>
										</ul>
										<div class="logout-btn">
											<a href="login.html" class="btn btn-primary">Logout</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!-- END: .app-heading -->
			<!-- BEGIN .app-container -->
			<div class="app-container">
				<!-- BEGIN .app-side -->
				<aside class="app-side" id="app-side">
					<!-- BEGIN .side-content -->
					<div class="side-content ">
						<!-- BEGIN .user-profile -->
						<div class="user-profile">
							<a href="{{route('dashboard')}}" class="logo">
								<img src="{{asset('admin/img/logo.svg')}}" alt="Google Dashboards" />
							</a>
							<h6 class="location-name">San Francisco</h6>
							<ul class="profile-actions">
								<li>
									<a href="#">
										<i class="icon-social-skype"></i>
										<span class="count-label yellow"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="count-label green"></span>
										<i class="icon-drafts"></i>
									</a>
								</li>
								<li>
									<a href="login.html">
										<i class="icon-export"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- END .user-profile -->
						<!-- BEGIN .side-nav -->
						<nav class="side-nav">
							<!-- BEGIN: side-nav-content -->
							<ul class="unifyMenu" id="unifyMenu">
								<li class=" {{ request()->is('dashboard') ? 'active selected' : '' }}">
									<a href="{{route('dashboard')}}" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Dashboards</span>
									</a>
								</li>
								<li class=" {{ request()->is('dashboard') ? 'active selected' : '' }}">
									<a href="{{route('dashboard')}}" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Categories</span>
									</a>
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
				© Bootstrap Gallery 2023
			</footer>
			<!-- END: .main-footer -->
		</div>
		<!-- END: .app-wrap -->

		<!-- jQuery first, then Tether, then other JS. -->
		<script src="{{asset('admin/js/jquery.js')}}"></script>
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

	</body>

</html>
