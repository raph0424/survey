<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">

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
  <header id="header" class="header-fixed">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="index.html#intro" class="scrollto"><img src="../img/logo.png" alt="" title=""></a>
      </div>

      <?php
    require_once("NavBar.php");
    ?>
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>La Villette</h2>
          <p>Description</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <img src="../img/hotels/22.jpg" alt="Speaker 1" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2></h2>
              <div class="social">
              </div>
              <p> Construit sur l’emplacement d’anciens abattoirs et conçu par l’architecte Bernard Tschumi,
                  le Parc de la Villette est le plus grand parc culturel urbain de la capitale. Les 55 hectares du parc, dont 35 en plein air,
                  mêlent nature et architecture moderne, aires et espaces de loisirs pour enfants et adultes, lieux culturels et salles de spectacles.
                  Ouvert de 6 heures à 1 heure du matin, on y accède en métro, en bus, à pied, à vélo et même en bateau.
                  Le visiteur flâne au bord du canal de l’Ourcq ou profite des nombreux espaces verts, bassins et fontaines.
                  Les lieux culturels sont nombreux : Cité des sciences et de l’industrie, la Géode, Zénith de Paris, musée de la Musique,
                   la Philharmonie de Paris…Des manifestations de premier ordre sont organisées chaque année, 
                   citons par exemple le prestigieux festival Jazz à la Villette, le festival de cinéma en plein air, mais aussi des concerts, des expositions, des spectacles… 
                   Et pour les enfants, Little Villette offre gratuitement des activités et espaces de jeux dédiés. 
</p>
<a href="https://lavillette.com/">La villette</a>
            </div>
          </div>
          
        </div>
      </div>

    </section>

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <img src="../img/logo.png" alt="">
            <p>Notre Groupe est l’héritier d’une histoire plurielle, riche de défis relevés, d'innovations audacieuses et d'une solidarité forte entre les femmes et les hommes qui ont partagé cette dynamique. Orange, héritier de France Télécom, porte les valeurs d’un groupe mondial d’origine française, fier de ses racines, mais aussi fier de ses conquêtes à l’échelle du monde. Une épopée à découvrir à travers 30 moments forts et 130 dates clés qui constituent la mémoire de notre entreprise, d’hier à aujourd’hui.</p>
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
              <strong>Téléphone:</strong>06.47.38.99.23<br>
              <strong>Email:</strong>orange.event2019@gmail.com<br>
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
        &copy; Copyright <strong>Orange</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.cfa-insta.fr">Cfa insta</a>
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
