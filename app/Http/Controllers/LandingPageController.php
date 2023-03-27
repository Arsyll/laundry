<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Outlet;
use App\Models\Transaksi;

class LandingPageController extends Controller
{
    public function index()
    {
        $data['customer'] = User::where('role','Customer')->count();
        $data['karyawan'] = User::where('role','Karyawan')->count();
        $data['outlet'] = Outlet::all()->count();
        $data['cucian'] = Transaksi::whereIN('status_order',['Selesai','Diantar','Diterima'])->count();
        return view('landing_page', $data);
    }
}
