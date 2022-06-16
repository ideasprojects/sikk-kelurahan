
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KELURAHAN PABUARAN MEKAR</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<!-- cek apakah sudah login -->
<?php 
session_start();
if($_SESSION['status']!="login"){
  header("location:../index.php?pesan=belum_login");
}
?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <a href="" class="logo">
        <span class="logo-lg">Dashboard Warga</span>
      </a>
      <nav class="navbar navbar-static-top">
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account -->         
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['email']; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Keluar</a></li>
              </ul>
            </li>          
          </ul>
        </div>
      </nav>
    </header>

    <!-- Left side sidebar -->
    <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">DATA</li>
          <li>
            <a href="index.php">
              <i class="fa fa-user"></i> <span>Akun Warga</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>

          <li class="header">PENGAJUAN</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pencil-square"></i>
              <span>Pengajuan Surat</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
             <?php 
             include '../include/koneksi.php';
             $data = mysqli_query($koneksi,"SELECT no_kk FROM data_kk WHERE email = '{$_SESSION[ "email" ]}'" );
             while($d = mysqli_fetch_array($data)){
              ?>
              <li><a href="lahir.php?no_kk=<?php echo $d['no_kk']; ?>"><i class="fa fa-pencil-square-o"></i>Surat Ket.Kelahiran</a></li>

              <li><a href="mati.php?no_kk=<?php echo $d['no_kk']; ?>"><i class="fa fa-pencil-square-o"></i>Surat Ket.Kematian</a></li>
            </ul>
          </li>

          <li class="header">STATUS</li>
          <li>
            <a href="status.php?no_kk=<?php echo $d['no_kk']; ?>">
              <i class="fa fa-hourglass-2"></i> <span>Status Pengajuan Surat </span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
        </ul>
      </section>
    </aside>
    <?php } ?>

    <!-- Content Wrapper-->
    <div class="content-wrapper">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Data KTP</h3>
        </div>

        <!-- update -->
        <?php
        $nikk   = $_GET['nik'];
        $nk     = $_GET['no_kk'];     
        $data = mysqli_query($koneksi, "SELECT * FROM data_ktp WHERE no_kk='$nk' AND nik='$nikk'");
        while($d = mysqli_fetch_array($data)){
          ?>

          <!-- form start -->
          <form method="post" enctype="multipart/form-data" action="update_ktp.php">
            <div class="box-body">           
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <!-- Id Kelahiran -->
                   <input type="hidden" name="no_kk" value="<?= $nk; ?> ">
                   <label>No KK</label>
                   <input type="input" class="form-control" name="no_kk" value="<?php echo $d['no_kk']; ?>" readonly="">
                   <label>NIK</label>
                   <input type="text" class="form-control" name="nik" value="<?php echo $d['nik']; ?>" data-inputmask="'mask': ['9999-9999-9999-9999']" data-mask readonly="">
                   <label>Nama</label>
                   <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>" required="">
                   <label>Jenis Kelamin</label>
                   <select class="form-control" name="gender" required="">
                    <option value="Laki-laki" <?php if($d['gender'] == 'Laki-laki'){ echo 'selected'; } ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if($d['gender'] == 'Perempuan'){ echo 'selected'; } ?>>Perempuan</option>
                  </select>
                  <label>Tempat Lahir </label>
                  <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>" required="">
                  <label>Tanggal Lahir</label>
                  <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask  required="">
                  <label>Agama</label>
                  <select class="form-control" name="agama" required="">
                    <option value="Islam" <?php if($d['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
                    <option value="Kristen" <?php if($d['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen</option>
                    <option value="Katholik" <?php if($d['agama'] == 'Katholik'){ echo 'selected'; } ?>>Katholik</option>
                    <option value="Hindu" <?php if($d['agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
                    <option value="Budha" <?php if($d['agama'] == 'Budha'){ echo 'selected'; } ?>>Budha</option>
                    <option value="Konghucu" <?php if($d['agama'] == 'Konghucu'){ echo 'selected'; } ?>">Konghucu</option>
                    <option value="Kepercayaan" <?php if($d['agama'] == 'Kepercayaan'){ echo 'selected'; } ?>>Kepercayaan</option>
                  </select>
                  <label>Pendidikan</label>
                  <select class="form-control" name="pendidikan" required="" >
                    <option value="Tidak/Belum Sekolah" <?php if($d['pendidikan'] == 'Tidak/Belum Sekolah'){ echo 'selected'; } ?>>Tidak/Belum Sekolah</option>
                    <option value="Belum Tamat SD/Sederajat" <?php if($d['pendidikan'] == 'Belum Tamat SD/Sederajat'){ echo 'selected'; } ?>>Belum Tamat SD/Sederajat</option>
                    <option value="Tamat SD/Sederajat" <?php if($d['pendidikan'] == 'Tamat SD/Sederajat'){ echo 'selected'; } ?>>Tamat SD/Sederajat</option>
                    <option value="SLTP/Sederajat" <?php if($d['pendidikan'] == 'SLTP/Sederajat'){ echo 'selected'; } ?>>SLTP/Sederajat</option>
                    <option value="SLTA/Sederajat" <?php if($d['pendidikan'] == 'SLTA/Sederajat'){ echo 'selected'; } ?>>SLTA/Sederajat</option>
                    <option value="Diploma I/II" <?php if($d['pendidikan'] == 'Diploma I/II'){ echo 'selected'; } ?>>Diploma I/II</option>
                    <option value="Akademi/Diploma III/Sarjana Muda" <?php if($d['pendidikan'] == 'Akademi/Diploma III/Sarjana Muda'){ echo 'selected'; } ?>>Akademi/Diploma III/Sarjana Muda</option>
                    <option value="Diploma IV/Strata I" <?php if($d['pendidikan'] == 'Diploma IV/Strata I'){ echo 'selected'; } ?>>Diploma IV/Strata I</option>
                    <option value="Strata II" <?php if($d['pendidikan'] == 'Strata II'){ echo 'selected'; } ?>>Strata II</option>
                    <option value="Strata III" <?php if($d['pendidikan'] == 'Strata III'){ echo 'selected'; } ?>>Strata III</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan" value="<?php echo $d['pekerjaan']; ?>" required="">
                  <label>Status Pekawinan</label>
                  <select class="form-control" name="status_nkh" required="">
                    <option value="Belum Kawin" <?php if($d['status_nkh'] == 'Belum Kawin'){ echo 'selected'; } ?>>Belum Kawin</option>
                    <option value="Kawin"  <?php if($d['status_nkh'] == 'Kawin'){ echo 'selected'; } ?>>Kawin</option>
                    <option value="Cerai Hidup"  <?php if($d['status_nkh'] == 'Cerai Hidup'){ echo 'selected'; } ?>>Cerai Hidup</option>
                    <option value="Cerai Mati"  <?php if($d['status_nkh'] == 'Cerai Mati'){ echo 'selected'; } ?>>Cerai Mati</option>
                  </select>
                  <label>Nama Ayah</label>
                  <input type="text" class="form-control" name="nama_ayah" value="<?php echo $d['nama_ayah']; ?>" required="">
                  <label>Nama Ibu</label>
                  <input type="text" class="form-control" name="nama_ibu" value="<?php echo $d['nama_ibu']; ?>" required=""><br>
                  <label>Upload KTP</label>
                  <input type="file" name="file_ktp" > <span><?php echo $d['file_ktp'];?></span>
                  <p class="help-block">Format PDF/JPG dengan ukuran file max 1Mb</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" required=""> Saya telah mengisi data dengan benar
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button> 
              </div>

            </form>
            <?php 
          }
          ?>
        </div>
      </div>
    </body>


    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- FastClick -->
    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- InputMask -->
    <script src="../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script>
      $(function () {
  //Datemask dd/mm/yyyy
  $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
  $('[data-mask]').inputmask()
})
</script>
</html>