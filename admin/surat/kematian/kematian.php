<script>
  window.print()
</script> 
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
		include '../../../include/koneksi.php';
		$idm = $_GET['id_kem'];
		$data = mysqli_query($koneksi,"SELECT * from kematian WHERE id_kem='$idm'");
		while($d = mysqli_fetch_array($data)){
			?>
			<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w0 h1" alt="" src="bg1.png"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN BOGOR</div><div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">KECAMATAN CIBINONG</div><div class="t m0 x3 h3 y3 ff1 fs1 fc0 sc0 ls0 ws0">KELURAHAN PABUARAN MEKAR</div><div class="t m0 x4 h4 y4 ff2 fs2 fc0 sc0 ls0 ws0">Jl. Kelurahan No. 05 Rt. 005/004 Telp. (021) 83715863 Cibinong - Bogor 16916</div><div class="t m0 x5 h4 y5 ff2 fs2 fc0 sc0 ls0 ws0">Web : http://kel-pabuaranmekar.bogorkab.go.id</div><div class="t m0 x6 h2 y6 ff1 fs0 fc0 sc0 ls0 ws0">SURAT KETERANGAN KEMATIAN</div><div class="t m0 x7 h5 y7 ff2 fs3 fc0 sc0 ls0 ws0">Nomor : 474.3/<?php echo $d['id_kem'] ?>/VII<span class="fs4">/2019</span></div> <?php } ?>

			<?php 
			$data = mysqli_query($koneksi,"SELECT * from syarat_kem WHERE id_kem='$idm' AND nama_dok LIKE 'Surat Pengantar RTRW' ");
			while($d = mysqli_fetch_array($data)){
				?>
				<div class="t m0 x8 h5 y8 ff2 fs3 fc0 sc0 ls0 ws0">Dasar  :</div><div class="t m0 x9 h5 y9 ff2 fs3 fc0 sc0 ls0 ws0">1.<span class="_ _1"> </span>PERDA Kab. Bogor Nomor 11 Tahun 2015 tentang Pembentukan Kelurahan Pabuaran Mekar;</div><div class="t m0 x9 h5 ya ff2 fs3 fc0 sc0 ls0 ws0">2.<span class="_ _1"> </span>Surat Pengantar Serba Guna RT. <?php echo $d['nmr_dok'] ?> ;</div><?php } ?>

				<?php 
				$data = mysqli_query($koneksi,"SELECT * from kematian WHERE id_kem='$idm'");
				while($d = mysqli_fetch_array($data)){
					?>
					<div class="t m0 x9 h5 yb ff2 fs3 fc0 sc0 ls0 ws0">3.<span class="_ _1"> </span>KTP NIK. <?php echo $d['nik_pelapor'] ?> ;</div><div class="t m0 x9 h5 yc ff2 fs3 fc0 sc0 ls0 ws0">4.<span class="_ _1"> </span>KK No. <?php echo $d['no_kk'] ?>   ;</div><?php } ?>

					<?php 
					$data = mysqli_query($koneksi,"SELECT * from syarat_kem WHERE id_kem='$idm' AND nama_dok LIKE 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit'");
					while($d = mysqli_fetch_array($data)){
						?>
						<div class="t m0 x9 h5 yd ff2 fs3 fc0 sc0 ls0 ws0">5.<span class="_ _1"> </span>Surat Keterangan Kematian dari RS. <?php echo $d['nmr_dok'] ?> ;</div><?php } ?>

						<?php 
						$data = mysqli_query($koneksi,"SELECT * from kematian WHERE  kematian.id_kem='$idm'");
						while($d = mysqli_fetch_array($data))
						{ 
							$alm=$d['nama_alm']; 
							$pelapor=$d['nik_pelapor'];
							?>

							<!-- Data Alm -->
							<div class="t m0 x8 h5 yf ff2 fs3 fc0 sc0 ls0 ws0">Berdasarkan hal tersebut di atas, yang bertanda tangan di bawah ini Lurah Pabuaran </div><div class="t m0 xa h5 y10 ff2 fs3 fc0 sc0 ls0 ws0">Mekar menerangkan bahwa :</div>
							<?php
							$data_alm = mysqli_query($koneksi,"SELECT * from data_ktp,data_kk WHERE  data_ktp.nama='$alm' and data_ktp.no_kk=data_kk.no_kk");
							while($da = mysqli_fetch_array($data_alm))
							{
								?>

								<div class="t m0 xa h5 y11 ff2 fs3 fc0 sc0 ls0 ws0">Nama</div><div class="t m0 xa h6 y12 ff2 fs4 fc0 sc0 ls0 ws0">Jenis Kelamin</div><div class="t m0 xa h5 y13 ff2 fs3 fc0 sc0 ls0 ws0">Umur/TTL</div><div class="t m0 xa h5 y14 ff2 fs3 fc0 sc0 ls0 ws0">Agama</div><div class="t m0 xa h5 y15 ff2 fs3 fc0 sc0 ls0 ws0">Alamat</div><div class="t m0 xb h6 y16 ff2 fs4 fc0 sc0 ls0 ws0">: <?php echo $da['nama'] ?></div><div class="t m0 xb h6 y17 ff2 fs4 fc0 sc0 ls0 ws0">: <?php echo $da['gender'] ?></div><div class="t m0 xb h6 y18 ff2 fs4 fc0 sc0 ls0 ws0">: <?php echo $da['tempat_lahir']?>, <?php echo $da['tgl_lahir'] ?></div><div class="t m0 xb h6 y19 ff2 fs4 fc0 sc0 ls0 ws0">: <?php echo $da['agama'] ?></div><div class="t m0 xb h6 y1a ff2 fs4 fc0 sc0 ls0 ws0">: <?php echo $da['rtrw'] ?>, <?php echo $da['alamat'] ?></div><div class="t m0 x6 h5 y1b ff2 fs3 fc0 sc0 ls0 ws0">Kel. Pabuaran Mekar Kec. Cibinong</div><?php } ?>

								<?php 
								$data = mysqli_query($koneksi,"SELECT * from kematian WHERE id_kem='$idm'");
								while($d = mysqli_fetch_array($data)){
									?>
									<div class="t m0 x8 h5 y1c ff2 fs3 fc0 sc0 ls0 ws0">Nama tersebut di atas <span class="ff3">telah meninggal dunia</span> pada Tanggal <?php echo $d['tgl_men'] ?>, Jam <?php echo $d['jam'] ?>WIB 
									</div><div class="t m0 xa h5 y1d ff2 fs3 fc0 sc0 ls0 ws0">dikarenakan <?php echo $d['sebab'] ?> di <?php echo $d['tmp_men'] ?> dan yang melaporkan :</div><?php } ?>

									<?php
									$data_pel = mysqli_query($koneksi,"SELECT * from kematian,data_ktp,data_kk WHERE kematian.id_kem='$idm' AND data_ktp.nik='$pelapor' and data_ktp.no_kk=data_kk.no_kk");
									while($dp = mysqli_fetch_array($data_pel))
									{
										?>

										<div class="t m0 xa h5 y1e ff2 fs3 fc0 sc0 ls0 ws0">Nama Pelapor</div><div class="t m0 xa h6 y1f ff2 fs4 fc0 sc0 ls0 ws0">Tempat Tgl. Lahir</div><div class="t m0 xa h5 y20 ff2 fs3 fc0 sc0 ls0 ws0">Nik</div><div class="t m0 xa h5 y21 ff2 fs3 fc0 sc0 ls0 ws0">Alamat</div><div class="t m0 xc h6 y22 ff2 fs4 fc0 sc0 ls0 ws0">: <?php echo $dp['nama'] ?></div><div class="t m0 xc h6 y23 ff2 fs4 fc0 sc0 ls0 ws0">: <?php echo $dp['tempat_lahir'] ?>, <?php echo $dp['tgl_lahir'] ?></div><div class="t m0 xc h6 y24 ff2 fs4 fc0 sc0 ls0 ws0">: <?php echo $dp['nik'] ?></div><div class="t m0 xc h6 y25 ff2 fs4 fc0 sc0 ls0 ws0">: Rt.<?php echo $dp['rtrw'] ?>, <?php echo $dp['alamat'] ?></div><div class="t m0 xc h5 y26 ff2 fs3 fc0 sc0 ls0 ws0">Kel. Pabuaran Mekar Kec. Cibinong</div><div class="t m0 xa h7 y27 ff2 fs5 fc0 sc0 ls0 ws0">Hubungan dengan Alm/Almh</div><div class="t m0 xc h6 y28 ff2 fs4 fc0 sc0 ls0 ws0">: <?php echo $dp['hubungan'] ?></div><?php } ?>

										<div class="t m0 xd h5 y29 ff2 fs3 fc0 sc0 ls0 ws0">Surat keterangan ini diterbitkan dengan ketentuan sebagai berikut :</div><div class="t m0 xe h5 y2a ff2 fs3 fc0 sc0 ls0 ws0">1.<span class="_ _1"> </span>Agar  selanjutnya  membuat <span class="_ _2"> </span>akte  kematian <span class="_ _2"> </span>dengan  melengkapi <span class="_ _2"> </span>berkas  dokumen <span class="_ _2"> </span>persyaratan </div><div class="t m0 xd h5 y2b ff2 fs3 fc0 sc0 ls0 ws0">lainnya <span class="_ _3"></span>sesuai <span class="_ _3"></span>ketentuan <span class="_ _3"></span>yang <span class="_ _3"></span>berlaku <span class="_ _3"></span>pada <span class="_ _3"></span>Disduk <span class="_ _3"></span>Capil <span class="_ _3"></span>dan <span class="_ _3"></span>Surat <span class="_ _3"></span>keterangan <span class="_ _3"></span>ini <span class="_ _3"></span>bukan <span class="_ _3"></span>akte </div><div class="t m0 xd h5 y2c ff2 fs3 fc0 sc0 ls0 ws0">kematian;</div><div class="t m0 xe h5 y2d ff2 fs3 fc0 sc0 ls0 ws0">2.<span class="_ _1"> </span>Surat keterangan ini berlaku hanya 6 (enam) bulan sejak tanggal diterbitkannya surat keterangan </div><div class="t m0 xd h5 y2e ff2 fs3 fc0 sc0 ls0 ws0">ini;</div><div class="t m0 xe h5 y2f ff2 fs3 fc0 sc0 ls0 ws0">3.<span class="_ _1"> </span>Apabila dikemudian hari yang bersangkutan/pelapor memberikan keterangan atau data </div><div class="t m0 xd h5 y30 ff2 fs3 fc0 sc0 ls0 ws0">yang tidak benar/palsu maka surat keterangan ini dinyatakan tidak berlaku.</div><div class="t m0 x8 h5 y31 ff2 fs3 fc0 sc0 ls0 ws0">Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</div><div class="t m0 xf h5 y32 ff2 fs3 fc0 sc0 ls0 ws0">                     Pabuaran Mekar, <?php $tgl=date('d-m-Y'); echo $tgl;?></div><div class="t m0 x10 h5 y33 ff1 fs3 fc0 sc0 ls0 ws0">LURAH PABUARAN MEKAR</div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div><?php } ?>
									</div>
									<div class="loading-indicator">

									</div>
								</body>
								</html>
