<?php
session_start();
//sleep(10);
require_once("../controleur/leControleur.php");
$unControleur = new leControleur("eu-cdbr-west-02.cleardb.net","heroku_3ca21734606c7e9","bb9a7d9f0bc185","bef2f852");

$res = $unControleur->selectSerie();

if (isset($_POST['insert'])){
   $envois = array ("Nom_serie"=> $_POST['nom_serie'],
		 "duree_serie"=>$_POST['duree_serie']
        );
         $unControleur->insert("serie",$envois); 
         header('Location: serie.php');
}

if (isset($_POST['Valider'])){
   $envoi = array ("Date_visio"=> date("Y-m-d H:i:s"),
         "id_serie"=>(int)$_POST['idserie'],
		 "id_user"=>(int)$_SESSION['id_user'],
		 "nom_pltf"=>$_POST['nompltf'],
		 "Nb_episode_chain"=>(int)$_POST['nbepc']
        );
         $unControleur->insert("watch_serie",$envoi); 
         header('Location: ../index.php');
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
        <a href="../index.php" class="scrollto"><img src="../img/logo.png" alt="" title=""></a>
      </div>

    <?php
    require_once("NavBar.php");
    ?>
    </div>
  </header>
<div>
  <?php 

      require_once("affichage/vueSerie.php");
  ?>
</div>
<footer id="footer">
<div class="footer-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 footer-info">
        <img src="../img/logo.png" alt="TheEvenet">
		<br>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
          <h4>Liens utiles</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Accueil</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">A propos</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
            <li><i class="fa fa-angle-right"></i> <a href="#">Accueil</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">A propos</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactez nous</h4>
            <p>
              6 Place d'Alleray <br>
              Paris, P 75015<br>
              FRANCE <br>
              <strong>Téléphone:</strong><br>
              <strong>Email:</strong><br>
            </p>
            <div class="social-links">
              <a href="https://twitter.com/orange?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/Orange.France/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/orange/" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SDS</strong>.All Rights Reserved
      </div>
      <div class="credits">
        Designed by<a href=""> Raph</a>
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



