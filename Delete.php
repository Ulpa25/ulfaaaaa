<?php
require 'Function.php';

$id = $_GET["id"];
if( hapus($id) > 0 ) {
    echo "
            <script>
                alert('data berhaasil dihapus!');
                document.location.href= 'database Penjualan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal dihapus!');
                document.location.href= 'database Penjualan.php';
            </script>
        ";
    }
?> 