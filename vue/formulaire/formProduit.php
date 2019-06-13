<div class="container-fluid">
    <h2> Ajoutez le Produit présenté lors de votre Evénement </h2>
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="designation" class="col-sm-4 control-label">Désignation de votre produit</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="designation" name="designation" placeholder="Désignation">
            </div>
        </div>
        <div class="form-group">
            <label for="Prix"  class="col-sm-4 control-label">Prix de votre produit</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="prix" name="Prix" placeholder="100">
            </div>
        </div>
        <div class="form-group">
            <label for="poids" class="col-sm-4 control-label">Poids en gramme de votre produit</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="poids" name="poids" placeholder="1">
            </div>
        </div>
        <div class="form-group">
            <label for="taille" class="col-sm-4 control-label">taille en cm de votre produit</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="taille" name="taille">
            </div>
        </div>
        <div class="form-group">
            <label for="couleur" class="col-sm-4 control-label">couleur de votre produit</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="couleur" name="couleur">
            </div>
        </div>
        <div class="form-group">
            <label for="date_sortie" class="col-sm-4 control-label">Date de sortie du produit</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="date_sortie" name="date_sortie">
            </div>
        </div>
        
        <div class="form-group">
            <label for="image" class="col-sm-4 control-label">Photo de votre Produit Format 700 x 700</label>
            <div class="col-sm-8">
                <input type="file" id="imagetel" name="imagetel" class="form-control">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <input class='btn btn-primary' type="submit" name="create" value="Créer">
            </div>
        </div>
    </form>
</div>
