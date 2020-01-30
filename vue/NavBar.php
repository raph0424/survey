<?php
if (isset($_SESSION['mdp']))
    {
      $connec ='Deconnexion';
      $linkCon ='deconnexion.php';
      $sign = '';
      $signe = '';
      $serie = 'serie.php';
      $film = 'film.php';
    }
    else
    {
      $linkCon ='connexion.php';
      $connec ='Connexion';
      $sign = 'inscription.php';
      $signe = 'Inscription';
	  $serie = 'connexion.php';
      $film = 'connexion.php';
}
?>

<nav id="nav-menu-container">
    <ul class="nav-menu">
          <li class="menu-active"><a href="../index.php">Accueil</a></li>
          <li><a href="<?php echo $film; ?>">J'ai regardé un Film</a></li>
          <li><a href="<?php echo $serie; ?>">J'ai regardé une Série</a></li>
          <li><a href="<?php echo $linkCon; ?>"><?php echo $connec; ?></a></li>
          <li><a href="<?php echo $sign; ?>"><?php echo $signe; ?></a></li>
          
        </ul>
</nav>

