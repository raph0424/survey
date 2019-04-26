<?php
class Event
{
    private $_id_event;
    private $_designation;
    private $_tarif;
    private $_nbplaces;
    private $_date_event;
    private $_adresse;
    private $_horaires;
    private $_description;
    private $_categorie;
    private $_id_lieu;

    function __construct($donnees = null)
    {
        if (empty($donnees))
        {
            return;
        }
        $this->hydrate($donnees);
    }
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set' . ucfirst($key);
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }
        //Get
    public function getId_event()
    {
        return $this->_id_event;
    }
    public function getDesignation()
    {
        return $this->_designation;
    }
    function getTarif()
    {
        return $this->_tarif;
    }
    public function getNbplaces()
    {
        return $this->_nbplaces;
    }
    public function getDate_event()
    {
        return $this->_Date_event;
    }
    public function getAdresse()
    {
        return $this->_adresse;
    }
    public function getHoraires()
    {
        return $this->_horaires;
    }
    public function getDescription()
    {
        return $this->_description;
    }
    public function getCategorie()
    {
        return $this->_categorie;
    }
    public function getId_lieu()
    {
        return $this->_id_lieu;
    }

        // Set
    public function setId_event($id)
    {
        $this->_id_event = (int) $id;
    }
    public function setDesignation($_designation)
    {
        // On vérifie qu'il s'agit bien d'une chaîne de caractères.
        // Dont la longueur est inférieure à 30 caractères.
        if (is_string($_designation) && strlen($_designation) <= 30)
        {
            $this->_designation = $_designation;
        }
    }
    public function setTarif($_tarif)
    {
            $this->_tarif = $_tarif;
    }
    function setNbplaces($_nbplaces)
    {
            $this->_nbplaces = $_nbplaces;           
    }
    function setDate_event(\DateTime $_date_event)
    {
        $this->_date_event = $_date_event;
    }
    function setAdresse($_adresse) {
        $this->_adresse = $_adresse;
    }
    function setTelephone($_telephone) {
        $this->_telephone = $_telephone;
    }
    function setDate_naissance(\DateTime $_date_naissance) {
        $this->_date_naissance = $_date_naissance;
    }
    function setAdresse($_adresse) {
        $this->_adresse = $_adresse;
    }
    function sethoraires($_horaires)
    {
        $this->_code_horaires = $_horaires;
    }
    function setDescription($_description)
    {
        if (is_string($_description ) && strlen($_description ) <= 500)
        {
        $this->_description = $_description;
        }
    }
    function setCategorie($_categorie)
    {
        if (is_string($_categorie ) && strlen($_categorie ) <= 30)
        {
        $this->_categorie = $_categorie;
        }
    }
    public function setId_lieu($_id_l)
    {
        $this->_id_lieu = (int) $_id_l;
    }

}