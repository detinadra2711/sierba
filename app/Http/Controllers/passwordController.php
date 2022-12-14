<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\passwordModel;
class passwordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // if($request->has('search')) {
        //     $password = passwordModel::where('nama_aplikasi', 'LIKE', '%' .$request->search. '%')->paginate(5);
        // }else {
        //     $password = passwordModel::get();
        //     return view('password.index', ['password' => $password]);
        // }

        $password = DB::table('password')->paginate(10);

        // $password = passwordModel::get();
        // $password = passwordModel::paginate(5);
        return view('password.index', ['password' => $password]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $password = passwordModel::get();
        return view('password.create', ['password' => $password]);
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
            'nama_aplikasi' => 'required',
            'alamat_ip' => 'required',
            'password' => 'required',
        ]);

        $password = new passwordModel;
        $password->nama_aplikasi = $request->nama_aplikasi;
        $password->alamat_ip = $request->alamat_ip;
        $password->password = $request->password;

        $password->save();

        return redirect('/password');
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
        $password = DB::table('password')->where('id', $id)->first();

        return view('password.detail', ['password' => $password]);
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
        $password = passwordModel::find($id);

        return view('password.edit', ['password' => $password]);
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
            'alamat_ip' => 'required',
            'password' => 'required'
        ]);

        DB::table('password')
            ->where('id', $id)
            ->update(
                [
                    'nama_aplikasi' => $request->nama_aplikasi,
                    'alamat_ip' => $request->alamat_ip,
                    'password' => $request->password
                ],
            );

            return redirect('/password');
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
        DB::table('password')->where('id', $id)->delete();

        return redirect('/password');
    }


    public function search()
    {
        $search_text = $_GET('query');
        $password = passwordModel::where('nama_aplikasi', 'LIKE', '%' .$search_text. '%')->with('password')->get();

        return view('password.search', compact('password'));
    }
}
