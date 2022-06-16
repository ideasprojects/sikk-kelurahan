<?php
include "../include/koneksi.php";
$nk          = $_POST['no_kk'];
$name        = $_POST['kepala_keluarga'];
$al          = $_POST['alamat'];
$rtw         = $_POST['rtrw'];
$kel         = $_POST['kelurahan'];
$kec         = $_POST['kecamatan'];
$kt          = $_POST['kota'];
$ps          = $_POST['pos'];
$pr          = $_POST['provinsi'];
$nama_file   = $_FILES['file_kk']['name'];
$ukuran_file = $_FILES['file_kk']['size'];
$tipe_file   = $_FILES['file_kk']['type'];
$tmp_file    = $_FILES['file_kk']['tmp_name'];

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
     $mysqli =  "UPDATE data_kk SET no_kk='$nk', kepala_keluarga='$name', alamat='$al', rtrw='$rtw', kelurahan='$kel', kecamatan='$kec', kota='$kt', pos='$ps', provinsi='$pr', file_kk='$nama_file', ukuran='$ukuran_file', tipe='$tipe_file' WHERE no_kk='$nk' ";
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
        alert('Terjadi kesalahan saat mencoba untuk menyimpan data ke database'); window.location='edit_kk.php?no_kk=$nk'</script>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "
      <script type='text/javascript'>
      alert('Gambar gagal di upload'); window.location='edit_kk.php?no_kk=$nk'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "
    <script type='text/javascript'>
    alert('Ukuran gambar yang diupload tidak boleh lebih dari 1MB'); window.location='edit_kk.php?no_kk=$nk'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "
  <script type='text/javascript'>
  alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG'); window.location='edit_kk.php?no_kk=$nk'</script>";
}
?>
