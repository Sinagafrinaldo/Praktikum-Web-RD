<!DOCTYPE html>
<html>
<head>
	<title>CRUD dengan AJAX</title>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		$(document).ready(function() {

          
            muatData();

     
            $(".tombol_simpan").click(function(){
				var data = $('.form_mahasiswa').serialize();
				$.ajax({
					type: 'POST',
					url: "insert_data.php",
					data: data,
					success: function() {
						$('#lihat_data').load("lihat.php");
					}
				});
			});

			$(".tombol_update").click(function(){
				var data = $('.form_update').serialize();
				$.ajax({
					type: 'POST',
					url: "aksi_edit.php",
					data: data,
					success: function() {
						$('#lihat_data').load("lihat.php");
					}
				});
			});
   
            $("body").on("click", ".edit", function() {
                var nim = $(this).attr("value");
                $.ajax({
                    url: 'form_edit.php',
                    type: 'post',
                    data: {
                        nim: nim
                    },
                    success: function(data) {
                    	muatData(),
                        $('#tempat_edit').html(data);                 
                    }
                });
            });

 
   

            $('#tempat_edit').on("submit", ".form_edit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'aksi_edit.php',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                    	muatData(),
                    	alert("Data berhasil di update."),
                    	document.getElementById("tempat_edit").innerHTML = "";
                    }
                });
            });

            $("body").on("click", ".hapus", function() {
                var nim = $(this).attr("value");
                if(confirm('Apakah anda yakin mau menghapus data dengan NIM: ' + nim)){
                	$.ajax({
                    url: 'aksi_hapus.php',
                    type: 'post',
                    data: {
                        nim: nim
                    },
                    success: function(data) {
                    	muatData();                    
                    }
              	  });
                }else{
                	muatData();
                }
                
            });
        });

        function muatData() {
        $.ajax({
            url: 'lihat.php',
            type: 'GET',
            success: function(data) {
                $('#lihat_data').html(data);
            }
     		});
   		};

		
	</script>
</head>
<body>
	<center>
		<h2>CRUD DATA MAHASISWA</h2>
	</center>
	<hr>	
	<h3>Insert Data Mahasiswa</h3>
	<form method="POST" class="form_mahasiswa">
		<label>NIM </label>
		<input type="number" name="nim" placeholder="NIM"><br>
		<label>Nama </label>
		<input type="text" name="nama" placeholder="Nama"><br>
		<label>Prodi </label>
		<input type="text" name="prodi" placeholder="Prodi"><br>
		<label>Angkatan </label>
		<input type="number" name="angkatan" placeholder="Angkatan"><br><br>
		<button value="submit" name= "submit" type="submit" class="tombol_simpan"><b>Simpan</b></button>
	</form>
	<hr>
	<h3>Daftar Data Mahasiswa</h3>
	<div id="lihat_data"></div><br>
	<div id="tempat_edit"></div>
	<br>
	<footer class="footer">
	    <div class="footerContainer">
	        <p class="copyright">Copyright&copy; by Frinaldo Sinaga (119140064)</p>
	    </div>
	</footer>

	</body>
</html>