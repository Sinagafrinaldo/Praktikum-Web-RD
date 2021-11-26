<!DOCTYPE html>
<html>
<head>
	<title>Edit data barang</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		include "koneksi.php"; 
		$id = $_GET['id']; 

		$qry = mysqli_query($konek,"SELECT * from transaksi where id='$id'"); 

		$data = mysqli_fetch_array($qry); 
		if(isset($_POST['update'])){
			$nama = $_POST['nama'];
		    $harga_jual = $_POST['harga_jual'];
		    $jumlah_jual = $_POST['jumlah_jual'];
		    $edit = mysqli_query($konek, "UPDATE transaksi set nama = '$nama', harga_jual= '$harga_jual', jumlah_jual = '$jumlah_jual' WHERE id='$id' ");
		    if($edit){
		    	echo "<script>alert('Data berhasil diedit');document.location='index.php'</script>";
		        mysqli_close($koneksi); 
		    }else{
		        echo "<script>alert('Data gagal diedit');document.location='index.php'</script>";
		    }    	
		}

	?>
	<div class="jumbotron text-center">
    	<h1><u>Edit Data Transaksi Barang</u></h1>
  	</div>
  	<hr>
	<div class="container">
    	<div class="row">
			<form method="POST">
				<div class="form-group">
					<label>ID Transaksi</label>
				  	<input class="col-xs-4" type="text" name="id" value="<?php echo $data['id'] ?>" placeholder="id" disabled><br>
			  	</div>
			  	<div class="form-group">
					<label class="control-label">Nama</label>
				  	<input class="col-xs-4" type="text" name="nama" value="<?php echo $data['nama'] ?>" placeholder="Nama" Required><br>
			  	</div>
			  	<div class="form-group">
				  	<label>Harga barang (Rp) </label>
				  	<input class="col-xs-4" type="text" name="harga_jual" value="<?php echo $data['harga_jual'] ?>" placeholder="Angka saja" Required><br>
				</div>
				<div class="form-group">
				  	<label>Jumlah Barang</label>
				 	<input class="col-xs-4" type="text" name="jumlah_jual" value="<?php echo $data['jumlah_jual'] ?>" placeholder="Angka saja" Required><br>
				 </div>
			  <input class="btn2 btn btn-primary" type="submit" name="update" value="Update"><br><br>
			</form>
			<a href="index.php">Kembali ke Menu Utama</a>
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
