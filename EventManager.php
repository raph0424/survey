<?php
class EventManager {
    
    const FORMAT_DATE_MYSQL = 'Y-m-d';
    
  private $_db; // Instance de PDO.
  public function __construct($db)
  {
    $this->setDb($db);
  }
  public function add(Event $event)
  {
    // Préparation de la requête d'insertion.
    //$q correspond a "query"
      $q = $this->_db->prepare('INSERT INTO event(id_event, designation, tarif, nbplaces, date_event, adresse, horaires,
        descriptions, categorie, id_lieu) VALUES(:id_event, :designation, :tarif, :nbplaces, :date_event, :adresse, :horaires,
        :descriptions, :categorie, :id_lieu)');
    $q->bindValue(':id_event', $event->getId_event(), PDO::PARAM_INT);
    $q->bindValue(':designation', $event->getDesignation());
    $q->bindValue(':tarif', $event->getTarif());
    $q->bindValue(':nbplaces', $event->getNbplaces() PDO ::PARAM_INT);
    $q->bindValue(':date_event', $event->getDate_event()->format(self::FORMAT_DATE_MYSQL));
    $q->bindValue(':adresse', $event->getAdresse());
    $q->bindValue(':horaires', $event->getHoraires());
    $q->bindValue(':descriptions', $event->getDescriptions());
    $q->bindValue(':categorie', $event->getCategorie());
    $q->bindValue(':id_lieu', $event->getId_lieu(), PDO::PARAM_INT);
  }
  public function delete(Event $event)
  {
    // Exécute une requête de type DELETE.
      $this->_db->exec('DELETE FROM event WHERE id = '.$event->id());
  }
  public function get($id)
  {
    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personne.
      $id = (int) $id;
    $q = $this->_db->query('SELECT id_event, designation, tarif, nbplaces, date_event, adresse, horaires,
    descriptions, categorie, id_lieu FROM event WHERE id_event = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);
    return new Event($donnees);
  }
  public function getList()
  {
    // Retourne la liste de tous les personnes.
      $person = [];
    $q = $this->_db->query('SELECT id_event, designation, tarif, nbplaces, date_event, adresse, horaires,
    descriptions, categorie, id_lieu FROM event ORDER BY designation');
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $event[] = new Event($donnees);
    }
    return $event;
  }
  public function update(Event $event)
  {
    // Prépare une requête de type UPDATE.
    // Assignation des valeurs à la requête.
    // Exécution de la requête.
      $q = $this->_db->prepare('UPDATE event SET designation = :designation, tarif = :tarif, nbplaces = :nbplaces, date_event = :date_event, adresse =:adresse,
               horaires = :horaires, descriptions =:descriptions, categorie =:categorie, id_lieu = :id_lieu WHERE id_event = :id_event');
    $q->bindValue(':id_event', $event->getId_event(), PDO::PARAM_INT);
    $q->bindValue(':designation', $event->getDesignation());
    $q->bindValue(':tarif', $event->getTarif());
    $q->bindValue(':nbplaces', $event->getNbplaces() PDO ::PARAM_INT);
    $q->bindValue(':date_event', $event->getDate_event()->format(self::FORMAT_DATE_MYSQL));
    $q->bindValue(':adresse', $event->getAdresse());
    $q->bindValue(':horaires', $event->getHoraires());
    $q->bindValue(':descriptions', $event->getDescriptions());
    $q->bindValue(':categorie', $event->getCategorie());
    $q->bindValue(':id_lieu', $event->getId_lieu(), PDO::PARAM_INT);
    
    $q->execute();
  }
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}