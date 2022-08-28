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
                    <label for="Nama Barang">Nama Barang: </label>
                    <input type="text" name="nama_barang" id="Nama Barang" value="<?= $brg["Nama Barang"];?>">
                </li>
                <li>
                    <label for="Berat">Berat: </label>
                    <input type="text" name="Berat" id="Berat" value="<?= $brg["Berat"];?>">
                </li>
                <li>
                    <label for="Stok">Stok : </label>
                    <input type="text" name="Stok" id="Stok" value="<?= $brg["Stok"];?>">
                </li>
                <button type="submit" name="submit">simpan</button>
            </ul>
            </form>
        </body>
    </html>