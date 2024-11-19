
<div class="card mt-3">
			<div class="card-header">
				Edit Tagihan
			</div>
			<div class="card-body">
				<?php
				include('../config.php');

				$id = $_GET['id']; //mengambil id tagihan yang ingin diubah

				//menampilkan tagihan berdasarkan id
				$data = mysqli_query($conn, "select * from kontak where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form" enctype="multipart/form-data">

					<!-- ini digunakan untuk menampung id yang ingin diubah -->
					<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">

					<div class = "col  col-4"> 
						<label>Whatsapp</label>
						<input type="int" name="whatsapp" required="" class="form-control" value="<?= $row['whatsapp']; ?>">
					</div>
					<div class = "mt-2 col"> 
						<label>Instagram</label>
						<input type="text" name="instagram" required="" class="form-control" value="<?= $row['instagram']; ?>">
					</div>
					<div class = "mt-2 col"> 
						<label>Google Form</label>
						<input type="text" name="google_form" required="" class="form-control" value="<?= $row['google_form']; ?>">
					</div>


					<button type="submit" class="btn btn-primary mt-3" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$whatsapp = $_POST['whatsapp'];
					$instagram = $_POST['instagram'];
					$google_form = $_POST['google_form'];
					//query mengubah tagihan
					mysqli_query($conn, "update kontak set whatsapp='$whatsapp', instagram='$instagram', google_form='$google_form' where id ='$id'") or die(mysqli_error($conn));

					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='anggota.php';</script>";
				}


