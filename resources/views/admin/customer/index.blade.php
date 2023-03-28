@extends('layouts.app')
@section('title', 'Kelola Customer')
@section('customer', 'active')

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
                                    {{-- <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Customer</a>
                                    </li> --}}
                                    <li class="breadcrumb-item active">Kelola Customer
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive m-t-5">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr align="center" style="color:black; font-weight:bold">
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>No Telpon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($customer as $item)
                                            <tr align="center" style="color:black;">
                                                <td>{{ $no }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->no_telp }}</td>
                                                <td>
                                                    <a href=" {{ url('customers', $item->id) }} " class="btn btn-sm btn-primary"
                                                        style="color:white">Detail</a>
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
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

@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
