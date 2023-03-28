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
<table style="width: 100%;">
    @foreach($paket_satuan as $paket_satu)
    <tr>
        <td style="width: 50px; border-left: 1px solid #aaa;" class="item-satuan">
            <div class="numbering">{{ $loop->iteration }}</div>
        </td>
        <td style="width: 600px; font-weight: bold;" class="text-left item-satuan">
            {{ $paket_satu->nama_barang . ' ' . $paket_satu->ket_barang }}
            <input type="text" name="kd_barang[]" value="{{ $paket_satu->kd_barang }}" hidden="">
        </td>
        <td style="text-align: center;" class="item-satuan">
            <div class="d-flex justify-content-around">
                <button type="button" class="btn-primary btn-min"><i data-frather="minus"></i></button>
                <input type="text" class="form-control-xs input-ammount" name="jumlah_barang[]" value="0" readonly="readonly" style="width: 15px; border: 0;">
                <button type="button" class="btn-primary btn-plus"><i data-frather="plus"></i></button>
            </div>
        </td>
        <td style="font-weight: bold; width: 200px; border-right: 1px solid #aaa;" class="item-satuan">
            Rp. {{ number_format($paket_satu->harga_barang,2,',','.') }}
            <input type="text" hidden="" name="harga_satuan" class="harga_satuan" value="{{ $paket_satu->harga_barang }}">
            <input type="text" hidden="" name="subtotal[]" class="subtotal">
        </td>
    </tr>
    @endforeach
</table>
