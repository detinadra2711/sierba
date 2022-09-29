@extends('layout.master')

@section('head')
ARSIP IT RS ERBA    
@endsection

@section('content')

<a href="/arsip/create" class="btn btn-primary btn-sm mb-4">Tambah Dokumen</a>

<div class="row">
    @forelse ($arsip as $item)
    <div class="col-4">
        <div class="card">
            <embed src="{{ asset('file_manager/' . $item->nama_file) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 style="text-align:justify" class="card-title">{{ $item->judul }}</h4>
                <br>
                <a href="/arsip/{{ $item->no }}" class="btn btn-secondary btn-block btn-sm">Detail</a>
                <div class="row my-2">
                    <div class="col">
                        <a href="/arsip/{{ $item->no }}/edit" class="btn btn-info btn-block btn-sm">Edit</a>
                    </div>
                    <div class="col">
                        <form action="arsip/{{ $item->no }}" method="POST">
                            @csrf
                            @method ('DELETE')
                            <input type="submit" class="btn btn-danger btn-block btn-sm "value="Hapus">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @empty
        <h2>No Document Found</h2>
    @endforelse

</div>
    
@endsection