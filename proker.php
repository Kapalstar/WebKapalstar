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
      <title>Proker Kapal Star</title>
      <meta name="keywords" content="Kapalstar, UKM Kapalstar, Mapala Kapalstar">
      <meta name="description" content="Proker Kapalstar">
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
   
   <section id="hero" class="proker_image">
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
                     <a class="nav-link" href="#">Program Kerja<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="portofolio.php">Portofolio</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="anggota.php">Anggota</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
                  </li>
               </ul>
               <div class="ukm-kapal-star valign-text-middle">UKM KAPAL STAR</div>
            </div>
         </nav>
   </div>

   <div class="prokerkapalstar layout_padding">
         <div class="container ks">
            <div class="proks">Program Kerja</div>
            <p class="proker_text">Program Kerja merupakan susunan rencana kegiatan kerja yang sudah dirancang dan telah disepekati bersama untuk dilaksanakan dalam jangka waktu tertentu. Program kerja harus dibuat secara tearah, sebab akan menjadi pegangan organisasi dalam mencapai sebuah tujuan.</p>
            <div class="proks2">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="proker_image2"><img src="images/Belajar2.JPG" class="proker_img"></div>
                  </div>
                  <div class="col-lg-6">
                     <div class="proker_main">
                        <p class="proker_text2">Mapala Kapalstar adalah organisasi yang bergerak pada bidang petualangan, lingkungan hidup dan konservasi alam, dan pendidikan maupun kemanusiaan. Mapala Kapalstar juga bergerak di bidang petualangan alam bebas, seperti mendaki gunung, ekspedisi ke belantara, panjat tebing, arung jeram, susur gua, penyelaman bawah laut dan bertualang dengan perahu layar. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
</div>
   <div class="prokerks"><b>Program Kerja Kapalstar 2022-2023</b><br></div>
   <div class="tableprokerks">
   <table class="table table-bordered table-hover tabelatas">
   <thead>
    <tr class="tabelpro">
      <th scope="col">No</th>
      <th scope="col">Nama Kegiatan</th>
      <th scope="col">Tujuan</th>
      <th scope="col">Sasaran</th>
    </tr>
   </thead>
   <tbody>
    <tr>
      </td>
    </tr>
    <tr>
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
                    </tr>
                </tbody>
                ";
                }
                ?>
        
  </tbody>
</table>
</div>
</div>

<div class="footer1">
   <div class="temukankami"><b>TEMUKAN KAMI DI</b></div>
   <a class="linkinstagram" href="https://www.instagram.com/kapalstar_stieaa/"></a>
   <div class="instagram "><b>INSTAGRAM</b></div>
</div>
   
<div class="footer2">
<div class="copyright valign-text-middle poppins-normal-white-20px">   
ALL Rights Reserved. &copy; MAPALA KAPAL STAR .
</div>
</div>

      <!-- copyright section end -->
      <!-- Javascript files-->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>
</html>