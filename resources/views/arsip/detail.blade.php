@extends('layout.master')

@section('head')
ARSIP IT RS ERBA    
@endsection

@section('content')

{{-- <div>
    <embed src="{{ asset('file_manager/' . $arsip->nama_file) }}" class="card-img-top" alt="...">
    <div>
        <h4 style="text-align:justify" class="card-title">{{ $arsip->judul }}</h4>
        <br>
        <a href="/arsip" class="btn btn-secondary btn-block btn-sm">Kembali</a>
    </div>
</div> --}}

<div class='col-md-12'>
    <div class='panel panel-primary'>
        <div class='panel-heading'>
        <br>
        </div>
        <div class='panel-body'>
            <div>
                <embed src="{{ asset('file_manager/' . $arsip->nama_file) }}" type='application/pdf' width='100%' height='700px' />
            </div>
        </div>
    </div>
    <a href="/arsip" class="btn btn-secondary btn-block btn-sm">Kembali</a>
</div>

    

@endsection