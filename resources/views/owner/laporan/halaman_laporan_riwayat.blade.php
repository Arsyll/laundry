@extends('layouts.app')
@section('title', 'Laporan')
@section('laporan_karyawan', 'active')

@section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header-left col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Laporan</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('laporan_karyawan') }}">Pengguna</a>
                                </li>
                                <li class="breadcrumb-item active">Riwayat Pengguna
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body border-top pt-4">
                                <h3 class="card-title">Profil</h3>
                                <div class="row">
                                    <div class="col-md-12 text-center mt-2 mb-2">
                                        <img src="{{ Public_PATH('/pictures/'.$users->avatar) }}" class="rounded-circle mr-3 fotouser" alt="">
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                        <table style="width: 100%;" class="identitas-table">
                                            <tr>
                                                <th class="align-top">Nama</th>
                                                <td class="align-top">:</td>
                                                <td class="align-top">{{ $users->nama }}</td>
                                            </tr>
                                            <tr>
                                                <th class="align-top">Posisi</th>
                                                <td class="align-top">:</td>
                                                <td class="align-top">{{ $users->role }}</td>
                                            </tr>
                                            <tr>
                                                <th class="align-top">Kd Pengguna</th>
                                                <td class="align-top">:</td>
                                                <td class="align-top">{{ $users->kd_pengguna }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body border-top pt-4">
                                <h3 class="card-title">Daftar Kerja</h3>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <form class="filter_form" target="_blank" action="{{ route('cetak_laporan_pegawai', $id) }}" method="POST">
                                            @csrf
                                            <input type="text" name="check_button" class="check_button" hidden="">
                                            <button type="button" class="btn mb-1 btn-primary btn-block btn-flat font-weight-bold pdf_laporan_btn"><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;PDF</button>
                                            <div class="form-row align-items-center">
                                                <div class="col-md-2">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-riwayat" id="tabel-riwayat-kerja">
                                                <thead style="text-align: center;">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Outlet</th>
                                                        <th>Kd Invoice</th>
                                                        <th>Tgl Pemberian</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="isi_tabel" style="text-align: center;">
                                                    @foreach($riwayats as $riwayat)
                                                    <tr>
                                                        <th>{{ $loop->iteration }}</th>
                                                        <th>{{ $riwayat->nama_outlet }}</th>
                                                        <td>{{ $riwayat->kd_invoice }}</td>
                                                        <td>{{ date('d M Y', strtotime($riwayat->tgl_pemberian)) }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pagination-container">
                                            <nav>
                                                <ul class="pagination_riwayat">

                                                </ul>
                                            </nav>
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
@endpush
