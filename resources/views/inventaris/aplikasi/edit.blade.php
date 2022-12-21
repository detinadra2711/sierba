@extends('layout.master')

@section('head')
APLIKASI IT RS ERBA
@endsection

@section('content')

<form action="/aplikasi/{{ $aplikasi->id }}" method="POST">
    @csrf
    @method("PUT")
        <div class="form-group">
            <label>Nama Aplikasi</label>
            <input type="text" name="nama_aplikasi" value="{{ $aplikasi->nama_aplikasi }}" class="form-control" placeholder="nama aplikasi" required="">
        </div>
        @error('nama_aplikasi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" value="{{ $aplikasi->keterangan }}" class="form-control" placeholder="keterangan" required=""></textarea>
        </div>
        @error('keterangan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Lisensi</label>
            <input type="text" name="lisensi" value="{{ $aplikasi->lisensi }}" rows="3" class="form-control" placeholder="lisensi">
        </div>
        @error('lisensi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            <a href="/aplikasi" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
        </div>     
</form>

@endsection