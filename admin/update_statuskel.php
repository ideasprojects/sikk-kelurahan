
<?php 
// koneksi database
include '../include/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_kel'];
$st  = $_POST['status'];

// update data ke database
mysqli_query($koneksi," UPDATE kelahiran SET status='$st' WHERE id_kel='$id' ");

// mengalihkan halaman kembali ke index.php
header("location:status.php");

?>