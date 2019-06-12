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
    </br>
    <input class ='buttonCom btn btn-primary' type='submit' name='Repondre' value='Répondre'></td>
    </table>
         </form></tr>";   

}


echo "</table>"; 
?>
</div>
<?php

?>
<form class="form-group" method="post" action="">
    <table border=0>
    <tr>
        <td class="td1">Note</td>
            <td><select class="td1 form-control" name="score">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
        </tr>
        <tr>      
    </table>
    <div class="col-sm-6">
        <p class = "pcom">Commentaire </p>
        <textarea class="form-control"  type="text" name="commentaire"></textarea></div>
        </br>
        <input class ='buttonCom btn btn-primary' type="submit" name="<?php echo $valider_produit; ?>" value="Valider">
        <input type="hidden" name="id_telephone" value="<?php echo $id_produit ;?>">
        <input class ='buttonCom btn btn-primary' type="submit" name="Modifier" value="Modifier">
</form>
<style>
.buttonCom 
{
    margin-bottom : 5px;
}
</style>
