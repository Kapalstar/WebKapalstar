<?php 
include 'config.php';
session_start();

    $no = isset($_GET['no']) ? $_GET['no'] : '';
    $sqlget = "SELECT * FROM proker WHERE no='$no'";
    $queryget = mysqli_query($conn, $sqlget);
    $data = mysqli_fetch_array($queryget);
    
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
          <a href="admin.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="prokerks.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Proker Kapalstar</span>
          </a>
        </li>
        <li>
          <a href="dataanggota.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Data Anggota</span>
          </a>
        </li>
        <li>
          <a href="pendaftaran.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Pendaftaran</span>
          </a>
        </li>
        <li>
          <a href="portofolio.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Portofolio</span>
          </a>
        </li>
        <li>
          <a href="bph.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">BPH</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
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
          <a href="dataanggota.php"> Kembali </a>
            <div class="w-50 mx-auto border p-3 mt-3">
                <form action="dataanggota.php" method="post">
                <label for="no">No</label>
                    <input type="text" id="no" name="no" value="<?php echo"$data[no]";?>" class="from-control" readonly >

                    <label for="angkatan">Angkatan</label>
                    <input type="text" id="angkatan" name="angkatan" value="<?php echo"$data[angkatan]";?>" class="from-control" required>

                    <label for="nia">NIA</label>
                    <input type="text" id="nia" name="nia" value="<?php echo"$data[nia]";?>" class="from-control" required>

                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" value="<?php echo"$data[nama]";?>" class="from-control" required>

                    <label for="telepon">Telepon</label>
                    <input type="text" id="Telepon" name="telepon" value="<?php echo"$data[telepon]";?>" class="from-control" required>

                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="<?php echo"$data[alamat]";?>" class="from-control" required>


                    <input class="btn btn-success" type="submit" name="tambah" value="Update Data" required>
                </div>
<?php

if(isset($_POST['tambah'])){
  $no = $_POST['no'];
  $angkatan = $_POST['angkatan'];
  $nia = $_POST['nia'];
  $nama = $_POST['nama'];
  $telepon = $_POST['telepon'];
  $alamat = $_POST['alamat'];
  $queryget = mysqli_query($conn, $sqlget);
  $cek = mysqli_num_rows($queryget);

  $sqlupdate = "UPDATE dataanggota
                SET angkatan='$angkatan', nia='$nia', nama='$nama', telepon='$telepon', alamat='$alamat'
                WHERE no='$no'";
    $queryupdate = mysqli_query($conn, $sqlupdate);
    $no = isset($data['no']) ? $data['no'] : '';

    if(isset($sqlupdate) && $no <= 0 ){
      echo " <div class='alert alert-success'>Data berhasil ditambahkan <a href='dataanggota.php'> Lihat data</a></div>
      ";
    } else if($no >= 1){
      echo " <div class='alert alert-danger'>Data gagal ditambahkan <a href='dataanggota.php'> Lihat data</a></div>
      ";
    }
}
?>
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
