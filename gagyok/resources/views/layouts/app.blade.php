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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <!-- Navbar STart -->
        <div class="topnav fixed-top bg-white shadow" id="myTopnav">
            <div class="row">
                <div class="col">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/image/logo.png') }}" width="300" height="176" alt="Gagyok">
                    </a>
                </div>
                <div class="col">
                    <div class="row"> 
                        <div class="col">
                            <a href="/home" class="active nav-links">BERANDA</a>
                        </div>
                        <div class="col">
                            <a href="/category">KATEGORI</a>
                        </div>
                        <div class="col">
                            <a href="/entertainment">HIBURAN</a>
                        </div>
                        <div class="col-auto">
                            @php
                            $profile = \App\Models\Personalinfo::where('user_id',Auth::user()->id)->first();
                        @endphp
							<a href="/profile" class="rounded"><img src="{{asset('storage/assets/image/profile')}}/{{$profile->user_picture}}" class="rounded" alt="Avatar"  width="20px" height="20px"> <span>{{auth()->user()->name}}</span></a>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-sm-9">  
                            <form action="{{ url('cari') }}" method="get"  id="search">
                                <input type="text" name="search_text" id="search_text" placeholder="Cari...."/>
                            </form>
                        </div>
                        <div class="col-auto">
                            <a class="col cart" href="{{ url('/cart') }}">
                                @php
                                    $main_order = \App\Models\Order::where('user_id',Auth::user()->id)->where('status', 0)->first();
                                    if (isset($main_order->id)) 
                                    {
                                        $cart = \App\Models\OrderDetail::where('order_id', $main_order->id)->count();
                                    }
                                    else 
                                    {
                                        $cart = 0;
                                    }
                                @endphp
                                @if ($cart>=1)
                                <span class="badges badges-danger">{{$cart}}</span>
                                @endif
                            </a>
                            <a class="col line-nav"></a>
                            <a class="col notif" href="{{ url('/notification')}}">
                                @php
                                    $main_order = 0;
                                    $main_order = \App\Models\Order::where('user_id',Auth::user()->id)->where('status','>', 0)->where('status','<', 5)->count();
                                @endphp
                                @if ($main_order>=1)
                                <span class="badges badges-info ">{{$main_order}}</span>
                                @endif        
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
            <script>
                function myFunction() {
                  var x = document.getElementById("myTopnav");
                  if (x.className === "topnav") {
                    x.className += " responsive";
                  } else {
                    x.className = "topnav";
                  }
                }
                </script>
    </body>
</html>
