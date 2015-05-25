<?php

$localhost = "localhost";
$user = "root";
$pas = "";
$db = "poliklinik";

$koneksi = mysql_connect ($localhost,$user,$pas) or die ("koneksi gagal");
$konek_db = mysql_select_db($db, $koneksi);
//----------- Dropdown Fakultas ----------------------------------------------
$fakultasW = '';
$cari = mysql_query("SELECT * FROM fakultas");
	 
	$fakultasW .= '<select  name="fak" style="border-radius:10px;" class="col-md-12">';
	while($baris = mysql_fetch_array($cari))
	{$fakultasW .= "<option style='border-radius:10px;' value='".$baris['fakultas']."'>".$baris['nama']."</option>";}
	$fakultasW .= '</select>';
//-----------------------------------------------------------------------------
if (isset($_POST['submit']))
{
	$a = $_POST['nama'];
	$i = $_POST['nim'];
	$b = $_POST['tempat'];
	$c = $_POST['tanggal'];
	$d = $_POST['alamat'];
	$e = $_POST['jk'];
	$f = $_POST['pekerjaan'];
	$g = $_POST['fak'];
	$h = $_POST['alergi'];
	$idPasien = "_";
	if($f == 'mahasiswa')
		{$idPasien = "MHS_".+$i;}
	else if ( $f == 'dosen')
		{$idPasien = "DOS_".+$i;}
	else {$idPasien = "UMU_".+$i;}		
	$inputPasien = mysql_query("INSERT INTO `data_pasien`(`id_pasien`, `nama`, `nim_nip`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `pekerjaan`, `fakultas`, `alergi`) VALUES ('$idPasien','$a','$i','$b','$c','$d','$e','$f','$g','$h')");
	if (!$inputPasien)
	{echo"<script language='javascript'> alert('gagal !');</script>";}
	else
	{echo"<script language='javascript'> alert('berhasil !');</script>";}
}

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
            	<li><a class="badge"><i class="fa fa-user fa-fw"></i><i> Hi, Loren Ipsum </i></a></li>
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
<!------------------------------- ./ start Patience Page ----------------------------------------------->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" align="center">Halaman Pasien <i class="glyphicon glyphicon-user"></i></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form registrasi Pasien
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart">
                                
<!---------- /. Form Patience -------------------------------------------------------------->

<form action="registrasipasien.php" method="post" class="form-control-static">
                    <div class="col-md-12">
				<!-- /. start input -->
                    	<div class="col-md-3">nama</div>
                    	<div class="col-md-9"><input class="col-md-12" style="border-radius:10px;" type="text" name="nama" placeholder="tulis nama disini"  /></div>
                            <div class="col-sm-12" style="height:6px;"></div>
                    	<div class="col-md-3">nim/nip</div>
                    	<div class="col-md-9"><input class="col-md-12" style="border-radius:10px;"  type="text" name="nim" placeholder="tulis disini"  /></div>
                            <div class="col-sm-12" style="height:6px;"></div>
                    	<div class="col-md-3">tempat lahir</div>
                    	<div class="col-md-9"><input class="col-md-12" style="border-radius:10px;"  type="text" name="tempat" placeholder="tulis disini"  /></div>
                            <div class="col-sm-12" style="height:6px;"></div>
                    	<div class="col-md-3">tanggal lahir</div>
                    	<div class="col-md-9"><input class="col-md-12" style="border-radius:10px;"  placeholder="tahun-bulan-tanggal (ex: 1880-12-13)" type="text" name="tanggal" /></div>
                            <div class="col-sm-12" style="height:6px;"></div>
                    	<div class="col-md-3">alamat</div>
                    	<div class="col-md-9"><input class="col-md-12" style="border-radius:10px;" type="text" name="alamat" placeholder="tulis alamat disini"  /></div>
                            <div class="col-sm-12" style="height:6px;"></div>
                    	<div class="col-md-3">jenis kelamin</div>
                    	<div class="col-md-9">
                        	<select  name="jk" style="border-radius:10px;"  class="col-md-12">
                            	<option style="border-radius:10px;" value='Laki-Laki'>Laki-Laki</option>
                                <option style="border-radius:10px;" value='Perempuan'>Perempuan</option>
								<!-- end option choose 'jenis kelamin' -->
                            </select></div>
                            <div class="col-sm-12" style="height:6px;"></div>
                    	<div class="col-md-3">pekerjaan</div>
                    	<div class="col-md-9">
                        <select  name="pekerjaan" style="border-radius:10px;"  class="col-md-12">
                            	<option style="border-radius:10px;" value='mahasiswa'>Mahasiswa</option>
                                <option style="border-radius:10px;" value='dosen'>Dosen</option>
                                <option style="border-radius:10px;" value='lain-lain'>Lain-Lain</option>
								<!-- end option choose 'pekerjaan' -->
                                <!-- ./ pekerjaan juga_digunakan_untuk_menentukan_Id_pasien -->
                            </select></div>
                            <div class="col-sm-12" style="height:6px;"></div>
                    	<div class="col-md-3">fakultas</div>
                    	<div class="col-md-9"><?php echo $fakultasW; ?></div>
                            <div class="col-sm-12" style="height:6px;"></div>
                    	<div class="col-md-3">Alergi</div>
                    	<div class="col-md-9">
							<input class="col-md-12" style="border-radius:10px;" value="-" type="text" name="alergi" placeholder="tulis alergi disini"  /></div>
                            <div class="col-sm-12" style="height:15px;"></div>
                        <div class="col-md-12" align="center" >
							<input type="submit" value="submit" style="border-radius:20px;" name="submit" class="col-md-12 btn btn-success"  /></div>
                    </div>
				<!-- /. end input -->
</form>
                    
<!---------- /. End Form Patience -------------------------------------------------------------->
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
