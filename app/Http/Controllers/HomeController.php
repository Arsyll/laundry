<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Charts\HarianChart;
use App\Charts\BulananChart;
use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(HarianChart $hari, BulananChart $bulan)
    {
        $data['customer'] = User::where('role','Customer')->get();
        $data['masuk'] = Transaksi::whereIN('status_order',['Diproses','Selesai','Diantar','Diterima'])->count();
        $data['selesai'] = Transaksi::where('status_order','Selesai')->count();
        $data['diambil'] = Transaksi::where('status_order','Diterima')->count();
        $data['sudahbayar'] = Transaksi::where('status_payment','Success')->count();
        $data['belumbayar'] = Transaksi::where('status_payment','Pending')->count();
        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');

        $data['incomeY'] = Transaksi::where('status_payment','Success')
            ->whereYear('created_at', date('Y'))
            ->sum('harga_total');
        $data['incomeM'] = Transaksi::where('status_payment', 'Success')
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', ltrim(date('m'), '0'))
            ->sum('harga_total');
        $data['incomeYOld'] = Transaksi::where('status_payment','Success')
            ->whereYear('created_at', date('Y', strtotime('-1 year')))
            ->sum('harga_total');
        $data['incomeD'] = Transaksi::where('status_payment','Success')
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', ltrim(date('m'), '0'))
            ->whereDay('created_at', ltrim(date('d'), '0'))
            ->whereDay('created_at', '=', date('d'))->sum('harga_total');
        $data['incomeDOld'] = Transaksi::where('status_payment','Success')
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', ltrim(date('m'), '0'))
            ->whereDay('created_at', ltrim(date('d', strtotime('-1 day')), '0'))
            ->whereDay('created_at', '=', date('d') - 1)->sum('harga_total');
        $data['harian'] = $hari->build();
        $data['bulanan'] = $bulan->build();
        if (Auth::user()->role == 'Owner') {
            return view('owner.dashboard.index');
        }elseif (Auth::user()->role == 'Admin') {
            return view('admin.dashboard.index');
        }elseif (Auth::user()->role == 'Karyawan') {
            return view('karyawan.dashboard.index');
        }else {
            return view('customer.dashboard.index', $data);
        }

    }
}
