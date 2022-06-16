
<?php 
// koneksi database
include '../include/koneksi.php';

// menangkap data yang di kirim dari form
$idm = $_POST['id_kem'];
$st  = $_POST['status'];

// update data ke database
mysqli_query($koneksi," UPDATE kematian SET status='$st' WHERE id_kem='$idm' ");

// mengalihkan halaman kembali ke index.php
header("location:status.php");

?>