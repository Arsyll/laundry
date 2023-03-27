@extends('layouts.app')
@section('title', 'Paket Satuan')
@section('paket', 'active')

@section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Data Paket</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    {{--                                    <li class="breadcrumb-item"><a href="{{route('outlet.index')}}">Outlet</a> --}}
                                    {{--                                    </li> --}}
                                    <li class="breadcrumb-item active">Paket
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h4 class="card-title mb-5">Edit Paket Satuan</h4>
                    <div class="form-validation">
                        <form class="form-valide" action="{{ route('paket-satuan.update',$paket_satus->id) }}" method="post" name="edit_paket_satuan_form">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-kode-barang">Kode Paket <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-kode-barang" name="kd_barang" readonly="readonly" value="{{ $paket_satus->kd_barang }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-nama">Nama Barang <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-nama" name="nama_barang" placeholder="Masukkan nama barang" value="{{ $paket_satus->nama_barang }}">
                                    <div class="nama_barang_error"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-keterangan">Keterangan Barang <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="val-keterangan" name="ket_barang" placeholder="Masukkan keterangan barang" value="{{ $paket_satus->ket_barang }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text">(Ukuran atau lainnya)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-harga">Harga Barang <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control" id="val-harga" name="harga_barang" placeholder="Masukkan harga barang" value="{{ $paket_satus->harga_barang }}">
                                    </div>
                                    <div class="harga_barang_error"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-outlet">Outlet <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="val-outlet" name="id_outlet">
                                        <option value="" class="outlet_kosong 0_outlet_id">-- Pilih Outlet --</option>
                                        @foreach($outlets as $outlet)
                                        <option value="{{ $outlet->id }}" class="{{ $outlet->id . '_outlet_id' }}">{{ $outlet->nama }}</option>
                                        @endforeach
                                    </select>
                                    <div class="id_outlet_error"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Ubah Data</button>
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

@endsection

@push('styles')
@endpush

@push('scripts')
@endpush