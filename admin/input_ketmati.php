
<?php 
// koneksi database
include '../include/koneksi.php';

// menangkap data yang di kirim dari form
$id  = $_POST['id_kem'];
$kt  = $_POST['ket'];

// update data ke database
mysqli_query($koneksi," UPDATE kematian SET ket='$kt' WHERE id_kem='$id' ");

// mengalihkan halaman kembali ke index.php
header("location:status.php");

?>