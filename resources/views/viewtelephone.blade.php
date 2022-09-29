@extends('layout.master')

@section('content')



<a class="btn btn-success" href="{{ url('telephone/add') }}"><i class="fa fa-plus"></i> Tambah Nomor Telephone</a>
<br><br>

<table class="table table-bordered table-hover">
  <tr>
    <th>No</th>
    <th>Gedung</th>
    <th>Ruangan</th>
    <th>Nomor Ekstensi</th>
    <th>Keterangan</th>
  </tr>
  @foreach($telephone as $t) 
  <tr>
    <td>{{$t->No}}</td>
    <td>{{$t->Gedung}}</td>
    <td>{{$t->Ruangan}}</td>
    <td>{{$t->Nomor_Ekstension}}</td>
    <td>{{$t->Keterangan}}</td>
    <td>
      <a href="/telephone/ubah/{{$t->No}}" class="btn btn-warning btn-sm"><i class="fa fa-cog"></i></a>
      <a href="/telephone/delete/{{$t->No}}" onclick="return confirm('Apakah Anda Yakin Menghapus Nomor Telephone?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  @endforeach
</table>


@endsection