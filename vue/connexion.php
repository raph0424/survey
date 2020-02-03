  <?php
session_start();
require_once("../controleur/leControleur.php");
$unControleur = new leControleur("eu-cdbr-west-02.cleardb.net","heroku_80ea0adee5731ce","bea67d61987f37","4a1d15ba");
if(isset($_POST["Seconnecter"]))
{
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
        $resultat = $unControleur->verifCon($login, $mdp);
        if (isset($resultat['login'])) {
            $_SESSION['id_user'] = $resultat['id_user'];
            $_SESSION['mdp'] = $resultat['mdp'];
			$_SESSION['login'] = $resultat['login'];
            $_SESSION['prenom'] = $resultat['prenom'];
            header('location: ../index.php');
        } else {
            echo" Connexion impossible ! Veuillez vérifier vos identifiants !";
        }
  }             
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Survey</title>
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
      require_once("formulaire/formConnexion.php");
  ?>
</div>
<footer id="footer1" style="position: absolute; bottom: 0; width:100%;">
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