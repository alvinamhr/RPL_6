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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
        <!-- END: Vendor CSS-->

        @yield('css')

        <!-- Main Css -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/slider.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/colors/default.css') }}" rel="stylesheet">

        {{-- Font awesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
                    <li><a href="/category" class="nav-links">KATEGORI</a></li>
                    <li><a href="/entertainment" class="nav-links">HIBURAN</a></li>
                    <li class="dropdown">
							<a href="/profile" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('storage/assets/image/profile/dummy.jpg')}}" class="img-circle" alt="Avatar"  width="20px" height="20px"> <span>{{auth()->user()->name}}</span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="nav-link" type="submit">
                                    {{ __('Logout') }}
                                </button>
                            </form>
                        </li>
                </ul>
                <div class="nav-btn">
                    <div class="search">
                        <form action="" method="get">
                            <input type="text" name="search_text" id="search_text" placeholder="Cari...."/>
                            <input type="button" name="search_button" id="search_button" class="search">
                        </form>
                    </div>
                    

                    <div class="cart">
                        {{-- dibawah ini untuk menampilkan jumlah orderan pada navbar yang ada didalam keranjang belanja--}}
                        @php
                            $main_order = \App\Models\Order::where('user_id',Auth::user()->id)->where('status', 0)->first();
                            if (isset($main_order->id)) {
                                $notif = \App\Models\OrderDetail::where('order_id', $main_order->id)->count();
                            }
                            else {
                                $notif = 0;
                            }
                            
                        @endphp
                        <a class="nav-link" href="{{ url('/cart') }}">
                            {{-- <img src="{{ asset('assets/icons/apa.svg') }}"> --}}
                            @if ($notif>=1)
                                <span class="badge badge-danger">{{$notif}}</span>
                            @endif
                        </a>
                        {{-- sampai disini notifnya --}}
                        {{-- <img src="{{ asset('assets/icons/keranjang.svg')}}"> --}}
                        {{-- <a class="nav-link" href="{{ url('/cart')}}">
                            <img src="{{asset('assets/icons/keranjang.svg')}}">
                        </a> --}}
                    </div>
                    

                        <a class="notif" href="{{ url('/notification')}}">
                            
                        </a>

                
                </div>
            </nav>
        </div>
    
        @yield('content')        

        <!-- Footer Start -->
        <footer class="footer-distributed">
			<div class="footer-left">
                <p class="gagyok">GAGYOK</p>
                <h3>TENTANG GAGYOK</h3>
			</div>
			<div class="footer-right">
                <div>
                    <p class="footer-company-name">© Copyright Gagyok 2021. Developed by Victory.</p>
				</div>
			</div>
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
        <script src="{{ asset('js/jquery.js')}}"></script>
        <script src="{{ asset('js/plugins.js')}}"></script>
        
        
        
        
    </body>
</html>
