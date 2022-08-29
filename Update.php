<?php
require 'Function.php';
//ambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id

$brg = query("SELECT * FROM tb_barang WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belom
if( isset($_POST["submit"])) {

   //cek data apakah berhasil diubah atau tidak
    if( ubah($_POST) > 0 ){
        echo "
            <script>
                alert('data berhaasil diubah!');
                document.location.href= 'database Penjualan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href= 'database Penjualan.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>ubah data mahasiswa</title>
        </head>
        <body>
            <h1>Update data mahasiswa</h1>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $brg["id"];?>">
            <ul>
                <li>
                    <label for="nb">nama barang: </label>
                    <input type="text" name="nama_barang" id="nb" value="<?= $brg["nama_barang"];?>">
                </li>
                <li>
                    <label for="bt">berat: </label>
                    <input type="text" name="berat" id="bt" value="<?= $brg["berat"];?>">
                </li>
                <li>
                    <label for="s">stok : </label>
                    <input type="text" name="stok" id="s" value="<?= $brg["stok"];?>">
                </li>
                <li>
                    <label for="h">harga : </label>
                    <input type="text" name="harga" id="h" value="<?= $brg["harga"];?>">
                </li>
                <button type="submit" name="submit">simpan</button>
            </ul>
            </form>
        </body>
    </html>