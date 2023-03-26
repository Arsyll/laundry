<?php

namespace App\Http\Controllers;

use App\Models\PaketSatuan;
use App\Http\Requests\StorePaketSatuanRequest;
use App\Http\Requests\UpdatePaketSatuanRequest;

class PaketSatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['paket'] = PaketKiloan::orderBy('nama_paket','asc')->get();
        $data['satuan'] = PaketSatuan::orderBy('nama_barang','asc')->get();
        return view('admin.paket.form_barang', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaketSatuanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PaketSatuan $paketSatuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaketSatuan $paketSatuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaketSatuanRequest $request, PaketSatuan $paketSatuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaketSatuan $paketSatuan)
    {
        //
    }
}
