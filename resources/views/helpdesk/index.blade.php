@extends('layout.master')

@section('head')
HELP DESK IT RS ERBA    
@endsection

@section('content')

@auth
<a href="/helpdesk/create" class="btn btn-primary btn-sm mb-4">Tambah Tiket</a>
@endauth
 <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Ticket No</th>
      <th scope="col">User</th>
      <th scope="col">Nama Ruangan</th>
      <th scope="col">Masalah</th>
      <th scope="col">Ticket Priority</th>
      <th scope="col">Ticket Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    {{-- $key adalah indexnya, $value adalah isi dari index --}}
    @forelse ($helpdesk as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->ticket_no }}</td>
            <td>{{ $value->user }}</td>
            <td>{{ $value->ruangan }}</td>
            <td>{{ $value->masalah }}</td>
            <td>{{ $value->ticket_priority }}</td>
            <td>
              <div class="form-group">
                <select name="ticket_priority" class="form-control" id="">
                    <option value="">--- status tiket ---</option>
                    @forelse ($ticket_status as $item)
                        <option value="{{ $item->id }}">{{ $item->ticket_status }}</option>
                    @empty
                        <option value="">Status Not Set</option>
                    @endforelse
                </select>
              </div>
                @error('ticket_status')
                <div class="alert alert-danger">{{  $message }}</div>
                @enderror
              
              
              </td>
            <td>
                
                <form action="/helpdesk/{{ $value->id }}" method="POST">
                    <a href= "/helpdesk/{{ $value->id }}" class="btn btn-success btn-sm">Simpan</a>
                    <a href= "/helpdesk/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a>
                    

                    {{-- <a href= "/helpdesk/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a> --}}
                    {{-- @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm"> --}}
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
    
@endsection