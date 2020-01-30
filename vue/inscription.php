<?php
session_start();
      require_once("../controleur/leControleur.php");
      $unControleur = new leControleur("localhost","survey","root","");
      if(isset($_POST["sinscrir"]))
      {
         $envoi = array (
         "Prenom"=>$_POST['Prenom'],
         "mdp"=>$_POST['mdp'],
         "Date_naiss"=>$_POST['date_naiss'],
         "login"=>$_POST['login']
        );
         $unControleur->insert("user",$envoi);
          header('location: connexion.php');
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
<center><h1></h1></center>
<div class="row">
<div class="col-sm-12">
  <?php 
      require_once("formulaire/formInscription.php");
  ?>
  </div>
  </div>
<div>
</div>
<footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SDS</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Raph</a>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>
</body>
</html>