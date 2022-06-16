
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

    <!-- Content Wrapper-->
    <div class="content-wrapper">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Form Surat Ket. Kematian</h3>
        </div>

        <!-- form start -->
        <form method="post" enctype="multipart/form-data" action="upload_mati.php">
          <div class="box-body">
            <div class="col-md-6">
              <div class="form-group">
                <label>No KK</label>
                <input type="text" class="form-control" name="no_kk" value="<?php echo $d['no_kk']; ?>" readonly="">
                <?php } ?> 
                <label>ID Syarat</label>
                <input type="text" class="form-control" name="id_syarat" value="Kematian" readonly="">

                <label>Tanggal Pengajuan</label>
                <input type="text" class="form-control" name="tgl_ajuan" value="<?php $tgl=date('d-m-Y'); echo $tgl;?>" readonly="">

                <label>NIK Pelapor</label>
                <select class="form-control" name="nik_pelapor">
                  <option>Pilihan</option>
                  <?php
                  $nk = $_GET['no_kk'];
                  $data = mysqli_query($koneksi,"SELECT * from data_ktp WHERE no_kk='$nk'");
                  while($d = mysqli_fetch_array($data)){

                    echo "<option value=\"{$d['nik']}\">";
                    echo $d['nik'];
                    echo "</option>";
                  }
                  ?>                
                </select>
                <label>Hubungan dengan Alm/Almh</label>
                <input type="text"  name="hubungan" class="form-control" data-mask required=""> 
              </div>
            </div>

            <div class="col-md-6">      
              <label>Nama Alm/Almh</label>
              <select class="form-control" name="nama_alm" >
                <option>Pilihan</option>
                <?php
                $data = mysqli_query($koneksi,"SELECT * from data_ktp WHERE no_kk='$nk'");
                while($d = mysqli_fetch_array($data)){

                  echo "<option value=\"{$d['nama']}\">";
                  echo $d['nama'];
                  echo "</option>";
                }
                ?>  
              </select>  
              <label>Tanggal</label>
              <input type="text"  name="tgl_men" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required="">       
              <label>Jam</label>
              <input type="text" class="form-control" name="jam" data-inputmask="'mask': ['99:99']" data-mask required="">
              <label>Dikarenakan</label>
              <input type="text" class="form-control" name="sebab" required="">
              <label>Di</label>
              <input type="text" class="form-control" name="tmp_men" required="">
              <br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>    
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

