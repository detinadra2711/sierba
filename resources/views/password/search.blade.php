@extends('layout.master')

@section('head')
    
@endsection

@section('content')

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Aplikasi</th>
      <th scope="col">Alamat IP</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    {{-- $key adalah indexnya, $value adalah isi dari index --}}
    @forelse ($password as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->nama_aplikasi }}</td>
            <td>{{ $value->alamat_ip }}</td>
            <td>{{ $value->password }}</td>
            <td>
                
                <form action="/password/{{ $value->id }}" method="POST">
                    <a href= "/password/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a>
                    <a href= "/password/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="#" value="Delete" class="btn btn-danger btn-sm delete" data-id='{{ $value->nama_aplikasi }}'>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td>No Access Allowed</td>
        </tr>
    @endforelse
  </tbody>
</table>



@endsection