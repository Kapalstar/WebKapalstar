<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <link rel="icon" href="images/LOGOKS.png"
      type="image/x-icon">
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pendaftaran Kapal Star</title>
      <meta name="keywords" content="Kapalstar, UKM Kapalstar, Mapala Kapalstar">
      <meta name="description" content="Pendaftaran Kapalstar">
      <meta name="author" content="David Aldi Royhan">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/styleguide.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body> 
   <!-- ======= Hero Section ======= -->
   
   <section id="hero" class="pendaftaran_image">
    <h1>KAPAL STAR</h1>
    <h2>Komunitas Pecinta Alam STIE Al-Anwar</h2>
  </section><!-- End Hero -->

  <div class="header_ks sticky-top">
      <!--header section start -->
         <nav class="navbar navbar-expand-lg">
            <div class="logologo">
              <img class="logo1" src="images/logo-stie.png" alt="Logo STIE" /><img class="logo2" src="images/LOGOKS.png" alt="Logo KS"/></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="profil.php">Profil</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="proker.php">Program Kerja</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="portofolio.php">Portofolio</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="anggota.php">Anggota</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Pendaftaran</a>
                  </li>
               </ul>
               <div class="ukm-kapal-star valign-text-middle">UKM KAPAL STAR</div>
            </div>
         </nav>
   </div>

   <div class="kontakpendaftaran">
<div class="pendaftaran"> <b>Pendaftaran Menjadi Anggota Kapal Star</b></div>
   <div class="kontak">
   <div class="container contact-form">
   <div class="row">
   <div class="col-md-6 gedungstie">
      <span>
         <div class="kirikontak">
      <h1>Kontak Pendaftaran</h1>
      jika formulir error, coba hubungi kontak berikut
                <?php
                $sqlget = "Select * from kontak";
                $query = mysqli_query($conn, $sqlget);

                while($data = mysqli_fetch_array($query)) {
                    echo "<center>
                    Whatsapp     : $data[whatsapp]<br>
                    Instagram    : @$data[instagram]<br>
                    Google Form  : <a class='poppins-normal-granite-gray-14px' href='https://$data[google_form]'target='_blank'rel='noopener noreferrer''>$data[google_form] </a> </center>
                ";
                }
                ?>
                </div>

      </span>
   </div>
   <div class="col-md-6 details kontakkanan">
      <div>
            <form method="post">
                <h3 class="text_pendaftaran poppins-normal-granite-gray-20px">Formulir Pendaftaran</h3>
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="nomer" class="form-control" placeholder="Masukkan Nomer *" value="" />
                        </div>
                        <div class="form-group">
                            <textarea name="deskripsi" class="form-control" placeholder="Alasan Bergabung UKM Kapal Star *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btnContact" name="submit" value="simpan" >Simpan</button>
                        </div>
		            		</form>
                     </div>
                     <?php
				include('config.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$nama = $_POST['nama'];
               $nim = $_POST['nim'];
               $nomer = $_POST['nomer'];
					$deskripsi = $_POST['deskripsi'];

					//query untuk menambahkan tagihan ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($conn, "insert into pendaftaran (nama,nim,nomer,deskripsi)values('$nama', '$nim', '$nomer', '$deskripsi')") or die(mysqli_error($conn));
					//id tagihan tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil dikirim.');window.location='pendaftaran.php';</script>";
				}
				?>
                    
                </div>
            </form>
      </div>
   </div>
   </div>
   </div>
</div>
<div class="footer1">
   <div class="temukankami"><b>TEMUKAN KAMI DI</b></div>
   <a class="linkinstagram" href="https://www.instagram.com/kapalstar_stieaa/"></a>
   <div class="instagram "><b>INSTAGRAM</b></div>
</div>
   
<div class="footer2">
<div class="copyright valign-text-middle poppins-normal-white-20px">   
ALL Rights Reserved. © MAPALA KAPAL STAR .
</div>
</div>

      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>