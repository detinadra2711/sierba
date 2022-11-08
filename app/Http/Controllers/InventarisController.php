<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\inventarisModel;
use App\Models\jenisModel;
use Illuminate\Support\Facades\Auth;


class InventarisController extends Controller
{
    //
    public function inventaris() {
        //untuk ambil data dari table jns_barang
        $jns = jenisModel::get();

        return view('inventaris.tambah', ['jns' => $jns]);
    }

    public function store(Request $request) {
        //untuk validasi jika user tidak mengisi database
        $request->validate([
            'jns_id' => 'required',
            'nama_barang' => 'required',
            'jenis_pengadaan' => 'required',
            'kategori_barang' => 'required',
            
        ]);

        $inventaris = new inventarisModel;
        $inventaris->jns_id = $request->jns_id;
        $inventaris->nama_barang = $request->nama_barang;
        $inventaris->jenis_pengadaan = $request->jenis_pengadaan;
        $inventaris->kategori_barang = $request->kategori_barang;

        $inventaris->save();

        // DB::table('inventaris')->insert([
        //     'jenis_barang' => $request['jenis_barang'],
        //     'nama_barang' => $request['nama_barang'],
        //     'jenis_pengadaan' => $request['jenis_pengadaan'],
        //     'kategori_barang' => $request['kategori_barang']
        // ]);

        return redirect('/inventaris');
    }

    public function index() {

        $inventaris = DB::table('inventaris')->paginate(10);
        // $inv = Auth::id();

        // $inventaris = inventarisModel::where('jns_id', $inv)->first();

        //dd($inventaris); -> untuk melihat hasil/isi dari variabel $inventaris

        return view('inventaris.tampil', ['inventaris' => $inventaris]);
    }

    public function show($no) {
        $inventaris = DB::table('inventaris')->where('no', $no)->first();

        return view('inventaris.detail', ['inventaris' => $inventaris]);

    }

    public function edit($no) {
        $inventaris = DB::table('inventaris')->where('no', $no)->first();

        return view('inventaris.edit', ['inventaris' => $inventaris]);
    }

    //$no sbg variabel krn di sort menggunakan no
    public function update(Request $request, $no) {
        $request->validate([
            // 'jns_id' => 'required',
            'nama_barang' => 'required',
            'jenis_pengadaan' => 'required',
            'kategori_barang' => 'required'
        ]);

        DB::table('inventaris')
            ->where('no', $no)
            ->update(
                [
                    // 'jns_id' => $request->jns_id,
                    'nama_barang' => $request->nama_barang,
                    'jenis_pengadaan' => $request->jenis_pengadaan,
                    'kategori_barang' => $request->kategori_barang
                ],
            );

            return redirect('/inventaris');
    }

    public function destroy($no) {
        DB::table('inventaris')->where('no', $no)->delete();

        return redirect('/inventaris');
    }

    public function search(Request $request) {

        //tangkap data yang dikirim dari form pencarian di tampil.blade
        $cari = $request->cari;

        // mengambil data dari table inventaris sesuai pencarian data
        $inventaris = DB::table('inventaris')
        ->where('kategori_barang', 'LIKE', "%" . $cari . "%");

        // mengirim data ke view index
        return view('inventaris.tampil', ['inventaris' => $inventaris]);
    }
}
