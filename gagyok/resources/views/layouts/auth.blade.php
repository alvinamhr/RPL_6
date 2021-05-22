<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Gagyok</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gagyok" />
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/image/favicon.png') }}">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/components.min.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
</head>

<body class="bg-white">
  <div class="pace pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
      <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div></div>
        <!-- BEGIN: Content-->
        <div class="app-content">
          <div class="content-overlay"></div>
          <div class="content-wrapper">
            <div class="content-header row"></div>
              <div class="content-body"><!-- login page start -->
              <div class="row-2 row-cols-1">
                <div class="justify-content-center" style="margin-top: 50px">
                  <div class="text-center"><img src="{{ asset('assets/image/logo.jpg') }}" width="258px" height="78px" alt=""></div>
                </div>
                <section id="auth-login" class="row flexbox-container justify-content-center">
                @yield('content')
                </section>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/scripts/components.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

  
  <!-- END: Body-->
</body>
