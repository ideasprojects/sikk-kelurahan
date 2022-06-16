<?php
//mengaktifkan seasion pada php
session_start();

//menghubungkan php dengan koneksi database
include 'include/koneksi.php';

//menangkap data yang dikirim dari form login

$eml   = $_POST['email'];
$pass  = $_POST['password'];

//menyeleksi data user dengan username dan password
$login=mysqli_query($koneksi, "SELECT * FROM reg where email= '$eml' AND password='$pass'");
//menghitung jumlah data yang ditemukan
$cek= mysqli_num_rows($login);
//cek apakah username dan password ditemukan pada database
if($cek > 0){
	$data= mysqli_fetch_assoc($login);
	//cek jika user login sebagai admin
	$_SESSION['email']= $eml;
	$_SESSION['status'] = "login";
	//alihkan kehalaman dashbord admin
	header("location:user/index.php");

}else{
	//alihkan kehalaman login kembali
	header("location:index.html?pesan=gagal");
}
?>