<form class="form-group" method="post" action="">
    <table border=0>
    <tr> <td>
            <?php
        /*1
                foreach( $lesCategs as $uneCateg)
                {                        
                    echo $uneCateg['designation'];
                    break;
                }
                
           */ ?>
         </td>

        <td class="td1">Note du poids</td>
            <td><select class="form-control" name="score">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
        </tr>


        <tr> <td>
            <?php /*
        
                foreach( $lesCategs1 as $uneCateg)
                {                        
                    echo $uneCateg['designation'];
                    break;
                } 
          */ ?>
        </td>
        <td class="td1">Note de la taille ecran</td>
            <td><select class="form-control" name="score">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
        </tr>
        <tr> <td>
            <?php /*
        
                foreach( $lesCategs2 as $uneCateg)
                {                        
                    echo $uneCateg['designation'];
                    break;
                }
                */
            ?>
        </td>
        <td class="td1">Note de la couleur</td>
            <td><select class="form-control" name="score">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
        </tr>        

    </table>
    <div class="col-sm-6">
        <p class = "pcom">Commentaire </p>
        <textarea class="form-control"  type="text" name="commentaire"></textarea></div>
        <input class ='buttonCom btn btn-primary' type="submit" name="Valider" value="Valider">
        <input class ='buttonCom btn btn-primary' type="submit" name="Modifier" value="Modifier">
 
</form>