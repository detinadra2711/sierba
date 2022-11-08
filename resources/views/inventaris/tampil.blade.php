@extends('layout.master')

@section('head')
INVENTARIS IT RS ERBA
@endsection

@section('content')

    <a href="/inventaris/tambah" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
	<!-- <form action="/inventaris/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari data .." value="{{ old('cari') }}" disabled>
		<input type="submit" value="SEARCH">
	</form> -->

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jenis Pengadaan</th>
      <th scope="col">Kategori Barang</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    {{-- $key adalah indexnya, $value adalah isi dari index --}}
    @forelse ($inventaris as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->jns_id }}</td>
            <td>{{ $value->nama_barang }}</td>
            <td>{{ $value->jenis_pengadaan }}</td>
            <td>{{ $value->kategori_barang }}</td>
            <td>
                
                <form action="/inventaris/{{ $value->no }}" method="POST">
                    {{-- <a href= "/inventaris/{{ $value->no }}" class="btn btn-info btn-sm">Detail</a> --}}
                    <a href= "/inventaris/{{ $value->no }}/edit" class="btn btn-warning btn-sm">Edit</a>
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
{{ $inventaris->links() }}

@endsection