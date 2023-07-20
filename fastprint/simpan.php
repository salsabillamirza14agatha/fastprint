<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$notar            = $_POST['notar'];
$nama            = $_POST['nama'];
$prodi         = $_POST['prodi'];
$jenis_kelamin   = $_POST['jenis_kelamin'];
$alamat          = $_POST['alamat'];
// query SQL untuk insert data
$query="INSERT INTO taruna2 SET notar='$notar',nama='$nama',prodi='$prodi',jenis_kelamin='$jenis_kelamin',alamat='$alamat'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman input2.php
header("location:input2.php");
?>