<?php

namespace App\Http\Controllers;

use App\Models\CheckoutSatuan;
use App\Models\User;
use App\Models\Outlet;
use App\Models\PaketSatuan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCheckoutSatuanRequest;
use App\Http\Requests\UpdateCheckoutSatuanRequest;
use Auth;

class CheckoutSatuanController extends Controller
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
        $data['barang'] = PaketSatuan::get();
        $data['customer'] = User::where('role','Customer')->get();
        $data['karyawan'] = User::whereIn('role',['Admin','Karyawan'])->get();
        $data['outlet'] = Outlet::get();

        return view('admin.transaksi.form_satuan', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate = [
            'id_barang' => 'required',
            'id_customer' => 'required',
            'id_outlet' => 'required',
            'jumlah_barang' => 'required',
            'metode_pembayaran' => 'required',
            'harga_antar' => 'required',
        ];
        $max_transaksi = Transaksi::max('kd_invoice');
        $check_max_transkasi = Transaksi::select('transaksis.kd_invoice')
        ->count();
        if($check_max_transkasi == null){
            $max_code_transaksi = "I0001";
        }else{
            $max_code_transaksi = $max_transaksi[1].$max_transaksi[2].$max_transaksi[3].$max_transaksi[4];
            $max_code_transaksi++;
            if($max_code_transaksi <= 9){
                $max_code_transaksi = "I000".$max_code_transaksi;
            }elseif ($max_code_transaksi <= 99) {
                $max_code_transaksi = "I00".$max_code_transaksi;
            }elseif ($max_code_transaksi <= 999) {
                $max_code_transaksi = "I0".$max_code_transaksi;
            }elseif ($max_code_transaksi <= 9999) {
                $max_code_transaksi = "I".$max_code_transaksi;
            }}
        $id_karyawan = Auth::user()->id;
        $outlet = PaketSatuan::where('id',$request['id_barang'])->sum('id_outlet');
        $harga = PaketSatuan::where('id',$request['id_barang'])->sum('harga_barang');
        $harga_barang = ($harga * $request['jumlah_barang']);
        $harga_total = $harga_barang + $request['harga_antar'];
            // dd($harga_total);
            $checkoutSatuan = CheckoutSatuan::create([
                'kd_invoice' => $max_code_transaksi,
                'id_barang' => $request['id_barang'],
                'jumlah_barang' => $request['jumlah_barang'],
                'metode_pembayaran' => $request['metode_pembayaran'],
                'harga_barang' => $harga_barang,
                'harga_antar' => $request['harga_antar'],
                'harga_total' => $harga_total,
            ]);
            $transaksi = Transaksi::create([
                'kd_invoice' => $max_code_transaksi,
                'id_customer' => $request['id_customer'],
                'id_outlet' => $outlet,
                'diskon' => $request['diskon'],
                'pajak' => $request['pajak'],
                'status_order' => 'Diproses',
                'tgl_pemberian' => now()->format ('Y-m-d'),
                'status_payment' => 'Pending',
                'id_karyawan' => $id_karyawan,
                'harga_total' => $harga_total,
            ]);
            return redirect('/transaksi')->with('success','Data berhasil ditambahkan');
            if ($transaksi){
            }else{
                return redirect('/checkout-satuan/create')->with('error','Data gagal ditambahkan');
            }
    }


    /**
     * Display the specified resource.
     */
    public function show(CheckoutSatuan $checkoutSatuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CheckoutSatuan $checkoutSatuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheckoutSatuanRequest $request, CheckoutSatuan $checkoutSatuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CheckoutSatuan $checkoutSatuan)
    {
        //
    }
}
