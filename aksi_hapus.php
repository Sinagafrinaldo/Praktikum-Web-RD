<?php 
include 'koneksi.php';
$nim= $_POST['nim']; 
$hapus = mysqli_query($konek,"DELETE FROM mahasiswa where nim= '$nim'");
if($hapus){
    echo "Berhasil hapus data";
}
else{
    echo "Hapus data gagal" . mysqli_error($konek);
}    	
?>