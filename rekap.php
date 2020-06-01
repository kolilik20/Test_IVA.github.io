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

$db->where ("periksa", 'sudah');
$hasil = $db->copy ();
$res = $hasil->get ("pasien", Array (10, 10));
$numSudah = $db->getValue ("pasien", "count(id)");

include_once('includes/header.php');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Rekap Data</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-plus-square fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $numPapsmir; ?></div>
                            <div>Sudah Papsmir </div>
                        </div>
                    </div>
                </div>
                <a href="pasien.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $numPasien; ?></div>
                            <div>Jumlah Pasien</div>
                        </div>
                    </div>
                </div>
                <a href="pasien.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-medkit fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $numPositif; ?></div>
                            <div>Jumlah Positif</div>
                        </div>
                    </div>
                </div>
                <a href="pasien.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-medkit fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $numSudah; ?></div>
                            <div>Sudah Test Iva</div>
                        </div>
                    </div>
                </div>
                <a href="pasien.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">

            

        </div>
        <div class="col-lg-3 col-md-6">
            
        </div>
    </div>

       
        
        </div>
        <div class="col-lg-3 col-md-6">
            
        </div>
    </div>

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
