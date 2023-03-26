<!-- Modal Add-->
<div class="modal fade" data-backdrop="static" id="form-modal-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Tambah Outlet</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="nama">Nama Outlet <span
                                class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan nama outlet">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="hotline">Hotline <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="hotline" name="hotline"
                                placeholder="Masukkan hotline">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Masukkan email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Alamat <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <textarea class="form-control h-150px" rows="6" id="alamat" placeholder="Masukkan alamat outlet"
                                name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="iframe_script">Sematkan Peta (Iframe - HTML)
                        </label>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="iframe_script" id="iframe_script"
                                    placeholder="Masukkan source code">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-success bantuan_btn" href=""
                                        type="button">Bantuan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-close-add" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="btn-save-add" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Update-->
<div class="modal fade" data-backdrop="static" id="form-modal-edit" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Edit Outlet</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="edit_nama">Nama Outlet <span
                                class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="edit_nama" name="nama"
                                placeholder="Masukkan nama outlet">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="edit_hotline">Hotline <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="edit_hotline" name="hotline"
                                placeholder="Masukkan hotline">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="edit_email">Email <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" id="edit_email" name="email"
                                placeholder="Masukkan email" value="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Alamat <span class="text-danger">*</span>
                        </label>
                        <div class="col-lg-6">
                            <textarea class="form-control h-150px" rows="6" id="edit_alamat" placeholder="Masukkan alamat outlet"
                                name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label" for="edit_iframe_script">Sematkan Peta (Iframe - HTML)
                        </label>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="iframe_script" id="edit_iframe_script"
                                    placeholder="Masukkan source code" value="">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-success bantuan_btn" href=""
                                        type="button">Bantuan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-close-edit" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" id="btn-save-edit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
