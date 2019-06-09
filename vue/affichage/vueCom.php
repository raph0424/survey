<?php
    //tableau de forme php
    //var_dump($resultat);

    foreach ($resultat as $unResultat)
    {
        echo"<table class=' table table-bordered'>";
    echo" <tr><th width='80%'>Commentaire de ".$unResultat['auteur']."</th><th width='10%'>Note</th>
    " ;       if($_SESSION['prenom'] == $unResultat['auteur'] || $_SESSION['nom'] == "admin" && $unResultat['id_telephone'] == $id_produit)
    {
        echo "<th width='10%'>Supprimer commentaire</th>";
    }echo"</tr>";
    echo "<tr>
         <td width='80%' height='100px'>".$unResultat['commentaire']."</td>
         <td>".$unResultat['score']." sur 5 </td> "; 
         if($_SESSION['prenom'] == $unResultat['auteur'])
         {
         echo"<td> <form class='form-group' action='' method='post'>
         <table>
         <input type='hidden' name='id_telephone' value='<?php echo $id_produit ;?>'>         
         <input type='hidden' name='hidden' value='".$unResultat['id_note']."'>
         <input type='submit' name='Supprimer' value='Supprimer'>";
         echo"</table>
         </form> </td>         
         </tr>";
         }
    }
    echo "</table>"; 
 

?>
