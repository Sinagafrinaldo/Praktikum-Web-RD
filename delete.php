<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "delete from transaksi where id = '$id'";
$hasil = mysqli_query($konek, $sql);
if ($hasil){
	echo "<script>alert('Data berhasil dihapus');document.location='index.php'</script>";
}else{
echo "<script>alert('Menghapus data barang gagal ');document.location='index.php'</script>";
}
?>