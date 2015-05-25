<?php

$localhost = "localhost";
$user = "root";
$pas = "";
$db = "poliklinik";

$koneksi = mysql_connect ($localhost,$user,$pas) or die ("koneksi gagal");
$konek_db = mysql_select_db($db, $koneksi);

//---------------------- Lihat Data --------------------------------------------	
$lihatDataPengunjung = mysql_query("SELECT * FROM pengunjung");
	$hasilCari ='';
	$hasilCari .= '<table class="table table-hover" border="2"><tr><td>Id</td><td>Nama</td><td>Alamat</td><td>TL</td><td>Aksi</td></tr>';
	while($baris1 = mysql_fetch_array($lihatDataPengunjung))
	{$hasilCari .= "<tr>
	<td>".$baris1['id_pengunjung']."</td>
	<td>".$baris1['nama']."</td>
	<td>".$baris1['alamat']."</td>
	<td>".$baris1['tanggal_lahir']."</td>
	<td><input type='button' value='edit'></td></tr>";}
	$hasilCari .= '</table>';
//-----------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Poliklinik</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/metisMenu.min.css" rel="stylesheet">
    <link href="css/timeline.css" rel="stylesheet">
    <link href="css/newGo.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<style type="text/css">
#bossy { border-radius:20px;}
</style>
<body>

       <div id="wrapper">
		<!-- id tambahan pada bootstrap -->
        <!-- Navigasi -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style=" margin-bottom: 0">
        	<!-- header -->
            <div class="navbar-header col-md-10">
                <marquee behavior="alternate" direction="right"><a class="navbar-brand" href="index.php" style="color:green; font:monospace;">Poliklinik</a></marquee>
            </div>
            <!-- end_header -->
			<!-- menu_setting_pengguna -->
            <ul class="nav nav-pills pull-right">
            	<li><a class="badge"><i class="fa fa-user fa-fw"></i><i> Hi, Fulan </i></a></li>
                <li id="bossy" spry:hover="about"> 
                    <a href="login.php" class="badge">
                        <i class="fa fa-sign-out fa-fw"></i> Out
                    </a>
                </li>
                <!-- end_menu_setting_pengguna -->
            </ul>
            <!-- end_menu_kanan_pengguna -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i> Depan</a>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-user"></i> Pasien<span class=" glyphicon glyphicon-arrow-down pull-right" onClick="
                            $("button").click(function(){
                                $("#sa").fadeOut(300);
                                });
                            "></span></a>
                            <ul id="sa" class="nav nav-second-level">
                                <li><a href="registrasipasien.php">Registrasi</a></li>
                                <li><a href="datapasien.php">Data Pasien</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-cloud"></i> Pengunjung<span class="glyphicon glyphicon-arrow-down pull-right"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="inputpengunjung.php">Input Data</a></li>
                                <li><a href="datapengunjung.php">Data Pengunjung</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-ruble"></i> Obat<span class="glyphicon glyphicon-arrow-down pull-right"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="tambahobat.php">Tambah Obat</a></li>
                                <li><a href="dataobat.php">Data Obat</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-knight"></i> Dokter<span class="glyphicon glyphicon-arrow-down pull-right"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="tambahdokter.php">Tambah Data</a></li>
                                <li><a href="datadokter.php">Data Dokter</a></li>
                            </ul>
                        </li>
                        <li><a href="sejarah.php"><i class="glyphicon glyphicon-book"></i><i> History</i></a></li>
                        <li><a href="gamer.php"><i class="glyphicon glyphicon-apple"></i> Refreshing</a></li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<!-------------------------------------------------------------------------------------------------->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" align="center">This is Cabbin Comer, <i class="glyphicon glyphicon-heart"></i></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pengunjung
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart">
                                <?php echo $hasilCari; ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>

</body>

</html>
