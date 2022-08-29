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
    $nama_barang = $data['nama_barang'];
    $berat = $data['berat'];
    $stok = $data['stok'];
    $harga = $data['harga'];
    // query UPDATE data
    $conn->query("UPDATE tb_barang SET nama_barang = '$nama_barang', berat = '$berat', stok = $stok, harga = $harga WHERE id = $id ");
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_barang WHERE id= $id");
    
return mysqli_affected_rows($conn); 
}
// ubah field Nama Barang menjadi nama_barang, Berat menjadi berat, Stok menjadi stok /finish
// tambah field harga /finish
// tampilkan barang dengan harga tertinggi dan terendah /finish
// tambah method hapus