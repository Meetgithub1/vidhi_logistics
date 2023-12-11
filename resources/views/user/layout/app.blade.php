<!DOCTYPE html>
<html lang="en" class="dark-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ url('public/') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    {{-- <title>Vidhi Logistics</title> --}}
    <title>@yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('public/') }}/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/sweetalert2/sweetalert2.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/pickr/pickr-themes.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/spinkit/spinkit.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ url('public/') }}/assets/vendor/css/pages/cards-advance.css" />
    <!-- Helpers -->
    <script src="{{ url('public/') }}/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ url('public/') }}/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('public/') }}/assets/js/config.js"></script>
    <style>
        #template-customizer {
            display: none;
        }
        .toastr-dark {
            background-color: #333;
            color: #fff;
        }
        .plus-icon-color{
            color: white
        }
    </style>
</head>

<body>
    {{-- <div class="custom_loading">
        <div class="spinner spinner-border mdi-48px text-white text-opacity-75" role="status"><i class="sr-only"></i>
        </div>
    </div> --}}
    <div class="spinner-border spinner-border-lg text-primary custom_loading" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>


    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('user.layout.sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                @include('user.layout.header')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @yield('content')
                    </div>

                </div>

                @include('user.layout.footer')
                @include('user.layout.notification')
                <script>
                toastr.options = {
                    toastClass: 'toastr-green',
                    // Other options...
                };
                </script>
                @yield('script')
</body>

</html>