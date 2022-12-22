@extends('layout.master')

@section('head')
EDIT TELEPON EKSTENSION RS ERBA
@endsection

@section('content')

<form action="/telepon" method="POST">
    @csrf
    <div class="form-group">
        <label>Gedung</label>
        <input type="text" value="{{ $telepon->Gedung }}" name="Gedung" class="form-control" placeholder="nama gedung" required="">
    </div>
        @error('Gedung')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Nama Ruangan</label>
        <input type="text" value="{{ $telepon->Ruangan_id }}" name="Ruangan_id" class="form-control" placeholder="nama ruangan" required="">
    </div>
        @error('Ruangan_id')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Nomor Ekstension</label>
        <input type="text" value="{{ $telepon->Nomor_Ekstension }}" name="Nomor_Ekstension" class="form-control" placeholder="nomor ekstension" required="">
    </div>
        @error('Nomor_Ekstension')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
            <label>Keterangan</label>
            <input type="text" value="{{ $telepon->Keterangan }}" name="Keterangan" class="form-control" placeholder="keterangan" required="">
    </div>
            @error('Keterangan')
            <div class="alert alert-danger">{{  $message }}</div>
            @enderror
  
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        <a href="/telepon" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
    </div>     
</form>
    
@endsection