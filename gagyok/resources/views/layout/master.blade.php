<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kemangteer Jakarta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Website Kemangteer" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo.ico') }}">

        <!-- Bootstrap -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Icons -->
        <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Animation -->
        <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/animations-delay.css') }}" rel="stylesheet" /> 

        @yield('css')

        <!-- Main Css -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet">

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
        <header id="topnav" class="defaultscroll sticky bg-white">
            <div class="container d-flex align-items-center justify-content-between py-1">
                <!-- Logo container-->
                <a class="logo" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo.svg') }}" width="100" height="56" alt="">
                </a>
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
        
                <div id="navigation" class="mt-1">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="{{ url('/') }}" class="pr-0">Home</a></li>
                        <li class="has-submenu">
                            <a href="{{ url('/profile') }}">Profile</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/profile#community') }}">Community Profile</a></li>
                                <li><a href="{{ url('/profile#team') }}">Team Profile</a></li>
                                <li><a href="{{ url('/profile#faq') }}">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ url('/volunteer') }}">Volunteer</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/volunteer#join-us') }}">Join Us</a></li>
                                <li><a href="{{ url('/volunteer#be-a-volunteer') }}">Be a Volunteer</a></li>
                                <li><a href="{{ url('/volunteer#volunteers') }}">Volunteers</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ url('/collaboration') }}">Collaboration</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/collaboration#procedures') }}">Procedures</a></li>
                                <li><a href="{{ url('/collaboration#submit-form') }}">Submit Form</a></li>
                                <li><a href="{{ url('/collaboration#partners') }}">Our Partners</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/donation') }}" class="pr-0">Donation</a></li>
                        <li class="has-submenu">
                            <a href="{{ url('/database') }}">Database</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/database#researches') }}">Researches</a></li>
                                <li><a href="{{ url('/database#e-books') }}">E-Books</a></li>
                                <li><a href="{{ url('/database#e-journals') }}">E-Journals</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        
        
        @yield('content')

        <!-- Footer Start -->
        <img src="{{ asset('assets/images/webbaner.png') }}" alt="waves" draggable="false" style="width: 100%">
        {{-- <footer class="footer">
            <div class="container d-flex align-items-center justify-content-between flex-wrap">
                <p class="text-center">Salam Mangrover! <br/> Semangat Mangrover!</p>    
                <div class="d-flex">
                    <a href="{{ url('/profile#faq') }}" class="text-foot"></i>FAQ</a>
                    <a href="{{ url('/articles') }}" class="text-foot"></i>ARTICLES</a>
                    <a href="https://goo.gl/maps/sqXiTracV3Gz7ycX8" target="_blank" class="text-foot"></i>LOCATION</a>
                </div>
                <ul class="list-unstyled social-icon social mb-0">
                    <li class="list-inline-item mb-0"><a href="mailto:kemangteerjkt@gmail.com" target="_blank"><i class="mdi mdi-email" title="Email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://instagram.com/kemangteerjkt?igshid=1pg49bvuk4jb1" target="_blank"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/KeMANGTEERJKT?s=09" target="_blank"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.youtube.com/channel/UCArJfA6vONGBWUnfeDyVuEA" target="_blank"><i class="mdi mdi-youtube" title="Youtube"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://chat.whatsapp.com/8gvgTXQoapS1gpGinYL4yR" target="_blank"><i class="mdi mdi-whatsapp" title="Whatsapp"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://vt.tiktok.com/ZSJduMjMS" target="_blank"><img src="{{ asset('assets/images/tik-tok.svg') }}" height="14" alt=""></a></li>
                </ul>
                <p class="mb-0 copyright">© Copyright KeMANGTEER Jakarta 2021. Developed by <a href="https://www.codepanda.id/" target="_blank" class="codepanda"> Codepanda.</a></p>
            </div>
        </footer> --}}
        <footer class="footer">
            <div class="row align-items-center">
                <p class="mb-md-0 col-md-4 col-lg-2 text-center">Salam Mangrover! <br/> Semangat Mangrover!</p>    
                <div class="d-flex col-md-4 col-lg-3 d-flex justify-content-center">
                    <a href="{{ url('/profile#faq') }}" class="text-foot"></i>FAQ</a>
                    <a href="{{ url('/articles') }}" class="text-foot"></i>ARTICLES</a>
                    <a href="https://goo.gl/maps/sqXiTracV3Gz7ycX8" target="_blank" class="text-foot"></i>LOCATION</a>
                </div>
                <ul class="list-unstyled social-icon social mb-0 col-md-4 col-lg-3 d-flex justify-content-center">
                    <li class="list-inline-item mb-0"><a href="mailto:kemangteerjkt@gmail.com" target="_blank"><i class="mdi mdi-email" title="Email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://instagram.com/kemangteerjkt?igshid=1pg49bvuk4jb1" target="_blank"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/KeMANGTEERJKT?s=09" target="_blank"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.youtube.com/channel/UCArJfA6vONGBWUnfeDyVuEA" target="_blank"><i class="mdi mdi-youtube" title="Youtube"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://chat.whatsapp.com/8gvgTXQoapS1gpGinYL4yR" target="_blank"><i class="mdi mdi-whatsapp" title="Whatsapp"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://vt.tiktok.com/ZSJduMjMS" target="_blank"><img src="{{ asset('assets/images/tik-tok.svg') }}" height="14" alt=""></a></li>
                </ul>
                <p class="mb-0 copyright col-lg-4 mt-md-3 mt-lg-0">© Copyright KeMANGTEER Jakarta 2021. Developed by <a href="https://www.codepanda.id/" target="_blank" class="codepanda"> Codepanda.</a></p>
            </div>
        </footer>

        {{-- <footer class="footer pb-0 pb-md-5 pt-0 text-white">
            <div class="container">
                <div class="d-flex justify-content-between flex-column flex-md-row pt-4">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a class="logo-footer" href="{{ url('/') }}">                    
                            <img src="{{ asset('assets/images/bottom-logo.svg') }}" width="150" height="150" alt="">
                        </a>
                        <p>Salam Mangrover! <br/> Semangat Mangrover!</p>                        
                    </div>
                    
                    <div class="my-3 mt-md-4">
                        <ul class="list-unstyled footer-list mt-md-4 d-flex justify-content-around d-md-block">
                            <li><a href="{{ url('/profile#faq') }}" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>FAQ</a></li>
                            <li><a href="{{ url('/articles') }}" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>Articles</a></li>
                            <li><a href="https://goo.gl/maps/sqXiTracV3Gz7ycX8" target="_blank" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>Location</a></li>
                        </ul>
                    </div>
                    
                    <div class="mt-md-4 d-flex align-items-center flex-column d-md-block">
                        <h4 class="text-light mt-md-4 footer-head">Contact Us</h4>
                        <ul class="list-unstyled social-icon social mt-2">
                            <li class="list-inline-item"><a href="mailto:kemangteerjkt@gmail.com" class="rounded" target="_blank"><i class="mdi mdi-email" title="Email"></i></a></li>
                            <li class="list-inline-item"><a href="https://instagram.com/kemangteerjkt?igshid=1pg49bvuk4jb1" class="rounded" target="_blank"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/KeMANGTEERJKT?s=09" class="rounded" target="_blank"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCArJfA6vONGBWUnfeDyVuEA" class="rounded" target="_blank"><i class="mdi mdi-youtube" title="Youtube"></i></a></li>
                            <li class="list-inline-item"><a href="https://chat.whatsapp.com/8gvgTXQoapS1gpGinYL4yR" class="rounded" target="_blank"><i class="mdi mdi-whatsapp" title="Whatsapp"></i></a></li>
                            <li class="list-inline-item"><a href="https://vt.tiktok.com/ZSJduMjMS" class="rounded" target="_blank"><img src="{{ asset('assets/images/tik-tok.svg') }}" height="14" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer> --}}
        {{-- <footer class="footer footer-bar">
            <div class="container">
                <p class="mb-0 copyright">© Copyright KeMANGTEER Jakarta 2021. Developed by <a href="https://www.codepanda.id/" target="_blank" class="codepanda"> Codepanda.</a></p>
            </div>
        </footer> --}}

        <!-- Back to top -->
        <a href="#" class="back-to-top rounded text-center" id="back-to-top" style="display: inline;"> 
            <i class="mdi mdi-chevron-up d-block"></i>
        </a>

        <!-- javascript -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/js/scrollspy.min.js') }}"></script>
        <!-- Animation Js -->
        <script src="{{ asset('assets/js/aos.js') }}"></script>

        @yield('script')

        <!-- Main Js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>
</html>