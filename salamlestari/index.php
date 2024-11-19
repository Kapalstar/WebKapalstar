<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
}
 
if (isset($_POST['submit'])) {
    $nia = $_POST['nia'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE nia='$nia' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
    } else {
        echo "<script>alert('NIA atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!DOCTYPE HTML>
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
      <title>Profil Kapal Star</title>
      <meta name="keywords" content="Kapalstar, UKM Kapalstar, Mapala Kapalstar">
      <meta name="description" content="Profil Kapalstar">
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
    <div class="header">
        <?php echo $_SESSION['error'];
        ?>

        <div class="isilogin"> 
        <div class="formlogin">
        <form action="" method="POST" class="login-nia">
          <h1>Login</h1>
          <div class="input-group">
                <input type="text" placeholder="nia" name="nia" value="<?php echo $nia; ?>" required>
                </div>
                <div class="input-group">
                <input type="password" placeholder="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                </div>
                <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            </form>
        </div>     
    </body>
</html>
