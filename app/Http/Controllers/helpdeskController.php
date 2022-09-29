<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\helpdeskModel;
use App\Models\RuanganModel;
use App\Models\ticketstatModel;
use App\Models\ticketpriorModel;

class helpdeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
        $helpdesk = helpdeskModel::get();
        $ticket_status = ticketstatModel::get();
        return view('helpdesk.index', ['helpdesk' => $helpdesk, 'ticket_status' => $ticket_status]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ticket_priority = ticketpriorModel::get();
        $ticket_status = ticketstatModel::get();
        return view('helpdesk.create', ['ticket_priority' => $ticket_priority, 'ticket_status' => $ticket_status]);
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
        $helpdesk = helpdeskModel::find($id);
        

        return view('helpdesk.detail', ['helpdesk' => $helpdesk]);
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
