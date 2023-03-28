<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PaketKiloan;
use App\Models\PaketSatuan;
use App\Models\Outlet;
use Illuminate\Support\Facades\Hash;
use Auth;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = User::where('role','Customer')->get();
        return view('admin.customer.index', compact('customer'));
    }

    public function sortOutletTabelKiloan($id){
        $paket_kiloan = PaketKiloan::select('paket_kiloan.*')
        ->where('paket_kiloan.id_outlet', $id)
        ->get();
        return view('admin.customer.sort_outlet_tabel_kiloan', compact('paket_kiloan'));
    }

    public function sortOutletTabelSatuan($id){
        $paket_satuan = PaketSatuan::select('paket_satuan.*')
        ->where('paket_satuan.id_outlet', $id)
        ->get();
        return view('admin.customer.sort_outlet_tabel_satuan', compact('paket_satuan'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['outlets'] = Outlet::all();
    	return view('admin.customer.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate = [
            'nama' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|unique:users',
            'no_telp' => 'required',
            'jens_kelamin' => 'required',
            'alamat' => 'required',
        ];

        $max = User::max('kd_pengguna');
        if($max == null){
            $max_user = "P0001";
        }else{
            $max_user = $max[1].$max[2].$max[3].$max[4];
                    $max_user++;
                    if($max_user <= 9){
                        $max_user = "P000".$max_user;
                    }elseif ($max_user <= 99) {
                        $max_user = "P00".$max_user;
                    }elseif ($max_user <= 999) {
                        $max_user = "P0".$max_user;
                    }elseif ($max_user <= 9999) {
                        $max_user = "P".$max_user;
                    }
            }
            $id_outlet = Auth::user()->id_outlet;
            $status = User::create([
                'nama' => $request['nama'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'no_telp' => $request['no_telp'],
                'jens_kelamin' => $request['jens_kelamin'],
                'alamat' => $request['alamat'],
                'kd_pengguna' => $max_user,
                'id_outlet' => $id_outlet
            ]);
            if ($status){
                return redirect('/customer')->with('success','Data berhasil ditambahkan');
            }else{
                return redirect('/customer/create')->with('error','Data gagal ditambahkan');
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
        //
    }
}
