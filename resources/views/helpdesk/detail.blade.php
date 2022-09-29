@extends('layout.master')

@section('head')
TICKET INFORMATION    
@endsection

@section('content')
    
    <h4>Nomor Tiket : {{ $helpdesk->ticket_no }}</h4> 

    <p>User : {{ $helpdesk->user_id }}</p>
    <p>Ruangan : {{ $helpdesk->ruangan }}</p>
    <p>Masalah : {{ $helpdesk->masalah }}</p>
    <p>Ticket Priority : {{ $helpdesk->ticket_priority }}</p>
    <p>Ticket Status : {{ $helpdesk->ticket_status }}</p>


    <a href="/helpdesk" class="btn btn-secondary btn-sm">Kembali</a>

@endsection