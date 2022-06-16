<?php 
// koneksi database
include '../include/koneksi.php';

// menangkap data id yang di kirim dari url
$nk = $_GET['nik'];
$nkk = $_GET['no_kk'];
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM data_ktp WHERE no_kk='$nkk' AND nik='$nk' ");

// mengalihkan halaman kembali ke index.php
$url = "lihat_kk.php?no_kk=$nkk";
header("Location: ".$url);

?>