<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Outlet;
use App\Models\Transaksi;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['penggunas'] = User::all();
        $data['outlets'] = Outlet::select('outlets.*')
        ->count();
        // $data['karyawan'] = User::where('role','Admin'||'Karyawan')->orderBy('nama','asc')->get();
        return view('owner.pengguna.index', $data);
    }
    public function laporan()
    {
    	$data['users'] = User::all();
    	$data['diproses'] = Transaksi::where('status_order', 'Diproses')
    	->count();
    	$data['selesai'] = Transaksi::where('status_order', 'Selesai')
    	->count();
    	$data['diantar'] = Transaksi::where('status_order', 'Diantar')
    	->count();
    	$data['diambil'] = Transaksi::where('status_order', 'Diterima')
    	->count();
    	return view('owner.laporan.halaman_laporan_pegawai', $data);
    }

    public function laporan_riwayat($id)
    {
    	$users = User::find($id);
    	$riwayats = Transaksi::join('users', 'users.id', '=', 'transaksi.id_karyawan')
    	->join('outlet', 'outlet.id', '=', 'transaksi.id_outlet')
    	->select('transaksi.*', 'outlet.nama as nama_outlet', 'users.nama')
    	->where('transaksi.id_karyawan', $users->id)
    	->orderBy('transaksi.tgl_pemberian', 'DESC')
    	->get();
    	return view('owner.laporan.halaman_laporan_riwayat', compact('users', 'id', 'riwayats'));
    }

    public function cetakpdf(Request $req, $id)
    {
    	if($req->check_semua == 1){
    		$users = User::find($id);
    		$riwayats = Transaksi::join('users', 'users.id', '=', 'transaksi.id_karyawan')
    	->join('outlet', 'outlet.id', '=', 'transaksi.id_outlet')
    	->select('transaksi.*', 'outlet.nama as nama_outlet', 'users.nama')
    	->where('transaksi.id_karyawan', $users->id)
    	->orderBy('transaksi.tgl_pemberian', 'DESC')
    	->get();
	    	$tanggal = "Semua Invoice";
	    	$start_date2 = "";
	    	$end_date2 = "";

	    	$pdf = PDF::loadview('halaman_laporan.pdf_laporan_pegawai', [
	    		'users' => $users,
	            'riwayats' => $riwayats,
	            'tanggal' => $tanggal,
	            'start_date2' => $start_date2,
	            'end_date2' => $end_date2
	        ]);
	        return $pdf->stream();
    	}else{
    		$users = User::find($id);
    		$start_date = $req->start_date;
    		$end_date = $req->end_date;
    		$start_date2 = $start_date[6].$start_date[7].$start_date[8].$start_date[9].'-'.$start_date[0].$start_date[1].'-'.$start_date[3].$start_date[4];
    		$end_date2 = $end_date[6].$end_date[7].$end_date[8].$end_date[9].'-'.$end_date[0].$end_date[1].'-'.$end_date[3].$end_date[4];
    		$riwayats = Transaksi::join('users', 'users.id', '=', 'transaksi.id_karyawan')
    	->join('outlet', 'outlet.id', '=', 'transaksi.id_outlet')
    	->select('transaksi.*', 'outlet.nama as nama_outlet', 'users.nama')
    	->where('transaksi.id_karyawan', $users->id)
    	->orderBy('transaksi.tgl_pemberian', 'DESC')
    	->get();
	    	$tanggal = "";

	    	$pdf = PDF::loadview('owner.laporan.pdf_laporan_pegawai', [
	            'users' => $users,
	            'riwayats' => $riwayats,
	            'tanggal' => $tanggal,
	            'start_date2' => $start_date2,
	            'end_date2' => $end_date2
	        ]);
	        return $pdf->stream();
    	}
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['outlets'] = Outlet::all();
        $data['max'] = User::max('kd_pengguna');
        $check_maks = User::select('users.kd_pengguna')
        ->count();
        if($check_maks == null){
            $data['max_code'] = "U0001";
        }else{
            $data['max_code'] = $data['max'][1].$data['max'][2].$data['max'][3].$data['max'][4];
            $data['max_code']++;
            if($data['max_code'] <= 9){
                $data['max_code'] = "U000".$data['max_code'];
            }elseif ($data['max_code'] <= 99) {
                $data['max_code'] = "U00".$data['max_code'];
            }elseif ($data['max_code'] <= 999) {
                $data['max_code'] = "U0".$data['max_code'];
            }elseif ($data['max_code'] <= 9999) {
                $data['max_code'] = "U".$data['max_code'];
            }
        }
    	return view('owner.pengguna.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama' => 'required',
            'kd_pengguna' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
            'id_outlet' => 'required',
            'foto.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->foto){
            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path() . '/pictures/', $imageName);
        } else {
            $imageName = 0;
        }


        $create = User::create([
            'nama' => $request['nama'],
            'kd_pengguna' => $request['kd_pengguna'],
            'email' => $request['email'],
            'password' => $request['password'],
            'role' => $request['role'],
            'id_outlet' => $request['id_outlet'],
            'avatar' => $imageName
        ]);

        if ($create){
            return redirect('/pengguna')->with('success','Data berhasil ditambahkan');
        }else{
            return redirect('/pengguna/create')->with('error','Data gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengguna = User::find($id);
        $status = $pengguna->delete();
        if ($status){
            return redirect('/paket')->with('success','Data berhasil dihapus');
        }else{
            return redirect('/paket')->with('error','Data gagal dihapus');
        }
    }
}
