@extends('layout.master')

@section('head')
TAMBAH TELEPON EKSTENSION RS ERBA
@endsection

@section('content')

    <form action="/telepon" method="POST">
    @csrf
    <div class="form-group">
        <label>Gedung</label>
        <input type="text" name="Gedung" class="form-control" placeholder="nama gedung" required="">
    </div>
        @error('Gedung')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Nama Ruangan</label>
        <select name="Ruangan_id" class="form-control" id="">
            <option value="">--- pilih nama ruangan ---</option>
            @forelse ($ruangan as $item)
                <option value="{{ $item->no }}">{{ $item->nama_ruangan }}</option>
            @empty
                <option value=""> No Room Found</option>
            @endforelse
        </select>
    </div>
    <div class="form-group">
        <label>Nomor Ekstension</label>
        <input type="text" name="Nomor_Ekstension" class="form-control" placeholder="nomor ekstension" required="">
    </div>
        @error('Nomor_Ekstension')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="Keterangan" class="form-control" placeholder="aktif/non-aktif" required="">
    </div>
        @error('Keterangan')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
    </div>     
</form>


    
@endsection