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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style=" margin-bottom: 0; border-bottom:1; border-bottom-color:#060;">
        	<!-- header -->
            <div class="navbar-header col-md-9" style="background-color:#090">
                <marquee behavior="alternate" direction="right"><a class="navbar-brand" href="index.php" style="color:white; font:monospace;"><b>Poliklinik</b></a></marquee>
            </div>
            <!-- end_header -->
			<!-- menu_setting_pengguna -->
            <div class="navbar-header col-md-3" style="background-color:#090">
            <ul class="nav nav-pills pull-right">
            	<li class="btn btn-success"><a style="color:white;"><i class="fa fa-user fa-fw"></i><i> Hi, Fulan </i></a></li>
                <li class="btn btn-success"> 
                    <a style="color:white;" href="login.php">
                        <i class="fa fa-sign-out fa-fw"></i> Out
                    </a>
                </li>
                <!-- end_menu_setting_pengguna -->
            </ul>
             </div>   
            <!-- end_menu_kanan_pengguna -->

            <div class="navbar-default sidebar" style="background-color:#090; border--color:#060; border-top:thin;" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><a style="color:white;" href="index.php"><i class="glyphicon glyphicon-dashboard"></i> Depan</a>
                        </li>
                        <li>
                            <a style="color:white;" href="#"><i class="glyphicon glyphicon-user"></i> Pasien<span class=" glyphicon glyphicon-arrow-down pull-right"></span></a>
                            <ul id="sa" class="nav nav-second-level">
                                <li><a style="color:white;" href="registrasipasien.php">Registrasi</a></li>
                                <li><a style="color:white;" href="datapasien.php">Data Pasien</a></li>
                            </ul>
                        </li>
                        <li>
                            <a style="color:white;" href="#"><i class="glyphicon glyphicon-cloud"></i> Pengunjung<span class="glyphicon glyphicon-arrow-down pull-right"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a style="color:white;" href="inputpengunjung.php">Input Data</a></li>
                                <li><a style="color:white;" href="datapengunjung.php">Data Pengunjung</a></li>
                            </ul>
                        </li>
                        <li>
                            <a style="color:white;" href="#"><i class="glyphicon glyphicon-ruble"></i> Obat<span class="glyphicon glyphicon-arrow-down pull-right"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a style="color: #ACFFAA;" href="tambahobat.php">Tambah Obat</a></li>
                                <li><a style="color: #ACFFAA;" href="dataobat.php">Data Obat</a></li>
                            </ul>
                        </li>
                        <li>
                            <a style="color: #ACFFAA;" href="#"><i class="glyphicon glyphicon-knight"></i> Dokter<span class="glyphicon glyphicon-arrow-down pull-right"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a style="color: #ACFFAA;" href="tambahdokter.php">Tambah Data</a></li>
                                <li><a style="color: #ACFFAA;" href="datadokter.php">Data Dokter</a></li>
                            </ul>
                        </li>
                        <li><a style="color: #ACFFAA;" href="sejarah.php"><i class="glyphicon glyphicon-book"></i><i> History</i></a></li>
                        <li><a style="color: #ACFFAA;" href="gamer.php"><i class="glyphicon glyphicon-apple"></i> Refreshing</a></li>
                    </ul>
                </div>
                <!-- End_menu-samping -->
            </div>
            <!-- End_menu-statis -->
        </nav>
<!-------------------------------------------------------------------------------------------------->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" align="center">Selamat Datang <i class="glyphicon glyphicon-plane"></i></h1>
                </div>
                <!-- Akhir 1 -->
            </div>
            <!-- End_Bagian-Kepala-Judul -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    	<!-- Sub-judul-->
                        <div class="panel-heading">
                            Live Slider Photos (Photos slidernya belum ada)
                        </div>
                        <!-- End_Sub-judul -->
                        <!-- Bagian Badan -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                        <!-- End_Bagian-badan -->
                    </div>
                    <!-- End_Isi-halaman -->
                </div>
            </div>
            <!-- End_Baris -->
        </div>
        <!-- End_Bagian-Halaman -->

    </div>

</body>

</html>
