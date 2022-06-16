
<?php 
// koneksi database
include '../include/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_kel'];
$ia  = $_POST['id_admin'];

// update data ke database
mysqli_query($koneksi," UPDATE kelahiran SET id_admin='$ia' WHERE id_kel='$id' ");

// mengalihkan halaman kembali ke index.php
header("location:status.php");

?>