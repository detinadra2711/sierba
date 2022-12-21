@extends('layout.master')

@section('head')
APLIKASI IT RS ERBA
@endsection

@section('content')
    
    <h1>{{ $aplikasi->nama_aplikasi }}</h1> 
    <p>Keterangan : {{ $aplikasi->keterangan }}</p>   
    <p>Lisensi : {{ $aplikasi->keterangan }}</p>

    <a href="/aplikasi" class="btn btn-secondary btn-sm">Kembali</a>
@endsection