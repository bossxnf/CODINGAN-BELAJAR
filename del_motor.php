<?php

include 'koneksi.php'; // menghubungkan koneksi database

$id_motor = $_GET['id_motor']; //untuk mengangkat data id_motor yg dikirim dri url

//query untuk menghapus data dri database
mysqli_query($koneksi,"delete from motor where id_motor='$id_motor'");

header("location:tbl_motor.php"); //mengalihkan halaman kembali ke tbl_motor.php
?>
