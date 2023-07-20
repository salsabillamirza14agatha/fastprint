<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$no = $_POST ['no'];
$id = $_POST ['id_produk'];
$nama = $_POST ['nama_produk'];
$harga = $_POST ['harga'];
$kategori = $_POST ['kategori'];
$status = $_POST ['status'];

//update data ke database
mysqli_query ($koneksi, "update mytable set no='$no',nama='$nama_produk',harga='$harga',kategori='$kategori',status='$status' where id='$id'");

//mengalihkan halaman kembali ke tampil.php
header("location:tampil.php");

?>