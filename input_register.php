<?php
include "include/koneksi.php";
$eml	= $_REQUEST['email'];
$name	= $_REQUEST['nama'];
$tgl  	= $_REQUEST['tgl_lahir'];
$telp   = $_REQUEST['no_hp'];
$pass	= $_REQUEST['password'];
$koderegis  = $_REQUEST['kode_regis'];

$kode = "pakar";
if($kode != $koderegis ){
	header("location:register.html");
	echo "Kode Salah";
	
}else{

	$mysqli	= "INSERT INTO reg (email, nama, tgl_lahir, no_hp, password) VALUES ('$eml', '$name','$tgl', '$telp', '$pass')";
	$result	= mysqli_query($koneksi, $mysqli);

	if ($result) {
		header("location:login.html");
		
	} else {
		echo "Input gagal";
	}
}
mysqli_close($koneksi);
?>