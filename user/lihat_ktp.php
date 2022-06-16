
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
          <center><h1 class="box-title">KARTU KELUARGA</h1><br>
           <?php 
           include '../include/koneksi.php';
           $nk = $_GET['no_kk'];
           $data = mysqli_query($koneksi,"SELECT * from data_kk WHERE no_kk='$nk'");
           while($d = mysqli_fetch_array($data)){
            ?>
            <label>No <?php echo $d['no_kk']; ?></label><br></center>
          </div>

          <!-- TAMPIL DATA -->
          <div class="box-body">
            <div class="col-md-6">
              <label>Nama Kepala Keluarga : <?php echo $d['kepala_keluarga']; ?></label><br>
              <label>Alamat : <?php echo $d['alamat']; ?></label><br>
              <label>RT/RW : <?php echo $d['rtrw']; ?></label><br>
              <label>Kelurahan : <?php echo $d['kelurahan']; ?></label><br>
            </div>
            
            <!-- /.col -->
            <div class="col-md-6">
              <label>Kecamatan : <?php echo $d['kecamatan']; ?></label><br>
              <label>Kota : <?php echo $d['kota']; ?></label><br>
              <label>Pos : <?php echo $d['pos']; ?></label><br>
              <label>Provinsi : <?php echo $d['provinsi']; ?></label><br>
              <?php
            }
            ?> 
          </div>
        </div>
      </div>
      
      <div class="box-footer">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Agama</th>
            </tr>
          </thead>         
          <tr>
            <?php 
            include '../include/koneksi.php';
            $no = 1;
            $nk = $_GET['no_kk'];
            $data = mysqli_query($koneksi,"SELECT * from data_ktp WHERE no_kk='$nk'");
            while($d = mysqli_fetch_array($data)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nik']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['gender']; ?></td>
                <td><?php echo $d['tempat_lahir']; ?></td>
                <td><?php echo $d['tgl_lahir']; ?></td>
                <td><?php echo $d['agama']; ?></td>           
              </tr>
              <?php
            }
            ?> 
          </tr>
        </tfoot>
      </div>
      <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Pendidikan</th>
              <th>Jenis Pekerjaan</th>
              <th>Status Pernikahan</th>
              <th>Nama Ayah</th>
              <th>Nama Ibu</th>                 
            </tr>
          </thead>         
          <tr>
            <?php 
            include '../include/koneksi.php';
            $no = 1;
            $nk = $_GET['no_kk'];
            $data = mysqli_query($koneksi,"SELECT * from data_ktp WHERE no_kk='$nk'");
            while($d = mysqli_fetch_array($data)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['pendidikan']; ?></td>
                <td><?php echo $d['pekerjaan']; ?></td>
                <td><?php echo $d['status_nkh']; ?></td>
                <td><?php echo $d['nama_ayah']; ?></td>
                <td><?php echo $d['nama_ibu']; ?></td>
                <?php
              }
              ?> 
            </tr>
          </tfoot>
        </div>
      </section></div></div></div>

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
      </html>
