@extends('layout.master')

@section('head')
APLIKASI IT RS ERBA
@endsection

@section('content')
    
<form action="/aplikasi" method="POST">
    @csrf
        <div class="form-group">
            <label>Nama Aplikasi</label>
            <input type="text" name="nama_aplikasi" class="form-control" placeholder="nama aplikasi" required="">
        </div>
        @error('nama_aplikasi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" placeholder="keterangan" required="">
        </div>
        @error('keterangan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Lisensi</label>
            <input type="text" name="lisensi" rows="3" class="form-control" placeholder="lisensi">
        </div>
        @error('lisensi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>     
</form>


@endsection