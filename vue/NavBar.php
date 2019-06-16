<?php
if (isset($_SESSION['mdp'])) {
    $connec = 'Deconnexion';
    $linkCon = 'deconnexion.php';
    $sign = '';
    $signe = '';
    $event = 'evenement.php';
} else {
    $linkCon = 'connexion.php';
    $connec = 'Connexion';
    $sign = 'inscription.php';
    $signe = 'Inscription';
    $event = 'connexion.php';
}
?>

<nav id="nav-menu-container">
    <ul class="nav-menu">
        <li class="menu-active"><a href="../index.php">Accueil</a></li>
        <li><a href="boutique.php">Boutique</a></li>
        <?php if (isset($_SESSION['accronyme'])) { ?>
            <li><a class='btn btn-info btn-lg'data-toggle='modal' data-target='#ModalEvent' style="border-radius: 0px;">Event</a></li>
        <?php } ?>
        <li><a href="<?php echo $event; ?>">Evenement</a></li>
        <li><a href="<?php echo $linkCon; ?>"><?php echo $connec; ?></a></li>
        <li><a href="<?php echo $sign; ?>"><?php echo $signe; ?></a></li>
        <?php if (isset($_SESSION['nom'])) { ?>
            <li class="buy-tickets"><a href="ticket.php">Support</a></li>
        <?php } ?>
        <?php if (isset($_SESSION['accronyme'])) { ?>
            <li class="buy-tickets"><a href="ticket.php">Ticket Support</a></li>
        <?php } ?>

    </ul>
</nav>

