<?php
	session_start();
?>
<html>
<head>
	<title> Test site Event</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1> Bienvenue </h1>
		<h2> Veuillez vous identifier <h2>
		<?php
			require_once("../personmanager.php");
			$pdo = new PDO('mysql:host=localhost;dbname=event', 'root', '');
			require_once("vueconnexion.php");
			if (isset($_POST["SeConnecter"]))
			{
				$email = $_POST['email'];
				$mdp = $_POST['mdp'];
                                           
                                $manager = new PersonManager($pdo);
				$result = $manager->verifConnexion($email,$mdp);
				//var_dump($result);
				if (isset($result['nom']))
				{
					//creation de session
					$_SESSION['email'] = $result['email'];
					$_SESSION['nom'] = $result['nom'];
					$_SESSION['prenom'] = $result['prenom'];


					header('Location: base.php');
				}else {
					echo "veuillez verifier vos identifiants";
				}
			}
		?>
	</center>
</body>
</html>