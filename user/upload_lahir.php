<?php
include "../include/koneksi.php";
$nkk         = $_GET['no_kk'];
$nkk         = $_REQUEST['no_kk'];
$ni          = $_REQUEST['nik_ayah'];
$is          = $_REQUEST['id_syarat'];
$ta          = $_REQUEST['tgl_ajuan'];
$nk          = $_REQUEST['nik_ibu'];
$namal       = $_REQUEST['nama'];
$gn          = $_REQUEST['gender'];
$ttl         = $_REQUEST['tempat_lahir'];
$tgl         = $_REQUEST['tgl_lahir'];
$jm          = $_REQUEST['jam'];
$kw          = $_REQUEST['kwn'];


$mysqli = "INSERT INTO kelahiran(no_kk, nik_ayah, id_syarat, tgl_ajuan, nik_ibu, nama, gender, tempat_lahir, tgl_lahir, jam, kwn)
VALUES ('$nkk', '$ni', '$is', '$ta', '$nk','$namal', '$gn', '$ttl', '$tgl' , '$jm', '$kw')";
$result = mysqli_query($koneksi, $mysqli);
      // Eksekusi/ Jalankan query dari variabel $query

      if($result){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        $url = "status.php?no_kk=$nkk";
        header("Location: ".$url);
      }else{
        // Jika Gagal, Lakukan :
        echo "
        <script type='text/javascript'>
        alert('Terjadi kesalahan saat mencoba untuk menyimpan data ke database'); window.location='lahir.php?no_kk=$nkk' </script>";

      }
      ?>
