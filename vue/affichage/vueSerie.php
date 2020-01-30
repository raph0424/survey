<center>
<div class="container-fluid">
    <h2> J'ai regarder une Série </h2>
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="idfilm" class="col-sm-4 control-label">Nom de la Série</label>
            <div class="col-sm-6">
                <select class="form-control" id="idserie" name="idserie">                
                    <?php foreach ($res as $UnRes) { ?>
                        <option value="<?php echo $UnRes['id_serie']; ?>"><?php echo htmlentities($UnRes['Nom_serie']); ?></option>
                    <?php } ?>
                </select>
				<br>
				<p> Si votre Série n'apparait pas Rajoutez la <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					  ici
					</button> </p>

					<!-- Modal -->
			<div class="form-group">
				<label for="nom_film" class="col-sm-4 control-label">Nombre d'épisodes regardés à la suite :</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" id="nbepc" name="nbepc" placeholder="">
				</div>
			</div>		
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <input class='btn btn-primary' type="submit" name="Valider" value="Valider">
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Ajout Serie</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="nom_film" class="col-sm-4 control-label">Nom de la Serie</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="nom_serie" name="nom_serie" placeholder="Vérifier l'orthographe">
									</div>
								</div>
								<div class="form-group">
									<label for="nom_film" class="col-sm-4 control-label">Durée de la série</label>
									<div class="col-sm-6">
										<select class="form-control" id="duree_serie" name="duree_serie">   
												<option value="20mn">20mn</option>
												<option value="40mn">40mn</option>
											    <option value="60mn">60mn</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-4 col-sm-8">
										<input class='btn btn-primary' type="submit" name="insert" value="Insérez">
									</div>
								</div>
							</form>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						  </div>
						</div>
					  </div>
					</div>
            </div>
        </div>
</center>
<style>
h2
{
    margin-top: 40px;
}
</style>