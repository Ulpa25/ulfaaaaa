<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_penjualan");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function ubah($data) {
    global $conn;
    //simpan data dari tiap elemen dalam form
        $id = $data["id"];
        $Nama_Barang = ($data["Nama Barang"]);
        $Berat = ($data["Berat"]);
        $Stok = ($data["Stok"]);
    // query UPDATE data
        $query ="UPDATE tb_barang SET
                    Nama Barang = '$Nama_Barang',
                    Berat = '$Berat',
                    Stok = $Stok
                    WHERE id = $id ";  

        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }
?>