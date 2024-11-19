<?php 
include '../config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}


?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
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
          <a href="#" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Proker Kapalstar</span>
          </a>
        </li>
        <li>
          <a href="../DataAnggota/dataanggota.php">
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
          <a href="../portofolio/portofolio.php">
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

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="container mt-3">
            <a href="addproker.php" class="btn btn-primary btn-md mb-3">Tambah</a><br>
            <table class="table table-striped table-hover table-bordered">
                <thread class="table-dark">
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tujuan</th>
                    <th>Sasaran</th>
                    <th>Aksi</th>
                    
                </thread>

                <?php
                $sqlget = "Select * from proker";
                $query = mysqli_query($conn, $sqlget);

                while($data = mysqli_fetch_array($query)) {
                    echo "
                    <tbody>
                    <tr>
                    <td>$data[no]</td>
                    <td>$data[nama_kegiatan]</td>
                    <td>$data[tujuan]</td>
                    <td>$data[sasaran]</td>
                    <td>
                        <div class='row'>
                        <div class='col d-flex justify-content-center'>
                            <a href='update.php?no=$data[no]' class='btn btn-sm btn-warning'>Update</a>
                        </div>
                        <div class='col d-flex justify-content-center'>
                            <a href='delete.php?no=$data[no]' class='btn btn-sm btn-danger'>Delete</a>
                        </div>
                        </div>
                    </td>
                    </tr>
                </tbody>
                ";
                }
                ?>
        
                </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
</body>
</html>
