<?php
//Koneksi database
include 'koneksi.php';

//menangkap data id yang di kirim dari url
$id = $_GET['id_produk'];

//menghapus data dari database
mysqli_query ($kon, "delete from mytable where id_produk='$id'");

//mengalihkan halaman kembali ke index.php
header ("location:tampil.php");
?>
