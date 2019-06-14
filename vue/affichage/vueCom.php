<?php
    //tableau de forme php
    //var_dump($resultat);
    $tot = 0;
    $j = 0;
    foreach ($resultat as $unResultat)
    {
        echo"<table class=' table table-bordered'>";
    echo" <tr><th width='60%'>Commentaire de ".$unResultat['auteur']."</th><th width='20%'>Note</th>
    " ;       if($_SESSION['prenom'] == $unResultat['auteur'] || $_SESSION['nom'] == "admin" && $unResultat['id_telephone'] == $id_produit)
    {
        echo "<th width='10%'>Supprimer commentaire</th>";
    }echo"</tr>";
    echo "<tr>
         <td width='70%' height='100px'>".$unResultat['commentaire']."</td>
         <td>".$unResultat['score']." sur 5 </td> ";
         $tot = $tot + $unResultat['score'];
         $j++;
         if($_SESSION['prenom'] == $unResultat['auteur'])
         {
         echo"<td> <form class='form-group' action='boutique.php?id_note=".$unResultat['id_note']."' method='post'>
         <table>
         <input type='hidden' name='id_telephone' value='".$id_produit."'>         
         <input type='hidden' name='hidden' value='".$unResultat['id_note']."'>
         <input class ='buttonCom btn btn-primary'type='submit' name='Supprimer' value='Supprimer'>
         <input class ='buttonCom btn btn-primary'type='submit' name='modifier' value='Modifier'>
         ";
         echo"</table>
         </form> </td>         
         </tr>";
         }
    }
    echo "</table>"; 
   if ($j > 0){
    echo "<tr> "
    . "<th> Moyenne des notes du produit : " .($tot / $j)."</th>"
    . "</tr>";
   }

?>
