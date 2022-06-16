<?php
include "../include/koneksi.php";
$nkk         = $_POST['no_kk'];
$nkk         = $_REQUEST['no_kk'];
$name        = $_REQUEST['kepala_keluarga'];
$alt         = $_REQUEST['alamat'];
$rtw         = $_REQUEST['rtrw'];
$kl          = $_REQUEST['kelurahan'];
$kc          = $_REQUEST['kecamatan'];
$kt          = $_REQUEST['kota'];
$ps          = $_REQUEST['pos'];
$prv         = $_REQUEST['provinsi'];
$eml         = $_REQUEST['email'];
$nama_file   = $_FILES['file_kk']['name'];
$ukuran_file = $_FILES['file_kk']['size'];
$tipe_file   = $_FILES['file_kk']['type'];
$tmp_file    = $_FILES['file_kk']['tmp_name'];

  // Set path folder tempat menyimpan gambarnya
$path = "kk/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/pdf"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
     $mysqli = "INSERT INTO data_kk(no_kk, kepala_keluarga, alamat, rtrw, kelurahan, kecamatan, kota, pos, provinsi, email, file_kk, ukuran, tipe) VALUES ('$nkk', '$name','$alt', '$rtw', '$kl', '$kc', '$kt' , '$ps', '$prv', '$eml', '$nama_file', '$ukuran_file', '$tipe_file')";
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
        alert('Terjadi kesalahan saat mencoba untuk menyimpan data ke database'); window.location='index.php'</script>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "
      <script type='text/javascript'>
      alert('Gambar gagal di upload'); window.location='index.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "
    <script type='text/javascript'>
    alert('Ukuran gambar yang diupload tidak boleh lebih dari 1MB'); window.location='index.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "
  <script type='text/javascript'>
  alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG'); window.location='index.php'</script>";
}
?>
