<?php

namespace App\Http\Controllers;

use App\Models\PaketKiloan;
use App\Models\PaketSatuan;
use App\Models\Outlet;
use App\Http\Requests\StorePaketKiloanRequest;
use App\Http\Requests\UpdatePaketKiloanRequest;
use Illuminate\Http\Request;

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
        $data['paket'] = PaketKiloan::orderBy('kd_paket','asc')->get();
        $data['satuan'] = PaketSatuan::orderBy('kd_barang','asc')->get();
        return view('admin.paket.index', $data);
    }

    public function kelola_paket(){
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['outlets'] = Outlet::all();
    	$data['max'] = PaketKiloan::max('kd_paket');
        $check_maks = PaketKiloan::select('paket_kilos.kd_paket')
        ->count();
        if($check_maks == null){
            $data['max_code'] = "PK001";
        }else{
            $data['max_code'] = $data['max'][2].$data['max'][3].$data['max'][4];
            $data['max_code']++;
            if($data['max_code'] <= 9){
                $data['max_code'] = "PK00".$data['max_code'];
            }elseif ($data['max_code'] <= 99) {
                $data['max_code'] = "PK0".$data['max_code'];
            }elseif ($data['max_code'] <= 999) {
                $data['max_code'] = "PK".$data['max_code'];
            }
        }
        return view('admin.paket.form_paket' , $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaketKiloanRequest $request)
    {
        $request->validate = [
            'kd_paket' => 'required|unique:paket_satuan',
            'nama_paket' => 'required',
            'harga_paket' => 'required',
            'hari_paket' => 'required',
            'min_berat_paket' => 'required',
            'id_outlet' => 'required',
        ];
            $status = PaketKiloan::create([
                'kd_paket' => $request['kd_paket'],
                'nama_paket' => $request['nama_paket'],
                'harga_paket' => $request['harga_paket'],
                'hari_paket' => $request['hari_paket'],
                'min_berat_paket' => $request['min_berat_paket'],
                'id_outlet' => $request['id_outlet'],
                'antar_jemput_paket' => $request['antar_jemput_paket'],
            ]);
            if ($status){
                return redirect('/paket')->with('success','Data berhasil ditambahkan');
            }else{
                return redirect('/paket-satuan/create')->with('error','Data gagal ditambahkan');
            }
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
    public function edit($id)
    {
        $data['outlets'] = Outlet::all();
    	$data['paket_kilos'] = PaketKiloan::find($id);
    	return view('admin.paket.form_edit_paket', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate = [
            'nama_paket' => 'required',
            'harga_paket' => 'required',
            'hari_paket' => 'required',
            'min_berat_paket' => 'required',
            'id_outlet' => 'required',
        ];
        $status = PaketKiloan::find($id);

            $status->update([
                'nama_paket' => $request['nama_paket'],
                'harga_paket' => $request['harga_paket'],
                'hari_paket' => $request['hari_paket'],
                'min_berat_paket' => $request['min_berat_paket'],
                'antar_jemput_paket' => $request['antar_jemput_paket'],
                'id_outlet' => $request['id_outlet'],
            ]);
            if ($status){
                return redirect('/paket')->with('success','Data berhasil diubah');
            }else{
                return redirect('/paket-kiloan/edit',$id)->with('error','Data gagal diubah');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paket = PaketKiloan::find($id);
        $status = $paket->delete();
        if ($status){
            return redirect('/paket')->with('success','Data berhasil dihapus');
        }else{
            return redirect('/paket')->with('error','Data gagal dihapus');
        }
    }
}
