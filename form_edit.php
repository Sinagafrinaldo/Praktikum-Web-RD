<?php 
include 'koneksi.php';
$nim= $_POST['nim']; 
$query= mysqli_query($konek, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
$data = mysqli_fetch_array($query); 
?>
<h4>Update data Mahasiswa dengan NIM: <?php echo $data['nim'] ?></h4>
<form method="POST" class="form_edit">
	<input type="number" name="nim" value= "<?php echo $data['nim'] ?>" placeholder="NIM" Required>
	<input type="text" name="nama" value= "<?php echo $data['nama'] ?>" placeholder="Nama" Required>
	<input type="text" name="prodi" value= "<?php echo $data['prodi'] ?>" placeholder="Prodi" Required>
	<input type="number" name="angkatan" value= "<?php echo $data['angkatan'] ?>" placeholder="angkatan" Required>
  	<input type="submit" name="submit" id="submit" value="Submit" class="tombol_update">
</form>