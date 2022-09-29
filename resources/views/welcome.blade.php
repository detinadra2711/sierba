{{-- extends mengarah ke folder VIEWS --}}
@extends('layout.master')

@section('head')
ARSIP IT ERBA
@endsection

{{-- @section('head')
    <h5 align="center">ARSIP</h5>
@endsection --}}

@section('content')

<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_aplikasi";

$koneksi = mysqli_connect($server,$username,$password,$database);

if (!$koneksi) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}

$dokumen = mysqli_query($koneksi, "SELECT * FROM data_file");
?>

    <style type="text/css">
        body {
            font-family: verdana;
            font-size: 12px;
            background-image: url('bg.png');
            height: 500px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        a {
            text-decoration: none;
            color: #3050F3;
        }

        a:hover {
            color: #000F5E;
        }
    </style>
    
    <form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
        <br>
        <table width="600" border="0">
            <tr>
                <td width="150">Nomor Dokumen</td>
                <td><input type="text" name="no_dokumen" placeholder="nomor" required></td>
            </tr>
            <tr>
                <td width="100">Judul Dokumen</td>
                <td><input type="text" name="judul" placeholder="Judul" required></td>
            </tr>
            <tr>
                <td width="100">Jenis Dokumen </td>
                <td>
                    <select name="jenis" id="jenis">
                        {{-- <option disabled selected> Pilih Jenis Dokumen </option>
                        <option value="Regulasi Pemerintah">Regulasi Pemerintah</option>
                        <option value="Regulasi Pemerintah">Regulasi Internal</option>
                        <option value="Regulasi Pemerintah">SOP</option>
                        <option value="Regulasi Pemerintah">Pedoman</option> --}}
                        <?php
                                $sql = mysqli_query($koneksi, "SELECT * FROM jenis_dok");
                                while ($data = mysqli_fetch_array($sql)) {
                                ?>
                            <option value="<?= $data['jenis'] ?>"><?= $data['jenis'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="100">File PDF</td>
                <td><input type="file" name="nama_file" required></td>
            </tr>
            <tr>
                <td width="100"></td>
                <td><input type="submit" value="Upload File" name="simpan"></td>
            </tr>
        </table>
    </form>
    <br><br>
    <hr>
    <center><b>ARSIP BERKAS IT RSERBA</b></center>
    <br>
    <table align="center" width="800" border='0' cellpadding="2" cellspacing="1" bgcolor="#000000">
        <tr>
            <th bgcolor="#B4C424" width="10">No. Dokumen</th>
            <th bgcolor="#B4C424" width="100">Judul Dokumen</th>
            <th bgcolor="#B4C424" width="100">Jenis Dokumen</th>
            <th bgcolor="#B4C424" width="100">View</th>
            <th bgcolor="#B4C424" width="100">Hapus</th>
        </tr>
        {{-- <?php
       // $query = mysqli_query($koneksi, "SELECT * FROM data_file ORDER BY no_dokumen DESC");
       // while ($data = mysqli_fetch_array($query)) {
        ?> --}}
            <tr>
                
            </tr>
        <?php
       // }
        ?>
    </table>

    
@endsection

