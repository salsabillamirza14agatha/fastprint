<!DOCTYPE html>
<html>
    <head>
        <title>PKTJ TEGAL</title>
    </head>
    <body>
        <h1> FORM TAMBAH PRODUK</h1>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>ID Produk</td><td><input type="text" name="id_produk"></td></tr>
                <tr><td>Nama Produk</td><td><input type="text" name="nama_produk"></td></tr>
                <tr><td>Harga</td><td><input type="text" name="harga"></td></tr>
                <tr><td>Kategori</td><td>
                        <select name="prodi">
                            <option value="L QUEENLY">L QUEENLY</option>
                            <option value="L MTH AKSESORIS (IM)">L MTH AKSESORIS (IM)</option>
                            <option value="L MTH TABUNG (LK)">L MTH TABUNG (LK)</option>
                            <option value="SP MTH SPAREPART (LK)">SP MTH SPAREPART (LK)</option>
                            <option value="CI MTH TINTA LAIN (IM)">CI MTH TINTA LAIN (IM)</option>
                        </select>
                    </td></tr>
                <tr><td>Status</td><td><input type="text" name="status"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>