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
    <title>Register Page - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/template') }}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/template') }}/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <!-- Register v1 -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="card mb-0">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="brand-logo">
                                        <h2 class="brand-text text-primary ml-1">{{ config('app.name', 'Laravel') }}
                                        </h2>
                                    </a>

                                    <h4 class="card-title mb-1 text-center">Laundry Terbaik Untuk Keluarga Anda.
                                    </h4>

                                    <form class="auth-register-form mt-2" action="index.html" method="POST">
                                        <div class="form-group">
                                            {{-- <label for="register-username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="register-username"
                                                name="register-username" placeholder="johndoe"
                                                aria-describedby="register-username" tabindex="1" autofocus /> --}}

                                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="register-password" class="form-label">Password</label>

                                         

                                            <label for="password"
                                                class="form-label">{{ __('Password') }}</label>
                                                <div class="input-group input-group-merge form-password-toggle">
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        aria-describedby="register-password" tabindex="3">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text cursor-pointer"><i
                                                                    data-feather="eye"></i></span>
                                                        </div>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="privacy_policy" required tabindex="4" />
                                                <label class="custom-control-label" for="privacy_policy">
                                                    Saya setuju dengan <a href="javascript:void(0);">privacy policy &
                                                        terms</a>
                                                </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-block" type="submit">Buat Akun</button>
                                    </form>

                                    <p class="text-center mt-2">
                                        <span>Sudah punya akun?</span>
                                        <a href="{{ route('login') }}">
                                            <span>Masuk</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </form>
                        <!-- /Register v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <script>
        function validateForm() {
            var checkBox = document.getElementById("privacy_policy");
            if (!checkBox.checked) {
                alert("Please agree to our Privacy Policy to proceed");
                return false;
            }
        }
    </script>
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/template') }}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/template') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/template') }}/js/core/app-menu.js"></script>
    <script src="{{ asset('assets/template') }}/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/template') }}/js/scripts/pages/page-auth-register.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
