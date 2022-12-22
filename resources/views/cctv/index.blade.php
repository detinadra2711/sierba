@extends('layout.master')

@section('head')
CCTV IT RS ERBA
@endsection

@section('content')

  <a href="/cctv/create" class="btn btn-primary btn-sm mb-3">Tambah Data</a>

	{{-- <form action="/aplikasi/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari data .." value="{{ old('cari') }}" disabled>
		<input type="submit" value="SEARCH">
	</form> --}}

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">IP CCTV</th>
      <th scope="col">Ruang</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Jenis CCTV</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Kondisi</th>
    </tr>
  </thead>
  <tbody>
    {{-- $key adalah indexnya, $value adalah isi dari index --}}
    @forelse ($cctv as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->ip_cctv }}</td>
            <td>{{ $value->ruang }}</td>
            <td>{{ $value->lokasi }}</td>
            <td>{{ $value->jenis_cctv }}</td>
            <td>{{ $value->jumlah }}</td>
            <td>{{ $value->kondisi }}</td>
            <td>
                
                <form action="/cctv/{{ $value->id }}" method="POST">
                    {{-- <a href= "/inventaris/{{ $value->no }}" class="btn btn-info btn-sm">Detail</a> --}}
                    {{-- <a href= "/cctv/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a> --}}
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
{{ $cctv->links() }}

@endsection