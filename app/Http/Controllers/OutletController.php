<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Http\Requests\StoreOutletRequest;
use App\Http\Requests\UpdateOutletRequest;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['outlet'] = Outlet::orderBy('nama','asc')->get();
        return view('owner.outlet.index', $data);

    }
    public function isi(){
        return response()->json([
            'massage' => 'List Outlet',
            'data' => Outlet::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOutletRequest $request)
    {
        $request->validate = [
            'nama' => 'required|unique:outlet',
            'alamat' => 'required',
            'hotline' => 'required',
            'email' => 'required',
        ];
        $status = Outlet::create([
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'hotline' => $request['hotline'],
            'email' => $request['email'],
            'iframe_script' => $request['iframe_script'],
        ]);

        return response()->json([
            'code' => 200,
            'message' => 'Outlet berhasi ditambah!',
            'data' => $status
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json([
            'message' => 'detail outlet!',
            'data' => Outlet::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outlet $outlet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOutletRequest $request, $id)
    {
        $rule = [
            // 'nama' => 'required'
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        $outlet = Outlet::find($id);
        $status = $outlet->update($input);

        return response()->json([
            'code' => 200,
            'message' => 'Outlet berhasil diubah!',
            'data' => $status
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outlet $outlet)
    {
        $outlet->findOrFail($outlet->id)->delete($outlet);
        return response()->json([
            'message' => 'Outlet berhasil dihapus!'
        ]);
    }
}
