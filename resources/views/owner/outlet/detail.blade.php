
<div class="modal fade" id="lihatModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keterangan Outlet</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="val-nama">Nama Outlet</label>
                    <div class="col-md-9">
                        <input type="text" readonly="readonly" class="form-control nama_outlet">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="val-nama">Hotline</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input type="text" class="form-control hotline_outlet" readonly="readonly">
                            <div class="input-group-append">
                                <button class="btn btn-info panggil_hotline" style="color: #fff;"
                                    type="button"><i data-feather="phone"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="val-nama">Email</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input type="text" class="form-control email_outlet" readonly="readonly">
                            <div class="input-group-append">
                                <button class="btn btn-info pesan_email" style="color: #fff;" type="button"><i
                                        data-feather="mail"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="val-nama">Alamat</label>
                    <div class="col-md-9">
                        <textarea class="form-control h-150px alamat_outlet" rows="4" id="comment" readonly="readonly"></textarea>
                    </div>
                </div>
                <hr>
                <div class="media video-container available_map" hidden="">

                </div>
                <div class="row not_available_map" hidden="">
                    <div class="col-md-11 text-center font-weight-bold"
                        style="height: 200px; margin: 20px; background-color: #fff; color: #fe6383; vertical-align: middle; line-height: 200px; border: 2px solid #7571f9;">
                        Tidak Ada Map
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
