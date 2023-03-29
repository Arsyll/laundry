@extends('layouts.app')
@section('title', 'Laporan')
@section('laporan-pengguna', 'active')

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
                                    <li class="breadcrumb-item"><a href="{{ route('pengguna.index') }}">Pengguna</a>
                                    </li>
                                    <li class="breadcrumb-item active">Pengguna Baru
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
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="card card-widget">
                                                                <div class="card-body gradient-7">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h2 class="card-widget__title">Diproses</h2>
                                                                            <h5 class="card-widget__subtitle">Jumlah: {{ $diproses }}</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card card-widget">
                                                                <div class="card-body gradient-3">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h2 class="card-widget__title">Selesai</h2>
                                                                            <h5 class="card-widget__subtitle">Jumlah: {{ $selesai }}</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card card-widget">
                                                                <div class="card-body gradient-9">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h2 class="card-widget__title">Diantar</h2>
                                                                            <h5 class="card-widget__subtitle">Jumlah: {{ $diantar }}</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card card-widget">
                                                                <div class="card-body gradient-1">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h2 class="card-widget__title">Diambil</h2>
                                                                            <h5 class="card-widget__subtitle">Jumlah: {{ $diambil }}</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h4 class="card-title">Daftar Pegawai</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-bordered zero-configuration">
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
                                                                        <?php $number = 1 ?>
                                                                        @foreach($users as $user)
                                                                        @if($user->role == 'Admin' || $user->role == 'Kasir')
                                                                        <tr>
                                                                            <th class="align-middle text-center">{{ $number }}</th>
                                                                            <th><img src="{{ Public_PATH('/pictures/'.$user->avatar) }}" class="rounded-circle mr-3 fotouser" alt="">{{ $user->nama }}</th>
                                                                            <td class="text-center">{{ $user->kd_pengguna }}</td>
                                                                            <td>
                                                                            @if($user->role == 'admin')
                                                                            <i class="fa fa-circle-o text-success mr-2"></i>
                                                                            @else
                                                                            <i class="fa fa-circle-o text-primary mr-2"></i>
                                                                            @endif
                                                                            &nbsp;{{ $user->role }}</td>
                                                                            <td>{{ $user->email }}</td>
                                                                            <td style="text-align: center;"><a href="{{ url('/laporan_pegawai_riwayat/'.$user->id) }}" class="btn btn-primary font-weight-bold btn-sm">Detail</a></td>
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
    </div>
    </div>
    </div>
    </div>

@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
