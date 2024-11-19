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
      <title>Portofolio Kapal Star</title>
      <meta name="keywords" content="Kapalstar, UKM Kapalstar, Mapala Kapalstar">
      <meta name="description" content="Portofolio Kapalstar">
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
   
   <section id="hero" class="kegiatan_image">
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
                  <li class="nav-item active">
                     <a class="nav-link" href="profil.php">Profil</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="proker.php">Program Kerja</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Portofolio<span class="sr-only">(current)</a>
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
   
   <div class="portofolio">
      <div class="text_dokumentasi poppins-normal-granite-gray-20px">
        <b>Berikut Ini Beberapa Dokumentasi Kegiatan Kapal Star</b>
      </div>
      <div class="album py-5 porto2">
        <div class="container">
          <div class="row">
          <?php
   $sql="select * from portofolio";
                            $hasil=mysqli_query($conn,$sql);
                            $no=0;
                            //Menampilkan data dengan perulangan while
                            while ($data = mysqli_fetch_array($hasil)):
                            $no++;
                            $deskripsi = substr($data['deskripsi'],0,70);
                        ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img src="salamlestari/portofolio/foto/<?= $data['foto']; ?> "class="card-img-top portofolio_image" data-holder-rendered="true">
                <div class="card-body ukuranportofolio">
                  <p class="card-text judul_kegiatan">
                     <b> <?= $data['nama_kegiatan']; ?></b>
                  </br>
                        <div class="isi_kegiatan">
                  <?= $deskripsi ?>
   
                  <a href="" data-toggle="modal"
            data-target="#modal<?php echo $data['id']; ?>">baca selengkapnya</a>
                        </div>
                  </p>
                        <div class="posisi_kegiatan">
                        <div class="tanggal_kegiatan">
                    <?= $data['tanggal']; ?>
                        </div>
                        </div>
                </div>
              </div>
            </div>
            
            <div class="modal fade" id="modal<?php echo $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modalbox">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Selengkapnya</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <h4><label class="modalnama" for="exampleFormControlInput1"><b><?php echo $data['nama_kegiatan']; ?></b></label>
                            </h4></div>
                            <div class="form-group">
                                <label class="modaldeskripsi" for="exampleFormControlTextarea1"><?php echo $data['deskripsi']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"><?php echo $data['tanggal']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"><img src="salamlestari/portofolio/foto/<?= $data['foto']; ?> "class="card-img-top portofolio_image" data-holder-rendered="true"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
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
    ALL Rights Reserved. &copy; MAPALA KAPAL STAR .
</div>
</div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
   </body>
</html>