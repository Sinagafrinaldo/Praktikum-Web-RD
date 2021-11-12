<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="kalkulator">
	<fieldset>
		<h2>Kalkulator</h2>
		<?php
		function jumlah($nilai1, $nilai2){
			$hasil = $nilai1 + $nilai2;
			return $hasil;
		}

		function kurang($nilai1, $nilai2){
			$hasil = $nilai1 - $nilai2;
			return $hasil;
		}

		function kali($nilai1, $nilai2){
			$hasil = $nilai1 * $nilai2;
			return $hasil;
		}

		function bagi($nilai1, $nilai2){
			$hasil = $nilai1/$nilai2;
			return $hasil;
		}
		function modulus($nilai1, $nilai2){
			$hasil = $nilai1 % $nilai2;
			return $hasil;
		}
		echo "Bilangan 1 = 10 <br>";
		echo "Bilangan 2 = 5<br><br>";
		echo "Berikut merupakan hasil dari setiap operasi<br><br>";
		echo "PENJUMLAHAN<br>";
		echo "Operator : +<br>";
		echo "Hasil: ", jumlah(10,5), "<br><br>";

		echo "PENGURANGAN<br>";
		echo "Operator : -<br>";
		echo "Hasil: ", kurang(10,5), "<br><br>";

		echo "PERKALIAN<br>";
		echo "Operator : *<br>";
		echo "Hasil: ", kali(10,5), "<br><br>";

		echo "PEMBAGIAN<br>";
		echo "Operator : /<br>";
		echo "Hasil: ", bagi(10,5), "<br><br>";

		echo "MODULUS<br>";
		echo "Operator : %<br>";
		echo "Hasil: ", modulus(10,5), "<br><br>";
		?>
	</fieldset>

	<div class="sort">
		<fieldset>
			<h2>Pengurutan Data</h2>
			<?php
			function pengurutan(){
				$data = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
				sort($data);
				$a = 0;
				foreach ($data as $value) {
					if ($a > 0){
						echo ", ";
					}
					echo "$value";
					$a++;
				}
			}
			pengurutan();
			?>
		</fieldset>
	</div>

	<div class="prima">
		<fieldset>
			<h2>Bilangan prima diantara 1-50</h2>
			<?php
			function prima(){
				$b = 0;
				for ($i=2; $i<50; $i++){
					$prima = True;
					for ($j=2; $j*$j<=$i; $j++){
						if ($i % $j == 0){
							$prima = False;
							break;
						}
					}
					if ($prima){
						if ($b != 0){
							echo ", ";
						}
						echo "$i ";
						$b++;
					}
					
				}
			}
			prima();
			?>
		</fieldset>
	</div>
</div>
</body>
</html>

