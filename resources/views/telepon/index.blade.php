@extends('layout.master')

@section('head')
Nomor Telepon Ekstension RS ERBA    
@endsection

@section('content')

<a href="/telepon/create" class="btn btn-primary btn-sm mb-4">Tambah Nomor Telepon</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gedung</th>
      <th scope="col">Nama Ruangan</th>
      <th scope="col">Nomor Ekstension</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    {{-- $key adalah indexnya, $value adalah isi dari index --}}
    
    @forelse ($telepon as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->Gedung }}</td>
            <td>{{ $value->Ruangan_id }}</td>
            <td>{{ $value->Nomor_Ekstension }}</td>
            <td>{{ $value->Keterangan }}</td>
            <td>
                
                <form action="/telepon/{{ $value->no }}" method="POST">
                    <a href= "/telepon/{{ $value->no }}" class="btn btn-info btn-sm">Detail</a>
                    <a href= "/telepon/{{ $value->no }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td>No Telephone Number</td>
        </tr>
    @endforelse
  </tbody>
</table>
    
@endsection