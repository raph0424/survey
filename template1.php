<!DOCTYPE html>
<html>
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

  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }

  </style>
</head>
<body>
<div class="fakeimg"><center>Affiche de votre event</center></div>
<div class="container" style="margin-top:30px">

  <div class="row">
    <div class="col-sm-8">
      <h2>Titre de l'évènement</h2>
      <small>Organisateur</small>
      <h6>Date de l'évènement</h6>
    </div>
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-8">
      <div class="fakeimg">Picture 1</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="col-sm-4">
      <div class="jumbotron jumbotron-fluid">
          <center>
      <p>Partagez Avec Vos Amis<br/>
        <a href="#" class="icoFacebook"><span class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="Facebook"></span></a>
        <a href="#" class="icoTwitter"><span class="fa fa-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"></span></a>
        <br/>
        <a href="#" class="icoInstagram"><span class="fa fa-instagram" data-toggle="tooltip" data-placement="bottom" title="Instagram"></span></a>
        <a href="#" class="icoSnapchat"><span class="fa fa-snapchat" data-toggle="tooltip" data-placement="bottom" title="Snapchat"></span></a></p>
      <div class="container">
        <small>Organisateur</small>
        <button type="button" class="btn btn-outline-secondary btn-sm"><a>Site</a></button>
        <a><button type="button" class="btn btn-outline-secondary btn-sm">Contact</button></a>
      </div></center>
      </div>
    </div>
    <div class="col-sm-12">
      <h2>Nom du Produit</h2>
      <div class="fakeimg">Picture 2</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>


<style>

  .fa {
    color: grey;
    background-color: white;
    margin: 5px;
    width: 50px;
    padding-bottom: 17px;
    padding-top: 17px;
    border-radius: 50%;
  }
  .fa.fa-facebook:hover {
  background-color:  rgb(57,84,152);
  color: white;
  }
  .fa.fa-twitter:hover {
  background-color:  rgb(97,163,235);
  color: white;
  }
  .fa.fa-instagram:hover {
  background-color: rgb(247,74,83);
  color: white;
  }

  .fa.fa-snapchat:hover {
  background-color:  rgb(247,244,1);
  color: white;
  }

</style>

</body>
</html>
