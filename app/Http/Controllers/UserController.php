<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function karyawan()
    {
        $data['karyawan'] = User::where('role','Admin'||'Karyawan')->orderBy('nama','asc')->get();
        return view('owner.karyawan.index', $data);
    }

    /**
     * Display a listing of the resource.
     */
    public function customer()
    {
        $data['customer'] = User::where('role','Customer')->orderBy('nama','asc')->get();
        return view('admin.customer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_karyawan()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_customer()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_karyawan(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_customer(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show_karyawan($id)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show_customer($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_karyawan($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_customer($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_karyawan(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_customer(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_karyawan($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_customer($id)
    {
        //
    }
}
