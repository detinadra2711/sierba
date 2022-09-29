@extends('layout.master')

@section('head')
HELP DESK IT RS ERBA
@endsection

@section('content')

    <form action="/helpdesk" method="POST">
    @csrf
    <div class="form-group">
        <label>Ticket No</label>
        <input type="text" name="ticket_no" class="form-control" placeholder="nomor tiket" disabled>
    </div>
        @error('ticket_no')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>User</label>
        <input type="text" name="user" class="form-control" placeholder="nama user" disabled>
    </div>
        @error('user')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Ruangan</label>
        <input type="text" name="ruangan" class="form-control" placeholder="nama ruangan" disabled>
    </div>
        @error('ruang')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Masalah</label>
       <textarea class="form-control" placeholder="trouble/masalah"></textarea>
    </div>
        @error('masalah')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Ticket Priority</label>
        <select name="ticket_priority" class="form-control" id="">
            <option value="">--- pilih tingkat prioritas ---</option>
            @forelse ($ticket_priority as $item)
                <option value="{{ $item->id }}">{{ $item->ticket_priority }}</option>
            @empty
                <option value="">Priority Not Set</option>
            @endforelse
        </select>
    </div>
        @error('ticket_priority')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror

    {{-- <div class="form-group">
        <label>Ticket Status</label>
        <select name="ticket_priority" class="form-control" id="">
            <option value="">--- pilih status tiket ---</option>
            @forelse ($ticket_status as $item)
                <option value="{{ $item->id }}">{{ $item->ticket_status }}</option>
            @empty
                <option value="">Status Not Set</option>
            @endforelse
        </select>
    </div>
        @error('ticket_status')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror --}}

    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
    </div>     
</form>


@endsection

