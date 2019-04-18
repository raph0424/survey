Drop database if exists event;
Create database event;
	Use event;


#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: personne
#------------------------------------------------------------

CREATE TABLE personne(
        id_personne    Int NOT NULL auto_increment,
        nom            Varchar (50) NOT NULL ,
        prenom         Varchar (50) NOT NULL ,
        email          Varchar (50) NOT NULL ,
        mdp            Varchar (50) NOT NULL ,
        telephone      Int NOT NULL ,
        date_naissance Date NOT NULL ,
        adresse        Varchar (50) NOT NULL ,
        code_postal    Int NOT NULL ,
        role           Varchar (50) NOT NULL
	,CONSTRAINT personne_PK PRIMARY KEY (id_personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: lieu
#------------------------------------------------------------

CREATE TABLE lieu(
        id_lieu     Int NOT NULL auto_increment,
        designation Varchar (50) NOT NULL ,
        adresse     Varchar (50) NOT NULL ,
        code_postal Int NOT NULL
	,CONSTRAINT lieu_PK PRIMARY KEY (id_lieu)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: event
#------------------------------------------------------------

CREATE TABLE event(
        id_event    Int  Auto_increment  NOT NULL ,
        designation Varchar (50) NOT NULL ,
        tarif       Int NOT NULL ,
        nbplaces    Int NOT NULL ,
        date_event  Date NOT NULL ,
        horaires    Varchar (50) NOT NULL ,
        description Varchar (50) NOT NULL ,
        categorie enum ("event 1","event 2","event3", "event 4", "event 5")NOT NULL,
		valid boolean NOT NULL,
        id_lieu     Int NOT NULL
	,CONSTRAINT event_PK PRIMARY KEY (id_event)

	,CONSTRAINT event_lieu_FK FOREIGN KEY (id_lieu) REFERENCES lieu(id_lieu)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: partenaire
#------------------------------------------------------------

CREATE TABLE partenaire(
        id_partenaire Int auto_increment NOT NULL ,
        accronyme     Varchar (50) NOT NULL ,
        nom_marque    Varchar (50) NOT NULL ,
        date_debut    Date NOT NULL ,
        adresse       Varchar (500) NOT NULL
	,CONSTRAINT partenaire_PK PRIMARY KEY (id_partenaire)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: produit
#------------------------------------------------------------

CREATE TABLE produit(
        id_telephone  Int auto_increment NOT NULL ,
        designation   Varchar (50) NOT NULL ,
        date_sortie   Date NOT NULL ,
        id_partenaire Int NOT NULL
	,CONSTRAINT produit_PK PRIMARY KEY (id_telephone)

	,CONSTRAINT produit_partenaire_FK FOREIGN KEY (id_partenaire) REFERENCES partenaire(id_partenaire)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ticket
#------------------------------------------------------------

CREATE TABLE ticket(
        id_ticket     Int auto_increment NOT NULL ,
        objet         Varchar (50) NOT NULL ,
        date          Date NOT NULL ,
        contenu       Varchar (50) NOT NULL ,
        id_personne   Int NOT NULL ,
        id_partenaire Int NOT NULL
	,CONSTRAINT ticket_PK PRIMARY KEY (id_ticket)

	,CONSTRAINT ticket_personne_FK FOREIGN KEY (id_personne) REFERENCES personne(id_personne)
	,CONSTRAINT ticket_partenaire0_FK FOREIGN KEY (id_partenaire) REFERENCES partenaire(id_partenaire)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Attribut
#------------------------------------------------------------

CREATE TABLE attribut(
        idattribut   Int  Auto_increment  NOT NULL ,
        designation  Varchar (50) NOT NULL ,
        valeur       Varchar (50) NOT NULL ,
        id_telephone Int NOT NULL
	,CONSTRAINT Attribut_PK PRIMARY KEY (idattribut)

	,CONSTRAINT Attribut_produit_FK FOREIGN KEY (id_telephone) REFERENCES produit(id_telephone)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: note
#------------------------------------------------------------

CREATE TABLE note(
        id_note     Int auto_increment NOT NULL ,
        score       Int NOT NULL ,
        comentaire  Varchar (50) NOT NULL ,
        id_personne Int NOT NULL ,
        idattribut  Int NOT NULL
	,CONSTRAINT note_PK PRIMARY KEY (id_note)

	,CONSTRAINT note_personne_FK FOREIGN KEY (id_personne) REFERENCES personne(id_personne)
	,CONSTRAINT note_Attribut0_FK FOREIGN KEY (idattribut) REFERENCES Attribut(idattribut)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: inscrire
#------------------------------------------------------------

CREATE TABLE inscrire(
        id_event         Int NOT NULL ,
        id_personne      Int NOT NULL ,
        date_inscription Date NOT NULL ,
        qualite          Varchar (50) NOT NULL
	,CONSTRAINT inscrire_PK PRIMARY KEY (id_event,id_personne)

	,CONSTRAINT inscrire_event_FK FOREIGN KEY (id_event) REFERENCES event(id_event)
	,CONSTRAINT inscrire_personne0_FK FOREIGN KEY (id_personne) REFERENCES personne(id_personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: soumettre
#------------------------------------------------------------

CREATE TABLE soumettre(
        id_partenaire   Int NOT NULL ,
        id_personne     Int NOT NULL ,
        id_event        Int NOT NULL ,
        date_demande    Date NOT NULL ,
		date_validation Date NOT NULL,
		decision Boolean NOT NULL
		,CONSTRAINT soumettre_PK PRIMARY KEY (id_partenaire, id_personne, id_event)
		
		,CONSTRAINT soumettre_partenaire_FK FOREIGN KEY (id_partenaire) REFERENCES partenaire(id_partenaire)
		,CONSTRAINT soumettre_personne_FK FOREIGN KEY (id_personne) REFERENCES personne(id_personne)
		,CONSTRAINT soumettre_event_FK FOREIGN KEY (id_event) REFERENCES event(id_event)
		)ENGINE=InnoDB;



CREATE TABLE participer(
		id_event Int NOT NULL ,
		id_telephone Int NOT NULL
				
		,CONSTRAINT participer_PK PRIMARY KEY (id_event, id_telephone)
		,CONSTRAINT participer_event_FK FOREIGN KEY (id_event) REFERENCES event(id_event)
		,CONSTRAINT participer_telephone_FK FOREIGN KEY (id_telephone) REFERENCES produit(id_telephone)

		)ENGINE=InnoDB;
		
		insert into personne values (null, "Admin", "Orange", "adminorange@orange.fr", "123456",
		"0612345678", "1989-05-05", "5 rue du temple", "75006", "ROLE_ADMIN"), (null, "Dupont", "Julie", "Dup.J22@gmail.com", "123456", "0613432345", "1988-06-07",
		"6 Avenue Charle de gaulle", "75017", "ROLE_USER") ;
		insert into lieu values(null, "Salle 1", "5 Boulevard Saint Honoré", "75008"), (null, "Salle 2", "5 Rue de Hongrie", "43210");
		insert into event values (null, "Event Samsung S10", 15, 150, "2019-05-05", "20h - 23h", "L'event Samsung du 05 mai présentera pour la première fois en france le nouveau smartphone : samsung s10, 
		le public pourras tester ce nouveau produit en exclusivité et bénéficier de remise lors de précommande qui seront disponible dès la fin de l'évènement", "event 1",1, 1),
		(null, "Event Huawei P22", 10, 100, "2019-06-06", "21h - 23h", "L'event HUAWEI du 06 juin présentera pour la première fois en france le nouveau smartphone :  Huawei P22, 
		le public pourras tester ce nouveau produit en exclusivité et bénéficier de remise lors de précommande qui seront disponible dès la fin de l'évènement", "event 2",1, 2);
		insert into partenaire values (null, "SSG","Samsung","2019-02-12", "44 Avenue des Champs Elysee"), (null, "HW", "Huawei", "2019-03-14", "5 rue des Lilas") ;
		insert into produit values (null, "S10", "2019-05-06", 1), (null, "P22", "2019-06-07", 2);
		insert into ticket values (null, "Impossible de s'inscrire à l'event", "2019-04-12", "Bonjour, je suis dans l'impossibilité de m'inscrire à l'évènement,
		je ne peux pas réserver ma place", 2, 1);
		insert into attribut values (null, "taille ecran", "6,1 pouces", 1), (null, "couleur", "Noir", 1), (null, "taille ecran", "5.7 pouces", 2), (null, "couleur", "Blanc", 2);
		insert into note values (null, 4, "ecran un peu trop grand mais bonne qualité", 2, 1), (null, 3, "Je préfèrerais ce téléphone en blanc", 2, 2);
		insert into inscrire values (1, 2, "2019-04-12", "influenceur");
		insert into soumettre values (1, 1, 1, "2019-04-11", "2019-04-12", 1), (2, 1, 2, "2019-04-10", "2019-04-12", 1);
		insert into participer values (1, 1), (2, 2);
		
		
