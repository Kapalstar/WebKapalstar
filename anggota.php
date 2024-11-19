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
      <title>Anggota Kapal Star</title>
      <meta name="keywords" content="Kapalstar, UKM Kapalstar, Mapala Kapalstar">
      <meta name="description" content="Anggota Kapalstar">
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

   <section id="hero" class="anggota_image">
    <h1>KAPAL STAR</h1>
    <h2>Komunitas Pecinta Alam STIE Al-Anwar</h2>
  </section>

  <div class="header_ks sticky-top">
         <nav class="navbar navbar-expand-lg">
            <div class="logologo">
              <img class="logo1" src="images/logo-stie.png" alt="Logo STIE" /><img class="logo2" src="images/LOGOKS.png" alt="Logo KS"/></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mx-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="profil.php">Profil</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="proker.php">Program Kerja</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="portofolio.php">Portofolio</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Anggota<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
                  </li>
               </ul>
               <div class="ukm-kapal-star valign-text-middle">UKM KAPAL STAR</div>
            </div>
         </nav>
   </div>

   <div class="anggotaks">
   <div class="isianggota">
      <b>Daftar Anggota Kapal Star</b>
   </div>
      <table class="table table-bordered table-hover tabelatas tabelanggota">
   <thead>
    <tr class="tabelpro">
                    <th><b>   NIA      </th>
                    <th>      ANGKATAN </th>
                    <th>      Nama     </b></th>
                  <tr>
                </thread>

                <?php
                $sqlget = "Select * from dataanggota";
                $query = mysqli_query($conn, $sqlget);

                while($data = mysqli_fetch_array($query)) {
                    echo "
                    <tbody>
                    <tr>
                    <td>$data[nia]</td>
                    <td>$data[angkatan]</td>
                    <td>$data[nama]</td>
                    </tr>
                </tbody>
                ";
                }
                ?>
        
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
ALL Rights Reserved. © MAPALA KAPAL STAR .
</div>
</div>
      <!-- copyright section end -->
      <!-- Javascript files-->
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