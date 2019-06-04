<?php

require_once ("person_class.php");

require_once ("PersonManager.php");

$person = new Person([
  'id_personne' => null,  
  'nom' => 'Leroy',
  'prenom' => 'Jean',
  'email' => 'JL04241655@gmail.com',
  'mdp' => '123456',
  'telephone' => 678907895,
  'date_naissance' => \Datetime::createFromFormat('d/m/Y', '16/05/1997'),
  'adresse' => '5 rue du doute',
  'code_postal' => 75016,
  'role' => 'ROLE_USER'
]);
    
$db = new PDO('mysql:host=localhost;dbname=event', 'root', '');
$manager = new PersonManager($db);
var_dump($person);

$manager->add($person);
