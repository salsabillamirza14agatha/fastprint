<!DOCTYPE html>
<html>
<head> <title>Fast Print</title></head>
<body>
    <h2>DATA Produk</h2>
    <br/>
    <a href="input2.php">+ TAMBAH Data</a>
    </br>
    </br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>ID Produk</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data =mysqli_query ($koneksi,"select * from mytabel");
        while ($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['id_produk'] ?></td>
                <td><?php echo $d['nama_produk'] ?></td>
                <td><?php echo $d['harga'] ?></td>
                <td><?php echo $d['kategori'] ?></td>
                <td><?php echo $d['status'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
               </td>
           </tr>
           <?php
        }
        ?>
    </table>
</body>
</html>
