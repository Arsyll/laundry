<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/template') }}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/template') }}/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template') }}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template') }}/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('layouts.navbar')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include('layouts.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/template') }}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/template') }}/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{ asset('assets/template') }}/vendors/js/extensions/toastr.min.js"></script>
    <script src="{{ asset('assets/template') }}/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/template') }}/js/core/app-menu.js"></script>
    <script src="{{ asset('assets/template') }}/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    {{-- <script src="{{asset('assets/template')}}/js/scripts/pages/dashboard-ecommerce.js"></script> --}}
    <!-- END: Page JS-->

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Product Details - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/template') }}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/template') }}/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template') }}/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template') }}/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template') }}/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template') }}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template') }}/css/pages/app-ecommerce-details.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template') }}/css/plugins/forms/form-number-input.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/template') }}/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}/css/style.css">
    <!-- END: Custom CSS-->

    <!-- BEGIN: Vendor JS-->
    {{-- <script src="{{asset('assets/template')}}/vendors/js/vendors.min.js"></script> --}}
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/template') }}/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="{{ asset('assets/template') }}/vendors/js/extensions/swiper.min.js"></script>
    <script src="{{ asset('assets/template') }}/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->



    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/template') }}/js/core/app-menu.js"></script>
    {{-- <script src="{{asset('assets/template')}}/js/core/app.js"></script> --}}
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/template') }}/js/scripts/pages/app-ecommerce-details.js"></script>
    <script src="{{ asset('assets/template') }}/js/scripts/forms/form-number-input.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/template') }}/js/scripts/components/components-modals.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/template') }}/js/scripts/charts/chart-apex.js"></script>
    <!-- END: Page JS-->
    @yield('script')
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
        $(document).ready(function() {
            @if (Session::has('success'))
                var success = '{{ Session::get('success') }}';
                toastr.success(success, 'Berhasil!', {
                    closeButton: true,
                    tapToDismiss: false
                });
            @endif

        });
        $(document).ready(function() {
            @if (Session::has('error'))
                var success = '{{ Session::get('error') }}';
                toastr.error(success, 'Gagal!', {
                    closeButton: true,
                    tapToDismiss: false
                });
            @endif
        });
    </script>
    @stack('scripts')
</body>
<!-- END: Body-->

</html>
