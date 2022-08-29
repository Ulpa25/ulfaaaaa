<?php
require 'Function.php'; 
$barang = query("SELECT * FROM tb_barang ORDER BY harga DESC");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>halaman admin</title>
    </head>
    <body>

    <h1>Daftar Penjualan</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no.</th>
            <th>Nama Barang</th>
            <th>Berat</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>ERORR</th>
        </tr>

        <?php $i =1; ?>
        <?php foreach ($barang as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama_barang"]; ?></td>
            <td><?= $row["berat"]; ?></td>
            <td><?= $row["stok"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td>
                <a href="Update.php?id=<?= $row["id"];?>" onclick="return confirm('apakah anda yakin ingin mengubah data ini?')">Update</a>
                <a href="Delete.php?id=<?= $row["id"];?>" onclick="return confirm('apakah anda yakin ingin mengubah data ini?')">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>

        <?php endforeach; ?>
    </body>
</html>