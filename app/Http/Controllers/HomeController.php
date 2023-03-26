<?php

namespace App\Http\Controllers;
use Auth;
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
    public function index() 
    {
        $data['customer'] = User::where('role','Customer')->get();
        $data['masuk'] = Transaksi::whereIN('status_order',['Process','Done','Delivery'])->count();
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
