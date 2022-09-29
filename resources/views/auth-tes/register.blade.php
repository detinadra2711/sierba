@extends('layouts.app')

@section('content')

<style>
    body {
        background-image: url("{{ asset('template/dist/img/background.jpg') }}");
        background-size: cover;
    }
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 30px;   /* Height of the footer */
        background: transparent;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Page') }}</div>
                <br>
                <div class="card">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- <div class="row mb-3">
                            <label for="nama_user" class="col-sm-4 col-form-label text-md-end">Nama Lengkap</label>

                            <div class="col-md-6">
                                <input id="nama_user" type="text" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" value="{{ old('nama_user') }}" autofocus>

                            </div>
                                @error('nama_user')
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div> --}}

                        <div class="row mb-3">
                            <label for="username" class="col-sm-4 col-form-label text-md-end">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autofocus>

                            </div>
                                @error('username')
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        {{-- <div class="row mb-3">
                            <label for="ruangan_id" class="col-sm-4 col-form-label text-md-end">Nama Ruangan</label>

                            <div class="col-md-6">
                                <input id="ruangan_id" type="text" class="form-control @error('ruangan_id') is-invalid @enderror" name="ruangan_id" value="{{ old('ruangan_id') }}" autofocus>

                            </div>
                                @error('ruangan_id')
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div> --}}

                        <div class="row mb-3">
                            <label for="email" class="col-sm-4 col-form-label text-md-end">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>

                            </div>
                                @error('ruangan_id')
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        {{-- <div class="row mb-3">
                            <label for="ruangan_id" class="col-sm-4 col-form-label text-md-end">Unit Kerja</label>
                                <select name="ruangan_id" class="form-control">
                                    <option value=""> ---- pilih ruangan --- </option>
                                    {{-- @forelse ($ruangan_id as $item)
                                        <option value="{{ $item->no }}">{{ $item->nama_ruangan }}</option>
                                    @empty
                                        <option value="">No Room Added</option>
                                    @endforelse 
                                </select>
                        </div> --}}


                        {{-- <div class="row mb-3">
                            <label for="user_id" class="col-sm-4 col-form-label text-md-end">Tipe User</label>

                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" autofocus>

                            </div>
                                @error('user_id')
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div> --}}

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                            </div>
                                @error('password')
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.1
        <strong> Copyright &copy;<a href="https://rs-erba.go.id/">TIM IT RS ERBA 2022</a>.</strong> All rights reserved.
    </div>
  </footer>
  
@endsection
