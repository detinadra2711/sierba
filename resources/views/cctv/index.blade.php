@extends('layout.master')

@section('head')
CCTV RS ERBA
@endsection


@section('content')

@auth
<a href="/cctv/create" class="btn btn-primary btn-sm mb-4">Tambah CCTV</a>
@endauth


<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">IP CCTV</th>
      <th scope="col">Alamat IP</th>
    </tr>
  </thead>
  <tbody>
    {{-- $key adalah indexnya, $value adalah isi dari index --}}
    @forelse ($cctv as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->ip_cctv }}</td>
            <td>{{ $value->alamat_ip }}</td>
            <td>
                
                <form action="/cctv/{{ $value->id }}" method="POST">
                    {{-- <a href= "/password/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a> --}}
                    <a href= "/cctv/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="delete" value="Delete" class="btn btn-danger btn-sm delete" data-id='{{ $value->ip_cctv }}'>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td>No Data Found</td>
        </tr>
    @endforelse
  </tbody>
</table>


@endsection