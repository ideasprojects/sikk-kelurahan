<?php
include "../include/koneksi.php";
$nkk         = $_GET['no_kk'];
$nkk         = $_REQUEST['no_kk'];
$is          = $_REQUEST['id_syarat'];
$ta          = $_REQUEST['tgl_ajuan'];
$ni          = $_REQUEST['nik_pelapor'];
$hu          = $_REQUEST['hubungan'];
$nama        = $_REQUEST['nama_alm'];
$tgl         = $_REQUEST['tgl_men'];
$jm          = $_REQUEST['jam'];
$sbb         = $_REQUEST['sebab'];
$tm          = $_REQUEST['tmp_men'];

$mysqli = "INSERT INTO kematian(no_kk, id_syarat, tgl_ajuan, nik_pelapor, hubungan, nama_alm, tgl_men, jam, sebab, tmp_men)
 VALUES ('$nkk', '$is', '$ta', '$ni', '$hu', '$nama', '$tgl', '$jm', '$sbb' , '$tm')";
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
        alert('Terjadi kesalahan saat mencoba untuk menyimpan data ke database'); window.location='mati.php?no_kk=$nkk' </script>";
        
      }
      ?>
