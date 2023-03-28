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
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row text-center">
                                                                <div class="col-md-12 mt-1">
                                                                    <img src=""
                                                                        class="foto_pengguna rounded-circle">
                                                                </div>
                                                                <div class="col-md-12 mt-2">
                                                                    <h3 class="nama_pengguna"></h3>
                                                                </div>
                                                                <div class="col-md-12 mt-1">
                                                                    <div
                                                                        class="btn btn-primary btn-sm role_pengguna font-weight-bold">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-md-12 mb-2">
                                                                    <h4 class="text-left text-primary ml-2">Riwayat Kerja
                                                                    </h4>
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
                                                                                <th colspan="6" style="font-size: 12px;">
                                                                                    <a href=""
                                                                                        class="semua_riwayat_btn">Semua
                                                                                        Riwayat <i class="fa fa-angle-down"
                                                                                            aria-hidden="true"></i></a>
                                                                                </th>
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
                                                        <button type="button" data-count="{{ $outlets }}"
                                                            class="btn font-weight-bold btn-sm mb-1 btn-primary tambah_pengguna_btn">Tambah
                                                            Pengguna <span class="btn-icon-right"><i
                                                                    class="fa fa-plus"></i></span></button>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table table-striped table-bordered zero-configuration">
                                                            <thead style="text-align: center;">
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Kode Pengguna</th>
                                                                    <th>Posisi</th>
                                                                    <th>Email</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $number = 1; ?>
                                                                @foreach ($penggunas as $pengguna)
                                                                    @if ($pengguna->role == 'Admin' || $pengguna->role == 'Karyawan')
                                                                        <tr>
                                                                            <th class="align-middle text-center">
                                                                                {{ $number }}</th>
                                                                            <th><img src="{{ asset('/pictures/' . $pengguna->avatar) }}"
                                                                                    class="rounded-circle mr-3 fotouser"
                                                                                    alt="">{{ $pengguna->nama }}
                                                                            </th>
                                                                            <td class="text-center">
                                                                                {{ $pengguna->kd_pengguna }}</td>
                                                                            <td>
                                                                                @if ($pengguna->role == 'admin')
                                                                                    <i
                                                                                        class="fa fa-circle-o text-success mr-2"></i>
                                                                                @else
                                                                                    <i
                                                                                        class="fa fa-circle-o text-primary mr-2"></i>
                                                                                @endif
                                                                                &nbsp;{{ $pengguna->role }}
                                                                            </td>
                                                                            <td>{{ $pengguna->email }}</td>
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
                                                                                            <a class="dropdown-item"id="update-btn"href="{{ route('paket-kiloan.edit',$pengguna->id) }}">
                                                                                                <i data-feather="edit-2" class="mr-50"></i>
                                                                                                <span>Edit</span>
                                                                                            </a>
                                                                                            <a
                                                                                                class="dropdown-item" id="del-pengguna-btn" href="#"data-id="{{ $pengguna->id }}">
                                                                                                <i data-feather="trash"
                                                                                                    class="mr-50"></i>
                                                                                                <span>Hapus</span>
                                                                                            </a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <?php $number++; ?>
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
        $(document).on('click', '.lihat_pengguna_btn', function(e) {
            e.preventDefault();
            var id = $(this).attr('data-lihat');
            $.ajax({
                url: "{{ url('/lihat_pengguna') }}/" + id,
                method: "GET",
                success: function(response) {
                    $('.foto_pengguna').attr('src', "{{ asset('/pictures') }}/" + response.penggunas
                        .avatar);
                    $('.nama_pengguna').html(response.penggunas.name);
                    $('.role_pengguna').html(response.penggunas.role);
                    var isi_riwayat = "";
                    for (var i = 0; i < response.transaksis.length; i++) {
                        var no = i + 1;
                        isi_riwayat += '<tr><th>' + no + '</th><th>' + response.transaksis[i]
                            .nama_outlet + '</th><td>' + response.transaksis[i].kd_invoice +
                            '</td><td>' + response.transaksis[i].nama_pelanggan + '</td><td>' + moment(
                                response.transaksis[i].tgl_pemberian).format('DD MMMM YYYY') +
                            '</td></tr>';
                    }
                    $('.isi_riwayat').html(isi_riwayat);
                    $('.semua_riwayat_btn').attr('href', "{{ url('/laporan_pegawai_riwayat') }}/" +
                        response.penggunas.id);
                }
            });
        });

        $(document).on('click', '.tambah_pengguna_btn', function(e) {
            e.preventDefault();
            var cek_count = $(this).attr('data-count');
            if (parseInt(cek_count) != 0) {
                window.open("{{ url('/pengguna/create') }}", "_self");
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
            });
        }
        $(document).on('click', '#del-pengguna-btn', function () {
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
                        'url': '{{url('pengguna')}}/' + id,
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
    </script>
@endpush
