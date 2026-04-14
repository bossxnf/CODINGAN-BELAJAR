<?php 
//koneksi database
include 'koneksi.php';

//menangkap data dari form input
$merk = $_POST['merk'];
$type = $_POST['type'];
$cilinder = $_POST['cilinder'];
$thn_perakitan = $_POST['thn_perakitan'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];

//menginput data ke database tabel motor
mysqli_query($koneksi,"insert into motor values('','$merk','$type','$cilinder','$thn_perakitan','$warna','$harga')");

//mengarahkan halaman kembali ke tbl_motor.php
header("location:tbl_motor.php");
?>