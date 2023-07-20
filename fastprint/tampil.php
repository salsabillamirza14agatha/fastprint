<!DOCTYPE html>
<html>
<head> <title>PKTJ TEGAL</title></head>
<body>
    <h2>DATA TARUNA PKTJ TEGAL</h2>
    <br/>
    <a href="input2.php">+ TAMBAH TARUNA</a>
    </br>
    </br>
    <table border="1">
        <tr>
            <th>NOTAR</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data =mysqli_query ($koneksi,"select * from taruna2");
        while ($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['notar'] ?></td>
                <td><?php echo $d['nama'] ?></td>
                <td><?php echo $d['prodi'] ?></td>
                <td><?php echo $d['jenis_kelamin'] ?></td>
                <td><?php echo $d['alamat'] ?></td>
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