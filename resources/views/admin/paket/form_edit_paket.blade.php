@extends('layouts.app')
@section('title', 'Outlet')
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
                                                                       <li class="breadcrumb-item"><a href="{{route('paket')}}">Paket</a>
                                                                       </li>
                                    <li class="breadcrumb-item active">Edit Paket Kiloan
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Edit Paket Kiloan</h4>
                                <div class="form-validation">
                                    <form class="form-valide" action="{{ route('paket-kiloan.update',$paket_kilos->id) }}" method="post" name="edit_paket_kiloan_form">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-kode-paket">Kode Paket <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-kode-paket" name="kd_paket" readonly="readonly" value="{{ $paket_kilos->kd_paket }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-nama">Nama Paket <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-nama" name="nama_paket" placeholder="Masukkan nama paket" value="{{ $paket_kilos->nama_paket }}">
                                                <div class="nama_paket_error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-harga">Harga Paket <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="val-harga" name="harga_paket" placeholder="Masukkan harga paket" value="{{ $paket_kilos->harga_paket }}">
                                                </div>
                                                <div class="harga_paket_error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-hari">Lama Hari <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <input type="number" class="form-control" id="val-hari" name="hari_paket" placeholder="Masukkan lama hari" min="1" value="{{ $paket_kilos->hari_paket }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">/ Hari</span>
                                                    </div>
                                                </div>
                                                <div class="hari_paket_error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-minimal-berat">Minimal Berat Paket <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <input type="number" class="form-control" id="val-minimal-berat" name="min_berat_paket" placeholder="Masukkan minimal berat paket" min="1" value="{{ $paket_kilos->min_berat_paket }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">/ Kg</span>
                                                    </div>
                                                </div>
                                                <div class="min_berat_paket_error"></div>
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
                                            <div class="col-lg-6 offset-lg-4">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input check-antar" value="1" name="antar_jemput_paket">Gratis Antar</label>
                                                </div>
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
