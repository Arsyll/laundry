<?php

namespace App\Http\Controllers;

use App\Models\PaketSatuan;
use App\Models\PaketKiloan;
use App\Models\Outlet;
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
        
                $data['outlets'] = Outlet::all();
                $data['max'] = PaketSatuan::max('kd_barang');
                $data['check_maks'] = PaketSatuan::select('paket_kiloan.kd_barang')
                ->count();
                if($data['check_maks'] == null){
                    $data['max_code'] = "PS001";
                }else{
                    $data['max_code'] = $max[2].$max[3].$max[4];
                    $data['max_code']++;
                    if($data['max_code'] <= 9){
                        $data['max_code'] = "PS00".$data['max_code'];
                    }elseif ($data['max_code'] <= 99) {
                        $data['max_code'] = "PS0".$data['max_code'];
                    }elseif ($data['max_code'] <= 999) {
                        $data['max_code'] = "PS".$data['max_code'];
                    }
                }
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
