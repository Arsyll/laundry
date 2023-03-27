<?php

namespace App\Http\Controllers;

use App\Models\PaketKiloan;
use App\Models\PaketSatuan;
use App\Http\Requests\StorePaketKiloanRequest;
use App\Http\Requests\UpdatePaketKiloanRequest;

class PaketKiloanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['paket'] = PaketKiloan::orderBy('nama_paket','asc')->get();
        $data['satuan'] = PaketSatuan::orderBy('nama_barang','asc')->get();
        return view('admin.paket.index', $data);
    }

    /**
     * Display a listing of the resource.
     */
    public function paket()
    {
        $data['paket'] = PaketKiloan::orderBy('nama_paket','asc')->get();
        $data['satuan'] = PaketSatuan::orderBy('nama_barang','asc')->get();
        return view('admin.paket.index', $data);
    }

    public function kelola_paket(){
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['paket'] = PaketKiloan::orderBy('nama_paket','asc')->get();
        $data['satuan'] = PaketSatuan::orderBy('nama_barang','asc')->get();
        return view('admin.paket.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaketKiloanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PaketKiloan $paketKiloan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaketKiloan $paketKiloan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaketKiloanRequest $request, PaketKiloan $paketKiloan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaketKiloan $paketKiloan)
    {
        //
    }
}
