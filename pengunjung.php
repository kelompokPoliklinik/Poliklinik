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
	 
	$fakultasW .= '<select  name="fak" class="col-md-12">';
	while($baris = mysql_fetch_array($cari))
	{$fakultasW .= "<option value='".$baris['fakultas']."'>".$baris['nama']."</option>";}
	$fakultasW .= '</select>';
//---------------------- Lihat Data --------------------------------------------	
$lihatDataPasien = mysql_query("SELECT * FROM pengunjung");
	$hasilCari ='';
	$hasilCari .= '<table>';
	while($baris1 = mysql_fetch_array($lihatDataPasien))
	{$hasilCari .= "<tr>
	<td>".$baris1['id_pasien']."</td>
	<td>".$baris1['nama']."</td>
	<td>".$baris1['alamat']."</td>
	<td>".$baris1['nim_nip']."</td>
	<td>".$baris1['tanggal_lahir']."</td>
	<td>".$baris1['nama']."</td>
	<td>".$baris1['alergi']."</td>
	<td><input value='edit'></td></tr>";}
	$hasilCari .= '</table>';
//-----------------------------------------------------------------------------
if (isset($_POST['submit']))
{
	$a = $_POST['nama'];
	$b = $_POST['tempat'];
	$i = $_POST['nim'];
	$c = $_POST['tanggal'];
	$d = $_POST['alamat'];
	$e = $_POST['jk'];
	$f = $_POST['pekerjaan'];
	$g = $_POST['fak'];
	$h = $_POST['alergi'];
	$idPasien = "UM_".+$i;
	if($g != '-')
		$idPasien = "MHS_".+$i;
	$inputPasien = mysql_query("INSERT INTO `data_pasien`(`id_pasien`, `nama`, `nim_nip`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `pekerjaan`, `fakultas`, `alergi`) VALUES ('$idPasien','$a','$i','$b','$c','$d','$e','$f','$g','$h')");
	if (!$inputPasien)
	{echo"<script language='javascript'> alert('gagal !');</script>";}
	else
	{echo"<script language='javascript'> alert('berhasil !');</script>";}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Poliklinik Univ. Andalas</title>
    <!-- Bla Bla Bla -->
    <script src="js/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Kappe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
    <!-- Bla Bla Bla -->
</head>
<style type="text/css">
html, body {
margin:0 auto;
background-color:#F5FFF4;
background-attachment:fixed;
margin:0;
padding:30;
height:100%;
}
#ronin { background:url(images/menu.jpg); margin-top:0px; position: absolute; top:0px; bottom:0px; margin-bottom:0px;}
#ronin2 { margin-top:0px; position: absolute; top:0px; bottom:0px; margin-bottom:0px; background-color:#6F6; opacity:0.4 ; filter : alpha (opacity=40); border-radius:20px;}
#backer { background-color:#0F3; opacity:0.4 ; filter : alpha (opacity=40); border-radius:20px;}
#re { background-color:#0F3; opacity:2.0 ; filter : alpha (opacity=100);}
</style>
<body>
<div>
    <div class="header-left col-md-2" id="ronin"> <!--ini buat menu, felass -->
        <ul class="nav nav-taabs nav-stacked">
            <li><a href="home.php"><strong><img src="images/v4.png" class="img-circle" /></strong></a></li></ul>
        <ul class="nav nav-tabs nav-stacked">   
            <li style="background:#0F0" class="active"><a href="home.php">Home</a></li>
            <li style="background:#0F0"><a href="pasien.php">Patience</a></li>
            <li style="background:#0F0"><a href="pengunjung.php">Comer</a></li>
            <li style="background:#0F0"><a href="obat.php">Medicine</a></li>
            <li style="background:#0F0"><a href="dokter.php">Doctors</a></li>
            <li style="background:#0F0"><a href="history.php">History</a></li>
            <li style="background:#0F0"><a href="game.php">Refreshing</a></li>
        </ul>
        <div>
        <ul class=" divider" style="color:#FFF; font-size:9px">
        	<li></li><li>Designed by <a href="#" class=" label label-danger">Poland</a> Coorp. [POLiklinik unAND]</p></li>
        </ul></div>
    </div>
    <div class="col-md-2"></div>
<div class="col-md-10"> <!-- halaman index nih, fellass -->
	<div class="text-danger">
    	<h1 align="center" style="color: inherit; font:'Comic Sans MS', cursive;" >Pengunjung</h1>
    </div>
    <div class="col-md-12"><!-- sub menu -->
        	<div class=" col-md-5 btn btn-success" onclick="
                if (document.getElementById('isi1').style.display != '')
                {document.getElementById('isi1').style.display = '';
                 document.getElementById('isi2').style.display = 'none';
                 document.getElementById('menu1').style.backgroundColor = '#0C0';
                 document.getElementById('menu2').style.backgroundColor = '#0F0';}
                else 
                {document.getElementById('isi1').style.display = '';
                 document.getElementById('isi2').style.display = 'none';
                 document.getElementById('menu1').style.backgroundColor = '#0C0';
                 document.getElementById('menu2').style.backgroundColor = '#0F0';}
                ">Input Data Pengunjung<div>
                <div class=" col-md-5 btn btn-success" onclick="
                if (document.getElementById('isi2').style.display != '')
                {document.getElementById('isi1').style.display = 'none';
                 document.getElementById('isi2').style.display = '';
                 document.getElementById('menu1').style.backgroundColor = '#0F0';
                 document.getElementById('menu2').style.backgroundColor = '#0C0';}
                else 
                {document.getElementById('isi1').style.display = 'none';
                 document.getElementById('isi2').style.display = '';
                 document.getElementById('menu1').style.backgroundColor = '#0F0';
                 document.getElementById('menu2').style.backgroundColor = '#0C0';}
                ">Data Pengunjung</div>
        </div><!-- tutup sub menu -->
		<div class="col-md-12"><!-- isi menu halaman -->
            <br />
            <br />
        	<div class="col-md-12" id="isi1" style="display:none;"><!-- isi menu 1 -->
                <div class="col-md-12" id="ronin2"></div>
				<div class="col-md-12"><h3 align="center" class="h3">Input Data Pengunjung</h3><div>
                <br /><br />
                	<form action="pasien.php" method="post">
                    <div class="col-md-12">
                    	<div class="col-md-3">nama</div>
                    	<div class="col-md-9"><input class="col-md-12" type="text" name="nama" placeholder="tulis nama disini"  /></div>
                    	<div class="col-md-3">nim/nip</div>
                    	<div class="col-md-9"><input class="col-md-12" type="text" name="nim" placeholder="tulis disini"  /></div>
                    	<div class="col-md-3">jenis kelamin</div>
                    	<div class="col-md-9">
                        	<select  name="jk" class="col-md-12">
                            	<option value='Laki-Laki'>Laki-Laki</option>
                                <option value='Perempuan'>Perempuan</option>
                            </select></div>
						<div class="col-md-3">umur</div>
                    	<div class="col-md-9"><input class="col-md-12" type="text" name="tempat" placeholder="tulis disini"  /></div>
                    	<div class="col-md-3">tanggal</div>
                    	<div class="col-md-9"><input class="col-md-12" placeholder="tahun-bulan-tanggal (ex: 1880-12-13)" type="text" name="tanggal" /></div>
                    	<div class="col-md-3">berat badan</div>
                    	<div class="col-md-9"><input class="col-md-12" type="text" name="alamat" placeholder="tulis disini"  /></div>
                    	<div class="col-md-3">tensi</div>
                    	<div class="col-md-9"><input class="col-md-12" type="text" name="pekerjaan" placeholder="tulis disini"  /></div>
                    	<div class="col-md-3">tinggi badan</div>
                    	<div class="col-md-9"><input class="col-md-12" type="text" name="pekerjaan" placeholder="tulis disini"  /></div>
                    	<div class="col-md-3">Terapi</div>
                    	<div class="col-md-9"><input class="col-md-12" value="-" type="text" name="alergi" placeholder="tulis alergi disini"  /></div>
                    	<div class="col-md-3">id_perawat</div>
                    	<div class="col-md-9"><input class="col-md-12" value="-" type="text" name="alergi" placeholder=""  /></div>
                        <div class="col-md-12" align="center" ><input type="submit" value="submit" name="submit" class="btn btn-success"  /></div>
                    </div>
                    </form>
                    <br /><br /><br /><br />
            </div>
            <div class="col-md-12" id="isi2" style="display:none;"><!-- isi menu 2 -->
            	<h3 class="h3">Data Pengunjung</h3>
                <br /><br />
                <?php echo $hasilCari; ?>
            </div>
        </div><!-- tutup menu halaman -->
</div>
</div>
	

</body>
</html>