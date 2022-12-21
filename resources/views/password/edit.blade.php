@extends('layout.master')

@section('head')
EDIT PASSWORD    
@endsection

@section('content')

<form action="/password" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Aplikasi</label>
        <input type="text" value="{{ $password->nama_aplikasi }}" name="nama_aplikasi" class="form-control" placeholder="nama aplikasi" required="">
    </div>
        @error('nama_aplikasi')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Alamat IP</label>
        <input type="text" value="{{ $password->alamat_ip }}" name="alamat_ip" class="form-control" placeholder="alamat_ip" required="">
    </div>
        @error('alamat_ip')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Password</label>
        <input type="text" value="{{ $password->password }}" name="password" class="form-control" placeholder="password" required="">
    </div>
        @error('password')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
  
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        <a href="/password" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
    </div>     
</form>
    
@endsection