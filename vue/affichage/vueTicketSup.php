<!-- Custom styles for this template -->
<link href="../css/shop-homepage.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
$id_partenaire = $_SESSION['id_partenaire'];
$result = $unControleur->selectPartenaire();
if(isset($_POST['Supprimer']))
{
    $id_ticket = $_POST['hidden'];
    $envoi = array ( "id_ticket"=>$id_ticket);
    $unControleur->delete("ticket",$envoi);
}

?>

<div class="col-sm-6">
<?php
$result1 = $unControleur->selectTicketSup($id_partenaire);

foreach ($result1 as $unResultat)
{
    echo"<table class='table table-bordered'>";
    echo" <tr><th width='40%'>Message de ".$unResultat['auteur']."</th><th width='10%'>Objet</th><th width='10%'> Date</th><th width='10%'>Supprimer message</th></tr>";       
    echo "<tr><td width='40%'>".$unResultat['contenu']."</td><td width='10%'>".$unResultat['objet']."</td><td width='10%'>".$unResultat['date']."</td>
    <td>
    <form class='form-group' action='' method='post'>
         <table>
    <input type='hidden' name='hidden' value='".$unResultat['id_ticket']."'>
    <input class ='buttonCom btn btn-primary' type='submit' name='Supprimer' value='Supprimer'></td>
    </table>
         </form></tr>";   



      echo'  <form class="form-group" method="post" action="mailto:'.$unResultat["email"].'">
    <table border=0>
    <tr>

        <tr>      
    </table>
    <div class="col-sm-6">
        <p class = "pcom">Répondre au ticket</p>
        <textarea class="form-control"  type="text" name="commentaire"></textarea></div>
        </br>
        <input class ="buttonCom1 btn btn-primary" type="submit" name="Envoyer" value="Envoyer">
</form>';



}


echo "</table>"; 
?>
</div>
<?php

?>
<style>
.buttonCom 
{
    margin-bottom : 5px;
}
.buttonCom1 
{
    margin-bottom : 60px;
}
</style>
