<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TelephoneModel;
use App\Models\RuanganModel;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $telepon = TelephoneModel::get();
        return view('telepon.index', ['telepon' => $telepon]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ruangan = RuanganModel::get();
        return view('telepon.create', ['ruangan' => $ruangan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Gedung' => 'required',
            'Ruangan_id' => 'required',
            'Nomor_Ekstension' => 'required',
            'Keterangan' => 'required',
        ]);

        $telepon = new TelephoneModel;
        $telepon->Gedung = $request->Gedung;
        $telepon->Ruangan_id = $request->Ruangan_id;
        $telepon->Nomor_Ekstension = $request->Nomor_Ekstension;
        $telepon->Keterangan = $request->Keterangan;

        $telepon->save();

        return redirect('/telepon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
