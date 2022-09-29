@extends('layout.master')

@section('head')
AUTHORIZATION ACCESS
@endsection

@section('content')

<a href="/password/create" class="btn btn-primary btn-sm mb-4">Tambah Akses</a>


<!-- <form class="form-inline my-2 my-lg-0" type="GET" action="{{ url('/search') }}">
    <input type="search" name="query" class="form-control" placeholder="Cari">
    <button class="btn btn-outline -light my-2 my-sm-0" type="submit">Search</button>
</form> -->

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
{{ $password->links() }}


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

<script>

  $('.delete').click( function(){
    var passwordid = $(this).attr('data-id');
     swal({
    title: "Are you sure?",
    text: "Once deleted "+passwordid+", you will not be able to recover this file!  ",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("Poof! Your file has been deleted!", {
        icon: "success",
    });
    } else {
      swal("Your file is safe!");
    }
  });
});

</script>

@endsection