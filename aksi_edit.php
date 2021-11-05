<?php 
include 'koneksi.php';

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkatan"];
$edit = mysqli_query($konek, "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi', angkatan='$angkatan' WHERE nim='$nim'");
if($edit){
    echo "Edit data berhasil";
}else{
    echo "Ada kesalahan".mysqli_error($konek);
}    	
