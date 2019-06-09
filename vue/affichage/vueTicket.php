<?php
$result = $unControleur->selectPartenaire();
require_once("formulaire/formTicket.php");

if(isset($_POST["envoyer"]))
{
   $envoi = array ("objet"=>$_POST['objet'], 
   "date"=>$_POST['date'],
   "contenu"=>$_POST['contenu'],
   "id_personne"=>$_SESSION['id_personne'],
   "id_partenaire"=>$_POST['id_partenaire']
  );
   $unControleur->insert("ticket",$envoi);
}
?>