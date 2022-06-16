<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<link rel="stylesheet" href="base.min.css"/>
	<link rel="stylesheet" href="fancy.min.css"/>
	<link rel="stylesheet" href="main.css"/>
	<script src="compatibility.min.js"></script>
	<script src="theViewer.min.js"></script>
	<script>
		try{
			theViewer.defaultViewer = new theViewer.Viewer({});
		}catch(e){}
	</script>
	<title></title>
</head>
<body>
	<div id="sidebar">
		<div id="outline">
		</div>
	</div>
	<div id="page-container">
		<?php 
		$id = $_GET['id_kem'];
		include '../../include/koneksi.php';
		$data = mysqli_query($koneksi,"SELECT * FROM kematian WHERE id_kem='$id' ");
		while($d = mysqli_fetch_array($data)){
			?>
			<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="bg1.png"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN BOGOR</div><div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">KECAMATAN CIBINONG</div><div class="t m0 x3 h3 y3 ff1 fs1 fc0 sc0 ls0 ws0">KELURAHAN PABUARAN MEKAR</div><div class="t m0 x4 h4 y4 ff2 fs2 fc0 sc0 ls0 ws0">Jl. Kelurahan No. 05 Rt. 005/004 Telp. (021) 83715863 Cibinong - Bogor 16916</div><div class="t m0 x2 h4 y5 ff2 fs2 fc0 sc0 ls0 ws0">Web : http://kel-pabuaranmekar.bogorkab.go.id</div>

			<div class="t m0 x5 h5 y6 ff1 fs3 fc0 sc0 ls0 ws0">BUKTI PENGAMBILAN SUKET KEMATIAN</div><div class="t m0 x6 h6 y7 ff2 fs4 fc0 sc0 ls0 ws0">No. Antrian<span class="_ _0"> </span> : <?php echo $d['id_kem']; ?></div><div class="t m0 x6 h6 y8 ff2 fs4 fc0 sc0 ls0 ws0">Atas Nama<span class="_ _1"> </span> <span class="_ _2"> </span> : <?php echo $d['nama_alm']; ?></div><div class="t m0 x6 h6 y9 ff2 fs4 fc0 sc0 ls0 ws0">Tanggal Ajuan<span class="_ _3"> </span> : <?php echo $d['tgl_ajuan']; ?></div><div class="t m0 x7 h6 ya ff2 fs4 fc0 sc0 ls0 ws0">Atas <span class="_ _4"> </span>dasar <span class="_ _4"> </span>data <span class="_ _4"> </span>tersebut, <span class="_ _4"> </span>bukti <span class="_ _4"> </span>pengambilan <span class="_ _4"> </span>Surat <span class="_ _4"> </span>Kelahiran <span class="_ _4"> </span>di <span class="_ _4"> </span>Kantor <span class="_ _4"> </span>Kelurahan </div><div class="t m0 x6 h6 yb ff2 fs4 fc0 sc0 ls0 ws0">Pabuaran <span class="_ _5"> </span>Mekar <span class="_ _5"> </span>adalah <span class="_ _5"> </span>sah. <span class="_ _5"> </span>Demikian <span class="_ _5"> </span>surat <span class="_ _5"> </span>keterangan <span class="_ _5"> </span>ini <span class="_ _5"> </span>dibuat <span class="_ _5"> </span>untuk <span class="_ _5"> </span>dapat  </div><div class="t m0 x6 h6 yc ff2 fs4 fc0 sc0 ls0 ws0">dipergunakan sebagaimana mestinya.</div><div class="t m0 x8 h6 yd ff2 fs4 fc0 sc0 ls0 ws0">Pabuaran Mekar</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div><?php } ?>
		</div>
		<div class="loading-indicator">

		</div>
	</body>
	</html>
	<script>
		window.print();
	</script>