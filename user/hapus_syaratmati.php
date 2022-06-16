<?php 
// koneksi database
include '../include/koneksi.php';

// menangkap data id yang di kirim dari url
$nd  = $_GET['nmr_dok'];
$idm = $_GET['id_kem'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM syarat_kem WHERE nmr_dok='$nd' AND id_kem='$idm' ");

// mengalihkan halaman kembali ke index.php
$url = "syarat_mati.php?id_kem=$idm";
header("Location: ".$url);

?>