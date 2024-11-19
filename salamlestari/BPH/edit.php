
<div class="card mt-3">
			<div class="card-header">
				Edit Tagihan
			</div>
			<div class="card-body">
				<?php
				include('config.php');

				$id = $_GET['id']; //mengambil id tagihan yang ingin diubah

				//menampilkan tagihan berdasarkan id
				$data = mysqli_query($conn, "select * from bph where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form" enctype="multipart/form-data">

					<!-- ini digunakan untuk menampung id yang ingin diubah -->
					<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					<div class = "mt-2 col"> 
						<label>Foto Sebelumnya</label>
						<br>
						<img src="foto/<?= $row['foto']; ?>" class="col-3">
						 <input type="hidden" name="foto_sebelumnya" value="<?= $row['foto']; ?>" />
					</div>
					<div class = "mt-2 col"> 
						<label>Foto Baru (abaikan jika tidak ingin ganti foto)</label>
						 <input type="file" name="foto" class="form-control"/>
					</div>


					<button type="submit" class="btn btn-primary mt-3" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$nama_foto1   = $_FILES['foto']['name'];
			        $file_tmp1    = $_FILES['foto']['tmp_name'];   
			        $acak1      = rand(1,99999);

			        	//cek jika foto baru tidak ada
			          if($nama_foto1 != "") {
			            $nama_unik1     = $acak1.$nama_foto1;
			            move_uploaded_file($file_tmp1,'foto/'.$nama_unik1);
			          } else {
			          	//maka tetap pakai foto lama
			            $nama_unik1 = $_POST['foto_sebelumnya'];
			          }
			      
			        $foto = $nama_unik1;

					//query mengubah tagihan
					mysqli_query($conn, "update bph set foto='$foto' where id ='$id'") or die(mysqli_error($conn));

					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='bph.php';</script>";
				}


