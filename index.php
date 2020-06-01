<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();

//Get Dashboard information


$numPasien = $db->getValue ("pasien", "count(*)");

$db->where ("hasil", 'positif');
$hasil = $db->copy ();
$res = $hasil->get ("pasien", Array (10, 10));
$numPositif = $db->getValue ("pasien", "count(id)");

$db->where ("papsmir", 'sudah');
$hasil = $db->copy ();
$res = $hasil->get ("pasien", Array (10, 10));
$numPapsmir = $db->getValue ("pasien", "count(id)");

include_once('includes/header.php');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="bg">
        <img class="logo" src="assets/images/logo.png">
            
        </div>	
<div class="container">
  <div class="slideshow_wrapper">
    <div class="slideshow">
      <div class="slide_one slide">
        <img src="assets/images/gambar1.jpg" class="d-block w-100"/>
      </div>
      
      <div class="slide_two slide">
        <img src="assets/images/gambar2.jpg" class="d-block w-100" />
      </div>
      
       <div class="slide_three slide">
        <img class="slide_img" src="assets/images/gambar3.jpg" class="d-block w-100" />
      </div>
      
    </div></div></div></div>
<h1 class="page-header">Test IVA Kantor Kecamatan Tugu</h1>
<h4>Apa itu IVA Test?</h4>
<h5><br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IVA test adalah akronim dari tes Inspeksi Visial Asam Asetat.
  Prosedur ini dilakukan sebagai bentuk deteksi dini kanker serviks 
  dan hanya bisa dilakukan oleh dokter kandungan atau tenaga kesehatan lain 
  yang kompeten agar penegakan diagnosisnya tidak keliru.</p></br></h5>
  <br>
  <h4>Bagaimana Cara Melakukan IVA Test?</h4>
  <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Metode Pemeriksaan IVA
Dokter akan memasukkan alat bernama spekulum atau cocor 
bebek ke dalam vagina.
Alat ini berfungsi menahan mulut vagina terbuka, 
sehingga leher dan mulut rahim dapat terlihat. Kemudian 
dokter akan mencelup gumpalan kapas bertangkai (mirip cotton bud) ke larutan asam asetat (asam cuka) kadar 3-5%. </h5>
<br>
  <h4>Bagaimana Cara Melakukan IVA Test?</h4>
  <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
  <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Metode Pemeriksaan IVA
Dokter akan memasukkan alat bernama spekulum atau cocor 
bebek ke dalam vagina.
Alat ini berfungsi menahan mulut vagina terbuka, 
sehingga leher dan mulut rahim dapat terlihat. Kemudian 
dokter akan mencelup gumpalan kapas bertangkai (mirip cotton bud) ke larutan asam asetat (asam cuka) kadar 3-5%. </h5>
     <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">


            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->

        <div class="col-lg-4">

            <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<?php include_once('includes/footer.php'); ?>
