@extends('layouts.app')
@section('title', 'Customer')
@section('register_customer', 'active')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/vendors/css/forms/wizard/bs-stepper.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/vendors/css/forms/select/select2.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/plugins/forms/form-validation.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/template') }}/css/plugins/forms/form-wizard.css">
@section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Kelola Data</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Customer</a>
                                    </li>
                                    <li class="breadcrumb-item active">Customer Baru
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Nav tabs -->
                    <div class="default-tab">
                        <div class="tab-content">
                            {{-- <div class="tab-pane fade show active" id="paket_kiloan" role="tabpanel"> --}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <section class="horizontal-wizard">
                                                <div class="bs-stepper horizontal-wizard-example">
                                                    <div class="bs-stepper-header">
                                                        <div class="step" data-target="#account-details">
                                                            <button type="button" class="step-trigger">
                                                                <span class="bs-stepper-box">1</span>
                                                                <span class="bs-stepper-label">
                                                                    <span class="bs-stepper-title">Data Diri</span>
                                                                    <span class="bs-stepper-subtitle">Lengkapi data
                                                                        diri</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div class="line">
                                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                                        </div>
                                                        <div class="step" data-target="#personal-info">
                                                            <button type="button" class="step-trigger">
                                                                <span class="bs-stepper-box">2</span>
                                                                <span class="bs-stepper-label">
                                                                    <span class="bs-stepper-title">Layanan Laundry</span>
                                                                    <span class="bs-stepper-subtitle">Pilih layanan yang
                                                                        dibutuhkan</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                        <div class="line">
                                                            <i data-feather="chevron-right" class="font-medium-2"></i>
                                                        </div>
                                                        <div class="step" data-target="#social-links">
                                                            <button type="button" class="step-trigger">
                                                                <span class="bs-stepper-box">3</span>
                                                                <span class="bs-stepper-label">
                                                                    <span class="bs-stepper-title">Buat Akun</span>
                                                                    <span class="bs-stepper-subtitle">Meregister
                                                                        Pembuatan</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="bs-stepper-content">
                                                        <div id="account-details" class="content">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <div style="margin-bottom: -10px;">
                                                                                        <p class="form-label">Nama : </p>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Nama" name="nama"
                                                                                        id="nama">
                                                                                    <div class="nama_pelanggan_error"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <div style="margin-bottom: -10px;">
                                                                                        <p class="form-label">Email : </p>
                                                                                    </div>
                                                                                    <input type="email"
                                                                                        class="form-control"
                                                                                        placeholder="Email" name="email">
                                                                                    <div class="email_pelanggan_error">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <div style="margin-bottom: -10px;">
                                                                                        <p class="form-label">No. Handphone
                                                                                            : </p>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="No Handphone"
                                                                                        name="no_telp" id="no_telp">
                                                                                    <div class="no_telp_pelanggan_error">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <div style="margin-bottom: -10px;">
                                                                                        <p class="form-label">Jenis Kelamin
                                                                                            : </p>
                                                                                    </div>
                                                                                    <label class="radio-inline mr-3">
                                                                                        <input type="radio"
                                                                                            name="jenis_kelamin"
                                                                                            value="L">
                                                                                        Laki-laki</label>
                                                                                    <label class="radio-inline">
                                                                                        <input type="radio"
                                                                                            name="jenis_kelamin"
                                                                                            value="P">
                                                                                        Perempuan</label>
                                                                                </div>
                                                                                <div class="jenis_kelamin_error"
                                                                                    style="margin-top: -20px;"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <div
                                                                                        style="margin-bottom: -10px; margin-top: 15px;">
                                                                                        <p class="form-label">Alamat : </p>
                                                                                    </div>
                                                                                    <textarea class="form-control h-150" rows="5" id="comment" placeholder="Alamat" name="alamat"></textarea>
                                                                                    <div class="alamat_error"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="col-lg-12 mt-3 text-right">
                                                                <button class="btn btn-primary btn-next">
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Next</span>
                                                                    <i data-feather="arrow-right"
                                                                        class="align-middle ml-sm-25 ml-0"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div id="personal-info" class="content">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-12">
                                                                    <h4 class="mt-3 mb-3">Pilih Outlet</h4>
                                                                    <hr>
                                                                    <select class="form-control pilih_outlet"
                                                                        name="pilih_outlet">
                                                                        <option value="" class="outlet_kosong">--
                                                                            Pilih Outlet --</option>
                                                                        @foreach ($outlets as $outlet)
                                                                            <option value="{{ $outlet->id }}">
                                                                                {{ $outlet->nama }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="pilih_outlet_error"></div>
                                                                    <h4 class="mt-3 mb-3">Pilih Jenis Laundry</h4>
                                                                    <hr>
                                                                    <div class="form-group">
                                                                        <label class="radio-inline mr-3">
                                                                            <input type="radio" name="jenis_laundry"
                                                                                checked="checked" value="kiloan">
                                                                            Kiloan</label>
                                                                        <label class="radio-inline ml-5 mr-3">
                                                                            <input type="radio" name="jenis_laundry"
                                                                                value="satuan"> Satuan</label>
                                                                    </div>
                                                                    <div class="alert alert-primary deskripsi-jasa">
                                                                        <b>Deskripsi Jasa :</b><br>Perhitungan biaya
                                                                        berdasarkan timbangan yang di laundry</div>
                                                                </div>
                                                                <div class="col-lg-12 mb-5" id="hal_paket_kiloan">
                                                                    <h4 class="mt-3 mb-3">Pilih Paket Laundry</h4>
                                                                    <hr>
                                                                    <div class="row" id="daftar_paket_kiloan">

                                                                    </div>
                                                                    <div class="row jenis_paket_error" hidden="">
                                                                        <div class="col-md-12 text-left">
                                                                            <span style='color: red;'>Silakan pilih paket
                                                                                terlebih dahulu</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <h4 class="mt-3 mb-3">Masukkan Berat</h4>
                                                                            <hr>
                                                                            <div class="input-group">
                                                                                <input type="number" class="form-control"
                                                                                    id="berat_barang" name="berat_barang"
                                                                                    placeholder="Masukkan Berat"
                                                                                    readonly="readonly">
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text">/
                                                                                        Kg</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="berat_barang_error"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <h4 class="mt-3 mb-3">Metode Pembayaran</h4>
                                                                            <hr>
                                                                            <div class="input-group">
                                                                                <select class="form-control"
                                                                                    id="metode_pembayaran_kilo"
                                                                                    name="metode_pembayaran_kilo"
                                                                                    disabled="">
                                                                                    <option value=""
                                                                                        class="metode_pembayaran_kilo_1">--
                                                                                        Pilih Metode Pembayaran --</option>
                                                                                    <option value="outlet"
                                                                                        class="metode_pembayaran_kilo_2">
                                                                                        Bayar di outlet</option>
                                                                                    <option value="rumah"
                                                                                        class="metode_pembayaran_kilo_3"
                                                                                        data-antar="">Bayar di rumah
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="metode_pembayaran_kilo_error">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12 mt-3 jasa_antar_checkbox_kiloan"
                                                                            hidden="">
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        name="jasa_antar_checkbox_kiloan">Jasa
                                                                                    Antar</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-4 checkout_box_kilo"
                                                                        hidden="">
                                                                        <div class="col-lg-3 offset-lg-9">
                                                                            <div class="basic-list-group">
                                                                                <ul class="list-group">
                                                                                    <li
                                                                                        class="list-group-item active font-weight-bold">
                                                                                        Check Out</li>
                                                                                    <li class="list-group-item">
                                                                                        <div
                                                                                            class="d-flex justify-content-between">
                                                                                            <div
                                                                                                class="jenis_paket_kiloan">
                                                                                            </div>
                                                                                            <div
                                                                                                class="harga_paket_kiloan">
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                name="harga_paket_kiloan"
                                                                                                class="harga_paket_kiloan_input"
                                                                                                hidden="">
                                                                                        </div>
                                                                                        <div
                                                                                            class="d-flex justify-content-between jasa_antar_kiloan">
                                                                                            <div class="antar_nama_kiloan">
                                                                                            </div>
                                                                                            <div
                                                                                                class="antar_harga_kiloan">
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                name="antar_harga_kiloan"
                                                                                                class="antar_harga_kiloan_input"
                                                                                                hidden=""
                                                                                                value="0">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="list-group-item">
                                                                                        <div
                                                                                            class="d-flex justify-content-between font-weight-bold">
                                                                                            <div>Total</div>
                                                                                            <div class="total_kiloan_rp">
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                name="total_kiloan_rp"
                                                                                                class="total_kiloan_rp_input"
                                                                                                hidden="">
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-3 mt-3 offset-lg-9 text-left antar_harga_kiloan_error">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 mb-5" id="hal_paket_satuan"
                                                                    hidden="">
                                                                    <h4 class="mt-3 mb-3">Pilih Barang</h4>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-12" id="daftar_paket_satuan">

                                                                        </div>
                                                                        <div class="col-md-12 mt-2 text-left jumlah_barang_error"
                                                                            hidden="">
                                                                            <span style='color: red;'>Silakan pilih barang
                                                                                terlebih dahulu</span>
                                                                        </div>
                                                                        <div class="col-lg-12 mt-3">
                                                                            <h4 class="mt-3 mb-3">Metode Pembayaran</h4>
                                                                            <hr>
                                                                            <div class="input-group">
                                                                                <select class="form-control"
                                                                                    id="metode_pembayaran_satu"
                                                                                    name="metode_pembayaran_satu"
                                                                                    disabled="">
                                                                                    <option value=""
                                                                                        class="metode_pembayaran_satu_1">--
                                                                                        Pilih Metode Pembayaran --</option>
                                                                                    <option value="outlet"
                                                                                        class="metode_pembayaran_satu_2">
                                                                                        Bayar di outlet</option>
                                                                                    <option value="rumah"
                                                                                        class="metode_pembayaran_satu_3"
                                                                                        data-antar="">Bayar di rumah
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="metode_pembayaran_satu_error">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12 mt-3 jasa_antar_checkbox_satuan"
                                                                            hidden="">
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"
                                                                                        name="jasa_antar_checkbox_satuan">Jasa
                                                                                    Antar</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-4 checkout_box_satu"
                                                                        hidden="">
                                                                        <div class="col-lg-3 offset-lg-9">
                                                                            <div class="basic-list-group">
                                                                                <ul class="list-group">
                                                                                    <li
                                                                                        class="list-group-item active font-weight-bold">
                                                                                        Check Out</li>
                                                                                    <li class="list-group-item">
                                                                                        <div
                                                                                            class="d-flex justify-content-between">
                                                                                            <div
                                                                                                class="nama_barang_satuan">
                                                                                            </div>
                                                                                            <div
                                                                                                class="harga_barang_satuan">
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                name="harga_barang_satuan"
                                                                                                class="harga_barang_satuan_input"
                                                                                                hidden="">
                                                                                        </div>
                                                                                        <div
                                                                                            class="d-flex justify-content-between jasa_antar_satuan">
                                                                                            <div class="antar_nama_satuan">
                                                                                            </div>
                                                                                            <div
                                                                                                class="antar_harga_satuan">
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                name="antar_harga_satuan"
                                                                                                class="antar_harga_satuan_input"
                                                                                                value="0"
                                                                                                hidden="">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="list-group-item">
                                                                                        <div
                                                                                            class="d-flex justify-content-between font-weight-bold">
                                                                                            <div>Total</div>
                                                                                            <div class="total_satuan_rp">
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                name="total_satuan_rp"
                                                                                                class="total_satuan_rp_input"
                                                                                                hidden="">
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-3 mt-3 offset-lg-9 text-left antar_harga_satuan_error">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 d-flex justify-content-between">
                                                                    <button class="btn btn-primary btn-prev">
                                                                        <i data-feather="arrow-left"
                                                                            class="align-middle mr-sm-25 mr-0"></i>
                                                                        <span
                                                                            class="align-middle d-sm-inline-block d-none">Previous</span>
                                                                    </button>
                                                                    <button class="btn btn-primary btn-next">
                                                                        <span
                                                                            class="align-middle d-sm-inline-block d-none">Next</span>
                                                                        <i data-feather="arrow-right"
                                                                            class="align-middle ml-sm-25 ml-0"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">

                                                            </div>
                                                        </div>
                                                        <div id="social-links" class="content">
                                                            <div class="content-header">
                                                                <h5 class="mb-0">Social Links</h5>
                                                                <small>Enter Your Social Links.</small>
                                                            </div>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label"
                                                                            for="twitter">Twitter</label>
                                                                        <input type="text" id="twitter"
                                                                            name="twitter" class="form-control"
                                                                            placeholder="https://twitter.com/abc" />
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label"
                                                                            for="facebook">Facebook</label>
                                                                        <input type="text" id="facebook"
                                                                            name="facebook" class="form-control"
                                                                            placeholder="https://facebook.com/abc" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label"
                                                                            for="google">Google+</label>
                                                                        <input type="text" id="google"
                                                                            name="google" class="form-control"
                                                                            placeholder="https://plus.google.com/abc" />
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="form-label"
                                                                            for="linkedin">Linkedin</label>
                                                                        <input type="text" id="linkedin"
                                                                            name="linkedin" class="form-control"
                                                                            placeholder="https://linkedin.com/abc" />
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="d-flex justify-content-between">
                                                                <button class="btn btn-primary btn-prev">
                                                                    <i data-feather="arrow-left"
                                                                        class="align-middle mr-sm-25 mr-0"></i>
                                                                    <span
                                                                        class="align-middle d-sm-inline-block d-none">Previous</span>
                                                                </button>
                                                                <button class="btn btn-success btn-submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection

@push('styles')
@endpush

@push('scripts')
    <script src="{{ asset('assets/template') }}/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="{{ asset('assets/template') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('assets/template') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="{{ asset('assets/template') }}/js/scripts/forms/form-wizard.js"></script>

    <script type="text/javascript">
        (function($) {
            $.fn.inputFilter = function(inputFilter) {
                return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    } else {
                        this.value = "";
                    }
                });
            };
        }(jQuery));

        $("#no_hp_pelanggan").inputFilter(function(value) {
            return /^-?\d*$/.test(value);
        });

        $(".number_input").inputFilter(function(value) {
            return /^-?\d*$/.test(value);
        });

        function numberAntarSatu() {
            $(".antar_harga_satuan_input").inputFilter(function(value) {
                return /^-?\d*$/.test(value);
            });
        }

        function numberAntarKilo() {
            $(".antar_harga_kiloan_input").inputFilter(function(value) {
                return /^-?\d*$/.test(value);
            });
        }

        var cek_halaman_laundry = 1;
        var check_paket_laundry = false;
        var cek_metode_pembayaran_satu = 0;
        var cek_metode_pembayaran_kilo = 0;
        $(document).on('change', 'input[type=radio][name=jenis_laundry]', function() {
            if (this.value == 'kiloan') {
                cek_metode_pembayaran_satu = 0;
                var validator = $(".registrasi-form").validate();
                validator.resetForm();
                cek_halaman_laundry = 1;
                $('.jumlah_barang_error').prop('hidden', true);
                $('#hal_paket_kiloan').attr('hidden', false);
                $('#hal_paket_satuan').attr('hidden', true);
                $('.jasa_antar_checkbox_satuan').prop('hidden', true);
                $('.subtotal').val('0');
                $('.input-ammount').val('0');
                $('#metode_pembayaran_satu').attr('disabled', true);
                $('.metode_pembayaran_satu_1').prop('selected', true);
                $('.jasa_antar_satuan').html(
                    '<div class="antar_nama_satuan"></div><div class="antar_harga_satuan"></div>');
                $('.checkout_box_satu').attr('hidden', true);
                $('.deskripsi-jasa').html(
                    '<b>Deskripsi Jasa :</b><br>Perhitungan biaya berdasarkan timbangan yang di laundry');
            } else if (this.value == 'satuan') {
                cek_metode_pembayaran_kilo = 0;
                var validator = $(".registrasi-form").validate();
                validator.resetForm();
                cek_halaman_laundry = 0;
                check_paket_laundry = false;
                $('.jenis_paket_error').prop('hidden', true);
                $('.jasa_antar_checkbox_kiloan').prop('hidden', true);
                $('#hal_paket_kiloan').attr('hidden', true);
                $('#hal_paket_satuan').attr('hidden', false);
                $('.checkout_box_kilo').attr('hidden', true);
                $('input[name=jenis_paket]').prop('checked', false);
                $('#berat_barang').val('').attr('readonly', true);
                $('#metode_pembayaran_kilo').attr('disabled', true);
                $('.metode_pembayaran_kilo_1').prop('selected', true);
                $('.deskripsi-jasa').html(
                    '<b>Deskripsi Jasa :</b><br>Perhitungan biaya berdasarkan satuan material yang di laundry');
            }
        });

        var cek_antar = "";

        var harga_kilo_input = "";
        var harga_paket_satuan = "";
        $(document).on('click', '.jenis_paket', function() {
            check_paket_laundry = true;
            $('.jenis_paket_error').prop('hidden', true);
            var min_berat = $(this).attr('data-berat');
            var nama_paket = $(this).attr('data-nama');
            var harga_paket = $(this).attr('data-harga');
            var antar_paket = $(this).attr('data-antar');
            harga_paket_satuan = harga_paket;
            cek_antar = antar_paket;
            $('#berat_barang').attr('readonly', false).attr('min', min_berat).val(min_berat);
            $('.jasa_antar_checkbox_kiloan').prop('hidden', true);
            $('.metode_pembayaran_kilo_1').prop('selected', true);
            $('.metode_pembayaran_kilo_2').attr('data-antar', antar_paket);
            $('.checkout_box_kilo').attr('hidden', false);
            $('.jenis_paket_kiloan').html(nama_paket);
            var int_harga_paket = parseInt(harga_paket);
            var int_berat_paket = parseInt($('input[name=berat_barang]').val());
            var harga_total = int_berat_paket * int_harga_paket;
            $('.harga_paket_kiloan').html('Rp. ' + parseInt(harga_total).toLocaleString());
            $('input[name=harga_paket_kiloan]').val(harga_total);
            $('#metode_pembayaran_kilo').attr('disabled', false);
            harga_kilo_input = $('input[name=harga_paket_kiloan]').val();
            if (antar_paket == "1") {
                $('.total_kiloan_rp').html('Rp. ' + parseInt(harga_kilo_input).toLocaleString());
                $('input[name=total_kiloan_rp]').val(parseInt(harga_kilo_input));
                $('.jasa_antar_kiloan').html(
                    '<div class="antar_nama_kiloan">Jasa Antar</div><div class="antar_harga_kiloan">Rp. 0</div><input type="text" name="antar_harga_kiloan" class="antar_harga_kiloan_input" hidden="" value="0">'
                    );
            } else {
                $('.total_kiloan_rp').html('Rp. ' + parseInt(harga_kilo_input).toLocaleString());
                $('input[name=total_kiloan_rp]').val(parseInt(harga_kilo_input));
                $('.jasa_antar_kiloan').html(
                    '<div class="antar_nama_kiloan"></div><div class="antar_harga_kiloan"></div><input type="text" name="antar_harga_kiloan" class="antar_harga_kiloan_input" hidden="" value="0">'
                    );
            }
        });

        $(document).on('click', 'input[name=cek_member]', function() {
            if (this.checked == true) {
                $(this).val('1');
            } else {
                $(this).val('0');
            }
        });

        $(document).on('click', 'input[name=jasa_antar_checkbox_kiloan]', function() {
            if (this.checked == true) {
                $(this).val('1');
            } else {
                $(this).val('0');
            }

            if (cek_antar == "0" && $(this).val() == "1") {
                $('.jasa_antar_kiloan').html(
                    '<div class="antar_nama_kiloan">Jasa Antar</div><div class="antar_harga_kiloan">Rp. <input type="text" name="antar_harga_kiloan" class="antar_harga_kiloan_input" style="width: 50px;" value="0"></div>'
                    );
                numberAntarKilo();
            } else {
                $('.jasa_antar_kiloan').html(
                    '<div class="antar_nama_kiloan"></div><div class="antar_harga_kiloan"></div><input type="text" name="antar_harga_kiloan" class="antar_harga_kiloan_input" hidden="" value="0">'
                    );
                $('.total_kiloan_rp').html('Rp. ' + parseInt(harga_kilo_input).toLocaleString());
                $('input[name=total_kiloan_rp]').val(harga_kilo_input);
            }
        });

        $(document).on('input', '#berat_barang', function() {
            var int_berat_paket = $(this).val();
            var harga_total = parseInt(harga_paket_satuan) * parseInt(int_berat_paket);
            var antar_harga = $('.antar_harga_kiloan_input').val();
            harga_kilo_input = harga_total;
            var harga_total_2 = parseInt(harga_total) + parseInt(antar_harga);
            $('.harga_paket_kiloan').html('Rp. ' + parseInt(harga_total).toLocaleString());
            $('input[name=harga_paket_kiloan]').val(harga_total);
            $('.total_kiloan_rp').html('Rp. ' + parseInt(harga_total_2).toLocaleString());
            $('input[name=total_kiloan_rp]').val(parseInt(harga_total_2));
        });

        $(document).on('keyup', '.antar_harga_kiloan_input', function() {
            var harga_antar = $(this).val();
            var total_harga = parseInt(harga_antar) + parseInt(harga_kilo_input);
            $('.total_kiloan_rp').html('Rp. ' + total_harga.toLocaleString());
            $('input[name=total_kiloan_rp]').val(total_harga);
        });

        var harga_satu_input = "";
        var jumlah_barang_satuan = 0;
        $(document).on('click', '.btn-plus', function() {
            var ammount = $(this).prev('.input-ammount').val();
            $(this).prev('.input-ammount').val(parseInt(ammount) + 1);
            harga_satuan = parseInt($(this).closest('td').next().find('input.harga_satuan').val());
            jumlah = parseInt($(this).prev('.input-ammount').val());
            $(this).closest('td').next().find('input.subtotal').val(harga_satuan * jumlah);
            var subtotal_harga = 0;
            var jumlah_barang = 0;
            var harga_antar_satuan = $('.antar_harga_satuan_input').val();
            $('.subtotal').each(function() {
                subtotal_harga += parseInt(this.value) || 0;
            });
            $('.input-ammount').each(function() {
                jumlah_barang += parseInt(this.value) || 0;
            });
            $('.nama_barang_satuan').html('Barang(' + parseInt(jumlah_barang) + ')');
            $('.harga_barang_satuan').html('Rp. ' + parseInt(subtotal_harga).toLocaleString());
            $('input[name=harga_barang_satuan]').val(parseInt(subtotal_harga));
            var total_satuan = parseInt(harga_antar_satuan) + parseInt(subtotal_harga);
            $('.total_satuan_rp').html('Rp. ' + parseInt(total_satuan).toLocaleString());
            $('input[name=total_satuan_rp]').val(parseInt(total_satuan));
            harga_satu_input = $('input[name=harga_barang_satuan]').val();
            jumlah_barang_satuan = jumlah_barang;
            if (jumlah_barang != 0) {
                $('#metode_pembayaran_satu').attr('disabled', false);
                $('.checkout_box_satu').attr('hidden', false);
                $('.jumlah_barang_error').prop('hidden', true);
            } else {
                $('#metode_pembayaran_satu').attr('disabled', true);
                $('.metode_pembayaran_satu_1').prop('selected', true);
                $('.jasa_antar_satuan').html(
                    '<div class="antar_nama_satuan"></div><div class="antar_harga_satuan"></div>');
                $('.checkout_box_satu').attr('hidden', true);
                $('.jumlah_barang_error').prop('hidden', false);
            }
        });

        $(document).on('click', '.btn-min', function() {
            var ammount = $(this).next('.input-ammount').val();
            if (parseInt(ammount) > 0) {
                $(this).next('.input-ammount').val(parseInt(ammount) - 1);
                harga_satuan = parseInt($(this).closest('td').next().find('input.harga_satuan').val());
                jumlah = parseInt($(this).next('.input-ammount').val());
                $(this).closest('td').next().find('input.subtotal').val(harga_satuan * jumlah);
                var subtotal_harga = 0;
                var jumlah_barang = 0;
                var harga_antar_satuan = $('.antar_harga_satuan_input').val();
                $('.subtotal').each(function() {
                    subtotal_harga += parseInt(this.value) || 0;
                });
                $('.input-ammount').each(function() {
                    jumlah_barang += parseInt(this.value) || 0;
                });
                $('.nama_barang_satuan').html('Barang(' + parseInt(jumlah_barang) + ')');
                $('.harga_barang_satuan').html('Rp. ' + parseInt(subtotal_harga).toLocaleString());
                $('input[name=harga_barang_satuan]').val(parseInt(subtotal_harga));
                var total_satuan = parseInt(harga_antar_satuan) + parseInt(subtotal_harga);
                $('.total_satuan_rp').html('Rp. ' + parseInt(total_satuan).toLocaleString());
                $('input[name=total_satuan_rp]').val(parseInt(total_satuan));
                harga_satu_input = $('input[name=harga_barang_satuan]').val();
                jumlah_barang_satuan = jumlah_barang;
                if (jumlah_barang != 0) {
                    $('#metode_pembayaran_satu').attr('disabled', false);
                    $('.checkout_box_satu').attr('hidden', false);
                    $('.jumlah_barang_error').prop('hidden', true);
                } else {
                    $('#metode_pembayaran_satu').attr('disabled', true);
                    $('.metode_pembayaran_satu_1').prop('selected', true);
                    $('.jasa_antar_satuan').html(
                        '<div class="antar_nama_satuan"></div><div class="antar_harga_satuan"></div>');
                    $('.checkout_box_satu').attr('hidden', true);
                    $('.jumlah_barang_error').prop('hidden', false);
                }
            }
        });

        $(document).on('click', 'input[name=jasa_antar_checkbox_satuan]', function() {
            if (this.checked == true) {
                $(this).val('1');
            } else {
                $(this).val('0');
            }

            if ($(this).val() == "1") {
                $('.jasa_antar_satuan').html(
                    '<div class="antar_nama_satuan">Jasa Antar</div><div class="antar_harga_satuan">Rp. <input type="text" name="antar_harga_satuan" class="antar_harga_satuan_input" value="0" style="width: 50px;"></div>'
                    );
                $('.total_satuan_rp').html('Rp. ' + parseInt(harga_satu_input).toLocaleString());
                $('input[name=total_satuan_rp]').val(parseInt(harga_satu_input));
                numberAntarSatu();
            } else {
                $('.jasa_antar_satuan').html(
                    '<div class="antar_nama_satuan"></div><div class="antar_harga_satuan"><input type="text" name="antar_harga_satuan" class="antar_harga_satuan_input" value="0" style="width: 50px;" hidden=""></div>'
                    );
                $('.total_satuan_rp').html('Rp. ' + parseInt(harga_satu_input).toLocaleString());
                $('input[name=total_satuan_rp]').val(parseInt(harga_satu_input));
            }
        });

        $(document).on('keyup', '.antar_harga_satuan_input', function() {
            var harga_antar = $(this).val();
            var total_harga = parseInt(harga_antar) + parseInt(harga_satu_input);
            $('.total_satuan_rp').html('Rp. ' + total_harga.toLocaleString());
            $('input[name=total_satuan_rp]').val(total_harga);
        });

        $(document).ready(function() {
            $('#metode_pembayaran_satu').change(function() {
                if ($(this).val() == "") {
                    cek_metode_pembayaran_satu = 0;
                    $('.jasa_antar_checkbox_satuan').prop('hidden', true);
                    $('.jasa_antar_satuan').html(
                        '<div class="antar_nama_satuan"></div><div class="antar_harga_satuan"><input type="text" name="antar_harga_satuan" class="antar_harga_satuan_input" value="0" style="width: 50px;" hidden=""></div>'
                        );
                    $('.total_satuan_rp').html('Rp. ' + parseInt(harga_satu_input).toLocaleString());
                    $('input[name=total_satuan_rp]').val(parseInt(harga_satu_input));
                } else if ($(this).val() == "outlet") {
                    cek_metode_pembayaran_satu = 1;
                    if ($('input[name=jasa_antar_checkbox_satuan]').val() == '1') {
                        $('.jasa_antar_checkbox_satuan').prop('hidden', false);
                        $('.jasa_antar_satuan').html(
                            '<div class="antar_nama_satuan">Jasa Antar</div><div class="antar_harga_satuan">Rp. <input type="text" name="antar_harga_satuan" class="antar_harga_satuan_input" value="0" style="width: 50px;"></div>'
                            );
                        $('.total_satuan_rp').html('Rp. ' + parseInt(harga_satu_input).toLocaleString());
                        $('input[name=total_satuan_rp]').val(parseInt(harga_satu_input));
                        numberAntarSatu();
                    } else {
                        $('.jasa_antar_checkbox_satuan').prop('hidden', false);
                        $('.jasa_antar_satuan').html(
                            '<div class="antar_nama_satuan"></div><div class="antar_harga_satuan"><input type="text" name="antar_harga_satuan" class="antar_harga_satuan_input" value="0" style="width: 50px;" hidden=""></div>'
                            );
                        $('.total_satuan_rp').html('Rp. ' + parseInt(harga_satu_input).toLocaleString());
                        $('input[name=total_satuan_rp]').val(parseInt(harga_satu_input));
                    }
                } else if ($(this).val() == "rumah") {
                    cek_metode_pembayaran_satu = 0;
                    $('.jasa_antar_checkbox_satuan').prop('hidden', true);
                    $('.jasa_antar_satuan').html(
                        '<div class="antar_nama_satuan">Jasa Antar</div><div class="antar_harga_satuan">Rp. <input type="text" name="antar_harga_satuan" class="antar_harga_satuan_input" value="0" style="width: 50px;"></div>'
                        );
                    $('.total_satuan_rp').html('Rp. ' + parseInt(harga_satu_input).toLocaleString());
                    $('input[name=total_satuan_rp]').val(parseInt(harga_satu_input));
                    numberAntarSatu();
                }
            });

            $('#metode_pembayaran_kilo').change(function() {
                if ($(this).val() == "") {
                    cek_metode_pembayaran_kilo = 0;
                    $('.jasa_antar_checkbox_kiloan').prop('hidden', true);
                    if (cek_antar == "1") {
                        $('.jasa_antar_kiloan').html(
                            '<div class="antar_nama_kiloan">Jasa Antar</div><div class="antar_harga_kiloan">Rp. 0</div><input type="text" name="antar_harga_kiloan" class="antar_harga_kiloan_input" hidden="" value="0">'
                            );
                    } else if (cek_antar == "0") {
                        $('.jasa_antar_kiloan').html(
                            '<div class="antar_nama_kiloan"></div><div class="antar_harga_kiloan"></div><input type="text" name="antar_harga_kiloan" class="antar_harga_kiloan_input" hidden="" value="0">'
                            );
                        $('.total_kiloan_rp').html('Rp. ' + parseInt(harga_kilo_input).toLocaleString());
                        $('input[name=total_kiloan_rp]').val(harga_kilo_input);
                    }
                } else if ($(this).val() == "outlet") {
                    cek_metode_pembayaran_kilo = 1;
                    if (cek_antar == "1") {
                        $('.jasa_antar_kiloan').html(
                            '<div class="antar_nama_kiloan">Jasa Antar</div><div class="antar_harga_kiloan">Rp. 0</div><input type="text" name="antar_harga_kiloan" class="antar_harga_kiloan_input" hidden="" value="0">'
                            );
                    } else if (cek_antar == "0" && $('input[name=jasa_antar_checkbox_kiloan]').val() ==
                        "1") {
                        $('.jasa_antar_checkbox_kiloan').prop('hidden', false);
                        $('.jasa_antar_kiloan').html(
                            '<div class="antar_nama_kiloan">Jasa Antar</div><div class="antar_harga_kiloan">Rp. <input type="text" name="antar_harga_kiloan" class="antar_harga_kiloan_input" style="width: 50px;" value="0"></div>'
                            );
                        $('.total_kiloan_rp').html('Rp. ' + parseInt(harga_kilo_input).toLocaleString());
                        $('input[name=total_kiloan_rp]').val(harga_kilo_input);
                        numberAntarKilo();
                    } else if (cek_antar == "0") {
                        $('.jasa_antar_checkbox_kiloan').prop('hidden', false);
                        $('.jasa_antar_kiloan').html(
                            '<div class="antar_nama_kiloan"></div><div class="antar_harga_kiloan"></div><input type="text" name="antar_harga_kiloan" class="antar_harga_kiloan_input" hidden="" value="0">'
                            );
                        $('.total_kiloan_rp').html('Rp. ' + parseInt(harga_kilo_input).toLocaleString());
                        $('input[name=total_kiloan_rp]').val(harga_kilo_input);
                    }
                } else if ($(this).val() == "rumah") {
                    cek_metode_pembayaran_kilo = 0;
                    $('.jasa_antar_checkbox_kiloan').prop('hidden', true);
                    if (cek_antar == "1") {
                        $('.jasa_antar_kiloan').html(
                            '<div class="antar_nama_kiloan">Jasa Antar</div><div class="antar_harga_kiloan">Rp. 0</div><input type="text" name="antar_harga_kiloan" class="antar_harga_kiloan_input" hidden="" value="0">'
                            );
                    } else if (cek_antar == "0") {
                        $('.jasa_antar_kiloan').html(
                            '<div class="antar_nama_kiloan">Jasa Antar</div><div class="antar_harga_kiloan">Rp. <input type="text" name="antar_harga_kiloan" class="antar_harga_kiloan_input" style="width: 50px;" value="0"></div>'
                            );
                        $('.total_kiloan_rp').html('Rp. ' + parseInt(harga_kilo_input).toLocaleString());
                        $('input[name=total_kiloan_rp]').val(harga_kilo_input);
                        numberAntarKilo();
                    }
                }
            });
        });

        $(document).on('click', '.next-slide-1', function() {
            if ($(".registrasi-form").valid() == true) {
                var validator = $(".registrasi-form").validate();
                validator.resetForm();
                $('.slide-2-btn').click();
                $('.layanan-tab').addClass('active');
                $('.layanan-tab').addClass('show');
                $('.identitas-tab').removeClass('active');
                $('.identitas-tab').removeClass('show');
            }
        });

        $(document).on('click', '.prev-slide-2', function() {
            $('.slide-1-btn').click();
            $('.identitas-tab').addClass('active');
            $('.identitas-tab').addClass('show');
            $('.layanan-tab').removeClass('active');
            $('.layanan-tab').removeClass('show');
        });

        $(document).on('click', '.next-slide-2', function() {
            if (($(".registrasi-form").valid() == true && check_paket_laundry == true) || ($(".registrasi-form")
                    .valid() == true && jumlah_barang_satuan != 0)) {
                var validator = $(".registrasi-form").validate();
                validator.resetForm();
                $('.slide-3-btn').click();
                $('.akun-tab').addClass('active');
                $('.akun-tab').addClass('show');
                $('.layanan-tab').removeClass('active');
                $('.layanan-tab').removeClass('show');
            } else if (check_paket_laundry == false && cek_halaman_laundry == 1) {
                $('.jenis_paket_error').prop('hidden', false);
            } else if (jumlah_barang_satuan == 0 && cek_halaman_laundry == 0) {
                $('.jumlah_barang_error').prop('hidden', false);
            }
        });

        $(document).on('click', '.prev-slide-3', function() {
            $('.slide-2-btn').click();
            $('.layanan-tab').addClass('active');
            $('.layanan-tab').addClass('show');
            $('.akun-tab').removeClass('active');
            $('.akun-tab').removeClass('show');
        });

        $(document).on('click', '.bayar-outlet-kilo-btn', function() {
            var sub_total = $('.total_kiloan_rp_input').val();
            $('.sub_total_bayar_kilo').val(parseInt(sub_total).toLocaleString());
            $('.sub_total_bayar_kilo_2').val(sub_total);
            $('.diskon_bayar_kilo').val('0');
            $('.pajak_bayar_kilo').val('0');
            $('.total_bayar_kilo').val(parseInt(sub_total).toLocaleString());
            $('.total_bayar_kilo_2').val(sub_total);
        });

        $(document).on('click', '.bayar-outlet-satu-btn', function() {
            var sub_total = $('.total_satuan_rp_input').val();
            $('.sub_total_bayar_satu').val(parseInt(sub_total).toLocaleString());
            $('.sub_total_bayar_satu_2').val(sub_total);
            $('.diskon_bayar_satu').val('0');
            $('.pajak_bayar_satu').val('0');
            $('.total_bayar_satu').val(parseInt(sub_total).toLocaleString());
            $('.total_bayar_satu_2').val(sub_total);
        });

        $(document).on('input', '.diskon_bayar_kilo', function() {
            var sub_total = $('.total_kiloan_rp_input').val();
            var persen_diskon = $(this).val();
            var diskon = sub_total * (persen_diskon / 100);
            var persen_pajak = $('.pajak_bayar_kilo').val();
            var pajak = sub_total * (persen_pajak / 100);
            var total = (sub_total - diskon) + pajak;
            $('.total_bayar_kilo').val(parseInt(total).toLocaleString());
            $('.total_bayar_kilo_2').val(total);
            if ($('.bayar_bayar_kilo').val() != '') {
                var bayar = $('.bayar_bayar_kilo').val();
                var kembali = bayar - total;
                $('.kembali_bayar_kilo').val(parseInt(kembali).toLocaleString());
                $('.kembali_bayar_kilo_2').val(kembali);
            }
        });

        $(document).on('input', '.diskon_bayar_satu', function() {
            var sub_total = $('.total_satuan_rp_input').val();
            var persen_diskon = $(this).val();
            var diskon = sub_total * (persen_diskon / 100);
            var persen_pajak = $('.pajak_bayar_satu').val();
            var pajak = sub_total * (persen_pajak / 100);
            var total = (sub_total - diskon) + pajak;
            $('.total_bayar_satu').val(parseInt(total).toLocaleString());
            $('.total_bayar_satu_2').val(total);
            if ($('.bayar_bayar_satu').val() != '') {
                var bayar = $('.bayar_bayar_satu').val();
                var kembali = bayar - total;
                $('.kembali_bayar_satu').val(parseInt(kembali).toLocaleString());
                $('.kembali_bayar_satu_2').val(kembali);
            }
        });

        $(document).on('input', '.pajak_bayar_kilo', function() {
            var sub_total = $('.total_kiloan_rp_input').val();
            var persen_pajak = $(this).val();
            var pajak = sub_total * (persen_pajak / 100);
            var persen_diskon = $('.diskon_bayar_kilo').val();
            var diskon = sub_total * (persen_diskon / 100);
            var total = (sub_total - diskon) + pajak;
            $('.total_bayar_kilo').val(parseInt(total).toLocaleString());
            $('.total_bayar_kilo_2').val(total);
            if ($('.bayar_bayar_kilo').val() != '') {
                var bayar = $('.bayar_bayar_kilo').val();
                var kembali = bayar - total;
                $('.kembali_bayar_kilo').val(parseInt(kembali).toLocaleString());
                $('.kembali_bayar_kilo_2').val(kembali);
            }
        });

        $(document).on('input', '.pajak_bayar_satu', function() {
            var sub_total = $('.total_satuan_rp_input').val();
            var persen_pajak = $(this).val();
            var pajak = sub_total * (persen_pajak / 100);
            var persen_diskon = $('.diskon_bayar_satu').val();
            var diskon = sub_total * (persen_diskon / 100);
            var total = (sub_total - diskon) + pajak;
            $('.total_bayar_satu').val(parseInt(total).toLocaleString());
            $('.total_bayar_satu_2').val(total);
            if ($('.bayar_bayar_satu').val() != '') {
                var bayar = $('.bayar_bayar_satu').val();
                var kembali = bayar - total;
                $('.kembali_bayar_satu').val(parseInt(kembali).toLocaleString());
                $('.kembali_bayar_satu_2').val(kembali);
            }
        });

        $(document).on('input', '.bayar_bayar_kilo', function() {
            var total = $('.total_bayar_kilo_2').val();
            var bayar = $(this).val();
            var kembali = bayar - total;
            $('.kembali_bayar_kilo').val(parseInt(kembali).toLocaleString());
            $('.kembali_bayar_kilo_2').val(kembali);
            $('.kurang_bayar_kilo_error').html('');
        });

        $(document).on('input', '.bayar_bayar_satu', function() {
            var total = $('.total_bayar_satu_2').val();
            var bayar = $(this).val();
            var kembali = bayar - total;
            $('.kembali_bayar_satu').val(parseInt(kembali).toLocaleString());
            $('.kembali_bayar_satu_2').val(kembali);
            $('.kurang_bayar_satu_error').html('');
        });

        $(document).on('click', '.simpan-akhir', function() {
            if (cek_metode_pembayaran_satu == 1 && $(".registrasi-form").valid() == true) {
                $('.bayar-outlet-satu-btn').click();
            } else if (cek_metode_pembayaran_kilo == 1 && $(".registrasi-form").valid() == true) {
                $('.bayar-outlet-kilo-btn').click();
            } else {
                $('.registrasi-form').submit();
            }
        });

        $(document).on('submit', '.registrasi-form', function(e) {
            e.preventDefault();
            var bayar_bayar_satu = parseInt($('.bayar_bayar_satu').val());
            var total_bayar_satu_2 = parseInt($('.total_bayar_satu_2').val());
            var bayar_bayar_kilo = parseInt($('.bayar_bayar_kilo').val());
            var total_bayar_kilo_2 = parseInt($('.total_bayar_kilo_2').val());
            if ($(".registrasi-form").valid() == true) {
                if (cek_metode_pembayaran_kilo == 1 || cek_metode_pembayaran_satu == 1) {
                    if (bayar_bayar_satu >= total_bayar_satu_2 || bayar_bayar_kilo >= total_bayar_kilo_2) {
                        var validator = $(".registrasi-form").validate();
                        validator.resetForm();
                        var request = new FormData(this);
                        $.ajax({
                            url: "{{ url('/simpan_pelanggan') }}",
                            method: "POST",
                            data: request,
                            contentType: false,
                            cache: false,
                            processData: false,
                            success: function(data) {
                                if (data == 'sukses') {
                                    window.open("{{ url('/kelola_pelanggan') }}", "_self");
                                } else {
                                    gagalUsername();
                                }
                            }
                        });
                    } else if (bayar_bayar_kilo < total_bayar_kilo_2) {
                        $('.kurang_bayar_kilo_error').html('<span style="color: red;">Nominal kurang</span>');
                    } else if (bayar_bayar_satu < total_bayar_satu_2) {
                        $('.kurang_bayar_satu_error').html('<span style="color: red;">Nominal kurang</span>');
                    } else {
                        $('.kurang_bayar_kilo_error').html('');
                        $('.kurang_bayar_satu_error').html('');
                    }
                } else {
                    var validator = $(".registrasi-form").validate();
                    validator.resetForm();
                    var request = new FormData(this);
                    $.ajax({
                        url: "{{ url('/simpan_pelanggan') }}",
                        method: "POST",
                        data: request,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            if (data == 'sukses') {
                                window.open("{{ url('/kelola_pelanggan') }}", "_self");
                            } else {
                                gagalUsername();
                            }
                        }
                    });
                }
            }
        });

        function gagalUsername() {
            toastr.warning("Maaf username telah digunakan", "Peringatan !", {
                timeOut: 5e3,
                closeButton: !0,
                debug: !1,
                newestOnTop: !0,
                progressBar: !0,
                positionClass: "toast-bottom-right",
                preventDuplicates: !0,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: !1
            })
        }

        $('#val-password-repeat').on('keyup', function() {
            if ($('#val-password').val() == $('#val-password-repeat').val()) {
                $('#password-different').html('');
            } else {
                $('#password-different').html('Password tidak sama');
            }
        });


        $("[type='number']").keypress(function(evt) {
            evt.preventDefault();
        });

        $(document).on('change', '.pilih_outlet', function() {
            if ($(this).val() == "") {
                $('#daftar_paket_kiloan').html('');
                $('#daftar_paket_satuan').html('');
            } else {
                var sort_by = $(this).val();
                $.ajax({
                    url: "{{ url('sort_outlet_tabel_kiloan') }}/" + sort_by,
                    success: function(data) {
                        $('#daftar_paket_kiloan').html(data);
                    }
                });
                $.ajax({
                    url: "{{ url('sort_outlet_tabel_satuan') }}/" + sort_by,
                    success: function(data) {
                        $('#daftar_paket_satuan').html(data);
                    }
                });
            }
        });

        $(document).ready(function() {
            $(".registrasi-form").validate({
                rules: {
                    nama_pelanggan: "required",
                    no_hp_pelanggan: {
                        required: true,
                        minlength: 12
                    },
                    jk_pelanggan: "required",
                    email_pelanggan: {
                        required: true,
                        email: true
                    },
                    alamat_pelanggan: {
                        required: true,
                        minlength: 15
                    },
                    pilih_outlet: "required",
                    metode_pembayaran_kilo: "required",
                    metode_pembayaran_satu: "required",
                    berat_barang: "required",
                    antar_harga_kiloan: "required",
                    antar_harga_satuan: "required",
                    username: {
                        required: true,
                        minlength: 3
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    bayar_bayar_satu: "required",
                    bayar_bayar_kilo: "required"
                },
                messages: {
                    nama_pelanggan: "<span style='color: red;'>Nama tidak boleh kosong</span>",
                    no_hp_pelanggan: "<span style='color: red;'>No Handphone tidak boleh kosong</span>",
                    jk_pelanggan: "<span style='color: red;'>Silakan pilih jenis kelamin</span>",
                    email_pelanggan: "<span style='color: red;'>Email tidak boleh kosong</span>",
                    alamat_pelanggan: {
                        required: "<span style='color: red;'>Alamat tidak boleh kosong</span>",
                        minlength: "<span style='color: red;'>Alamat harus lebih dari 15 karakter</span>"
                    },
                    pilih_outlet: "<span style='color: red;'>Pilih outlet terlebih dahulu</span>",
                    metode_pembayaran_kilo: "<span style='color: red;'>Silakan pilih metode pembayaran</span>",
                    metode_pembayaran_satu: "<span style='color: red;'>Silakan pilih metode pembayaran</span>",
                    berat_barang: "<span style='color: red;'>Silakan masukkan berat barang</span>",
                    antar_harga_kiloan: "<span style='color: red;'>Silakan masukkan biaya antar</span>",
                    antar_harga_satuan: "<span style='color: red;'>Silakan masukkan biaya antar</span>",
                    username: "<span style='color: red;'>Username tidak boleh kosong</span>",
                    password: {
                        required: "<span style='color: red;'>Password tidak boleh kosong</span>",
                        minlength: "<span style='color: red;'>Kata sandi harus lebih dari 5 karakter</span>"
                    },
                    bayar_bayar_satu: "<span style='color: red;'>Silakan masukkan nominal</span>",
                    bayar_bayar_kilo: "<span style='color: red;'>Silakan masukkan nominal</span>"
                },
                errorPlacement: function($error, $element) {
                    var name = $element.attr("name");

                    $("." + name + "_error").append($error);
                }
            });
        });
    </script>
@endpush
