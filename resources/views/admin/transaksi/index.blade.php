@extends('layouts.app')
@section('title', 'Outlet')
@section('transaksi', 'active')

@section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Data Transaksi</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    {{--                                    <li class="breadcrumb-item"><a href="{{route('outlet.index')}}">Outlet</a> --}}
                                    {{--                                    </li> --}}
                                    <li class="breadcrumb-item active">Transaksi
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item"><a class="nav-link transaksi_kiloan_tab active" data-toggle="tab"
                                            href="#transaksi_kiloan">Transaksi Kiloan</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link transaksi_satuan_tab" data-toggle="tab"
                                            href="#transaksi_satuan">Transaksi Satuan</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <div class="default-tab">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="transaksi_kiloan" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card" style="background-color: #f4f3f9;">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h4>Daftar Transaksi Kiloan</h4>
                                                                <button type="button"
                                                                    class="btn mb-1 btn-primary font-weight-bold btn-sm tambah_kiloan_btn"
                                                                    data-count="{{ route('transaksi.create') }}">Tambah
                                                                    Transaksi <span class="btn-icon-right"><i
                                                                            class="fa fa-plus"></i></span></button>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-striped table-bordered zero-configuration">
                                                                    <thead style="text-align: center;">
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Kode Transaksi</th>
                                                                            <th>Nama Transaksi</th>
                                                                            <th>Harga</th>
                                                                            <th>Lama Cuci</th>
                                                                            <th>Minimal Berat</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($kiloan as $transaksi_kilo)
                                                                            <tr>
                                                                                <th class="align-middle text-center">
                                                                                    {{ $loop->iteration }}
                                                                                </th>
                                                                                <th class="align-middle text-center">
                                                                                    {{ $transaksi_kilo->kd_transaksi }}
                                                                                </th>
                                                                                <td>{{ $transaksi_kilo->nama_transaksi }}
                                                                                </td>
                                                                                <td>Rp.
                                                                                    {{ number_format($transaksi_kilo->harga_transaksi, 2, ',', '.') }}
                                                                                </td>
                                                                                <td>{{ $transaksi_kilo->hari_transaksi }}
                                                                                    Hari</td>
                                                                                <td>{{ $transaksi_kilo->min_berat_transaksi }}
                                                                                    Kg</td>
                                                                                <td style="text-align: center;">
                                                                                    <div class="dropdown">
                                                                                        <button type="button"
                                                                                            class="btn btn-sm dropdown-toggle hide-arrow"
                                                                                            data-toggle="dropdown">
                                                                                            <i
                                                                                                data-feather="more-vertical"></i>
                                                                                        </button>

                                                                                        <div class="dropdown-menu">
                                                                                            <a
                                                                                                class="dropdown-item lihat_btn_kilo"id="lihat-btn"href="#"data-id="data.id"data-toggle="modal"data-target="#form-modal-lihat">
                                                                                                <i data-feather="eye"
                                                                                                    class="mr-50"></i>
                                                                                                <span>Lihat</span>
                                                                                                <a class="dropdown-item"id="update-btn"href="{{ route('transaksi-kiloan.edit',$transaksi_kilo->id) }}">
                                                                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                                                                    <span>Edit</span>
                                                                                                </a>
                                                                                                <a
                                                                                                    class="dropdown-item" id="del-kiloan-btn" href="#"data-id="{{ $transaksi_kilo->id }}">
                                                                                                    <i data-feather="trash"
                                                                                                        class="mr-50"></i>
                                                                                                    <span>Hapus</span>
                                                                                                </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="transaksi_satuan">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card" style="background-color: #f4f3f9;">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h4>Daftar Transaksi Satuan</h4>
                                                                <button type="button"
                                                                    class="btn mb-1 btn-primary font-weight-bold btn-sm tambah_satuan_btn"
                                                                    data-count="{{ route('transaksi.create') }}">Tambah
                                                                    Transaksi <span class="btn-icon-right"><i
                                                                            class="fa fa-plus"></i></span></button>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-striped table-bordered zero-configuration">
                                                                    <thead style="text-align: center;">
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Outlet</th>
                                                                            <th>Kode Invoice</th>
                                                                            <th>Customer</th>
                                                                            <th>Status Lundry</th>
                                                                            <th>Pembayaran</th>
                                                                            <th>Jenis</th>
                                                                            <th>Total</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($satuan as $transaksi_satu)
                                                                            <tr>
                                                                                <td class="align-middle text-center">
                                                                                    {{ $loop->iteration }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $transaksi_satu->kd_invoice }}
                                                                                </td>
                                                                                <td>{{ $transaksi_satu->transaksi->status_order }}
                                                                                </td>
                                                                                <td>{{ $transaksi_satu->transaksi->status_payment }}
                                                                                </td>
                                                                                <td>{{ $transaksi_satu->transaksi->id_outlet }}
                                                                                </td>
                                                                                <td style="text-align: center;">
                                                                                    <div class="dropdown">
                                                                                        <button type="button"
                                                                                            class="btn btn-sm dropdown-toggle hide-arrow"
                                                                                            data-toggle="dropdown">
                                                                                            <i
                                                                                                data-feather="more-vertical"></i>
                                                                                        </button>

                                                                                        <div class="dropdown-menu">
                                                                                            <a class="dropdown-item lihat_btn_satu" id="lihat-btn" href="">
                                                                                                <i data-feather="eye" class="mr-50"></i>
                                                                                                <span>Lihat</span>
                                                                                                <a class="dropdown-item"id="update-btn"href="{{ route('transaksi-satuan.edit',$transaksi_satu->id) }}">
                                                                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                                                                    <span>Edit</span>
                                                                                                </a>
                                                                                                <a
                                                                                                    class="dropdown-item" id="del-satuan-btn" href="#"data-id="{{ $transaksi_satu->id }}">
                                                                                                    <i data-feather="trash"
                                                                                                        class="mr-50"></i>
                                                                                                    <span>Hapus</span>
                                                                                                </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
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
<script>
        $(document).on('click', '#del-satuan-btn', function () {
            var id = $(this).data('id');
            Swal.fire({
                icon: 'error',
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'error',
                showCancelButton: true,
                confirmButtonColor: '#28C76F',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            })
            .then((result) => {
                if (result.value) {
                    $.ajax({
                        'url': '{{url('transaksi')}}/' + id,
                        'type': 'POST',
                        'data': {
                            '_method': 'DELETE',
                            '_token': '{{csrf_token()}}'
                        },
                        success: function (response) {
                            if (response == 1) {
                                        toastr.error('Data gagal dihapus!', 'Gagal!', {
                                            closeButton: true,
                                            tapToDismiss: false
                                        });
                                    } else {
                                        toastr.success('Data berhasil dihapus!', 'Berhasil!', {
                                            closeButton: true,
                                            tapToDismiss: false
                                        });
                                        location.reload();
                                    }

                        }
                    });
                } else {
                    console.log(`dialog was dismissed by ${result.dismiss}`)
                }
            });
        });
        $(document).on('click', '#del-kiloan-btn', function () {
            var id = $(this).data('id');
            Swal.fire({
                icon: 'error',
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'error',
                showCancelButton: true,
                confirmButtonColor: '#28C76F',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            })
            .then((result) => {
                if (result.value) {
                    $.ajax({
                        'url': '{{url('transaksi-kiloan')}}/' + id,
                        'type': 'POST',
                        'data': {
                            '_method': 'DELETE',
                            '_token': '{{csrf_token()}}'
                        },
                        success: function (response) {
                            if (response == 1) {
                                        toastr.error('Data gagal dihapus!', 'Gagal!', {
                                            closeButton: true,
                                            tapToDismiss: false
                                        });
                                    } else {
                                        toastr.success('Data berhasil dihapus!', 'Berhasil!', {
                                            closeButton: true,
                                            tapToDismiss: false
                                        });
                                        location.reload();
                                    }

                        }
                    });
                } else {
                    console.log(`dialog was dismissed by ${result.dismiss}`)
                }
            });
        });
        $(document).on('click', '.lihat_btn_kilo', function(e) {
            e.preventDefault();
            var id = $(this).attr('data-lihat');
            $.ajax({
                url: "{{ url('/transaksi-kiloan') }}/"+
                id,
                method: "GET",
                success: function(response) {
                    $('.kd_transaksi').val(response.kd_transaksi);
                    $('.nama_transaksi').val(response.nama_transaksi);
                    $('.harga_transaksi').val(parseInt(response.harga_transaksi).toLocaleString());
                    $('.lama_hari_transaksi').val(response.hari_transaksi);
                    $('.min_berat_transaksi').val(response.min_berat_transaksi);
                    $('.outlet_transaksi').val(response.nama_outlet);
                    if (response.antar_jemput_transaksi == 1) {
                        $('.gratis_antar').html(
                            '<p style="margin-bottom: -5px;"><i class="icon-check text-success"></i> Gratis pengantaran</p>'
                        );
                    } else {
                        $('.gratis_antar').html('');
                    }
                }
            });
        });

        $(document).on('click', '.lihat_btn_satu', function(e) {
            e.preventDefault();
            var id = $(this).attr('data-lihat');
            $.ajax({
                url: "{{ url('/transaksi-satuan') }}/"+
                id,
                method: "GET",
                success: function(response) {
                    $('.kd_barang').val(response.kd_barang);
                    $('.nama_barang').val(response.nama_barang);
                    $('.ket_barang').val(response.ket_barang);
                    $('.harga_barang').val(parseInt(response.harga_barang).toLocaleString());
                    $('.outlet_barang').val(response.nama_outlet);
                }
            });
        });

        $(document).on('click', '.tambah_kiloan_btn', function(e) {
            e.preventDefault();
            var cek_count = $(this).attr('data-count');
            if (parseInt(cek_count) != 0) {
                window.open("{{ url('/transaksi/create') }}", "_self");
            } else {
                outlet_kosong();
            }
        });

        $(document).on('click', '.tambah_satuan_btn', function(e) {
            e.preventDefault();
            var cek_count = $(this).attr('data-count');
            if (parseInt(cek_count) != 0) {
                window.open("{{ url('/transaksi/create') }}", "_self");
            } else {
                outlet_kosong();
            }
        });

        function outlet_kosong() {
            toastr.warning("Silakan buat outlet terlebih dahulu", "Peringatan !", {
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
    </script>
@endpush
