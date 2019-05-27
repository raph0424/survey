<?php

class PersonManager {
    
    const FORMAT_DATE_MYSQL = 'Y-m-d';
    
  private $_db; // Instance de PDO.

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Person $person)
  {
    // Préparation de la requête d'insertion.
    //$q correspond a "query"
      $q = $this->_db->prepare('INSERT INTO personne(id_personne, nom, prenom, email, mdp, telephone, date_naissance,
        adresse, code_postal, role) VALUES(:id_personne, :nom, :prenom, :email, :mdp, :telephone, :date_naissance,
        :adresse, :code_postal, :role)');

    $q->bindValue(':id_personne', $person->getid_person(), PDO::PARAM_INT);
    $q->bindValue(':nom', $person->getnom());
    $q->bindValue(':prenom', $person->getprenom());
    $q->bindValue(':email', $person->getemail());
    $q->bindValue(':mdp', $person->getmdp());
    $q->bindValue(':telephone', $person->gettelephone(), PDO ::PARAM_INT);
    $q->bindValue(':date_naissance', $person->getdate_naissance()->format(self::FORMAT_DATE_MYSQL));
    $q->bindValue(':adresse', $person->getadresse());
    $q->bindValue(':code_postal', $person->getcode_postal(), PDO ::PARAM_INT);
    $q->bindValue(':role', $person->getrole());

    $q->execute();
  }

  public function delete(Person $person)
  {
    // Exécute une requête de type DELETE.
      $this->_db->exec('DELETE FROM personne WHERE id = '.$person->id());
  }

  public function get($id)
  {
    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne.
      $id = (int) $id;

    $q = $this->_db->query('SELECT id_personne, nom, prenom, email, mdp, telephone, date_naissance,
        adresse, code_postal, role FROM personne WHERE id_personne = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new Person($donnees);
  }

  public function getList()
  {
    // Retourne la liste de tous les personnes.
      $person = [];

    $q = $this->_db->query('SELECT id_personne, nom, prenom, email, mdp, telephone, date_naissance,
        adresse, code_postal, role FROM personne ORDER BY nom');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $person[] = new Person($donnees);
    }

    return $person;
  }
  
  public function verifconnexion ($email, $mdp)
  {
	 
		  $requete ="select * from personne where email = :email and mdp = :mdp ;";
		  $donnees = array(":email"=>$email, ":mdp"=>$mdp);
		  $select = $this->_db->prepare($requete);
		  $select->execute($donnees);
		  $result = $select->fetch();
		  return $result;

  }

  public function update(Person $person)
  {
    // Prépare une requête de type UPDATE.
    // Assignation des valeurs à la requête.
    // Exécution de la requête.
      $q = $this->_db->prepare('UPDATE personne SET nom = :nom, prenom = :prenom, email = :email, mdp = :mdp, telephone =:telephone,'
              . 'date_naissance =:date_naissance, code_postal =:code_postal, role =:role WHERE id_personne = :id_personne');

    $q->bindValue(':nom', $person->nom());
    $q->bindValue(':prenom', $person->prenom());
    $q->bindValue(':email', $person->email());
    $q->bindValue(':mdp', $person->mdp());
    $q->bindValue(':telephone', $person->telephone(), PDO ::PARAM_INT);
    $q->bindValue(':date_naissance', $person->date_naissance());
    $q->bindValue(':adresse', $person->adresse());
    $q->bindValue(':code_postal', $person->code_postal(), PDO ::PARAM_INT);
    $q->bindValue(':role', $person->role());
    $q->bindValue(':id_personne', $person->id_personne(), PDO::PARAM_INT);
    

    $q->execute();
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}
