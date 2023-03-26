@extends('layouts.app')
@section('dashboard','active')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-start pb-0">
                            <div>
                                <h2 class="text-bold-700 mb-0">{{$customer->count()}}</h2>
                                <p>Jumlah Customer</p>
                            </div>
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-users text-primary font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-start pb-0">
                            <div>
                                <h2 class="text-bold-700 mb-0">{{$masuk}}</h2>
                                <p>Laundry Masuk</p>
                            </div>
                            <div class="avatar bg-rgba-success p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-box text-success font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-start pb-0">
                            <div>
                                <h2 class="text-bold-700 mb-0">{{$selesai}}</h2>
                                <p>Laundry Selesai</p>
                            </div>
                            <div class="avatar bg-rgba-danger p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-check text-danger font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-start pb-0">
                            <div>
                                <h2 class="text-bold-700 mb-0">{{$diambil}}</h2>
                                <p>Laundry Diambil</p>
                            </div>
                            <div class="avatar bg-rgba-warning p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-check-square text-warning font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-md-6 col-12">
                  <div class="card card-statistics">
                      <div class="card-header">
                          <h4 class="card-title">Pendapatan</h4>
                          <div class="d-flex align-items-center">
                              <p class="card-text font-small-2 mr-25 mb-0">Pendapatan Tahuan & Bulan</p>
                          </div>
                      </div>
                      <div class="card-body statistics-body">
                          <div class="row">
                              <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                  <div class="media">
                                      <div class="avatar bg-primary mr-2">
                                          <div class="avatar-content">
                                              <i class="feather icon-dollar-sign"></i>
                                          </div>
                                      </div>
                                      <div class="media-body my-auto">
                                          <h5 class="font-weight-bolder mb-0">{{Rupiah::getRupiah($incomeY)}}</h5>
                                          <p class="card-text font-small-1 mb-0">Tahun ini {{date('Y')}} </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                  <div class="media">
                                      <div class="avatar bg-info mr-2">
                                          <div class="avatar-content">
                                             <i class="feather icon-dollar-sign"></i>
                                          </div>
                                      </div>
                                      <div class="media-body my-auto">
                                          <h5 class="font-weight-bolder mb-0"> {{Rupiah::getRupiah($incomeM)}} </h5>
                                          <p class="card-text font-small-1 mb-0">Bulan ini {{date('F')}} </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
                                  <div class="media">
                                      <div class="avatar bg-danger mr-2">
                                          <div class="avatar-content">
                                              <i class="feather icon-dollar-sign"></i>
                                          </div>
                                      </div>
                                      <div class="media-body my-auto">
                                          <h5 class="font-weight-bolder mb-0">{{Rupiah::getRupiah($incomeYOld)}}</h5>
                                          <p class="card-text font-small-1 mb-0">Tahun lalu {{date("Y",strtotime("-1 year")) ?? 0}} </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="col-xl-5 col-md-6 col-12">
                  <div class="card card-statistics">
                      <div class="card-header">
                          <h4 class="card-title">Pendapatan </h4>
                          <div class="d-flex align-items-center">
                              <p class="card-text font-small-2 mr-25 mb-0">Pendapatan Harian</p>
                          </div>
                      </div>
                      <div class="card-body statistics-body">
                          <div class="row">
                              <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                                  <div class="media">
                                      <div class="avatar bg-rgba-success mr-2">
                                          <div class="avatar-content">
                                              <i class="feather icon-dollar-sign"></i>
                                          </div>
                                      </div>
                                      <div class="media-body my-auto">
                                          <h4 class="font-weight-bolder mb-0">{{Rupiah::getRupiah($incomeD)}}</h4>
                                          <p class="card-text font-small-1 mb-0">Hari ini {{date('l')}} </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                                  <div class="media">
                                      <div class="avatar bg-rgba-warning mr-2">
                                          <div class="avatar-content">
                                             <i class="feather icon-dollar-sign"></i>
                                          </div>
                                      </div>
                                      <div class="media-body my-auto">
                                          <h4 class="font-weight-bolder mb-0">{{Rupiah::getRupiah($incomeDOld)}}</h4>
                                          <p class="card-text font-small-1 mb-0">Kemarin {{date("l",strtotime("-1 day"))}} </p>
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
