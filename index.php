<!DOCTYPE html>
<html>
<head>
	<title>Do'a Emak</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

	<div class="header">
	<a href="index.php"><img src="UNRI.png"></a>
		<h1>Statistika Sederhana</h1>
		
	</div>



	<div class="menu">
		<ul>
			<li><a href="?t=rata">Menghitung Nilai Rata-Rata</a> </li><br>
			<li><a href="?t=maxmin">Menghitung Nilai Max - Min</a> </li><br>
			<li><a href="?t=variansi">Menghitung Nilai Variansi</a> </li><br>
			<li><a href="#">Menghitung Nilai Standar Deviasi</a> </li><br>
			<li><a href="#">Menghitung Nilai Kuartil</a> </li><br>
			<li><a href="#">Menghitung Nilai Desil</a> </li><br>
			<li><a href="#">Menghitung Nilai Persentil</a> </li><br>
			<li><a href="#">Sort ASC</a> </li><br>
			<li><a href="#">Sort DESC</a> </li><br>
		</ul>
		
	</div>

	<div class="menu2">

<?php
	error_reporting(E_ALL ^ E_NOTICE);
	
	if(isset($_GET['t'])) {
		$p = $_GET['t'];
	}
	if(empty($p) || $p=="" ) { 
		$p="main";
	} 
	if(file_exists($p.".php")) {
		include $p.".php";
	}
	else {
		echo '<h3>Kelompok Doa Emak<h3><br>
				<h4>Frans Feby [1503113135]<h4><br>
				<h4>Hafidz Wandrifo Indrikh [1503113109]<h4><br>
				<h4>Ryan Pangestu [1503113102]<h4><br>';
	}
	?>
		
	</div>


	<div class="footer">

			<p class="copyright">
			 <a href="www.facebook.com/fransfebyambarita">Copyright © Do'a Emak</a>
			</p>
		</div>
	</div>

</body>
</html>