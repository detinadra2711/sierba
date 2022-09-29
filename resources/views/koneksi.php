<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_aplikasi";

$koneksi = mysqli_connect($server,$username,$password,$database);

if (!$koneksi) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
