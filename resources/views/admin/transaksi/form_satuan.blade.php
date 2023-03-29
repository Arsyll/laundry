@extends('layouts.app')
@section('title', 'Transaksi Satuan')
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
                                                                       <li class="breadcrumb-item"><a href="{{route('transaksi.index')}}">Transaksi</a>
                                                                       </li>
                                    <li class="breadcrumb-item active">Transaksi Satuan Baru
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
                                    <form class="form-valide" action="{{ route('checkout-satuan.store') }}" method="post" name="transaksi_satuan_baru_form">
                                        @csrf

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-barang">Customer <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-outlet" name="id_customer">
                                                    <option value="" class="outlet_kosong">-- Pilih Customer --</option>
                                                    @foreach($customer as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="id_barang_error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-barang">Outlet <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-outlet" name="id_outlet">
                                                    <option value="" class="outlet_kosong">-- Pilih Outlet --</option>
                                                    @foreach($outlet as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="id_barang_error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-barang">Jenis <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-outlet" name="id_barang">
                                                    <option value="" class="outlet_kosong">-- Pilih Jenis --</option>
                                                    @foreach($barang as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_barang }} || Rp. {{ $data->harga_barang }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="id_barang_error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-barang">Metode Pembayaran <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-outlet" name="metode_pembayaran">
                                                    <option value="" class="metode_pembayaran">-- Pilih Metode Pembayaran --</option>
                                                    <option value="Outlet">Outlet</option>
                                                    <option value="Rumah">Rumah</option>
                                                </select>
                                                <div class="id_barang_error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-keterangan">Jumlah Barang <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="val-keterangan" name="jumlah_barang" placeholder="Masukkan jumlah barang">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">(Jika Barang Lebih Dari Satu)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-keterangan"> Ongkos Kirim <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="val-keterangan" name="harga_antar" placeholder="Masukkan ongkos kirim">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">(Jika Terdapat Biaya Ongkir)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
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
