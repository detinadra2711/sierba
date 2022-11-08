<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JenisDokModel;
use App\Models\ArsipModel;
use Illuminate\Support\Facades\File;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ambil semua data dari DB
        // $arsip = ArsipModel::get();
        $arsip = DB::table('data_file')->paginate(10);
        return view('arsip.index', ['arsip' => $arsip]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jenis = JenisDokModel::get();
        return view('arsip.create', ['jenis' => $jenis]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'judul' => 'required',
            'nama_file' => 'required|mimes:pdf,xlx,xlsx,docx,csv',
            'jenis_id' => 'required',
            'nomor_dokumen' => 'required'
        ]);


        $fileName = $request->judul.'-'.time().'.'.$request->nama_file->extension();
        $request->nama_file->move(public_path('file_manager'), $fileName);
        
        $arsip = new ArsipModel;
        $arsip->judul = $request->judul;
        $arsip->jenis_id = $request->jenis_id;
        $arsip->nama_file = $fileName;
        $arsip->nomor_dokumen = $request->nomor_dokumen;

        $arsip->save();

        return redirect('/arsip');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no)
    {
        //Detail cards dari index
        $arsip = ArsipModel::find($no);

        return view('arsip.detail', ['arsip' => $arsip]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no)
    {
        //
        $arsip = ArsipModel::find($no);
        $jenis = JenisDokModel::get();

        return view('arsip.update', ['arsip' => $arsip, 'jenis' => $jenis]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no)
    {
        //
        $request->validate([
            'judul' => 'required',
            'nama_file' => 'mimes:pdf,xlx,xlsx,docx,csv',
            'jenis_id' => 'required',
            'nomor_dokumen' => 'required'
        ]);

        $arsip = ArsipModel::find($no);
        if($request->has('nama_file')){
            $path = 'file_manager/'; //tempat menyimpan file
            //untuk menghapus file yang lama jika file baru diupload
            //File::delete($path. $arsip->nama_file);

            $fileName = $request->judul . '-' . time() . '.' . $request->nama_file->extension();
            $request->nama_file->move(public_path('file_manager'), $fileName);

            $arsip->nama_file = $fileName;

            $arsip->save();
        }
        $arsip->judul = $request['judul'];
        $arsip->jenis_id = $request['jenis_id'];
        $arsip->nomor_dokumen = $request['nomor_dokumen'];
        $arsip->save();

        return redirect('/arsip');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no)
    {
        $arsip = ArsipModel::find($no);

        $path = 'file_manager/';
        File::delete($path. $arsip->nama_file);
        
        $arsip->delete();
        //B::table('data_file')->where('no', $no)->delete();

        return redirect('/arsip');
    }
}
