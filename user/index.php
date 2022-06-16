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
            <?php
          }
          ?>
        </li>
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper-->
  <div class="content-wrapper">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Data KK</h3>
      </div>

      <!-- form start -->
      <form method="post" enctype="multipart/form-data" action="upload_kk.php">
        <div class="box-body">                
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>No KK</label>
                <input type="text" class="form-control" name="no_kk" data-inputmask="'mask': ['9999-9999-9999-9999']" data-mask required="">
                <label>Nama Kepala Keluarga</label>
                <input type="text" class="form-control" name="kepala_keluarga" required="">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" required="">
                <label>RT/RW</label>
                <input type="text" class="form-control" name="rtrw" data-inputmask="'mask': ['999-999']" data-mask required="">
                <label>Kelurahan</label>
                <input type="text" class="form-control" name="kelurahan" value="Pabuaran Mekar" readonly="readonly" required="">
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>" readonly="">
                <label>Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan" value="Cibinong" readonly="readonly" required="">
                <label>Kota</label>
                <input type="text" class="form-control" name="kota" value="Bogor" readonly="readonly" required="">
                <label>Pos</label>
                <input type="text" class="form-control" name="pos" value="16916" readonly="readonly" required="">
                <label>Provinsi</label>
                <input type="text" class="form-control" name="provinsi" value="Jawa Barat" readonly="readonly" required="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Upload KK</label>
            <input type="file" name="file_kk" required="">

            <p class="help-block">Format PDF/JPG dengan ukuran file max 1Mb</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" required=""> Saya telah mengisi data dengan benar
            </label>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button> 


            <?php 
            include '../include/koneksi.php';
            $data = mysqli_query($koneksi,"SELECT no_kk FROM data_kk WHERE email = '{$_SESSION[ "email" ]}'" );
            while($d = mysqli_fetch_array($data)){
              ?>
              <div align="right"><i class="fa fa-arrow-circle-right"><a href="lihat_kk.php?no_kk=<?php echo $d['no_kk']; ?>">Lihat Data KK</a></i></div>
              <?php
            }
            ?> 
          </form>
        </div>
      </div>
    </div>
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

    $('[data-mask]').inputmask()
  })
</script>
</html>

