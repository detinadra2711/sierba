@extends('layout.master')

@section('head')
INVENTARIS IT RS ERBA
@endsection

@section('content')
    
<form action="/inventaris" method="POST">
    @csrf
  <div class="form-group">
            <label>Jenis Barang</label>
            {{-- <input type="text" name="jenis_barang" class="form-control" placeholder="jenis barang" required=""> --}}
            <select name="jns_id" class="form-control">
                <option value=""> -- pilih jenis barang --- </option>
                @forelse ($jns as $item)
                    <option value="{{ $item->id }}"> {{ $item->jenis }} </option>
                @empty
                    <option value="No Inventory"></option>
                @endforelse
            </select>
        </div>
        @error('jenis_barang')
            <div class="alert alert-danger">{{  $message }}</div>
        @enderror
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" placeholder="nama barang" required="">
        </div>
        @error('nama_barang')
            <div class="alert alert-danger">{{  $message }}</div>
        @enderror
        <div class="form-group">
            <label>Jenis Pengadaan</label>
            <input type="text" name="jenis_pengadaan" class="form-control" placeholder="jenis pengadaan" required="">
        </div>
        @error('jenis_pengadaan')
            <div class="alert alert-danger">{{  $message }}</div>
        @enderror
        <div class="form-group">
            <label>Kategori Barang</label>
            <textarea name="kategori_barang" rows="3" class="form-control" placeholder="kategori barang" required=""></textarea>
        </div>
        @error('kategori_barang')
            <div class="alert alert-danger">{{  $message }}</div>
        @enderror
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>     
</form>



@endsection