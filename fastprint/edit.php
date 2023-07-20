<!DOCTYPE html>
<html>
<head>
    <title>EDIT DATA PRODUK</title>
</head>
<body>
    <h2> DATA PRODUK - FastPrint</h2>
    <br/>
    <a href="tampil.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>EDIT DATA PRODUK</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'] ;
    $data = mysqli_query($kon,"select * from mytable where id_produk='$id'");
    while ($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>ID Produk</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id_produk']; ?>">
                        <input type="text" name="id" value="<?php echo $d['id_produk']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td><input type="text" name="nama" value="<?php echo $d['nama_produk']; ?>"></td>
                </tr>
               <tr><td>Harga</td><td>
                        <input type="text" name="harga" value="<?php echo $d['harga']; ?>">
                    </td></tr>
                <tr><td>Prodi</td><td>
                        <select name="kategori">
                            <?php

        //proses menampilkan pilihan jenis pekerjaan.
        //jika prodi = teknik rekayasa otomotif, maka pada option 'teknik rekayasa otomotif' diberi label 'selected', demikian seterusnya

        if ($d['kategori'] == "L QUEENLY") echo "<option value='L QUEENLY' selected>L QUEENLY</option>";
        else echo "<option value='L QUEENLY'>L QUEENLY</option>";
        
        if ($d['kategori'] == "L MTH AKSESORIS (IM)") echo "<option value='L MTH AKSESORIS (IM)' selected>L MTH AKSESORIS (IM)</option>";
        else echo "<option value='L MTH ASKESORIS (IM)'>L MTH AKSESORIS (IM)</option>";

        if ($d['kategori'] == "L MTH TABUNG(LK)") echo "<option value='L MTH TABUNG(LK)' selected>L MTH TABUNG(LK)</option>";
        else echo "<option value='L MTH TABUNG(LK)'>L MTH TABUNG(LK)</option>";
         if ($d['kategori'] == "SP MTH SPAREPART (LK)") echo "<option value='SP MTH SPAREPART (LK)' selected>SP MTH SPAREPART (LK)</option>";
        else echo "<option value='SP MTH SPAREPART (LK)'>SP MTH SPAREPART (LK)</option>";
         if ($d['kategori'] == "CI MTH TINTA LAIN (IM)") echo "<option value='CI MTH TINTA LAIN (IM)' selected>CI MTH TINTA LAIN (IM)</option>";
        else echo "<option value='CI MTH TINTA LAIN (IM)'>CI MTH TINTA LAIN (IM)</option>";
        ?>
                    </select>
                </td></tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" value="<?php echo $d['status']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <?php
}
?>

</body>
</html>
