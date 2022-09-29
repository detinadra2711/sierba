@extends('layout.master')

@section('content')

    <h3>Edit Nomor Telephone</h3>
    @foreach($telephone as $t)
    <form method="POST" action="{{route('updateTelephone')}}">
      @csrf
      {{-- @method('PUT') --}}
      {{-- <input type="hidden" name="No" value="{{$t->No}}"> --}}
      <div class="form-group">
        <label>Gedung</label>
        <input type="text" name="Gedung" value="{{$t->Gedung}}" class="form-control" placeholder="Gedung" required="">
      </div>
      <div class="form-group">
        <label>Ruangan</label>
        <input type="text" name="Ruangan" value="{{$t->Ruangan}}" class="form-control" placeholder="Ruangan" required="">
      </div>
      <div class="form-group">
        <label>Nomor Ekstension</label>
        <input type="text" name="Nomor_Ekstension" value="{{$t->Nomor_Ekstension}}" class="form-control" placeholder="Nomor Ekstension" required="">
      </div>
      <div class="form-group">
        <label>Keterangan</label>
        <textarea name="Keterangan" class="form-control" placeholder="Keterangan" required="">{{$t->Keterangan}}</textarea>
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Nomor Telephone</button>
      </div>
    </form>
  @endforeach


@endsection