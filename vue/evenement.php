<?php
session_start();
//sleep(10);
require_once("../controleur/leControleur.php");
$unControleur = new leControleur("localhost","event","root","");
$result = $unControleur->selectEvent();
if(isset($_POST["sub"]))
      {
         $envoi = array ("id_event"=>$_POST['id_event'], 
         "id_personne"=>$_POST['id_personne'],
         "date_inscription"=>date('Y-m-d H:i:s'),
         "qualite"=>"influenceur"
        );
         $unControleur->insert("inscrire",$envoi);
      }
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Orange Event</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/venobox/venobox.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#intro" class="scrollto"><img src="../img/logo.png" alt="" title=""></a>
      </div>

    <?php
    require_once("NavBar.php");
    ?>
    </div>
  </header>
<div>
  <?php 

      require_once("affichage/vueEvent.php");
  ?>
</div>
<footer id="footer">
<div class="footer-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 footer-info">
        <img src="../img/logo.png" alt="TheEvenet">
            <p>Notre Groupe est l’héritier d’une histoire plurielle, riche de défis relevés, d'innovations audacieuses et d'une solidarité forte entre les femmes et les hommes qui ont partagé cette dynamique. Orange, héritier de France Télécom, porte les valeurs d’un groupe mondial d’origine française, fier de ses racines, mais aussi fier de ses conquêtes à l’échelle du monde. Une épopée à découvrir à travers 30 moments forts et 130 dates clés qui constituent la mémoire de notre entreprise, d’hier à aujourd’hui.</p>
      </div>
      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contact Us</h4>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="copyright">
    &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>
</footer>
<?php require_once("modal.php"); ?>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/jquery/jquery-migrate.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/superfish/hoverIntent.js"></script>
<script src="../lib/superfish/superfish.min.js"></script>
<script src="../lib/wow/wow.min.js"></script>
<script src="../lib/venobox/venobox.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../contactform/contactform.js"></script>
<script src="../js/main.js"></script>
</body>
</html>



