
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
          <h3 class="box-title">Status Pengajuan Surat</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <!-- /.box-header -->
              <div class="table-responsive no-padding">
                <h5 class="box-title">Status Pengajuan Surat Kelahiran</h5>
                <table class="table table-hover">
                  <tr>
                    <th>No ID Surat</th>
                    <th>Atas Nama</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Persyaratan</th>
                  </tr>
                  <?php 
                  $nk = $_GET['no_kk'];
                  $data = mysqli_query($koneksi,"SELECT * from kelahiran WHERE no_kk='$nk'" );
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $d['id_kel']; ?></td>
                      <td><?php echo $d['nama']; ?></td>
                      <td><?php
                      if($d['status'] == "0"){
                        echo '<span class="label label-warning">Proses</span>';
                      }else if($d['status'] == "1"){
                        echo '<span class="label label-warning">Ditolak</span>';
                      }else if($d['status'] == "2"){
                        echo '<span class="label label-warning">Tercetak</span>';
                      }
                      ?> </span></td>
                      <td>                      
                        <?php
                        if($d['status'] == "0"){
                          echo 'Mohon tunggu, data sedang diverifikasi';
                        }else if($d['status'] == "1"){
                          echo $d['ket'];
                        }else if($d['status'] == "2"){                     
                         $url = "bukti_kel/bukti_kel.php?id_kel=$d[id_kel]";
                         echo "<a href='$url'>Bukti Pengambilan Surat</a>";
                       }
                       ?>
                     </td> 
                     <td><a href="syarat_lahir.php?id_kel=<?php echo $d['id_kel']; ?>"><i class="fa fa-cloud-upload"></i> Upload</a></td>  
                   </tr>
                   <?php
                 }
                 ?>
               </table>
             </div>
             <br>
             <div class="table-responsive no-padding">
              <h5 class="box-title">Status Pengajuan Surat Kematian</h5>
              <table class="table table-hover">
                <tr>
                  <th>No ID Surat</th>
                  <th>Atas Nama</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th>Persyaratan</th>
                </tr>
                <?php 
                $data = mysqli_query($koneksi,"SELECT * from kematian WHERE no_kk='$nk'" );
                while($d = mysqli_fetch_array($data)){
                  ?>
                  <tr>
                    <td><?php echo $d['id_kem']; ?></td>
                    <td><?php echo $d['nama_alm']; ?></td>
                    <td ><?php
                    if($d['status'] == "0"){
                      echo '<span class="label label-warning">Proses</span>';
                    }else if($d['status'] == "1"){
                      echo '<span class="label label-warning">Ditolak</span>';
                    }else if($d['status'] == "2"){
                      echo '<span class="label label-warning">Tercetak</span>';
                    }
                    ?> </td>
                    <td>                                       
                      <?php
                      if($d['status'] == "0"){
                        echo 'Mohon tunggu, data sedang diverifikasi';
                      }else if($d['status'] == "1"){
                        echo $d['ket'];
                      }else if($d['status'] == "2"){
                        $url = "bukti_kem/bukti_kem.php?id_kem=$d[id_kem]";
                        echo "<a href='$url'>Bukti Pengambilan Surat</a>";
                      }
                      ?></td>
                      <td><a href="syarat_mati.php?id_kem=<?php echo $d['id_kem']; ?>"><i class="fa fa-cloud-upload"></i> Upload</a></td>   
                    </tr>
                    <?php
                  }
                  ?>
                </table>
              </div>
            </div>
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

