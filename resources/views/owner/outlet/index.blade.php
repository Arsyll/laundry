@extends('layouts.app')
@section('title', 'Outlet')
@section('outlet', 'active')

@section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Data Outlet</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    {{--                                    <li class="breadcrumb-item"><a href="{{route('outlet.index')}}">Outlet</a> --}}
                                    {{--                                    </li> --}}
                                    <li class="breadcrumb-item active">Outlet
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button id="add-btn" class="btn btn-primary waves-effect waves-float waves-light"
                                    data-toggle="modal" data-target="#form-modal-add">
                                    Tambah Outlet
                                </button>
                            </div>

                            <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable"class="table table-striped table-bordered zero-configuration">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Outlet</th>
                                            <th>Hotline</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tbody id='list'>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->

            </div>
        </div>
    </div>

    @include('owner.outlet.form')
    @include('owner.outlet.detail')

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
                                '<a class="dropdown-item " id="lihat-btn" href="#" data-lihat="' +
                                data.id +
                                '" data-toggle="modal" data-target="#lihatModal">' +
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
        $(document).on('click', '#lihat-btn', function(e) {
            e.preventDefault();
            var id = $(this).attr('data-lihat');
            $.ajax({
                url: "{{ url('outlet') }}/" + id,
                method: "GET",
                success: function(response) {
                    console.log(response);
                    $('.nama_outlet').val(response.data.nama);
                    $('.hotline_outlet').val(response.data.hotline);
                    $('.email_outlet').val(response.data.email);
                    $('.alamat_outlet').val(response.data.alamat);
                    if (response.iframe_script == null) {
                        $('.not_available_map').attr('hidden', false);
                        $('.available_map').attr('hidden', true);
                    } else {
                        $('.not_available_map').attr('hidden', true);
                        $('.available_map').attr('hidden', false);
                        $('.available_map').html(response.iframe_script);
                    }
                }
            });
        });
    </script>
@endpush
