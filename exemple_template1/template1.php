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
            <p class="font-italic "><small>Organisateur : <?php echo$_SESSION['nom_marque']?></small></p>
          <br/><br/><br/><br/><br/>
        </center>
      </div>
<!-- :::::::::::::::::::::::::: SHARE WITH FRIENDS:::::::::::::::::::::::::::::::::-->
      <div class="col-sm-6">
       <center>
        <br/><br/><br/><br/>
          <p class="font-italic"><small>Partagez Avec Vos Amis</small>
        <br/><br/>
            <a href="#">
              <span class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="Facebook"></span>
            </a>
            <a href="#" class="icoTwitter">
              <span class="fa fa-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"></span>
            </a><br/>
            <a href="#" class="icoInstagram">
              <span class="fa fa-instagram" data-toggle="tooltip" data-placement="bottom" title="Instagram"></span>
            </a>
            <a href="#" class="icoSnapchat">
              <span class="fa fa-snapchat" data-toggle="tooltip" data-placement="bottom" title="Snapchat"></span>
            </a>
          </p>
        </center>
      </div>
<!-- ::::::::::::::::::::::::::::::::::: DATE  ::::::::::::::::::::::::::::::: -->
      <div class="col-sm-12" id="date_event">
<!--::::::::::::::::::::::::::::::: LIGNE  :::::::::::::::::::::::::::::::::::: -->
        <hr>
          <center>
            <p  class="font-weight-light">Save the date <br/>
            <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=evenement&dates=20190612T180000Z/20190612T210000Z&ctz=Europe/Paris&details=reserve%20ta%20soiree%20pour%20assister%20a%20cet%20evenement&location=paris,%20france" class="date_img"><img class="img-responsive" src="../exemple_template1/date.png"></a>
          </p>
          </center>
<!--::::::::::::::::::::::::::::::: LIGNE  :::::::::::::::::::::::::::::::::::: -->
        <hr>
      </div>
     </div>

<!-- ::::::::::::::::::::::::::::::::::: SECTION 1 ::::::::::::::::::::::::::::::: -->
 <div class="row justify-content-center">
<!-- ::::::::::::::::::::::::::::: IMAGE 1 ::::::::::::::::::::::::::::::::::::: -->
      <div class="col-sm-12">
        <div>
          <center>
              <img class="img-responsive" src="../img/event/<?php echo $unResultat['designation']?>2.jpg" alt="VotreImage">
          </center>
        </div>
      </div>
<!-- ::::::::::::::::::::::::: TEXTE 1 ::::::::::::::::::::::::::::::::::::: -->
   <div class="col-6">
      <br/>
       <center>
          <h2  class="font-weight-light">Description </h2>
       </center>
            <p  class="font-weight-light"> <?php echo $unResultat['description']?></p>
    </div>
  </div>


<!-- ::::::::::::::::::::::::::::::::::: SECTION 2 ::::::::::::::::::::::::::::::: -->
    <div class="row justify-content-center">
<!-- ::::::::::::::::::::::::: IMAGE 2 ::::::::::::::::::::::::::::::::::::: -->
      <div class="col-sm-12">
        <div>
          <center>
            <img class="img-responsive" src="../img/event/<?php echo $unResultat['designation']?>3.jpg" alt="VotreImage">
          </center>
        </div>
      </div>
<!-- ::::::::::::::::::::::::: TEXTE 2 ::::::::::::::::::::::::::::::::::::: -->
      <div class="col-6">
        <br/>
          <center>
            <h2  class="font-weight-light">Horaires : </h2>
          </center>
            <p  class="font-weight-light"><?php echo $unResultat['horaires']?></p>
      </div>
</body>
    <?php 
                            }
                        }?>
