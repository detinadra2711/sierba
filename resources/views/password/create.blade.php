@extends('layout.master')

@section('head')
AUTHORIZATION ACCESS
@endsection

@section('content')
    
 <form action="/password" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Aplikasi</label>
        <input type="text" name="nama_aplikasi" class="form-control" placeholder="nama aplikasi" required="">
    </div>
        @error('nama_aplikasi')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Alamat IP</label>
        <input type="text" name="alamat_ip" class="form-control" placeholder="alamat_ip" required="">
    </div>
        @error('alamat_ip')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control" placeholder="password" required="">
    </div>
        @error('password')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
  
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
    </div>     
</form>


@endsection