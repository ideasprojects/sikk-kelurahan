
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
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['id_admin']; ?> <span class="caret"></span></a>
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
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>

          <li class="header">STATUS</li>
          <li>
            <a href="status.php">
              <i class="fa fa-hourglass-2"></i> <span>Status Pengajuan Surat </span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>

          <li class="header">LAPORAN</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pencil-square"></i>
              <span>Laporan Surat Tercetak</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="lap_lahir.php"><i class="fa fa-pencil-square-o"></i>Surat Ket.Kelahiran</a></li>
              <li><a href="lap_mati.php"><i class="fa fa-pencil-square-o"></i>Surat Ket.Kematian</a></li>
            </ul>
          </li>
        </ul>

      </ul>
    </section>
  </aside>

  <!-- Content Wrapper-->
  <div class="content-wrapper">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Status Pengajuan</h3>
      </div>

      <!-- update -->
      <?php
      include '../include/koneksi.php';
      $idl = $_GET['id_kel'];
      $data = mysqli_query($koneksi, "SELECT * FROM kelahiran WHERE id_kel='$idl'");
      while($d = mysqli_fetch_array($data)){
        ?>

        <!-- form start -->
        <form method="post" enctype="multipart/form-data" action="update_statuskel.php">
          <div class="box-body">           
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>" disabled>
                  <label>ID Surat Kelahiran</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $d['id_kel']; ?>" disabled>
                  <!-- Id Kelahiran -->
                  <input type="hidden" name="id_kel" value="<?= $idl; ?> ">
                  <label>Status </label>
                  <select class="form-control" name="status" required="">
                    <option value="0" <?php if($d['status'] == "0"){ echo 'selected'; } ?>>Diproses</option>
                    <option value="1" <?php if($d['status'] == "1"){ echo 'selected'; } ?>>Ditolak</option>
                    <option value="2" <?php if($d['status'] == "2"){ echo 'selected'; } ?>>Dicetak</option>
                  </select><br>
                  <button type="submit" class="btn btn-primary">Ubah Status</button> 
                </div>
              </div>
            </div>
          </div>
        </form>
        <?php 
      }
      ?>
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

