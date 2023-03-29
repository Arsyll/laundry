<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\CheckoutKiloan;
use App\Models\CheckoutSatuan;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kilo = CheckoutKiloan::first();
        $satu = CheckoutSatuan::first();

        $data['kiloan'] = CheckoutKiloan::where('kd_invoice', @$satu->kd_invoice )->get();
        $data['satuan'] = Transaksi::where('kd_invoice', @$satu->kd_invoice )->get();
        return view('admin.transaksi.index', $data);
    }

    public function laporan()
    {
        $data['transaksis'] = Transaksi::join('pelanggans', 'pelanggans.kd_pelanggan', '=', 'transaksis.kd_pelanggan')
    	->join('outlets', 'outlets.id', '=', 'transaksis.id_outlet')
    	->join('users', 'users.kd_pengguna', '=', 'transaksis.kd_pegawai')
    	->join('struks', 'struks.kd_invoice', '=', 'transaksis.kd_invoice')
    	->select('transaksis.*', 'outlets.nama as nama_outlet', 'pelanggans.nama_pelanggan', 'users.name as nama_pegawai', 'struks.*')
    	->where('transaksis.status', 'diambil')
    	->get();
    	$data['hari_ini'] = Carbon\Carbon::now();
        $data['hari_ini2'] = $hari_ini->isoFormat('MM/DD/YYYY');
        $data['bulan_depan'] = $hari_ini->add(1, 'month');
        $data['bulan_depan2'] = $bulan_depan->isoFormat('MM/DD/YYYY');
        return view('owner.laporan.laporan_transaksi', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
