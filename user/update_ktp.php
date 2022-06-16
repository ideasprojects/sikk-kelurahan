<?php
include "../include/koneksi.php";
$nk          = $_POST['no_kk'];
$nikk        = $_POST['nik'];
$name        = $_POST['nama'];
$jk          = $_POST['gender'];
$tl          = $_POST['tempat_lahir'];
$tgl         = $_POST['tgl_lahir'];
$ag          = $_POST['agama'];
$pn          = $_POST['pendidikan'];
$pk          = $_POST['pekerjaan'];
$sn          = $_POST['status_nkh'];
$na          = $_POST['nama_ayah'];
$ni          = $_POST['nama_ibu'];
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
     $mysqli =  "UPDATE data_ktp SET nik='$nikk', nama='$name', gender='$jk', tempat_lahir='$tl', tgl_lahir='$tgl', agama='$ag', pendidikan='$pn', pekerjaan='$pk', status_nkh='$sn', nama_ayah='$na', nama_ibu='$ni', file_ktp='$nama_file', ukuran='$ukuran_file', tipe='$tipe_file' WHERE nik='$nikk' AND no_kk='$nk'";
     $result = mysqli_query($koneksi, $mysqli);
      // Eksekusi/ Jalankan query dari variabel $query
     
       if($result){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
         $url = "lihat_kk.php?no_kk=$nk";
         header("Location: ".$url);

       }else{
        // Jika Gagal, Lakukan :
        echo "
        <script type='text/javascript'>
        alert('Terjadi kesalahan saat mencoba untuk menyimpan data ke database'); window.location='edit_ktp.php?no_kk=$nk&nik=$nikk'</script>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "
      <script type='text/javascript'>
      alert('Gambar gagal di upload'); window.location='edit_ktp.php?no_kk=$nk&nik=$nikk'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "
    <script type='text/javascript'>
    alert('Ukuran gambar yang diupload tidak boleh lebih dari 1MB'); window.location='edit_ktp.php?no_kk=$nk&nik=$nikk'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "
  <script type='text/javascript'>
  alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG'); window.location='edit_ktp.php?no_kk=$nk&nik=$nikk'</script>";
}
?>
