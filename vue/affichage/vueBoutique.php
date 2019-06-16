<link href="../css/shop-homepage.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
    <br>
    <div class="list-group">
        <?php foreach ($result1 as $Resultat) { ?> 
            <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#partenaire-<?php echo $Resultat['id_partenaire']; ?>" aria-expanded="false" aria-controls="#partenaire-<?php echo $Resultat['id_partenaire']; ?>">
                <?php echo $Resultat['nom_marque']; ?></button>
            <br>
        <?php } ?>
    </div>
    <?php foreach ($result1 as $Resultat) { ?> 
        <div class="collapse" id="partenaire-<?php echo $Resultat['id_partenaire']; ?>">
            <div class="card card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <?php
                            foreach ($result as $unResultat) {
                                if ($Resultat['id_partenaire'] == $unResultat['id_partenaire']) {
                                    $idmodal = 'modal-tel-' . $unResultat['id_telephone'];
                                    ?>

                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="card h-100">
                                            <a href="#" data-toggle="modal" data-target="#<?php echo $idmodal; ?>"><img class="card-img-top" src="../img/Produit/<?php echo $unResultat['designation']; ?>.jpg" alt=""></a>
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                <?php
                                                echo "<td>", $unResultat['designation'], "</td>";
                                                ?>
                                                </h4>
                                                    <?php
                                                    echo "<td>", $unResultat['Prix'], "$ </td>";
                                                    ?>
                                                <p class="card-text"></p>
                                                <div class="modal fade bannerformmodal modal-tel" tabindex="-1" role="dialog" aria-labelledby="modal-tel-label" aria-hidden="true" id="<?php echo $idmodal; ?>">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="modal-tel-label-"><?php echo $unResultat['designation']; ?></h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <img class="card-img-top" src="../img/Produit/<?php echo $unResultat['designation'];?>.jpg" alt="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <div>
                                                                        
                                                                        <table>
                                                                            
                                                                            <thead>
                                                                                <?php 
                                                                                    $prix = $unResultat['Prix'];
                                                                                    foreach($result2 as $unResult){
                                                                                        if($unResult['id_telephone'] == $unResultat['id_telephone']){
                                                                                            $pourcentage = $unResultat['Prix'] * ($unResult['valeur'] / 100);
                                                                                            $prix = $unResultat['Prix'] - $pourcentage;
                                                                                            ?> <td> Promotion - <?php echo $unResult['valeur']; ?> %</td><?php
                                                                                        }?>
                                                                                                    
                                                                                <?php }?>
                                                                            <?php 
                                                                                        if (isset($_SESSION['role']) == 'ROLE_ADMIN'){
                                                                                            ?>
                                                                                        <form class="form-group" method="post" action="">
                                                                                            <table border=0>
                                                                                            <td> Si une promotion est déja en cours, vous ne pourrez pas en ajouter une autre ! </td>
                                                                                            <tr>
                                                                                                <td class="td1">Ajoutez une promo :</td>
                                                                                                    <td><select class="td1 form-control" name="valeur">
                                                                                                        <option value="15">15%</option>
                                                                                                        <option value="25">25%</option>
                                                                                                        <option value="50">50%</option>
                                                                                                        <option value="60">60%</option>
                                                                                                        <option value="75">75%</option>
                                                                                                    </select></td>
                                                                                                    <td> <input type="hidden" name="id_tel" value ="<?php echo $unResultat['id_telephone']; ?>"></td>
                                                                                                    <td> <input class ='btn btn-primary' type="submit" name="ajouter" value="ajouter Promo"> </td>
                                                                                                </tr>
                                                                                        </form>
                                                                                        <?php } ?>
                                                                                <tr>
                                                                                    
                                                                                    <th>Produit</th>
                                                                                    <th>Prix</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    
                                                                                    <td><?php echo $unResultat['designation']; ?></td>
                                                                                    <td><?php echo $prix, "$"; ?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <td><a href="#" data-dismiss ="modal" class="btn btn-warning"><i class="fa fa-angle-left"></i> Retour aux événements</a></td>
                                                                                    <td colspan="2" class="hidden-xs"></td>
                                                                                    <td><a data-toggle="modal" href="#ignismyModal" class="btn btn-success btn-block">Valider l'achat <i class="fa fa-angle-right"></i></a></td>
                                                                                </tr>  
                                                                                <?php
                                                                                    if(isset($_SESSION['nom']))
                                                                                    {
                                                                                        $id_produit = $unResultat['id_telephone'];
                                                                                        $valider_produit = 'valider'.$unResultat['id_telephone'];                                                                                                                                                                       
                                                                                        if(isset($_POST[$valider_produit]))
                                                                                        {
                                                                                            $unControleur->insertNote($_POST);
                                                                                        }
                                                                                        if(isset($_POST['Supprimer']))
                                                                                        {
                                                                                            $id_note = $_POST['hidden'];
                                                                                            $envoi = array ( "id_note"=>$id_note);
                                                                                            $unControleur->delete("note",$envoi);
                                                                                        }
                                                                                        if(isset($_POST['Modifier']))
                                                                                        {
                                                                                            $id_note = $_GET['id_note'];
                                                                                            $unControleur->updateNote($_POST,$id_note);
                                                                                        }
                                                                                        $resultat = $unControleur->selectNote($id_produit);
                                                                                        require("formulaire/formCom.php");
                                                                                        require("affichage/vueCom.php");  
                                                                                    }  
                                                                                    
                                                                                    ?>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                </div>          
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted"></small>

                                            </div>


                                        </div>
                                    </div>
            <?php
        }

    }
    ?>


                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.col-lg-9 -->

                </div>
                <!-- /.row -->

            </div>

            <div class="modal fade" id="ignismyModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                        </div>

                        <div class="modal-body">

                            <div class="thank-you-pop">
                                <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                                <h1>Merci!</h1>
                                <p>Votre achat bien été pris en compte, vous recevrez votre commande d'ici 2 jours, un mail de confirmation vous sera envoyé.</p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php
}
?>
</div>
<style> 
    /*--thank you pop starts here--*/
    .thank-you-pop{
        width:100%;
        padding:20px;
        text-align:center;
    }
    .thank-you-pop img{
        width:76px;
        height:auto;
        margin:0 auto;
        display:block;
        margin-bottom:25px;
    }

    .thank-you-pop h1{
        font-size: 42px;
        margin-bottom: 25px;
        color:#5C5C5C;
    }
    .thank-you-pop p{
        font-size: 20px;
        margin-bottom: 27px;
        color:#5C5C5C;
    }
    .thank-you-pop h3.cupon-pop{
        font-size: 25px;
        margin-bottom: 40px;
        color:#222;
        display:inline-block;
        text-align:center;
        padding:10px 20px;
        border:2px dashed #222;
        clear:both;
        font-weight:normal;
    }
    .thank-you-pop h3.cupon-pop span{
        color:#03A9F4;
    }
    .thank-you-pop a{
        display: inline-block;
        margin: 0 auto;
        padding: 9px 20px;
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        background-color: #8BC34A;
        border-radius: 17px;
    }
    .thank-you-pop a i{
        margin-right:5px;
        color:#fff;
    }
    #ignismyModal .modal-header{
        border:0px;
    }
    /*--thank you pop ends here--*/
</style>

