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
  $idl = $_GET['id_kel'];
  $data = mysqli_query($koneksi,"SELECT * from kelahiran WHERE id_kel='$idl'");
  while($d = mysqli_fetch_array($data)){
    ?>
    <div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w0 h1" alt="" src="bg1.png"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN BOGOR</div><div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">KECAMATAN CIBINONG</div><div class="t m0 x3 h3 y3 ff1 fs1 fc0 sc0 ls0 ws0">KELURAHAN PABUARAN MEKAR</div><div class="t m0 x4 h4 y4 ff2 fs2 fc0 sc0 ls0 ws0">Jl. Kelurahan No. 05 Rt. 005/004 Telp. (021) 83715863 Cibinong - Bogor 16916</div><div class="t m0 x5 h4 y5 ff2 fs2 fc0 sc0 ls0 ws0">Web : http://kel-pabuaranmekar.bogorkab.go.id</div><div class="t m0 x6 h5 y6 ff1 fs3 fc0 sc0 ls0 ws0">SURAT KETERANGAN KELAHIRAN</div><div class="t m0 x7 h5 y7 ff2 fs3 fc0 sc0 ls0 ws0">Nomor : 474.1/ <?php echo $d['id_kel'] ?>/VIII<span class="fs4">/2019</span></div><div class="t m0 x8 h6 y8 ff2 fs5 fc0 sc0 ls0 ws0">Dasar  :</div><div class="t m0 x9 h6 y9 ff2 fs5 fc0 sc0 ls0 ws0">1.<span class="_ _1"> </span>PERDA Kab. Bogor Nomor 11 Tahun 2015 tentang Pembentukan Kelurahan Pabuaran Mekar;</div> <?php } ?>

    <?php 
    $data = mysqli_query($koneksi,"SELECT * from syarat_kel WHERE id_kel='$idl' AND nama_dok LIKE 'Surat Pengantar RTRW' ");
    while($d = mysqli_fetch_array($data)){
      ?>
      <div class="t m0 x9 h6 ya ff2 fs5 fc0 sc0 ls0 ws0">2.<span class="_ _1"> </span>Surat Pengantar Serba Guna <?php echo $d['nmr_dok'] ?>;</div>
      <?php } ?>

      <?php 
      $data = mysqli_query($koneksi,"SELECT * from kelahiran WHERE id_kel='$idl'");
      while($d = mysqli_fetch_array($data)){
        ?>
        <div class="t m0 x9 h6 yb ff2 fs5 fc0 sc0 ls0 ws0">3.<span class="_ _1"> </span>KTP NIK. <?php echo $d['nik_ayah'] ?> ;</div><div class="t m0 x9 h6 yc ff2 fs5 fc0 sc0 ls0 ws0">4.<span class="_ _1"> </span>KK No. <?php echo $d['no_kk'] ?> ;</div><?php } ?>

        <?php 
        $data = mysqli_query($koneksi,"SELECT * from syarat_kel WHERE id_kel='$idl' AND nama_dok LIKE 'Fotokopi Kutipan Akta Nikah'");
        while($d = mysqli_fetch_array($data)){
          ?>
          <div class="t m0 x9 h6 yd ff2 fs5 fc0 sc0 ls0 ws0">5.<span class="_ _1"> </span>Surat Nikah dari KUA No. <?php echo $d['nmr_dok'] ?>; </div>
          <?php } ?>


          <?php 
          $data = mysqli_query($koneksi,"SELECT * from syarat_kel WHERE id_kel='$idl' AND nama_dok LIKE 'Fotokopi Surat Ket.Kelahiran dari Rumah Sakit'");
          while($d = mysqli_fetch_array($data)){
            ?>
            <div class="t m0 x9 h6 ye ff2 fs5 fc0 sc0 ls0 ws0">6.<span class="_ _1"></span>Surat keterangan kelahiran dari RS No. <?php echo $d['nmr_dok'] ?>;</div>
            <?php } ?>

            <?php 
            $data = mysqli_query($koneksi,"SELECT * from kelahiran WHERE  kelahiran.id_kel='$idl'");
            while($d = mysqli_fetch_array($data))
            { 
              $nikayah=$d['nik_ayah']; 
              $nikibu=$d['nik_ibu'];
              ?>
              <div class="t m0 x8 h6 yf ff2 fs5 fc0 sc0 ls0 ws0">Atas dasar tersebut dengan ini, Lurah Pabuaran Mekar Kecamatan Cibinong Kabupaten </div><div class="t m0 xa h6 y10 ff2 fs5 fc0 sc0 ls0 ws0">Bogor, menerangkan bahwa telah tercatat seorang anak <b> <?php echo $d['gender'] ?> </b> yang diberi nama <b><?php echo $d['nama'] ?>, </b> 
adalah anak dari :</div> <?php } ?>

              <!-- Data Ayah -->
              <?php
              $data_ayah = mysqli_query($koneksi,"SELECT * from data_ktp,data_kk WHERE  data_ktp.nik='$nikayah' and data_ktp.no_kk=data_kk.no_kk");
              while($da = mysqli_fetch_array($data_ayah))
              {
                ?>

                <div class="c xa y11 w1 h7"><div class="t m0 x0 h6 y12 ff1 fs5 fc0 sc0 ls0 ws0">A Y AH</div></div><div class="c xb y11 w2 h7"><div class="t m0 xc h6 y12 ff1 fs5 fc0 sc0 ls0 ws0">:</div></div><div class="c xa y13 w1 h8"><div class="t m0 x0 h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">N a m a </div></div><div class="c xd y13 w3 h8"><div class="t m0 xe h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">: <?php echo $da['nama'] ?></div></div><div class="c xa y14 w4 h9"><div class="t m0 x0 h6 y15 ff2 fs5 fc0 sc0 ls0 ws0">Tempat, Tanggal Lahir</div></div><div class="c xd y14 w3 h9"><div class="t m0 xe h6 y15 ff2 fs5 fc0 sc0 ls0 ws0">: <?php echo $da['tgl_lahir'] ?></div></div><div class="c xa y16 w1 ha">
                  <div class="t m0 x0 h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">NIK </div></div><div class="c xd y16 w3 ha"><div class="t m0 xe h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">: <?php echo $da['nik'] ?> </div></div><div class="c xa y17 w1 ha"><div class="t m0 x0 h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">Pekerjaan</div></div><div class="c xd y17 w3 ha"><div class="t m0 xe h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">: <?php echo $da['pekerjaan'] ?></div></div><div class="c xa y18 w4 h9"><div class="t m0 x0 h6 y15 ff2 fs5 fc0 sc0 ls0 ws0">Kewarganegaraan</div></div><div class="c xd y18 w3 h9"><div class="t m0 xe h6 y15 ff2 fs5 fc0 sc0 ls0 ws0">: Indonesia</div></div><div class="c xa y19 w1 hb"><div class="t m0 x0 h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">A g a m a</div></div><div class="c xd y19 w3 hb"><div class="t m0 xe h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">: <?php echo $da['agama'] ?></div></div><div class="c xa y1a w1 ha"><div class="t m0 x0 h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">Alamat</div></div><div class="c xd y1a w3 ha"><div class="t m1 xe h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">: Rt. <?php echo $da['rtrw'] ?>, <?php echo $da['alamat'] ?>. Kelurahan Pabuaran Mekar</div></div><div class="c xd y1b w3 h9"><div class="t m0 xf h6 y15 ff2 fs5 fc0 sc0 ls0 ws0">Kecamatan Cibinong Kabupaten Bogor</div></div>
                  <?php } ?> 

                  <!-- Data Ibu -->
                  <?php
                  $data_ibu = mysqli_query($koneksi,"SELECT * from data_ktp,data_kk WHERE  data_ktp.nik='$nikibu' and data_ktp.no_kk=data_kk.no_kk");
                  while($di = mysqli_fetch_array($data_ibu))
                  {
                    ?>

                    <div class="c xa y1c w1 h9"><div class="t m0 x0 h6 y15 ff1 fs5 fc0 sc0 ls0 ws0">I B U</div></div><div class="c xb y1c w2 h9"><div class="t m0 xe h6 y15 ff1 fs5 fc0 sc0 ls0 ws0">:</div></div><div class="c xa y1d w1 h8"><div class="t m0 x0 h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">N a m a</div></div><div class="c xd y1d w3 h8"><div class="t m0 xe h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">: <?php echo $di['nama'] ?></div></div><div class="c xa y1e w4 ha"><div class="t m0 x0 h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">Tempat, Tanggal Lahir</div></div><div class="c xd y1e w3 ha"><div class="t m0 xe h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">: <?php echo $di['tgl_lahir'] ?></div></div><div class="c xa y1f w1 h9"><div class="t m0 x0 h6 y15 ff2 fs5 fc0 sc0 ls0 ws0">NIK</div></div><div class="c xd y1f w3 h9"><div class="t m0 xe h6 y15 ff2 fs5 fc0 sc0 ls0 ws0">: <?php echo $di['nik'] ?></div></div><div class="c xa y20 w1 ha"><div class="t m0 x0 h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">Pekerjaan</div></div><div class="c xd y20 w3 ha"><div class="t m0 xe h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">: <?php echo $di['pekerjaan'] ?></div></div><div class="c xa y21 w4 hb"><div class="t m0 x0 h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">Kewarganegaraan</div></div><div class="c xd y21 w3 hb"><div class="t m0 xe h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">: Indonesia</div></div><div class="c xa y22 w1 h9"><div class="t m0 x0 h6 y15 ff2 fs5 fc0 sc0 ls0 ws0">A g a m a</div></div><div class="c xd y22 w3 h9"><div class="t m0 xe h6 y15 ff2 fs5 fc0 sc0 ls0 ws0">: <?php echo $di['agama'] ?></div></div><div class="c xa y23 w1 ha"><div class="t m0 x0 h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">Alamat</div></div><div class="c xd y23 w3 ha"><div class="t m1 xe h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">: Rt.<?php echo $di['rtrw'] ?> , <?php echo $di['alamat'] ?>. Kelurahan Pabuaran Mekar</div></div><div class="c xd y24 w3 ha"><div class="t m0 xf h6 y12 ff2 fs5 fc0 sc0 ls0 ws0">Kecamatan Cibinong Kabupaten Bogor</div></div>

                    <?php 
                    $data = mysqli_query($koneksi,"SELECT * from kelahiran WHERE id_kel='$idl'");
                    while($d = mysqli_fetch_array($data)){
                      ?>
                      <div class="t m0 x8 h6 y25 ff2 fs5 fc0 sc0 ls0 ws0">Nama tersebut diatas dilahirkan di <?php echo $d['tempat_lahir'] ?> Tanggal <?php echo $d['tgl_lahir'] ?> Jam <?php echo $d['jam'] ?> WIB dan
nama tersebut diatas adalah WNI Asli</div><?php } ?>

                      <div class="t m0 x8 h6 y27 ff2 fs5 fc0 sc0 ls0 ws0">Surat keterangan ini diterbitkan dengan ketentuan sebagai berikut :</div><div class="t m0 x9 h6 y28 ff2 fs5 fc0 sc0 ls0 ws0">1.<span class="_ _1"> </span>Sebagai salah satu persyaratan Adminitrasi Kependudukan dengan melengkapi berkas dokumen </div><div class="t m0 x10 h6 y29 ff2 fs5 fc0 sc0 ls0 ws0">pendukung lainnya dan Surat keterangan ini bukan <span class="ff3">akta kelahiran</span>;</div><div class="t m0 x9 h6 y2a ff2 fs5 fc0 sc0 ls0 ws0">2.<span class="_ _1"> </span>Surat keterangan ini berlaku hanya <span class="ff4">30 (Tiga puluh) hari</span> sejak tanggal diterbitkannya surat </div><div class="t m0 x10 h6 y2b ff2 fs5 fc0 sc0 ls0 ws0">keterangan ini;</div><div class="t m0 x9 h6 y2c ff2 fs5 fc0 sc0 ls0 ws0">3.<span class="_ _1"> </span>Apabila dikemudian hari yang bersangkutan/pemohon memberikan keterangan atau data yang </div><div class="t m0 x10 h6 y2d ff2 fs5 fc0 sc0 ls0 ws0">tidak benar/palsu maka surat keterangan ini dinyatakan tidak berlaku.</div><div class="t m0 x8 h6 y2e ff2 fs5 fc0 sc0 ls0 ws0">Demikian surat keterangan ini dibuat untuk dapat  dipergunakan sebagaimana mestinya.</div>
                      <div class="t m0 x11 h6 y2f ff2 fs5 fc0 sc0 ls0 ws0">                             Pabuaran Mekar, <?php $tgl=date('d-m-Y'); echo $tgl;?></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
                    </div>
                    <?php } ?>

                  </body>
                  </html>