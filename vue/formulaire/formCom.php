<form class="form-group" method="post" action="">
    <table border=0>
    <tr>
        <td class="td1">Note</td>
            <td><select class="form-control" name="score">
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
        <input class ='buttonCom btn btn-primary' type="submit" name="<?php echo $valider_produit; ?>" value="Valider">
        <input type="hidden" name="id_produit" value="<?php echo $id_produit ;?>">
        <input class ='buttonCom btn btn-primary' type="submit" name="Modifier" value="Modifier">
</form>