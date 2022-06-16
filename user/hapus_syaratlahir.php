<?php 
// koneksi database
include '../include/koneksi.php';

// menangkap data id yang di kirim dari url
$nd  = $_GET['nmr_dok'];
$idl = $_GET['id_kel'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM syarat_kel WHERE nmr_dok='$nd' AND id_kel='$idl' ");

// mengalihkan halaman kembali ke index.php
$url = "syarat_lahir.php?id_kel=$idl";
header("Location: ".$url);

?>