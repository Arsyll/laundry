@extends('layouts.app')
@section('dashboard', 'active')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-start pb-0">
                            <div>
                                <h2 class="text-bold-700 mb-0">{{ $customer->count() }}</h2>
                                <p>Jumlah Customer</p>
                            </div>
                            <div class="avatar bg-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="users" class="font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-start pb-0">
                            <div>
                                <h2 class="text-bold-700 mb-0">{{ $masuk }}</h2>
                                <p>Laundry Masuk</p>
                            </div>
                            <div class="avatar bg-success p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="box" class="font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-start pb-0">
                            <div>
                                <h2 class="text-bold-700 mb-0">{{ $selesai }}</h2>
                                <p>Laundry Selesai</p>
                            </div>
                            <div class="avatar bg-danger p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="check" class="font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-start pb-0">
                            <div>
                                <h2 class="text-bold-700 mb-0">{{ $diambil }}</h2>
                                <p>Laundry Diambil</p>
                            </div>
                            <div class="avatar bg-warning p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="check-square" class="font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-md-6 col-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <h4 class="card-title">Pendapatan</h4>
                            <div class="d-flex align-items-center">
                                <p class="card-text font-small-2 mr-25 mb-0">Pendapatan Tahuan & Bulan</p>
                            </div>
                        </div>
                        <div class="card-body statistics-body">
                            <div class="row">
                                <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-primary mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="dollar-sign" class="feather icon-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h5 class="font-weight-bolder mb-0">{{ $incomeY }}</h5>
                                            <p class="card-text font-small-1 mb-0">Tahun ini {{ date('Y') }} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-info mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="dollar-sign" class="feather icon-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h5 class="font-weight-bolder mb-0"> {{ $incomeM }} </h5>
                                            <p class="card-text font-small-1 mb-0">Bulan ini {{ date('F') }} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
                                    <div class="media">
                                        <div class="avatar bg-danger mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="dollar-sign" class="feather icon-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h5 class="font-weight-bolder mb-0">{{ $incomeYOld }}</h5>
                                            <p class="card-text font-small-1 mb-0">Tahun lalu
                                                {{ date('Y', strtotime('-1 year')) ?? 0 }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-md-6 col-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <h4 class="card-title">Pendapatan </h4>
                            <div class="d-flex align-items-center">
                                <p class="card-text font-small-2 mr-25 mb-0">Pendapatan Harian</p>
                            </div>
                        </div>
                        <div class="card-body statistics-body">
                            <div class="row">
                                <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-success mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="dollar-sign" class="feather icon-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">{{ $incomeD }}</h4>
                                            <p class="card-text font-small-1 mb-0">Hari ini {{ date('l') }} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-warning mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="dollar-sign" class="feather icon-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">{{ $incomeDOld }}</h4>
                                            <p class="card-text font-small-1 mb-0">Kemarin
                                                {{ date('l', strtotime('-1 day')) }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-xl-7 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Data Laundry Masuk Per-hari</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body pb-0">
                                {!! $harian->container() !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-xl-5 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Data Laundry Masuk Per-bulan</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body pb-0">
                                {!! $bulanan->container() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="{{ $harian->cdn() }}"></script>

            {{ $harian->script() }}
            <script src="{{ $bulanan->cdn() }}"></script>

            {{ $bulanan->script() }}
        @endsection
