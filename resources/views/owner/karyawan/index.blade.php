@extends('layouts.app')
@section('title', 'Pengguna')
@section('pengguna', 'active')

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
                                    {{--                                    <li class="breadcrumb-item"><a href="{{route('outlet.index')}}">Outlet</a> --}}
                                    {{--                                    </li> --}}
                                    <li class="breadcrumb-item active">Pengguna
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
                                                                        <div class="modal fade" id="lihatModal">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">Detail Pengguna</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="row text-center">
                                                                                            <div class="col-md-12 mt-1">
                                                                                                <img src="" class="foto_pengguna rounded-circle">
                                                                                            </div>
                                                                                            <div class="col-md-12 mt-2">
                                                                                                <h3 class="nama_pengguna"></h3>
                                                                                            </div>
                                                                                            <div class="col-md-12 mt-1">
                                                                                                <div class="btn btn-primary btn-sm role_pengguna font-weight-bold"></div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <hr>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row mt-2">
                                                                                            <div class="col-md-12 mb-2">
                                                                                                <h4 class="text-left text-primary ml-2">Riwayat Kerja</h4>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <table style="width: 100%;" class="table tabel-riwayat">
                                                                                                    <thead class="text-center">
                                                                                                        <tr>
                                                                                                            <th>No</th>
                                                                                                            <th>Outlet</th>
                                                                                                            <th>Kd Invoice</th>
                                                                                                            <th>Pelanggan</th>
                                                                                                            <th>Tgl Pemberian</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody class="isi_riwayat">
                                                                                                    </tbody>
                                                                                                    <tfoot class="text-center">
                                                                                                        <tr>
                                                                                                            <th colspan="6" style="font-size: 12px;"><a href="" class="semua_riwayat_btn">Semua Riwayat <i class="fa fa-angle-down" aria-hidden="true"></i></a></th>
                                                                                                        </tr>
                                                                                                    </tfoot>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <h4 class="card-title">Daftar Pengguna</h4>
                                                                                    <button type="button" data-count="{{ $outlets }}" class="btn font-weight-bold btn-sm mb-1 btn-primary tambah_pengguna_btn">Tambah Pengguna <span class="btn-icon-right"><i class="fa fa-plus"></i></span></button>
                                                                                </div>
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-striped table-bordered zero-configuration">
                                                                                        <thead style="text-align: center;">
                                                                                            <tr>
                                                                                                <th>No</th>
                                                                                                <th>Nama</th>
                                                                                                <th>Kode Pengguna</th>
                                                                                                <th>Posisi</th>
                                                                                                <th>Username</th>
                                                                                                <th>Aksi</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?php $number = 1 ?>
                                                                                            @foreach($penggunas as $pengguna)
                                                                                            @if($pengguna->role == 'Admin' || $pengguna->role == 'Pengguna')
                                                                                            <tr>
                                                                                                <th class="align-middle text-center">{{ $number }}</th>
                                                                                                <th><img src="{{ asset('/pictures/'.$pengguna->avatar) }}" class="rounded-circle mr-3 fotouser" alt="">{{ $pengguna->name }}</th>
                                                                                                <td class="text-center">{{ $pengguna->kd_pengguna }}</td>
                                                                                                <td>
                                                                                                    @if($pengguna->role == 'admin')
                                                                                                    <i class="fa fa-circle-o text-success mr-2"></i>
                                                                                                    @else
                                                                                                    <i class="fa fa-circle-o text-primary mr-2"></i>
                                                                                                    @endif
                                                                                                    &nbsp;{{ $pengguna->role }}</td>
                                                                                                <td>{{ $pengguna->username }}</td>
                                                                                                <td style="text-align: center;">
                                                                                                    <div class="dropdown custom-dropdown">
                                                                                                        <div data-toggle="dropdown" style="padding: 5px;"><i class="fa fa-ellipsis-v c-primary" style="font-size: 16px;"></i>
                                                                                                        </div>
                                                                                                        <div class="dropdown-menu dropdown-menu-right"><a role="button" data-toggle="modal" data-target="#lihatModal" data-lihat="{{ $pengguna->id }}" class="dropdown-item lihat_pengguna_btn" href="#">Lihat</a> <a class="dropdown-item" href="{{ url('/edit_pengguna/'.$pengguna->id) }}">Edit</a>
                                                                                                        </div>
                                                                                                    </div>&nbsp;&nbsp;&nbsp;
                                                                                                    <a href="{{ url('/hapus_pengguna/'.$pengguna->id) }}" style="color: grey;"><i class="fa fa-trash c-primary" style="font-size: 16px;"></i></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <?php $number++ ?>
                                                                                            @endif
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
    </div>
    </div>
    </div>
    </div>
    </div>

    @include('admin.paket.detail')

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
                        'url': '{{url('paket-satuan')}}/' + id,
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
                url: "{{ url('/paket-kiloan') }}/"+
                id,
                method: "GET",
                success: function(response) {
                    $('.kd_paket').val(response.kd_paket);
                    $('.nama_paket').val(response.nama_paket);
                    $('.harga_paket').val(parseInt(response.harga_paket).toLocaleString());
                    $('.lama_hari_paket').val(response.hari_paket);
                    $('.min_berat_paket').val(response.min_berat_paket);
                    $('.outlet_paket').val(response.nama_outlet);
                    if (response.antar_jemput_paket == 1) {
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
                url: "{{ url('/paket-satuan') }}/"+
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
                window.open("{{ url('/paket-kiloan/create') }}", "_self");
            } else {
                outlet_kosong();
            }
        });

        $(document).on('click', '.tambah_satuan_btn', function(e) {
            e.preventDefault();
            var cek_count = $(this).attr('data-count');
            if (parseInt(cek_count) != 0) {
                window.open("{{ url('/paket-satuan/create') }}", "_self");
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
