<?php 
include '../config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}


?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="/kapalstar/salamlestari/css/style.css">
    <!-- Boxicons CDN Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">KAPALSTAR</span>
    </div>
      <ul class="nav-links">
        <li>
        <a href="../admin.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="../Proker/proker.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Proker Kapalstar</span>
          </a>
        </li>
        <li>
          <a href="../Dataanggota/dataanggota.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Data Anggota</span>
          </a>
        </li>
        <li>
          <a href="../Pendaftaran/anggota.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Pendaftaran</span>
          </a>
        </li>
        <li>
          <a href="#" class="active">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Portofolio</span>
          </a>
        </li>
        <li>
          <a href="../bph/bph.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">BPH</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Admin Kapalstar</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="logo-ks-stie">
        <img src="../images/LOGOKS.png" alt="">
        <img src="../images/logo-stie.png" alt="">
      </div>
    </nav>

    <div class="card mt-3">
			<div class="card-header">
        <br>
        <br>
        <br>
				DATA TAGIHAN <a href="tambah.php" class="btn btn-sm btn-dark float-xl-end">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<thead>
						<tr class="bg-primary text-light">
							<th>No</th>
							<th>Nama Kegiatan</th>
							<th>Deskripsi</th>
							<th>Tanggal Kegiatan</th>
							<th>Foto</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('../config.php'); 
							//memanggil file koneksi
							$datas = mysqli_query($conn, "select * from portofolio") or die(mysqli_error($conn));
							

							//script untuk menampilkan data tagihan

							$no = 1;//untuk pengurutan nomor

							//cek jika data tidak kosong akan menampilkan data tagihan
							if (mysqli_num_rows($datas) > 0){

							//melakukan perulangan
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama_kegiatan']; ?></td>
						<td><?= $row['deskripsi']; ?></td>
						<td><?= $row['tanggal']; ?> </td>
						<td>
							<a href="foto/<?= $row['foto']; ?>" target="_blank">
							<img src="foto/<?= $row['foto']; ?>" style="width: 100px;">
							</a>

							</td>
						<td>
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus data ini?');">Hapus</a>
						</td>
					</tr>
						<?php $no++; } ?>

						  <?php } else { ?>

             <tr>
                <td colspan="7">Data belum ada.</td>
             </tr>

            <?php }?>

					</tbody>
				</table>
			</div>
		</div>
	



          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
