<?php
include 'koneksi.php';
?>

<h3>Data Produk</h3>

<form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 <style>
        table {
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  border: 3px solid purple;
}
    </style>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<a href="input2.php">+ TAMBAH DATA</a> 
<table border="1">
	<tr>
		<th>No</th>
		<th>ID Produk</th>
		<th>Nama Produk</th>
		<th>Harga</th>
		<th>Kategori</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = $kon->query("select * from mytable where status like '$cari'");
	}else{
		$data = $kon->query("SELECT * from mytable");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $d['no']; ?></td>
		<td><?php echo $d['id_produk']; ?></td>
		<td><?php echo $d['nama_produk']; ?></td>
		<td><?php echo $d['harga']; ?></td>
		<td><?php echo $d['kategori']; ?></td>
		<td><?php echo $d['status']; ?></td>
		<td>
            <a href="edit.php?id=<?php echo $d['id_produk']; ?>">EDIT</a>
            <a href="hapus.php?id=<?php echo $d['id_produk']; ?>">HAPUS</a>
		</td>
	</tr>
	<?php } ?>
</table>