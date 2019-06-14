<center>
<div class="container-fluid">
    <h2> Formulaire de création de votre Evénement </h2>
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="designation" class="col-sm-4 control-label">Désignation de l&rsquo;événement</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="designation" name="designation" placeholder="Désignation">
            </div>
        </div>
        <div class="form-group">
            <label for="tarif"  class="col-sm-4 control-label">Tarif du billet</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="tarif" name="tarif" placeholder="100">
            </div>
        </div>
        <div class="form-group">
            <label for="nb_place" class="col-sm-4 control-label">Nombre de places</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" id="nb_place" name="nb_places" placeholder="1">
            </div>
        </div>
        <div class="form-group">
            <label for="date_event" class="col-sm-4 control-label">Date de l&rsquo;événement</label>
            <div class="col-sm-6">
                <input type="date" class="form-control" id="date_event" name="date_event">
            </div>
        </div>
        <div class="form-group">
            <label for="horaire" class="col-sm-4 control-label">Horaire</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="horaire" name="horaire">
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-sm-4 control-label">Description</label>
            <div class="col-sm-6">
                <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="lieu" class="col-sm-4 control-label">Lieu</label>
            <div class="col-sm-6">
                <select class="form-control" id="lieu" name="lieu">                
                    <?php foreach ($res as $UnRes) { ?>
                        <option value="<?php echo $UnRes['id_lieu']; ?>"><?php echo htmlentities($UnRes['designation']); ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-4 control-label">Bannière de votre Evénement format 900 x 300</label>
            <div class="col-sm-6">
                <input type="file" id="image1" name="image1" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-4 control-label">Image associée à la description</label>
            <div class="col-sm-6">
                <input type="file" id="image" name="image2" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-4 control-label">Image illustrative </label>
            <div class="col-sm-6">
                <input type="file" id="image" name="image3" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-4 control-label">Image associée n°4(inutile)</label>
            <div class="col-sm-6">
                <input type="file" id="image" name="image4" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-4 control-label">Miniature de votre Event</label>
            <div class="col-sm-6">
                <input type="file" id="image" name="image5" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <input class='btn btn-primary' type="submit" name="create" value="Créer">
            </div>
        </div>
    </form>
</div>
</center>
<style>
h2
{
    margin-top: 40px;
}
</style>