<?php
session_start();
if(isset($_SESSION['mdp']))
    {
      $connec ='Deconnexion';
      $linkCon ='vue/deconnexion.php';
      $sign = '';
      $signe = '';
      $serie = 'vue/serie.php';
      $film = 'vue/film.php';
	  if($_SESSION['login'] == "Admin")
	  {
		  $np = 'Statistiques';
		  $panel = 'vue/panel.php';
	  }
	  else{
		  $panel = '';
		  $np = '';
	  }
    }
    else
    {
      $linkCon ='vue/connexion.php';
      $connec ='Connexion';
      $sign = 'vue/inscription.php';
      $signe = 'Inscription';
	  $serie = 'vue/connexion.php';
      $film = 'vue/connexion.php';
	  $panel = '';
	  $np = '';

    }
?>
<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<head>
  <meta charset="utf-8">
  <title>Sacha Survey</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="index.php" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Accueil</a></li>
          <li><a href="<?php echo $film; ?>">J'ai regardé un Film</a></li>
          <li><a href="<?php echo $serie; ?>">J'ai regardé une Série</a></li>
		  <li><a href="<?php echo $panel; ?>"><?php echo $np; ?></a></li>
          <li><a href="<?php echo $linkCon; ?>"><?php echo $connec; ?></a></li>
          <li><a href="<?php echo $sign; ?>"><?php echo $signe; ?></a></li>
          
        </ul>
      </nav>
    </div>
    </header>

  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0"><span>Sacha de Siran</span></h1>
      <p class="mb-4 pb-0">Sondage</p>
       <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a> -->
    </div>
  </section>
  <main id="main">
    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SDS</strong>.All Rights Reserved
      </div>
      <div class="credits">
        Designed by<a href="">Raph</a>
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
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#925959"
    },
    "button": {
      "background": "#f1d600"
    }
  }
});
</script>
</body>
</html>
