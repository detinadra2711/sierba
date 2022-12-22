<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cctvModel;
use Illuminate\Support\Facades\Auth;

class cctvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cctv = DB::table('cctv')->paginate(10);
        // $inv = Auth::id();

        // $inventaris = inventarisModel::where('jns_id', $inv)->first();

        //dd($inventaris); -> untuk melihat hasil/isi dari variabel $inventaris

        return view('cctv.index', ['cctv' => $cctv]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cctv = cctvModel::get();

        return view('cctv.create', ['cctv' => $cctv]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //untuk validasi jika user tidak mengisi database
        $request->validate([
            'lokasi' => 'required',
            'ruang' => 'required',
            'jenis_cctv' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
        ]);

        $cctv = new cctvModel;
        $cctv->ip_cctv = $request->ip_cctv;
        $cctv->ruang = $request->ruang;
        $cctv->lokasi = $request->lokasi;
        $cctv->jenis_cctv = $request->jenis_cctv;
        $cctv->jumlah = $request->jumlah;
        $cctv->kondisi = $request->kondisi;

        $cctv->save();

        // DB::table('inventaris')->insert([
        //     'jenis_barang' => $request['jenis_barang'],
        //     'nama_barang' => $request['nama_barang'],
        //     'jenis_pengadaan' => $request['jenis_pengadaan'],
        //     'kategori_barang' => $request['kategori_barang']
        // ]);

        return redirect('/cctv');
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
        $cctv = cctvModel::find($id);

        return view('cctv.detail', ['cctv' => $cctv]);
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
        $cctv = DB::table('cctv')->where('id', $id)->first();

        return view('cctv.edit', ['cctv' => $cctv]);
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
            'lokasi' => 'required',
            'ruang' => 'required',
            'jenis_cctv' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
        ]);

        DB::table('cctv')
        ->where('id', $id)
        ->update(
            [
                'ip_cctv' => $request->ip_cctv,
                'lokasi' => $request->lokasi,
                'ruang' => $request->ruang,
                'jenis_cctv' => $request->jenis_cctv,
                'jumlah' => $request->jumlah,
                'kondisi' => $request->kondisi,
            ],
        );

        return redirect('/cctv');
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
        DB::table('cctv')->where('id', $id)->delete();

        return redirect('/cctv');
    }
}
