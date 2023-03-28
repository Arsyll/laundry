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
@foreach ($paket_kiloan as $paket_kilo)
    <div class="card m-3">
        <div class="card-body">
            <h5 class="card-title">{{ $paket_kilo->nama_paket }}</h5>
            <p class="card-text">- Harga paket : Rp. {{ number_format($paket_kilo->harga_paket, 0, ',', '.') }}</p>
            <p class="card-text">- Lama Cuci : {{ $paket_kilo->hari_paket . ' hari' }}</p>
            <p class="card-text">- Minimal Berat : {{ $paket_kilo->min_berat_paket }} kg</p>
            @if ($paket_kilo->antar_jemput_paket == 1)
                <hr>
                <p class="card-text text-success"><i class="icon-check"></i> Gratis pengantaran</p>
            @endif
            <div class="form-check">
                <input class="form-check-input jenis_paket" type="radio" name="jenis_paket"
                    data-berat="{{ $paket_kilo->min_berat_paket }}" data-nama="{{ $paket_kilo->nama_paket }}"
                    data-harga="{{ $paket_kilo->harga_paket }}" data-antar="{{ $paket_kilo->antar_jemput_paket }}"
                    value="{{ $paket_kilo->kd_paket }}" id="paket-{{ $paket_kilo->kd_paket }}">
                <label class="form-check-label" for="paket-{{ $paket_kilo->kd_paket }}">Pilih</label>
            </div>
        </div>
    </div>
@endforeach
