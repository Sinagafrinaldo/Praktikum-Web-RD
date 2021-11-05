<table>
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Prodi</th>
		<th>Angkatan</th>
		<th>Edit</th>
		<th>Hapus</td>
	</tr>
	<?php
	include "koneksi.php";
	$hasil = mysqli_query($konek, "select * from mahasiswa order by nim asc");
	while ($data = mysqli_fetch_array($hasil)){
	?>
	<tr>
		<td><?php echo $data['nim'] ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td><?php echo $data['prodi'] ?></td>
		<td><?php echo $data['angkatan'] ?></td>
		<td><button value="<?php echo $data['nim']; ?>" class="edit">Edit</button></td>
		<td><button value="<?php echo $data['nim']; ?>" class="hapus">Hapus</button></td>

	</tr>
<?php } ?>
</table>