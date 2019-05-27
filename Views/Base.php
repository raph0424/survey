<?php
	session_start();
?>
<html>
<head>
  <title>Test site event</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
</head>

<header>
  <nav class="navbar navbar-dark bg-white">
    <h1 class="navbar-brand">Gestion de stock</h1>
  </nav>
</div>
</header>

<body class="bg-white">
  <center>
    <h2 class="text-white"><ins>Test inscription</ins></h2>
    <br>
    <br>
    <?php
	if( isset($_SESSION['email']) && $_SESSION['email'] == "adminorange@orange.fr")
	{
    echo "<div class='container-fluid'>";
      require_once ("../personmanager.php");
      // instanciation de la classe controler
      $db = new PDO('mysql:host=localhost;dbname=event', 'root', '');

            require_once ("testinsert.php");
            if(isset($_POST['Valider'])){            
                $manager = new PersonManager($db);
                $manager->add($person);
            }
	     
      $manager = new PersonManager($db);	
      $result = $manager->getList();
    echo "</div>";
    echo "<div class='container-fluid'>";
      require_once ("pe-list.php");
      echo "</div>";
	}else{
		echo "<a href='index.php'> veuillez vous connecter ! </a>";
	}
		
     ?>
  </center>
</body>
</hml>
