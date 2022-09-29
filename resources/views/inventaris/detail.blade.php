@extends('layout.master')

@section('head')
INVENTARIS IT RS ERBA
@endsection

@section('content')
    
    <h1>{{ $inventaris->nama_barang }}</h1> 
    <p>Jenis Barang : {{ $inventaris->jns_id }}</p>   
    <p>Jenis Pengadaan : {{ $inventaris->jenis_pengadaan }}</p> 
    <p>Kategori Barang : {{ $inventaris->kategori_barang }}</p>

    <a href="/inventaris" class="btn btn-secondary btn-sm">Kembali</a>
@endsection