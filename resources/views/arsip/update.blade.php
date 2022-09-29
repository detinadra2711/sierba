@extends('layout.master')

@section('head')
ARSIP IT RS ERBA
@endsection

@section('content')

    <form action="/arsip/{{ $arsip->no }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Judul Dokumen</label>
        <input type="text" name="judul" value="{{ $arsip->judul }}" class="form-control" placeholder="judul dokumen" required="">
    </div>
        @error('judul')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Upload File</label>
        <input type="file" name="nama_file" class="form-control" placeholder="nama file" required="">
    </div>
        @error('nama_file')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Jenis Dokumen</label>
        <select name="jenis_id" class="form-control" id="">
            <option value="">--- pilih jenis dokumen ---</option>
            @forelse ($jenis as $item)
                @if ($item->no === $arsip->jenis_id)
                    <option value="{{ $item->id }}" selected>{{ $item->jenis }}</option>
                @else
                    <option value="{{ $item->id }}">{{ $item->jenis }}</option>
                @endif
                
            @empty
                <option value="">Document Not Found</option>
            @endforelse
        </select>
    </div>
        @error('jenis_id')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Nomor Dokumen</label>
        <input type="text" name="nomor_dokumen" rows="3" class="form-control" placeholder="nomor dokumen" required="">
    </div>
        @error('nomor_dokumen')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
    </div>     
</form>
    
@endsection