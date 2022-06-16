<?php
include "../include/koneksi.php";

$nkk         = $_GET['no_kk'];
$nk          = $_REQUEST['nik'];
$nkk         = $_REQUEST['no_kk'];
$name        = $_REQUEST['nama'];
$jk          = $_REQUEST['gender'];
$tl          = $_REQUEST['tempat_lahir'];
$tgl         = $_REQUEST['tgl_lahir'];
$ag          = $_REQUEST['agama'];
$pn          = $_REQUEST['pendidikan'];
$pk          = $_REQUEST['pekerjaan'];
$sn          = $_REQUEST['status_nkh'];
$na          = $_REQUEST['nama_ayah'];
$ni          = $_REQUEST['nama_ibu'];
$nama_file   = $_FILES['file_ktp']['name'];
$ukuran_file = $_FILES['file_ktp']['size'];
$tipe_file   = $_FILES['file_ktp']['type'];
$tmp_file    = $_FILES['file_ktp']['tmp_name'];

  // Set path folder tempat menyimpan gambarnya
$path = "ktp/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/pdf"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
     $mysqli = "INSERT INTO data_ktp(nik, no_kk, nama, gender ,tempat_lahir, tgl_lahir, agama, pendidikan, pekerjaan, status_nkh, nama_ayah, nama_ibu, file_ktp, ukuran, tipe) VALUES ('$nk', '$nkk', '$name', '$jk', '$tl', '$tgl', '$ag', '$pn', '$pk', '$sn', '$na', '$ni', '$nama_file', '$ukuran_file', '$tipe_file')";
     $result = mysqli_query($koneksi, $mysqli);
      // Eksekusi/ Jalankan query dari variabel $query

      if($result){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
       $url = "lihat_kk.php?no_kk=$nkk";
       header("Location: ".$url);

     }else{
        // Jika Gagal, Lakukan :
       echo "
       <script type='text/javascript'>
       alert('Terjadi kesalahan saat mencoba untuk menyimpan data ke database'); window.location='lihat_kk.php?no_kk=$nkk'</script>";
     }
   }else{
      // Jika gambar gagal diupload, Lakukan :
    echo "
    <script type='text/javascript'>
    alert('Gambar gagal di upload'); window.location='lihat_kk.php?no_kk=$nkk'</script>";
  }
}else{
    // Jika ukuran file lebih dari 1MB, lakukan :
  echo "
  <script type='text/javascript'>
  alert('Ukuran gambar yang diupload tidak boleh lebih dari 1MB'); window.location='lihat_kk.php?no_kk=$nkk'</script>";
}
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "
  <script type='text/javascript'>
  alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG'); window.location='lihat_kk.php?no_kk=$nkk'</script>";
}
?>
