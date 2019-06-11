<form class="form-group" method="post" action="">
    <table border=0>
    <tr>
    <td>Objet</td>
    
    <td><input class="form-control" type="text" name="objet"></td></tr></br>
    <tr><td>Fournisseur</td>
            <td><select name="id_partenaire">
            <?php
                    foreach($result as $unPartenaire)
                    {
                        echo "<option value='".$unPartenaire['id_partenaire']."'>"
                        .$unPartenaire['nom_marque']."</option>";
                    }
            ?>
            </select></td>

        </tr>
        <tr>
        <td>Date</td>
        <td><input class="form-control"type="date" name="date" ></td>
        </tr>
        <tr>      
    </table>
    
    <div class="col-sm-4">
        <p class = "pcom">Message</p>
        <textarea class="form-control"  type="text" name="contenu"></textarea></div>
        </br>
        <input class ='buttonCom btn btn-primary' type="submit" name="envoyer" value="Envoyer">
        <!--<input type="hidden" name="id_ticket" value="<?php/* echo $id_ticket ;*/?>">-->
</form>