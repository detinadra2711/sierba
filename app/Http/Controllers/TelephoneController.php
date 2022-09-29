<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TelephoneModel;

class TelephoneController extends Controller
{
    //
    public function viewTelephone() {
        // return view('viewtelephone');
        $telephone = TelephoneModel::select('*')
        ->get(); //mengambil semua data dari table
        return view('viewtelephone', ['telephone' => $telephone]);
    }

    public function addTelephone() {
        return view('addtelephone');
    }

    public function saveTelephone(Request $request) { //untuk menangkap data yang dikirimkan dari form
        $telephone = TelephoneModel::create([
            'Gedung' => $request->Gedung,
            'Ruangan' => $request->Ruangan,
            'Nomor_Ekstension' => $request->Nomor_Ekstension,
            'Keterangan' => $request->Keterangan,
        ]);

        return redirect()->route('viewTelephone');
    }

    public function ubahTelephone($No)
    {
        //mengambil data nomor telephone dari database dengan query builder
        $telephone = TelephoneModel::select('*')
            ->where('No', $No)
            ->get();

        return view('ubahtelephone', ['telephone' => $telephone]);
    }

    public function updateTelephone(Request $request)
    {
        $telephone = TelephoneModel::where('No', $request->No)
            ->update([
                'Gedung' => $request->Gedung,
                'Ruangan' => $request->Ruangan,
                'Nomor_Ekstension' => $request->Nomor_Ekstension,
                'Keterangan' => $request->Keterangan
            ]);

        return redirect()->route('viewTelephone');
    }

    public function hapusTelephone($No)
    {
        $telephone = TelephoneModel::where('No', $No)
            ->delete();

        return redirect()->route('viewTelephone');
    }

}
