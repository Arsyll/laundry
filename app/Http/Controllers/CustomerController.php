<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Outlet;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function sortOutletTabelKiloan(){
        $paket_kilos = Paket_kilo::select('paket_kilos.*')
        ->where('paket_kilos.id_outlet', $id)
        ->get();
        return view('admin.customer.sort_outlet_tabel_kiloan', compact('paket_kilos'));
    }

    public function sortOutletTabelSatuan(){
        $paket_satus = Paket_satu::select('paket_satus.*')
        ->where('paket_satus.id_outlet', $id)
        ->get();
        return view('admin.customer.sort_outlet_tabel_satuan', compact('paket_satus'));
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
        //
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
