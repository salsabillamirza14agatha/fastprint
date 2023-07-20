<?php
//Koneksi database
include 'koneksi.php';

//menangkap data id yang di kirim dari url
$id = $_GET['id_produk'];

//menghapus data dari database
mysqli_query ($koneksi, "delete from mytable where id='$id_produk'");

//mengalihkan halaman kembali ke index.php
header ("location:tampil.php");
?>