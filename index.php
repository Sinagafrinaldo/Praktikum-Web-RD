<!DOCTYPE html>
<html>
<head>
  <title>Program CRUD Transaksi Penjualan Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="jumbotron text-center">
    <h1>Program CRUD Transaksi Penjualan Barang</h1>
  </div>
  <div class="container">
    <div class="row">
  
    <table class="table table-striped table-bordered table-hover ">
      <thead class="thead-light">
        <tr>
          <th>ID Transaksi</th>
          <th>Nama Barang</th>
          <th>Harga Jual (Rp)</th>
          <th>Jumlah Barang</th>
          <th>Waktu Transaksi</th>
          <th>Edit</th>
          <th>Hapus</td>
        </tr>
      </thead>
      <?php
      include "koneksi.php";
      $hasil = mysqli_query($konek, "select * from transaksi order by id");
      while ($data = mysqli_fetch_array($hasil)){
      ?>
      <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['harga_jual'] ?></td>
        <td><?php echo $data['jumlah_jual'] ?></td>
        <td><?php echo $data['waktu'] ?></td>
        <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
      </tr>
    <?php } ?>
    
    </table>
    <a class="btn btn-primary" href="tambah.php">Tambah data</a>
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