<head>
  <title>Template 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script> 
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>
</head>
            
<body class ="body">
        <?php
                        foreach ($result as $unResultat) {
                            if($unResultat['id_event'] == $_GET['id']){ ?>
<!-- :::::::::::::::::::::::::::::::::::: AFFICHE :::::::::::::::::::::::::::::::::-->
    <div class="row">
      <div class="col-sm-12">
        <center>
          <img class="img-responsive" src="../img/event/<?php echo $unResultat['designation']; ?>1.jpg" alt="VotreImage" width="900" height="300">
        </center>
      </div>
    </div>
<!-- :::::::::::::::::::::::::::::::::::: GRILLE :::::::::::::::::::::::::::::::::-->
    <div class="row">
<!-- :::::::::::::::::::::::::::::::::::: TITRE :::::::::::::::::::::::::::::::::-->
      <div class="col-sm-6" >
        <center style="margin-left:80px">
          <br/><br/><br/><br/><br/>
            <h1 class="font-weight-light"><?php echo $unResultat['designation']?></h1>
            <?php if (isset ($_SESSION['nom_marque'])) { 
                $orga = $_SESSION['nom_marque'];
            echo '<p class="font-italic "><small>Organisateur : '.$orga.'</small></p>';
             } ?>
          <br/><br/><br/><br/><br/>
		  <div>
		  <h2 Liste des personnes inscrites </h2>
		  <table class="table">
  <thead>
    <tr>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
    </tr>
  </thead>
  <tbody>
				<?php
							foreach($results as $unResultas){
								if($unResultat['id_event'] == $unResultas['id_event']){
									foreach($resultu as $unResulta3){
										if($unResultas['id_personne'] == $unResulta3['id_personne']){
										
											?>
										<tr>
											  <td><?php echo $unResulta3['nom'];?></td>
											  <td><?php echo $unResulta3['prenom'];?></td>
											</tr><?php
										}
									}
								}
							}
						?>
						
  </tbody>
</table>
<h2> envoyer un message aux inscrits </h2>
				<div class="form">
    <form id="register_form" method="POST" class="register-form">
      <input type="text" name="text" placeholder="Texte">
      <input type="submit" class="btn" name ="sinscrir" value="Envoyer" />
    </form>
				
						
							
							
		  </div>
        </center>
      </div>
     </div>
</body>
    <?php 
                            }
                        }?>
