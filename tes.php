<?php 

session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();


//tugurejo
$db->where ("kelurahan", "Tugurejo");
$db->where ("hasil", "positif");
$cnt = $db->getValue ("pasien", "count(id)");

$db->where ("kelurahan", "Tugurejo");
$db->where ("papsmir", "sudah");
$pap = $db->getValue ("pasien", "count(id)");

$db->where ("kelurahan", "Tugurejo");
$db->where ("umur");
$pus = $db->getValue ("pasien", "count(id)");

$db->where ("kelurahan", "Tugurejo");
$db->where ("periksa", "sudah");
$tes = $db->getValue ("pasien", "count(id)");

//Jerakah
$db->where ("kelurahan", "Jerakah");
$db->where ("hasil", "positif");
$jrk1 = $db->getValue ("pasien", "count(id)");

$db->where ("kelurahan", "Jerakah");
$db->where ("papsmir", "sudah");
$jrk2= $db->getValue ("pasien", "count(id)");

$db->where ("kelurahan", "Jerakah");
$db->where ("umur");
$jrk3 = $db->getValue ("pasien", "count(id)");

$db->where ("kelurahan", "Jerakah");
$db->where ("periksa", "sudah");
$jrk4 = $db->getValue ("pasien", "count(id)");

//Karanganyar
$db->where ("kelurahan", "Karanganyar");
$db->where ("hasil", "positif");
$kra1 = $db->getValue ("pasien", "count(id)");

$db->where ("kelurahan", "Karanganyar");
$db->where ("papsmir", "sudah");
$kra2= $db->getValue ("pasien", "count(id)");

$db->where ("kelurahan", "Karanganyar");
$db->where ("umur");
$kra3 = $db->getValue ("pasien", "count(id)");

$db->where ("kelurahan", "Karanganyar");
$db->where ("periksa", "sudah");
$kra4 = $db->getValue ("pasien", "count(id)");




?>

<html>
<head>
 <title>Rekap Data</title>
</head>
<body>


<table class="table table-striped table-bordered table-condensed" align="center" border="2">
	<caption>Rekap Data</caption>
        <thead>
            <tr>
                <th width="25%">Kelurahan</th>
                <th width="25%">PUS</th>
                <th width="10%">TOTAL POSITIF</th>
                <th width="20%">SUDAH PAPSMIR</th>
                <th width="20%">SUDAH TES IVA</th>
            </tr>
        </thead>
        <tbody>
            <tr align="center">
            	<td>JERAKAH</td>
            	<td><?php echo $jrk3?></td>
			    <td><?php echo $jrk1?></td>
			    <td><?php echo $jrk2?></td>
			    <td><?php echo $jrk4?></td>
			</tr>

			<tr align="center">
            	<td>TUGUREJO</td>
            	<td><?php echo $pus?></td>
				<td><?php echo $cnt?></td>
				<td><?php echo $pap?></td>
				<td><?php echo $tes?></td>
			</tr>

			<tr align="center">
            	<td>KARANGANYAR</td>
            	<td><?php echo $kra3?></td>
				<td><?php echo $kra1?></td>
				<td><?php echo $kra2?></td>
				<td><?php echo $kra4?></td>
			</tr>
        </tbody>
    </table>
</body>
</html>