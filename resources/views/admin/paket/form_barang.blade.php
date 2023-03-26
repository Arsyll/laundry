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
                                    {{--                                    <li class="breadcrumb-item"><a href="{{route('outlet.index')}}">Outlet</a> --}}
                                    {{--                                    </li> --}}
                                    <li class="breadcrumb-item active">Paket
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item"><a class="nav-link paket_kiloan_tab active" data-toggle="tab"
                                            href="#paket_kiloan">Paket Kiloan</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link paket_satuan_tab" data-toggle="tab"
                                            href="#paket_satuan">Paket Satuan</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <div class="default-tab">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="paket_kiloan" role="tabpanel">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card" style="background-color: #f4f3f9;">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h4>Daftar Paket Kiloan</h4>
                                                                <button type="button"
                                                                    class="btn mb-1 btn-primary font-weight-bold btn-sm tambah_kiloan_btn"
                                                                    data-count="{{ $paket }}">Tambah
                                                                    Paket <span class="btn-icon-right"><i
                                                                            class="fa fa-plus"></i></span></button>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-striped table-bordered zero-configuration">
                                                                    <thead style="text-align: center;">
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Kode Paket</th>
                                                                            <th>Nama Paket</th>
                                                                            <th>Harga</th>
                                                                            <th>Lama Cuci</th>
                                                                            <th>Minimal Berat</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($paket as $paket_kilo)
                                                                            <tr>
                                                                                <th class="align-middle text-center">
                                                                                    {{ $loop->iteration }}
                                                                                </th>
                                                                                <th class="align-middle text-center">
                                                                                    {{ $paket_kilo->kd_paket }}
                                                                                </th>
                                                                                <td>{{ $paket_kilo->nama_paket }}
                                                                                </td>
                                                                                <td>Rp.
                                                                                    {{ number_format($paket_kilo->harga_paket, 2, ',', '.') }}
                                                                                </td>
                                                                                <td>{{ $paket_kilo->hari_paket }}
                                                                                    Hari</td>
                                                                                <td>{{ $paket_kilo->min_berat_paket }}
                                                                                    Kg</td>
                                                                                <td style="text-align: center;">
                                                                                    <div class="dropdown custom-dropdown">
                                                                                        <div data-toggle="dropdown"
                                                                                            style="padding: 5px;">
                                                                                            <i class="fa fa-ellipsis-v c-primary"
                                                                                                style="font-size: 16px;"></i>
                                                                                        </div>
                                                                                        <div
                                                                                            class="dropdown-menu dropdown-menu-right">
                                                                                            <a class="dropdown-item lihat_btn_kilo"
                                                                                                href="#"
                                                                                                role="button"
                                                                                                data-lihat="{{ $paket_kilo->id }}"
                                                                                                data-toggle="modal"
                                                                                                data-target="#lihatModalKiloan">Lihat</a>
                                                                                            <a class="dropdown-item"
                                                                                                href="{{ url('/edit_paket_kiloan/' . $paket_kilo->id) }}">Edit</a>
                                                                                        </div>
                                                                                    </div>&nbsp;&nbsp;
                                                                                    <a href="{{ url('/hapus_paket_kiloan/' . $paket_kilo->id) }}"
                                                                                        style="color: grey;"><i
                                                                                            class="fa fa-trash c-primary"
                                                                                            style="font-size: 16px;"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="paket_satuan">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card" style="background-color: #f4f3f9;">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h4>Daftar Paket Satuan</h4>
                                                                <button type="button"
                                                                    class="btn mb-1 btn-primary font-weight-bold btn-sm tambah_satuan_btn"
                                                                    data-count="{{ $paket }}">Tambah
                                                                    Paket <span class="btn-icon-right"><i
                                                                            class="fa fa-plus"></i></span></button>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-striped table-bordered zero-configuration">
                                                                    <thead style="text-align: center;">
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Kode Barang</th>
                                                                            <th>Nama Barang</th>
                                                                            <th>Keterangan Barang</th>
                                                                            <th>Harga</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($satuan as $paket_satu)
                                                                            <tr>
                                                                                <th class="align-middle text-center">
                                                                                    {{ $loop->iteration }}
                                                                                </th>
                                                                                <th class="align-middle text-center">
                                                                                    {{ $paket_satu->kd_barang }}
                                                                                </th>
                                                                                <td>{{ $paket_satu->nama_barang }}
                                                                                </td>
                                                                                <td>{{ $paket_satu->ket_barang }}
                                                                                </td>
                                                                                <td>Rp.
                                                                                    {{ number_format($paket_satu->harga_barang, 2, ',', '.') }}
                                                                                </td>
                                                                                <td style="text-align: center;">
                                                                                    <div class="dropdown custom-dropdown">
                                                                                        <div data-toggle="dropdown"
                                                                                            style="padding: 5px;">
                                                                                            <i class="fa fa-ellipsis-v c-primary"
                                                                                                style="font-size: 16px;"></i>
                                                                                        </div>
                                                                                        <div
                                                                                            class="dropdown-menu dropdown-menu-right">
                                                                                            <a class="dropdown-item lihat_btn_satu"
                                                                                                href="#"
                                                                                                role="button"
                                                                                                data-lihat="{{ $paket_satu->id }}"
                                                                                                data-toggle="modal"
                                                                                                data-target="#lihatModalSatuan">Lihat</a>
                                                                                            <a class="dropdown-item"
                                                                                                href="{{ url('/edit_paket_satuan/' . $paket_satu->id) }}">Edit</a>
                                                                                        </div>
                                                                                    </div>&nbsp;&nbsp;
                                                                                    <a href="{{ url('/hapus_paket_satuan/' . $paket_satu->id) }}"
                                                                                        style="color: grey;"><i
                                                                                            class="fa fa-trash c-primary"
                                                                                            style="font-size: 16px;"></i></a>
                                                                                </td>
                                                                            </tr>
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

    @include('admin.paket.form')
    @include('admin.paket.lihat')

@endsection

@push('styles')
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#myTable ').DataTable();
        });
        $(document).on('click', '.bantuan_btn', function() {
            var win = window.open(
                'https://mobirise.com/help/how-to-add-google-map-to-website-781.html');
            win.focus();
        });
        $(document).ready(function() {
            getType();
            $('#btn-save-add').on('click', function() {
                $.ajax({
                    type: "POST",
                    url: "{{ route('outlet.store') }}",
                    data: {
                        'nama': $('#nama').val(),
                        'alamat': $('#alamat').val(),
                        'hotline': $('#hotline').val(),
                        'email': $('#email').val(),
                        'iframe_script': $('#iframe_script').val(),
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.code === 200) {
                            $('#nama').val('');
                            $('#alamat').val('');
                            $('#hotline').val('');
                            $('#email').val('');
                            $('#iframe_script').val('');
                        }
                        $(document).find('#form-modal-add').find('#btn-close-add').click();
                        getType();
                        if (response.code == 200) {
                            return toastr.success(response.message, 'Success!', {
                                closeButton: true,
                                tapToDismiss: true
                            });
                        }
                        $.each(response.error, function(idx, err) {
                            toastr.error(err, 'Error!', {
                                closeButton: true,
                                tapToDismiss: true
                            });
                        });
                    }
                });
            });

            $(document).on('click', '#update-btn', function() {
                const thisIs = $(this);
                var id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    url: "{{ url('outlet') }}/" + id,
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response.data)
                        $('#edit_nama').val(response.data.nama);
                        $('#edit_alamat').val(response.data.alamat);
                        $('#edit_hotline').val(response.data.hotline);
                        $('#edit_email').val(response.data.email);
                        $('#edit_iframe_script').val(response.data.iframe_script);
                        $(thisIs).parents(document).find('#btn-close-edit').on('click',
                            function() {
                                id = null;
                            });
                        $(thisIs).parents(document).find('#btn-save-edit').on('click',
                            function() {
                                $.ajax({
                                    type: "POST",
                                    url: "{{ url('outlet') }}/" + id,
                                    data: {
                                        'nama': $('#edit_nama').val(),
                                        'alamat': $('#edit_alamat').val(),
                                        'hotline': $('#edit_hotline').val(),
                                        'email': $('#edit_email').val(),
                                        'iframe_script': $('#edit_iframe_script')
                                            .val(),
                                        '_method': 'PUT',
                                        '_token': '{{ csrf_token() }}'
                                    },
                                    success: function(response) {
                                        $(thisIs).parents(document).find(
                                            '#form-modal-edit').find(
                                            '#btn-close-edit').click();
                                        getType();
                                        if (response.code === 200) {
                                            id = null;
                                            return toastr.success(response
                                                .message, 'Success!', {
                                                    closeButton: true,
                                                    tapToDismiss: true
                                                });
                                        }
                                        $.each(response.error, function(idx,
                                            err) {
                                            toastr.error(err,
                                                'Error!', {
                                                    closeButton: true,
                                                    tapToDismiss: true
                                                });
                                        });
                                    }
                                });
                            });
                    }
                });
            });

            $(document).on('click', '#del-btn', function() {
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
                                'url': '{{ url('outlet') }}/' + id,
                                'type': 'POST',
                                'data': {
                                    '_method': 'DELETE',
                                    '_token': '{{ csrf_token() }}'
                                },
                                success: function(response) {
                                    if (response.message) {
                                        getType();
                                        return toastr.success(response.message,
                                            'Success!', {
                                                closeButton: true,
                                                tapToDismiss: true
                                            });
                                    }
                                    getType();
                                    return toastr.error('Failed!', 'Failed!', {
                                        closeButton: true,
                                        tapToDismiss: true
                                    });
                                }
                            });
                        } else {
                            console.log(`dialog was dismissed by ${result.dismiss}`)
                        }
                    });
            });


            function getType() {
                $.ajax({
                    type: "GET",
                    url: "{{ url('isioutlet') }}",
                    dataType: "JSON",
                    success: function(response) {
                        let rows = '';
                        $.each(response.data, function(idx, data) {
                            idx++
                            rows +=
                                '<tr>' +
                                '<th class="align-middle text-center">' +
                                idx +
                                '</th>' +
                                '<th class="align-middle">' +
                                data.nama +
                                '</th>' +
                                '<td>' +
                                data.hotline +
                                '</td>' +
                                '<td>' +
                                data.email +
                                '</td>' +
                                '<td>' +
                                data.alamat +
                                '</td>' +
                                '<td>' +
                                '<div class="dropdown">' +
                                '<button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">' +
                                '<i data-feather="more-vertical"></i>' +
                                '</button>' +

                                '<div class="dropdown-menu">' +
                                '<a class="dropdown-item" id="lihat-btn" href="#" data-id="' +
                                data.id +
                                '" data-toggle="modal" data-target="#form-modal-lihat">' +
                                '<i data-feather="eye" class="mr-50"></i>' +
                                '<span>Lihat</span>' +
                                '<a class="dropdown-item" id="update-btn" href="#" data-id="' +
                                data.id +
                                '" data-toggle="modal" data-target="#form-modal-edit">' +
                                '<i data-feather="edit-2" class="mr-50"></i>' +
                                '<span>Edit</span>' +
                                '</a>' +
                                '<a class="dropdown-item" id="del-btn" href="#" data-id="' +
                                data.id + '">' +
                                '<i data-feather="trash" class="mr-50"></i>' +
                                '<span>Hapus</span>' +
                                '</a>' +
                                '</div>' +
                                '</div>' +
                                '</td>' +

                                '</tr>';
                        });
                        $('#list').html('');
                        $('#list').append(rows);
                        if (feather) {
                            feather.replace({
                                width: 14,
                                height: 14
                            });
                        }
                    }
                });
            }
        });
    </script>
@endpush
