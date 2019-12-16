<?php 
require_once("../modele/leModele.php");
class leControleur
{
    private $unModele;
    public function __construct($server,$bdd,$user,$mdp)
    {
        //instanciation de la class modele
        $this->unModele = new leModele($server,$bdd,$user,$mdp);
    }
    public function verifCon($email, $mdp)
    {
        // on peu controler les donnees 
        return $this->unModele->verifCon($email, $mdp);
    }
    public function selectEvent()
    {
        return $this->unModele->selectEvent();
    }
	public function selectlastPersonneid()
    {
        return $this->unModele->selectlastPersonneid();
    }
    public function selectNote($id_produit)
    {
        return $this->unModele->selectNote($id_produit);
    }
    public function countProduit1()
    {
        return $this->unModele->countProduit1();
    }
    public function countProduit2()
    {
        return $this->unModele->countProduit2();
    }
    public function countProduit3()
    {
        return $this->unModele->countProduit3();
    }
     public function selectLieu()
    {
        return $this->unModele->selectLieu();
    }
    public function selectInscrire()
    {
        return $this->unModele->selectInscrire();
    }
    public function selectTicket()
    {
        return $this->unModele->selectTicket();
    }
    public function selectTicketSup($id_partenaire)
    {
        return $this->unModele->selectTicketSup($id_partenaire);
    }
    public function selectProduit()
    {
        return $this->unModele->selectProduit();
    }
    public function selectPromos()
    {
        return $this->unModele->selectPromos();
    }
    public function selectPartenaire()
    {
        return $this->unModele->selectPartenaire();
    }
    public function select_Classement($idevent)
    {
        return $this->unModele->select_Classement($idevent);
    }
    public function select_Classement2()
    {
        return $this->unModele->select_Classement2();
    }
    public function verifConPart($accronyme, $mdp)
    {
        // on peu controler les donnees 
        return $this->unModele->verifConPart($accronyme, $mdp);
    }
    public function insert($table, $tab)
      {
        $this->unModele->insert($table, $tab);
      }
      public function delete($table, $tab)
      {
        $this->unModele->delete($table, $tab);
      }
      public function update($table, $tab)
      {
        $this->unModele->update($table, $tab);
      }
      public function insertNote($tab)
      {
        $this->unModele->insertNote($tab);
      }
      public function updateNote($tab,$id_note)
      {
        $this->unModele->updateNote($tab,$id_note);
      }
      public function selectAttribut()
      {
          return $this->unModele->selectAttribut();
      }
      public function selectAttribut1()
      {
          return $this->unModele->selectAttribut1();
      } 
       public function selectAttribut2()
      {
          return $this->unModele->selectAttribut2();
      }
}