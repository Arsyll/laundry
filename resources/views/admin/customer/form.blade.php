@extends('layouts.app')
@section('title', 'Register Customer')
@section('register_customer', 'active')

@section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Layanan</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Customer</a>
                                    </li>
                                    <li class="breadcrumb-item active">Register Customer
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="{{ route('customer.store') }}" method="post"
                                    name="paket_satuan_baru_form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div style="margin-bottom: -10px;">
                                                            <p class="form-label">Nama : </p>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Nama"
                                                            name="nama" id="nama">
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
                                                        <input type="email" class="form-control" placeholder="Email"
                                                            name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div style="margin-bottom: -10px;">
                                                            <p class="form-label">Password : </p>
                                                        </div>
                                                        <input type="password" class="form-control" placeholder="Password"
                                                            name="password">
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
                                                        <input type="text" class="form-control"
                                                            placeholder="No Handphone" name="no_telp" id="no_telp">
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
                                                            <input type="radio" name="jenis_kelamin" value="L">
                                                            Laki-laki</label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="jenis_kelamin" value="P">
                                                            Perempuan</label>
                                                    </div>
                                                    <div class="jenis_kelamin_error" style="margin-top: -20px;"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div style="margin-bottom: -10px; margin-top: 15px;">
                                                            <p class="form-label">Alamat : </p>
                                                        </div>
                                                        <textarea class="form-control h-150" rows="5" id="comment" placeholder="Alamat" name="alamat"></textarea>
                                                        <div class="alamat_error"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12 mt-3 text-right">
                                            <button class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none">Submit</span>
                                            </button>
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

@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
