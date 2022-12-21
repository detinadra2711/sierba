<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AplikasiModel;
use Illuminate\Support\Facades\Auth;

class aplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $aplikasi = DB::table('aplikasi')->paginate(10);
        // $inv = Auth::id();

        // $inventaris = inventarisModel::where('jns_id', $inv)->first();

        //dd($inventaris); -> untuk melihat hasil/isi dari variabel $inventaris

        return view('inventaris.aplikasi.index', ['aplikasi' => $aplikasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $aplikasi = AplikasiModel::get();

        return view('inventaris.aplikasi.create', ['aplikasi' => $aplikasi]);

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
         //untuk validasi jika user tidak mengisi database
         $request->validate([
            'nama_aplikasi' => 'required',
            'keterangan' => 'required',
            
        ]);

        $aplikasi = new AplikasiModel;
        $aplikasi->nama_aplikasi = $request->nama_aplikasi;
        $aplikasi->keterangan = $request->keterangan;
        $aplikasi->lisensi = $request->lisensi;
        
        $aplikasi->save();

        return redirect('/aplikasi');
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
        $aplikasi = DB::table('aplikasi')->where('id', $id)->first();

        return view('inventaris.aplikasi.detail', ['aplikasi' => $aplikasi]);
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
        $aplikasi = DB::table('aplikasi')->where('id', $id)->first();

        return view('inventaris.aplikasi.edit', ['aplikasi' => $aplikasi]);
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
        $request->validate([
            'nama_aplikasi' => 'required',
            'keterangan' => 'required',
            'lisensi' => 'required'
        ]);

        DB::table('aplikasi')
            ->where('id', $id)
            ->update(
                [
                    'nama_aplikasi' => $request->nama_aplikasi,
                    'keterangan' => $request->keterangan,
                    'lisensi' => $request->lisensi
                ],
            );

            return redirect('/aplikasi');
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
        DB::table('aplikasi')->where('id', $id)->delete();

        return redirect('/aplikasi');
    }
}
