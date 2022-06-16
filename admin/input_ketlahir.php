
<?php 
// koneksi database
include '../include/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_kel'];
$kt  = $_POST['ket'];

// update data ke database
mysqli_query($koneksi," UPDATE kelahiran SET ket='$kt' WHERE id_kel='$id' ");

// mengalihkan halaman kembali ke index.php
header("location:status.php");

?>