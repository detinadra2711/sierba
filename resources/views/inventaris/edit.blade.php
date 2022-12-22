@extends('layout.master')

@section('head')
EDIT INVENTARIS IT RS ERBA
@endsection

@section('content')
    
    <form action="/inventaris/{{ $inventaris->no }}" method="POST">
    @csrf
    @method("PUT")
    <div class="form-group">
            <label>Jenis Barang</label>
            <input type="text" name="jenis_barang" value="{{ $inventaris->jns_id }}" class="form-control" placeholder="jenis barang" required="">
        </div>
        @error('jenis_barang')
            <div class="alert alert-danger">{{  $message }}</div>
        @enderror
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="{{ $inventaris->nama_barang }}" class="form-control" placeholder="nama barang" required="">
        </div>
        @error('nama_barang')
            <div class="alert alert-danger">{{  $message }}</div>
        @enderror
        <div class="form-group">
            <label>Jenis Pengadaan</label>
            <input type="text" name="jenis_pengadaan" value="{{ $inventaris->jenis_pengadaan }}" class="form-control" placeholder="jenis pengadaan" required="">
        </div>
        @error('jenis_pengadaan')
            <div class="alert alert-danger">{{  $message }}</div>
        @enderror
        <div class="form-group">
            <label>Kategori Barang</label>
            <textarea name="kategori_barang" rows="3" class="form-control" placeholder="kategori barang" required="">{{ $inventaris->kategori_barang }}</textarea>
        </div>
        @error('kategori_barang')
            <div class="alert alert-danger">{{  $message }}</div>
        @enderror
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <a href="/inventaris" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
        </div>     
</form>

@endsection