<?php
include "../include/koneksi.php";
$id          = $_POST['id_kem'];
$is          = $_REQUEST['id_syarat'];
$ik          = $_REQUEST['id_kem'];
$nm          = $_REQUEST['nama_dok'];
$nmr         = $_REQUEST['nmr_dok'];
$nama_file   = $_FILES['file_dok']['name'];
$ukuran_file = $_FILES['file_dok']['size'];
$tipe_file   = $_FILES['file_dok']['type'];
$tmp_file    = $_FILES['file_dok']['tmp_name'];

  // Set path folder tempat menyimpan gambarnya
$path = "syarat_mati/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/pdf"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
     $mysqli = "INSERT INTO syarat_kem(id_syarat, id_kem, nama_dok, nmr_dok, file_dok, ukuran, tipe) VALUES ('$is', '$ik', '$nm', '$nmr', '$nama_file', '$ukuran_file', '$tipe_file')";
     $result = mysqli_query($koneksi, $mysqli);
      // Eksekusi/ Jalankan query dari variabel $query

      if($result){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        $url = "syarat_mati.php?id_kem=$id";
        header("Location: ".$url);

      }else{
        // Jika Gagal, Lakukan :
       echo "
       <script type='text/javascript'>
       alert('Terjadi kesalahan saat mencoba untuk menyimpan data ke database'); window.location='syarat_mati.php?id_kem=$id'</script>";
     }
   }else{
      // Jika gambar gagal diupload, Lakukan :
    echo "
    <script type='text/javascript'>
    alert('Gambar gagal di upload'); window.location='syarat_mati.php?id_kem=$id'</script>";
  }
}else{
    // Jika ukuran file lebih dari 1MB, lakukan :
  echo "
  <script type='text/javascript'>
  alert('Ukuran gambar yang diupload tidak boleh lebih dari 1MB'); window.location='syarat_mati.php?id_kem=$id'</script>";
}
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "
  <script type='text/javascript'>
  alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG'); window.location='syarat_mati.php?id_kem=$id'</script>";
}
?>
