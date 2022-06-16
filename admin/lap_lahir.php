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
	<!-- Ionicons -->
	<link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
				<span class="logo-lg">Dashboard Admin</span>
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
				<h3 class="box-title">Laporan Surat Tercetak</h3>
			</div>

			<div class="box box-solid">
				<section class="content">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Surat Kelahiran</h3>
						</div>

						<!-- User -->

						<div class="box-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>No ID Surat</th>
										<th>Tanggal Pengajuan</th>                
										<th>Nama Bayi</th>
										<th>Tanggal Lahir</th>
										<th>No KK</th>
									</tr>
								</thead>
								<tbody>

									<?php 
									include '../include/koneksi.php';
									$no = 1;
									$data = mysqli_query($koneksi,"SELECT * FROM kelahiran WHERE status='2' ORDER BY id_kel ASC");
									while($d = mysqli_fetch_array($data)){
										?>
										<tr>
											<td><?php echo $d['id_kel'] ?></td>
											<td><?php echo $d['tgl_ajuan'] ?></td>
											<td><?php echo $d['nama']; ?></td>
											<td><?php echo $d['tgl_lahir']; ?></td>
											<td><?php echo $d['no_kk']; ?></td>
											<?php
										}
										?>
									</tbody>
								</table>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>





	<!-- jQuery 3 -->
	<script src="../bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- DataTables -->
	<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<!-- SlimScroll -->
	<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="../bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="../dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="../dist/js/demo.js"></script>
	<!-- DataTables -->
	<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script>
		window.print();
	</script>
	</html>