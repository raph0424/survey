<?php
session_start();
if(isset($_SESSION['mdp']))
    {
      $connec ='Deconnexion';
      $linkCon ='vue/deconnexion.php';
      $sign = '';
      $signe = '';
      $event = 'vue/evenement.php';
    }
    else
    {
      $linkCon ='vue/connexion.php';
      $connec ='Connexion';
      $sign = 'vue/inscription.php';
      $signe = 'Inscription';
      $event = 'vue/connexion.php';
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
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Accueil</a></li>
          <li><a href="vue/boutique.php">Boutique</a></li>
          <?php 
          if(isset($_SESSION['accronyme']))
          {
            echo "<li><a <button type='button' class='btn btn-info btn-lg'data-toggle='modal' data-target='#ModalEvent'>Event</button></a></li>";
          }
          ?>
          <li><a href="<?php echo $event; ?>">Evenement</a></li>
          <li><a href="vue/lieu.php">Lieu</a></li>
          <li><a href="<?php echo $linkCon; ?>"><?php echo $connec; ?></a></li>
          <li><a href="<?php echo $sign; ?>"><?php echo $signe; ?></a></li>
          <?php 
          if(isset($_SESSION['nom']))
          {
              ?><li class="buy-tickets"><a href="vue/ticket.php">Acheter Tickets</a></li><?php
          }
          ?>
          
        </ul>
      </nav>
    </div>
    </header>
<div id="ModalEvent" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Choisissez l'apparence de votre évènement</h4>
      </div>
      <div class="modal-body">
        <p>Parmis ces différents modèles :</p>
      </div>
      <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-6">
            <a href="vue/event1.php"><img src="img/Template1.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="col-sm-6">
              <a href="vue/event2.php"><img src="img/Template2.jpg" alt="" class="img-fluid"></a>
            </div>
          </div>
          </br>
          <div class="row">
            <div class="col-sm-6">
              <a href="vue/event3.php"><img src="img/Template3.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="col-sm-6">
              <a href="vue/event4.php"><img src="img/Template4.jpg" alt="" class="img-fluid"></a>
            </div>
          </div>
                      <style>
                          .img-fluid
                          {
                            display: block;
                            margin-left: auto;
                            margin-right: auto;
                          }
                      </style>
         </div>
        </div>
        </div>
    </div>
  </div>
</div>
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">video<br><span>de présentation </span></h1>
      <p class="mb-4 pb-0">Orange</p>
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
    </div>
  </section>
  <main id="main">
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Partenaire</h2>
            <p>Si vous êtes un de nos partenaires vous pouvez ajouter un evenement</p>
          </div>
          <div class="col-lg-3">
            <h3>Ou ?</h3>
            <p>Dans les différents lieu que nous vous proposons !</p>
          </div>
          <div class="col-lg-3">
            <h3>Quand ?</h3>
            <p>Du lundi au samedi<br>de 9h à 18h</p>
          </div>
        </div>
      </div>
    </section>
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Personnel</h2>
          <p>Pour en savoir un peu plus sur les personnes assigné au projet.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/moi.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="kevin.php">Kevin LEFEBVRE</a></h3>
                <p>Developpeur</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Raphael Maria</a></h3>
                <p>Developpeur</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Chavane Marie-Camille</h3>
                <p>Developpeur</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="venue" class="wow fadeInUp">
      <div class="container-fluid">
        <div class="section-header">
          <h2>Orange</h2>
          <p>Location du siege social</p>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.9239522002645!2d2.303662464923572!3d48.83636891115478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b63e23e74b2a3ca!2sOrange!5e0!3m2!1sfr!2sfr!4v1558442170136!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>Siege social, Paris</h3>
                <p>Depuis le 1er Juillet 2013, France Télécom est devenu Orange, société française de télécommunications.
                L’opérateur, Numéro 1 en France, propose des forfaits sans engagement, des forfaits avec mobiles, des forfaits bloqués, des prépayés ainsi que de nombreux forfaits regroupant mobiles – fixe – internet. Tous ces forfaits sont également personnalisables grâce aux options proposées par l’opérateur.
                De nombreux mobiles (à partir d’1 euros), mais aussi tablettes et accessoires sont disponibles sur le site ou en boutique.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </br></br>
      <div class="top-space section-header">
          <h2>Evenement</h2>
          <p>Photos d'événements en partenariat avec orange</p>
        </div>
      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="hotels" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Lieu</h2>
          <p>Lieu disponible pour les événements</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid" width="500px">
              </div>
              <h3><a href="#">Parc des expositions</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
              </div>
              <h3><a href="#">La villette</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
              </div>
              <p></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid" width="500px" height="300px" >
              </div>
              <h3><a href="#">Pompidou</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="gallery" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Gallerie</h2>
          <p>Liste de photos des événements récent</p>
        </div>
      </div>
      <div class="owl-carousel gallery-carousel">
        <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
        <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
        <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
        <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
        <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
        <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
        <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
        <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
      </div>
    </section>
    <section id="supporters" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>
        <div class="row no-gutters supporters-wrap clearfix">
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/1.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/2.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/3.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/4.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/5.png" class="img-fluid" alt="">
            </div>
          </div>       
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/6.png" class="img-fluid" alt="">
            </div>
          </div>          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/7.png" class="img-fluid" alt="">
            </div>
          </div>         
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/8.png" class="img-fluid" alt="">
            </div>
              </div>
        </div>
      </div>
    </section>
    <section id="faq" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">
                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Comment faire pour créer un évenement ? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      Vous devez être partenaire d'orange. Pour devenir partenaire vous devez vous inscrire en tant qu'entreprise et faire une demande de création d'événement,
                       une fois le dossier examiner orange décidera si oui ou non vous pourrez devenir partenaire.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Quand le site à t-il été crée ? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      Le site d'événement d'orange à été crée à la suite d'une forte demande des partenaires pour un système de création d'évenement simplifié.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Quels avantages à acheter mes billets? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      En achetant votre billet en ligne vous bénéficiez d'une réduction de 20%.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">Combien de produit sont il disponnible ? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                     Le nombre de produit varie en fonction des événement en cour, chaque événement détient des produits qu'il met en ligne dans notre boutique.
                    </p>
                  </div>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contacter nous</h2>
        </div>
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Addresse</h3>
              <address>6 Place d'Alleray,  Paris 75015, FRANCE</address>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Numéro de téléphone</h3>
              <p><a href="tel:+33647389923">06.47.38.99.23</a></p>
            </div>
              </div>
          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>
        </div>
        <div class="form">
          <div id="sendmessage">Votre message à bien été envoyé. Merci!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Envoyer</button></div>
          </form>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheEvenet">
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
              <strong>Email:</strong> info@example.com<br>
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
        &copy; Copyright <strong>Orange</strong>.All Rights Reserved
      </div>
      <div class="credits">
        Designed by<a href="">Cfa insta</a>
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
