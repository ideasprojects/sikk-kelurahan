
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
        <h3 class="box-title">Form Surat Ket. Kelahiran</h3>
      </div>

      <!-- form start -->
      <form method="post" enctype="multipart/form-data" action="upload_syaratmati.php">
        <div class="box-body">
          <div class="form-group">

           <?php
           include '../include/koneksi.php';
           $idm = $_GET['id_kem'];
           $data = mysqli_query($koneksi,"SELECT * from kematian WHERE id_kem='$idm'");
           while($d = mysqli_fetch_array($data)){

             ?> 
             <label>ID Syarat</label>
             <input type="text" class="form-control" name="id_syarat" value="<?php echo $d['id_syarat']; ?>" readonly="readonly" >
             <label>ID Kematian</label>
             <input type="text" class="form-control" name="id_kem" value="<?php echo $d['id_kem']; ?>" readonly="readonly"> 
             <!-- Id Kematian -->
             <input type="hidden" name="idkem" value="<?= $idm; ?> ">
             <?php
           }
           ?> 
           <label>Nama Dokumen</label>
           <select class="form-control" name="nama_dok" required="">
            <option value="Surat Pengantar RTRW" >Surat Pengantar RT/RW</option>
            <option value="Fotokopi Surat Ket.Kelahiran dari Rumah Sakit" >Fotokopi Surat Ket.Kematian dari Rumah Sakit</option>
          </select>
          <label>Nomor Dokumen</label>
          <input type="text" class="form-control" name="nmr_dok" required="">
          <label>Berkas</label>
          <input type="file" name="file_dok" required="" >
          <p class="help-block">Format PDF/JPG dengan ukuran file max 1Mb</p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button> 
      </div></form>

      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">

          <thead>
            <tr>
              <th>No ID Kelahiran</th>
              <th>Nama Dokumen</th>
              <th>Nomor Dokumen</th>
              <th>Berkas</th>
              <th>Aksi</th>
            </tr>
          </thead>         
          <tr>
            <?php 
            $data = mysqli_query($koneksi,"SELECT * from syarat_kem WHERE id_kem='$idm'");
            while($d = mysqli_fetch_array($data)){
              ?>
              <tr>
                <td><?php echo $d['id_kem'] ?></td>
                <td><?php echo $d['nama_dok']; ?></td>
                <td><?php echo $d['nmr_dok']; ?></td>
                <td><?php echo $d['file_dok']; ?></td>
                <td>
                  <a href="hapus_syaratmati.php?id_kem=<?php echo $d['id_kem']; ?>&nmr_dok=<?php echo $d['nmr_dok']; ?>" class="fa fa-trash-o" >Hapus</a>           
                </tr>
                <?php
              }
              ?> 
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.content-wrapper -->
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

