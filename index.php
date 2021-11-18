<!DOCTYPE html>
<html>
<head>
	<title>Form Perhitungan Belanja</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<h2>Perhitungan Belanja Toko Buah ITERA</h2>
	<hr>	
	<p align="right">by Frinaldo Sinaga</p>
	<hr>	
	<p>Masukkan jumlah buah yang dibeli: </p>
	<fieldset>	
		<form name="form" action="" method="POST" onsubmit="setHasil()">
			<label>Mangga Rp 15000/kg</label>
			<input type="number" name="j_mangga" placeholder="Jumlah (kg)"><br>
			<label>Jambu Rp 13000/kg</label>
			<input type="number" name="j_jambu" placeholder="Jumlah (kg)"><br>
			<label>Salak Rp 10000/kg</label>
			<input type="number" name="j_salak" placeholder="Jumlah (kg)"><br><br>
			<input class= "ok" type="submit" name="submit" value="Hitung" ><br><br>
		</form>

		<script type="text/javascript">
			<?php include 'action.php'; ?>
			window.onload = function setHasil(){
				document.getElementById('jumlahbeli').innerHTML ="<?php echo "Anda membeli $j_mangga kg mangga, $j_jambu kg jambu, $j_salak kg salak dengan rincian:  <br> " ?> ";
				document.getElementById('hasil').innerHTML = " <?php if ($j_mangga != 0){echo "Total mangga : Rp ", $tot_mangga->total_harga() , "<br>"; }  if ($j_jambu !=0){echo "Total jambu : Rp ", $tot_jambu->total_harga(), "<br>";} if ($j_salak !=0){ echo "Total salak : Rp ", $tot_salak->total_harga(), "<br>"; } echo "Total Keseluruhan : Rp ", ($tot_mangga->total_harga()) + ($tot_jambu->total_harga()) + ($tot_salak->total_harga()), "<br>"; ?>";
			}
		</script>
		<div id="jumlahbeli"></div>
		<div id="hasil"></div>
	</fieldset>
</body>
</html>
