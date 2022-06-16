<?php
//mengaktifkan seasion pada php
session_start();

//menghubungkan php dengan koneksi database
include 'include/koneksi.php';

//menangkap data yang dikirim dari form login

$id    = $_POST['id_admin'];
$pass  = $_POST['password'];

//menyeleksi data user dengan username dan password
$login=mysqli_query($koneksi, "SELECT * FROM admin where id_admin= '$id' AND password='$pass'");
//menghitung jumlah data yang ditemukan
$cek= mysqli_num_rows($login);
//cek apakah username dan password ditemukan pada database
if($cek > 0){
	$data= mysqli_fetch_assoc($login);
	//cek jika user login sebagai admin
	$_SESSION['id_admin']= $id;
	$_SESSION['status']  = "login";
	//alihkan kehalaman dashbord admin
	header("location:admin/index.php");

}else{
	//alihkan kehalaman login kembali
	header("location:index.html?pesan=gagal");
}
?>