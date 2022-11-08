@extends('layout.master')

@section('head')
APLIKASI IT RS ERBA
@endsection

@section('content')

  <a href="/aplikasi/create" class="btn btn-primary btn-sm mb-3">Tambah Data</a>

	{{-- <form action="/aplikasi/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari data .." value="{{ old('cari') }}" disabled>
		<input type="submit" value="SEARCH">
	</form> --}}

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Aplikasi</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Lisensi</th>
    </tr>
  </thead>
  <tbody>
    {{-- $key adalah indexnya, $value adalah isi dari index --}}
    @forelse ($aplikasi as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->nama_aplikasi }}</td>
            <td>{{ $value->keterangan }}</td>
            <td>{{ $value->lisensi }}</td>
            <td>
                
                <form action="/aplikasi/{{ $value->id }}" method="POST">
                    {{-- <a href= "/inventaris/{{ $value->no }}" class="btn btn-info btn-sm">Detail</a> --}}
                    <a href= "/aplikasi/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td>Data Not Found</td>
        </tr>
    @endforelse
  </tbody>
</table>
{{ $aplikasi->links() }}

@endsection