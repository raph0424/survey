<?php
if(isset($_SESSION['login']))
{
  $connec ='Deconnexion';
  $linkCon ='deconnexion.php';
  $sign = '';
  $signe = '';
  $event = 'event.php';
}
else
{
  $linkCon ='connexion.php';
  $connec ='Connexion';
  $sign = 'inscription.php';
  $signe = 'Inscription';
  $event = 'connexion.php';
}
?>
<nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="../index.php">Accueil</a></li>
          <li><a href="boutique.php">Boutique</a></li>
          <li><a href="<?php echo $event; ?>">Evenement</a></li>
          <li><a href="lieu.php">Lieu</a></li>
          <li><a href="<?php echo $linkCon; ?>"><?php echo $connec; ?></a></li>
          <li><a href="<?php echo $sign; ?>"><?php echo $signe; ?></a></li>
          <li class="buy-tickets"><a href="ticket.php">Acheter ticket</a></li>
        </ul>
      </nav>