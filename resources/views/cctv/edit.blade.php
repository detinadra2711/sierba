@extends('layout.master')

@section('head')
EDIT CCTV
@endsection

@section('content')
    
<form action="/cctv/{{ $cctv->id }}" method="POST">
    @csrf
     @method("PUT")
        <div class="form-group">
            <label>IP CCTV</label>
            <input type="text" name="ip_cctv" class="form-control" placeholder="ip cctv">
        </div>
        @error('ip_cctv')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Ruang</label>
            <input type="text" name="ruang" class="form-control" placeholder="ruang">
        </div>
        @error('ruang')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Lokasi</label>
            <select name="lokasi" class="form-control" id="">
                <option value="Merpati">Merpati</option>
                <option value="Bangau">Bangau</option>
                <option value="Bangau II">Bangau II</option>
                <option value="Camar">Camar</option>
                <option value="Gudang">Gudang</option>
                <option value="Poli Rajal">Poli Rajal</option>
                <option value="Asoka">Asoka</option>
                <option value="Gedung A">Gedung A</option>
                <option value="Cendrawasih">Cendrawasih</option>
                <option value="Cempaka">Cempaka</option>
                <option value="Farmasi">Farmasi</option>
                <option value="Kenanga">Kenanga</option>
                <option value="IGD">IGD</option>
                <option value="Anak & Remaja">Anak & Remaja</option>
                <option value="Security">Security</option>
              </select>
        </div>
        @error('lokasi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Jenis CCTV</label>
            <select name="jenis_cctv" class="form-control" id="">
                <option value="Analog Camera">Analog Camera</option>
                <option value="IP Camera">IP Camera</option>
            </select>
        </div>
        @error('jenis_cctv')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Jumlah</label>
            <input type="text" name="jumlah" rows="3" class="form-control" placeholder="jumlah (unit)">
        </div>
        @error('jumlah')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Kondisi</label>
            <select name="kondisi" class="form-control" id="">
                <option value="Baik">Baik</option>
                <option value="Rusak">Rusak</option>
            </select>
        </div>
        @error('kondisi')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>     
</form>




@endsection