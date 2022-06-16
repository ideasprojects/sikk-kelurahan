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
	<!-- Theme style -->
	<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  	<!-- Date Picker -->
  	<link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  	<!-- Daterange picker -->
  	<link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
				<h3 class="box-title">HALAMAN ADMIN WEBSITE KELURAHAN PABUARAN MEKAR</h3>
			</div>

			<!-- form start -->
			<!-- Main content -->
			<section class="content">
				<!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3><sup style="font-size: 20px">Surat Kelahiran</sup></h3>
								<p>Status Proses</p>
							</div>
							<div class="icon">
								<i class="ion ion-clipboard"></i>
							</div>
							<a href="proses_lahir.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-green">
							<div class="inner">
								<h3><sup style="font-size: 20px">Surat Kematian</sup></h3>

								<p>Status Proses</p>
							</div>
							<div class="icon">
								<i class="ion ion-clipboard"></i>
							</div>
							<a href="proses_mati.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3><sup style="font-size: 20px">Backup Data </sup></h3>

								<p>Warga</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>
							<a href="data_warga.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-red">
							<div class="inner">
								<h3><sup style="font-size: 20px">Laporan</sup></h3>

								<p>Surat Kelahiran dan Kematian</p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
							<a href="lap_lahirmati.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>

				<!-- Calendar -->
				<div class="box box-solid bg-green-gradient">
					<div class="box-header">
						<i class="fa fa-calendar"></i>

						<h3 class="box-title">Calendar</h3>
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
							</button>
						</div>
					</div>
					<div class="box-body no-padding">
						<div id="calendar" style="width: 100%"></div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
</body>

<footer class="main-footer">
	<strong>Copyright &copy; 2019 Kelurahan Paburan Mekar</a>.</strong> All rights reserved.
</footer>




<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>


</html>