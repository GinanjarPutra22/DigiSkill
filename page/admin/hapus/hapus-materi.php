<?php
require '../../../db/function.php';

$id = $_GET["id"];

if (hapusmateri($id) > 0) { // Jika function hapus ber nilai >0 maka sukses <0 gagal
    echo "<script>
        alert ('Data berhasil Dihapus');
        document.location.href = '../materi.php';
         </script>";
} else {
    echo "<script>
        alert ('Data Gagal Dihapus');
        document.location.href = '../materi.php';
        </script>";
}
