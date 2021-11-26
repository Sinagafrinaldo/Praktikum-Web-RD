<!DOCTYPE html>
<html>
<head>
	<title>Tambah data</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="jumbotron text-center">
    	<h1><u>Tambah Data Transaksi</u></h1>
  	</div>
  	<hr>
	<div class="container">
    	<div class="row">
			<form method="post">
				<div class="form-group">
					<label>Nama Barang</label>
					<input class="col-xs-4" type="text" name="nama" placeholder="Nama barang"><br>
				</div>
				<div class="form-group">
					<label>Harga Jual (Rp) </label>
					<input class="col-xs-4" type="text" name="harga_jual" placeholder="Harga jual"><br>
				</div>
				<div class="form-group">
					<label>Jumlah barang</label>
					<input class="col-xs-4" type="text" name="jumlah_jual" placeholder="Jumlah"><br><br>
				</div>
				<input class="btn btn-primary" type="submit" name="submit" value="Simpan data"><br><br><br><br>
			</form>
			<a href="index.php">Kembali ke Menu Utama</a>
			<?php
				include 'koneksi.php';
				if(isset($_POST['submit'])){
					$nama = $_POST['nama'];
					$harga_jual = $_POST['harga_jual'];
					$jumlah_jual = $_POST['jumlah_jual'];
					$sql= "insert into transaksi (nama, harga_jual, jumlah_jual) values ('$nama', '$harga_jual', '$jumlah_jual')";
					$hasil = mysqli_query($konek,$sql);
					if ($hasil){
					echo "<script>alert('Data berhasil ditambahkan');document.location='index.php'</script>";
					}else{
					echo "<script>alert('Data gagal ditambahkan ');document.location='index.php'</script>";
					}
				}
			?>
		</div>
	</div>
	<footer class="bg-light text-center text-lg-start">
		<div class="text-center p-3" style="background-color: black; height: 40px;  color: white;">
	    © Frinaldo Sinaga 119140064
	    	<a class="text-dark" href="index.php">Home</a>
	    </div>
	</footer>
</body>
</html>