<?php
class Person
{
  private $_id_personne;
  private $_nom;
  private $_prenom;
  private $_email;
  private $_mdp;
  private $_telephone;
  private $_date_naissance;
  private $_adresse;
  private $_code_postal;
  private $_role;
  
  function __construct() {
      
  }
  public function hydrate(array $donnees)
{
  foreach ($donnees as $key => $value)
  {
    // On récupère le nom du setter correspondant à l'attribut.
    $method = 'set'.ucfirst($key);
        
    // Si le setter correspondant existe.
    if (method_exists($this, $method))
    {
      // On appelle le setter.
      $this->$method($value);
    }
  }
}

  
  public function getid_person() 
  { 
	return $this->_id_personne; 
  }
  public function getnom() 
  {
	 return $this->_nom; 
  }
  public function getemail() 
  {
	  return $this->_email; 
  }
  public function getmdp() 
  {
	  return $this->_mdp;
  }
  public function gettelephone() 
  {
	  return $this->_telephone; 
  }
  public function getdate_naissance() 
  {
	  return $this->_date_naissance; 
  }
  public function getadresse() 
  {
	  return $this->_adresse; 
  }
  public function getcode_postal() 
  {
	  return $this->_code_postal; 
  }
  public function getrole() 
  {
	  return $this->_role; 
  }
  
  public function setId_personne($id)
  {
    $this->_id_personne = (int) $id;
  }
        
  public function setNom($_nom)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($_nom) && strlen($_nom) <= 30)
    {
      $this->_nom = $_nom;
    }
  }
  
  public function setPrenom($_nom)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($_prenom) && strlen($_prenom) <= 30)
    {
      $this->_prenom = $_prenom;
    }
  }
  
  function set_email($_email) {
      
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    // Dont la longueur est inférieure à 30 caractères.
    if (is_string($_email) && strlen($_email) <= 30)
    {
      //on vérifie ensuite la validité des caractères alphanumérique de la chaine afin qu'il corresponde à un email.
        if (filter_var($_email, FILTER_VALIDATE_EMAIL)) {
            $this->_email = $_email;
        }
    }
  }

  function set_mdp($_mdp) {
      $this->_mdp = $_mdp;
  }

  function set_telephone($_telephone) {
      $this->_telephone = $_telephone;
  }

  function set_date_naissance(\DateTime $_date_naissance) {
      $this->_date_naissance = $_date_naissance;
  }

  function set_adresse($_adresse) {
      $this->_adresse = $_adresse;
  }

  function set_code_postal($_code_postal) {
      $this->_code_postal = $_code_postal;
  }

  function set_role($_role) {
      $this->_role = $_role;
  }


  
  

}