@extends('layout.master')

@section('content')

<h2>Form Input Nomor Telephone Ekstension</h2>
    <form method="post" action="{{url('telephone/save')}}">
    {{-- method POST menggunakan csrf -> fitur keamanan untuk pencegahan penginputan data dari luar aplikasi atau sistem--}}
    @csrf 
        <div class="form-group">
            <label>Gedung</label>
            <input type="text" name="Gedung" class="form-control" placeholder="Gedung" required="">
        </div>
        <div class="form-group">
            <label>Ruangan</label>
            <input type="text" name="Ruangan" class="form-control" placeholder="Ruangan" required="">
        </div>
        <div class="form-group">
            <label>Nomor Ekstension</label>
            <input type="text" name="Nomor_Ekstension" class="form-control" placeholder="Nomor_Ekstension" required="">
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="Keterangan" rows="3" class="form-control" placeholder="Keterangan" required=""></textarea>
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>     
    </form>
     <button type="submit" class="btn btn-danger"><i class="'fa fa-share"></i>Kembali</button>


@endsection