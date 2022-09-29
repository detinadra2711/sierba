<?php

namespace App\Http\Controllers;
use App\Models\ArsipModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $arsip = ArsipModel::get();
        return view('arsip.index', ['arsip' => $arsip]);
    }
}
