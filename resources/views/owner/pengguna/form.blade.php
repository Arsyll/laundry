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
                                                    <div class="form-validation">
                                                        <form class="form-valide" action="{{ route('pengguna.store') }}"
                                                            method="post" enctype="multipart/form-data"
                                                            name="pengguna_baru_form">
                                                            @csrf
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="val-kode-pengguna">Kode Pengguna <span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" class="form-control"
                                                                        id="val-kode-pengguna" name="kd_pengguna"
                                                                        value="{{ $max_code }}" readonly="readonly">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label" for="val-nama">Nama
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" class="form-control"
                                                                        id="val-nama" name="nama"
                                                                        placeholder="Masukkan nama">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="val-username">Email <span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <input type="email" class="form-control"
                                                                        id="val-username" name="email"
                                                                        placeholder="Masukkan email">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="val-password">Password <span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <input type="password" class="form-control"
                                                                        id="val-password" name="password"
                                                                        placeholder="Masukkan password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label" for="val-role">Posisi
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <select class="form-control" id="val-role"
                                                                        name="role">
                                                                        <option value="">-- Pilih Posisi --
                                                                        </option>
                                                                        <option value="admin">Admin</option>
                                                                        <option value="karyawan">Karyawan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="val-outlet">Outlet <span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <select class="form-control" id="val-outlet"
                                                                        name="id_outlet">
                                                                        <option value="" class="outlet_kosong">--
                                                                            Pilih Outlet --
                                                                        </option>
                                                                        @foreach ($outlets as $outlet)
                                                                            <option value="{{ $outlet->id }}">
                                                                                {{ $outlet->nama }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label">Foto <span
                                                                        class="text-danger">*</span>
                                                                </label>
                                                                <div class="col-lg-6">
                                                                    <div class="custom-file">
                                                                        <input type="file"
                                                                            class="custom-file-input avatar-input"
                                                                            name="avatar" id="customFile">
                                                                        <label class="custom-file-label"
                                                                            for="customFile">Pilih Foto</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-lg-8 ml-auto">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </form>
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

    @include('admin.paket.detail')

@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
