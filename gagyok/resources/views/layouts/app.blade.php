<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gagyok</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Gagyok" />
        <meta name="keywords" content="korean, online shop, korea, k-pop" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/image/favicon.png') }}">

        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
        <!-- END: Vendor CSS-->

        @yield('css')

        <!-- Main Css -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/slider.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/colors/default.css') }}" rel="stylesheet">

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <div class="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top bg-white shadow">
                <img src="{{ asset('assets/image/logo.png') }}" alt="Gagyok" id="navbar-logo">
                <div class="menu-toggler" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="nav-menu topnav">
                    <li><a href="/home" class="nav-links">BERANDA</a></li>
                    <li><a href="/category" class="nav-links">CATEGORY</a></li>
                    <li><a href="/entertainment" class="nav-links">HIBURAN</a></li>
                    <li class="dropdown">
							<a href="/profile" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/image/user.jpg')}}" class="img-circle" alt="Avatar"  width="20px" height="20px"> <span>{{auth()->user()->name}}</span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
                </ul>
                <div class="nav-btn">
                    <div class="search">
                        <form action="" method="get">
                            <input type="text" name="search_text" id="search_text" placeholder="Cari...."/>
                            <input type="button" name="search_button" id="search_button" class="search">
                        </form>
                    </div>
                    <div class="chart">
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            <img src="{{ asset('assets/icons/keranjang.svg') }}">
                        </a>
                    </div>
                    <div class="notif">
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            <img src="{{ asset('assets/icons/notifikasi.svg') }}">
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    
        @yield('content')        

        <!-- Footer Start -->
        <footer>            
                <p>© Copyright Gagyok 2021. Developed by Victory.</p>
        </footer>

        <!-- javascript -->
        <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/scrollspy.min.js') }}"></script>
        <!-- Animation Js -->
        <script src="{{ asset('js/aos.js') }}"></script>

        @yield('script')

        <!-- Main Js -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery.js')"></script>
            <script src="{{ asset('js/plugins.js')"></script>
    </body>
</html>
