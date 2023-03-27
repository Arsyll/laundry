<?php

namespace App\Http\Controllers;

use App\Models\PaketSatuan;
use App\Models\PaketKiloan;
use App\Models\Outlet;
use Illuminate\Http\Request;
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
                    $data['max_code'] = $data['max'][2].$data['max'][3].$data['max'][4];
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
    public function store(Request $request)
    {
        $request->validate = [
        'kd_barang' => 'required|unique:paket_satuan',
        'nama_barang' => 'required',
        'harga_barang' => 'required',
        'id_outlet' => 'required',
    ];
        $status = PaketSatuan::create([
            'kd_barang' => $request['kd_barang'],
            'nama_barang' => $request['nama_barang'],
            'harga_barang' => $request['harga_barang'],
            'id_outlet' => $request['id_outlet'],
            'iframe_script' => $request['iframe_script'],
            'ket_barang' => $request['ket_barang'],
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
    public function show(PaketSatuan $paketSatuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['outlets'] = Outlet::all();
    	$data['paket_satus'] = PaketSatuan::find($id);
    	return view('admin.paket.form_edit_barang', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate = [
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'id_outlet' => 'required',
        ];
        $status = PaketSatuan::find($id);

            $status->update([
                'kd_barang' => $request['kd_barang'],
                'nama_barang' => $request['nama_barang'],
                'harga_barang' => $request['harga_barang'],
                'id_outlet' => $request['id_outlet'],
                'iframe_script' => $request['iframe_script'],
                'ket_barang' => $request['ket_barang'],
            ]);
            if ($status){
                return redirect('/paket')->with('success','Data berhasil diubah');
            }else{
                return redirect('/paket-satuan/update',$id)->with('error','Data gagal diubah');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = PaketSatuan::find($id);
        $status = $produk->delete();
        if ($status){
            return redirect('/paket')->with('success','Data berhasil dihapus');
        }else{
            return redirect('/paket')->with('error','Data gagal dihapus');
        }
    }
}
