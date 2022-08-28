<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_penjualan");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function ubah($data)
{
    global $conn;
    //simpan data dari tiap elemen dalam form
    $id = $data["id"];
    $Nama_Barang = $data['nama_barang'];
    $berat = $data['Berat'];
    $stok = $data['Stok'];
    // query UPDATE data
    $conn->query("UPDATE tb_barang SET `Nama Barang` = '$Nama_Barang', Berat = '$berat', Stok = $stok WHERE id = $id ");
    return mysqli_affected_rows($conn);
}

// ubah field Nama Barang menjadi nama_barang, Berat menjadi berat, Stok menjadi stok
// tambah field harga
// tampilkan barang dengan harga tertinggi dan terendah
// tambah method hapus