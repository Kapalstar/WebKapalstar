<div class="card mt-3">
			<div class="card-header">
				Tambah Tagihan
			</div>
			<div class="card-body">
				<form action="" method="post" role="form" enctype="multipart/form-data" >
					<div class = "col  col-4"> 
						<label>Nama Kegiatan</label>
						<input type="text" name="nama_kegiatan" required="" class="form-control">
					</div>
					<div class = "mt-2 col"> 
						<label>Deskripsi</label>
						<input type="text" name="deskripsi" required="" class="form-control">
					</div>
					<div class = "mt-2 col"> 
						<label>Tanggal Kegiatan</label>
						<input type="date" name="tanggal" required="" class="form-control">
					</div>
					<div class = "mt-2 col "> 
						<label>Foto</label>
						 <input type="file" name="foto" required="" class="form-control"/>
					</div>


					<button type="submit" class="btn btn-primary mt-3" name="submit" value="simpan">Simpan</button>
				</form>

				<?php
				include('../config.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$nama_kegiatan = $_POST['nama_kegiatan'];
					$deskripsi = $_POST['deskripsi'];
					$tanggal = $_POST['tanggal'];
					$nama_foto1   = $_FILES['foto']['name'];
			        $file_tmp1    = $_FILES['foto']['tmp_name'];   
			        //untuk acak nama file jadi sebagai angka unik, agar nama file tidak sama
			        $acak1      = rand(1,99999);


			          if($nama_foto1 != "") {
			          	//memberi nama baru pada foto yang diupload
			            $nama_unik1     = $acak1.$nama_foto1;
			            //upload ke folder foto
			            move_uploaded_file($file_tmp1,'foto/'.$nama_unik1);
			          } else {
			            $nama_unik1 = NULL;
			          }
			          
			        $foto = $nama_unik1;

					//query untuk menambahkan tagihan ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($conn, "insert into portofolio (nama_kegiatan,deskripsi,tanggal,foto)values('$nama_kegiatan', '$deskripsi', '$tanggal', '$foto')") or die(mysqli_error($conn));
					//id tagihan tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='portofolio.php';</script>";
				}
				?>
			</div>
		</div>
<?php
