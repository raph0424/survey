<?php
class leModele {
    private $unPdo;
    public function __construct($server, $bdd, $user, $mdp)
    {
        $this->unPdo = null;
        
        try
        {
            $this->unPdo = new PDO("mysql:host=".$server.";dbname=".$bdd,$user,$mdp);
        }
        catch(PDOExecption $exp)
        {
            echo "Erreur de connexion à la base données";
            echo $exp->getMessage();
        }
    }
    public function verifCon($login, $mdp)
    {
        if($this->unPdo!=null)
        {
            $requete ="select * from user where login=:login and mdp=:mdp;";
            $donnees = array(":login"=>$login,":mdp"=>$mdp);
            $select = $this->unPdo->prepare($requete);
            $select->execute($donnees);
            $resultat = $select->fetch();
            return $resultat;
        }
    }
	public function selectuser()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from user where :role = role;";
            $donnees = array(":role"=>'ROLE_USER');                    
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute($donnees);
            // extraction des données
            $result = $select->fetchAll();
            return $result;
        }
    }
    
    public function verifConPart($accronyme, $mdp)
    {
        if($this->unPdo!=null)
        {
            $requete ="select * from partenaire where accronyme=:accronyme and mdp=:mdp;";
            $donnees = array(":accronyme"=>$accronyme,":mdp"=>$mdp);
            $select = $this->unPdo->prepare($requete);
            $select->execute($donnees);
            $resultat = $select->fetch();
            return $resultat;
        }
    }
/*
    Insert
*/
public function insert($table, array $tab)
 {
    if ($this->unPdo == null)
     {
        return;
     }
    //Template
    $insert_format = 'insert into %s (%s) values (%s)';
    //rendre ces variables en tableau
    $colonnes = $parametres = $valeurs = [];
    //Remplire les champs
    foreach ($tab as $colonne => $valeur)
    {
        $parametre = ':' . $colonne;
        //echo $colonne ;
        $colonnes[] = $colonne;
        $parametres[] = $parametre;
        $valeurs[$parametre] = $valeur;
    }
    //ordonner 
    $sql = sprintf(
            $insert_format,
            $table,
            implode($colonnes, ', '),
            implode($parametres, ', '));
            $statement = $this->unPdo->prepare($sql);
            $statement->execute($valeurs);
           // echo $sql;
           //var_dump( $valeurs);
}
/*
    Delete
*/
public function delete($table, array $tab)
{
    if ($this->unPdo == null)
    {
        return;
    }
    $delete_format = 'delete from %s where (%s) = (%s)';
    $colonnes = $parametres = $valeurs = [];
    foreach ($tab as $colonne => $valeur)
    {
        $parametre = ':' . $colonne;
        //echo $colonne ;
        $colonnes[] = $colonne;
        $parametres[] = $parametre;
        $valeurs[$parametre] = $valeur;
    }
    $sql = sprintf(
            $delete_format,
            $table,
            implode($colonnes, ', '),
            implode($parametres, ', '));
    //echo $sql;
    $statement = $this->unPdo->prepare($sql);
    $statement->execute($valeurs);
}
/*
    Updaute
*/
public function update($table, array $tab, array $id)
{
    if ($this->unPdo == null)
    {
        return;
    }
    $update_format = 'update %s set (%s) = (%s) where %s = %s';
    $colonnes = $parametres = $valeurs = [];
    foreach ($tab as $colonne => $valeur)
    {
        $parametre = ':' . $colonne;
        //echo $colonne ;
        $colonnes[] = $colonne;
        $parametres[] = $parametre;
        $valeurs[$parametre] = $valeur;
    }
    $sql = sprintf(
            $update_format,
            $table,
            implode($colonnes, ', '),
            implode($parametres, ', '),
            $id);
    //echo $sql;
    $statement = $this->unPdo->prepare($sql);
    $statement->execute($valeurs);
}
public function selectEvent()
{
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from Select_event;";
          
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $test = $select->execute();
          //  var_dump($test);
            // extraction des données
            $result = $select->fetchAll();
           
            return $result;
            
            
        }
    }
    public function selectProduit()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from Select_produit;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
        }
    }
    
     public function selectLieu()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from Select_lieu;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function selectInscrire()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from inscrire;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
	
	public function selectFilm()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from film;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
	public function selectSerie()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from serie;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
	public function selectInscrireid()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select id_event, id_personne from inscrire;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function selectPromos()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from Select_promos;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function countProduit1()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select count(*) as nb_produit from produit where id_partenaire = 5";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function countProduit2()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select count(*) as nb_produit from produit where id_partenaire = 6";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    public function countProduit3()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select count(*) as nb_produit from produit where id_partenaire = 31";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
            
        }
    }
    
    
    public function selectPartenaire()
{
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from Select_partenaire";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            //var_dump($result);
            return $result;
        
        }
    }
    public function selectAttribut()
    {
        if ($this->unPdo != null) {
                // selection de toutes les données
                $requete = "SELECT * from attribut where designation = 'poids' and id_telephone = 1;";
                // preparation de la requete avant execution
                // $donnees = array(":telephone"=>$_SESSION['id_telephone']);
                $select = $this->unPdo->prepare($requete);
                // exection de la requete
                $select->execute();
                // extraction des données
                $result = $select->fetchAll();
                return $result;
            }
        }
        public function selectAttribut1()
        {
            if ($this->unPdo != null) {
                    // selection de toutes les données
                    $requete = "SELECT * from attribut where designation = 'taille ecran' and id_telephone = 1;";
                    // preparation de la requete avant execution
                    // $donnees = array(":telephone"=>$_SESSION['id_telephone']);
                    $select = $this->unPdo->prepare($requete);
                    // exection de la requete
                    $select->execute();
                    // extraction des données
                    $result = $select->fetchAll();
                    return $result;
                }
            }
            public function selectAttribut2()
            {
                if ($this->unPdo != null) {
                        // selection de toutes les données
                        $requete = "SELECT * from attribut where designation = 'couleur' and id_telephone = 1;";
                        // preparation de la requete avant execution
                        // $donnees = array(":telephone"=>$_SESSION['id_telephone']);
                        $select = $this->unPdo->prepare($requete);
                        // exection de la requete
                        $select->execute();
                        // extraction des données
                        $result = $select->fetchAll();
                        return $result;
                    }
                }
                public function select_Classement($idevent)
                {
                    if ($this->unPdo != null) {
                            // selection de toutes les données
                            $requete = "SELECT * from select_classement where id_event = $idevent;";
                            // preparation de la requete avant execution
                            // $donnees = array(":telephone"=>$_SESSION['id_telephone']);
                            $select = $this->unPdo->prepare($requete);
                            // exection de la requete
                            $select->execute();
                            // extraction des données
                            $result = $select->fetchAll();
                            return $result;
                           
                        }
                    }
				public function selectlastPersonneid()
            {
                if ($this->unPdo != null) {
                        // selection de toutes les données
                        $requete = "select id_personne
						from
						  personne
						order by
						  id_personne DESC
						Limit 1;";
                        // preparation de la requete avant execution
                        // $donnees = array(":telephone"=>$_SESSION['id_telephone']);
                        $select = $this->unPdo->prepare($requete);
                        // exection de la requete
                        $select->execute();
                        // extraction des données
                        $result = $select->fetchAll();
                        return $result;
                    }
                }
                public function insertNote($tab)
                {
                   if($this->unPdo!=null)
                   {
                       $requete ="insert into note values(null, :auteur, :score, :commentaire, :id_personne, :id_telephone)";
                       $donnees = array(":auteur"=>$_SESSION['prenom'],":score"=>$tab['score'],":commentaire"=>$tab['commentaire'],":id_personne"=>$_SESSION['id_personne'],":id_telephone"=>$tab['id_telephone']);
                       $insert = $this->unPdo->prepare($requete);
                       $insert->execute($donnees);
                   } 
                }
                
            
            public function selectNote($id_produit)
            {
                if($this->unPdo != null)
                {
                    $requete = "select * from Select_note where id_telephone = :id_telephone;";
                    $donnees = array(":id_telephone"=>$id_produit);                    
                    $select = $this->unPdo->prepare($requete);
                    $select->execute($donnees);
                    $resultat = $select->fetchAll();
                    return $resultat;
                }
            }
    public function selectTicket()
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from Select_ticket;";
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute();
            // extraction des données
            $result = $select->fetchAll();
            return $result;
        }
    }
    public function selectTicketSup($id_partenaire)
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from ticket where :id_partenaire = id_partenaire;";
            $donnees = array(":id_partenaire"=>$id_partenaire);                    
            // preparation de la requete avant execution
            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute($donnees);
            // extraction des données
            $result = $select->fetchAll();
            return $result;
        }
    }
    public function selectCategorie($id_event)
    {
    if ($this->unPdo != null) {
            // selection de toutes les données
            $requete = "select * from event where id_event = :id_event;";              
            // preparation de la requete avant execution
            $donnees = array(":id_event"=>$id_event);   

            $select = $this->unPdo->prepare($requete);
            // exection de la requete
            $select->execute($donnees);
            // extraction des données
            $result = $select->fetchAll();
            return $result;
        }
    }
    public function updateNote($tab, $id_note)
{
    if($this->unPdo!=null)
    {
            $requete ="update note set score = :score, commentaire = :commentaire where id_note = :id_note;";
            $donnees = array(":score"=>$tab['score'],":commentaire"=>$tab['commentaire'],":id_note"=>$id_note);
            $insert = $this->unPdo->prepare($requete);
            $insert->execute($donnees);
            
    }
}
}
?>