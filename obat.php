<?php
$localhost = "localhost";
$user = "root";
$pas = "";
$db = "poliklinik";

$koneksi = mysql_connect ($localhost,$user,$pas) or die ("koneksi gagal");
$konek_db = mysql_select_db($db, $koneksi);
//--------------------------------------------------------------------------
$lihatDataObat = mysql_query("SELECT * FROM obat");
	$hasilCari ='';
	$hasilCari .= '<table width="100%" class="table table-hover"><tr><td>Id</td><td>Nama</td><td>Jenis</td><td>Jumlah</td><td>Isi</td><td>Tanggal Masuk</td><td>Kadaluarsa</td></tr>';
	while($baris1 = mysql_fetch_array($lihatDataObat))
	{$hasilCari .= "<tr>
	<td>".$baris1['id_obat']."</td>
	<td>".$baris1['nama']."</td>
	<td>".$baris1['jenis']."</td>
	<td>".$baris1['jumlah']."</td>
	<td>".$baris1['isi/satuan']."</td>
	<td>".$baris1['tanggal_masuk']."</td>
	<td>".$baris1['kadaluarsa']."</td>
	<td><input value='edit'></td></tr>";}
	$hasilCari .= '</table>';

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
#ronin { margin-top:0px; position: absolute; top:0px; bottom:0px; margin-bottom:0px;}
</style>
<body>
<div>
    <div class="header-left col-md-2" id="ronin"> <!--ini buat menu, felass -->
        <ul class="nav nav-taabs nav-stacked">
            <li><a href="home.php"><strong><img src="images/v4.png" class="img-circle" /></strong></a></li></ul>
        <ul class="nav nav-tabs nav-stacked">   
            <li style="background:#0F0"><a href="home.php">Home</a></li>
            <li style="background:#0F0"><a href="pasien.php">Patience</a></li>
            <li style="background:#0F0"><a href="pengunjung.php">Comer</a></li>
            <li style="background:#0F0" class="active"><a href="obat.php">Medicine</a></li>
            <li style="background:#0F0"><a href="dokter.php">Doctors</a></li>
            <li style="background:#0F0"><a href="history.php">History</a></li>
            <li style="background:#0F0"><a href="game.php">Refreshing</a></li>
        </ul>
        <div>
        <ul class=" divider" style="color:#FFF; font-size:9px">
        	<li></li><li>Designed by <a href="#" class=" label label-danger">Poland</a> Coorp. [POLiklinik unAND]</p></li>
        </ul></div>
    </div>
<div align="center" class="col-md-2"></div>
<div class="col-md-10"> <!-- halaman index nih, fellass -->
	<div class="text-danger">
    	<h1 align="center" style="color: inherit; font:'Comic Sans MS', cursive;" >Data Obat</h1>
    </div>
    <div>
    <br />
    <button class="btn btn-success">Tambah Data <div class="glyphicon glyphicon-plus"></div></button>
<br /><br />
    	<?php echo $hasilCari; ?>
    </div>
</div>
</div>
	

</body>
</html>