# RestaurantSite
#   Database 
DROP DATABASE IF EXISTS restaurant;

CREATE DATABASE IF NOT EXISTS restaurant;
USE restaurant;
# -------------------- TABLE : USERs---------------------------------------------------------

CREATE TABLE IF NOT EXISTS users
 (
   id_user Int NOT NULL  AUTO_INCREMENT ,
   nomUtilisateur varchar(50) NULL UNIQUE  ,
   motDePasse varchar(50) NULL  ,
   role varchar(50) NULL  
   , PRIMARY KEY (id_user) 
 ) ENGINE=INNODB;

# ------------------- TABLE : PERSONNE --

CREATE TABLE IF NOT EXISTS personne
 (
   id_Pers Int PRIMARY KEY NOT NULL AUTO_INCREMENT ,
   nom Varchar(50) NOT NULL  ,
   prenom varchar(50) NOT NULL  ,
   email varchar(50) NULL  
 ) ENGINE=INNODB;


# ------------ TABLE : ADMIN --

CREATE TABLE IF NOT EXISTS admin
 (
   id_Pers Int  PRIMARY KEY  NOT NULL  ,
   nomUser Varchar(50) NULL 
 ) ENGINE=INNODB;


# -------------------------------- TABLE : CLIENT ---

CREATE TABLE IF NOT EXISTS client
 (
   id_Pers Int PRIMARY KEY  NOT NULL  ,
   adresse varchar(50) Not NULL
 ) ENGINE=INNODB;



# ------------      TABLE : RESERVATION 

CREATE TABLE IF NOT EXISTS reservation
 (
   idReserv Int PRIMARY KEY  NOT NULL  ,
   idClient Int NOT NULL  ,
   dateReserv Date Not NULL  ,
   nbCouvert Int not null,
   heureArrive time Not Null
 ) ENGINE=INNODB;

#---------  INDEX DE LA TABLE RESERVATION 
CREATE  INDEX I_FK_RESERVATION_client
     ON reservation (idClient ASC);

# ---------------- TABLE : PRODUIT 

CREATE TABLE IF NOT EXISTS produit
 (
   idProd Int PRIMARY KEY AUTO_INCREMENT NOT NULL  ,
   libelle Varchar(50) NULL  ,
   photo Varchar(255) NULL  
 ) ENGINE=INNODB;


#   ---------------------    TABLE : CATEGORIE  
CREATE TABLE IF NOT EXISTS categorie
 (
   idCat Int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT ,
   libelle varchar(50) Not NULL 
 )ENGINE=INNODB;

#-------------------------------- TABLE : PLAT-
CREATE TABLE IF NOT EXISTS plat
 (
   idProd Int PRIMARY KEY  NOT NULL  ,
   idCat Int(11) NOT NULL  ,
   description varchar(255) NULL 
 ) ENGINE=INNODB;

#   ------------- INDEX DE LA TABLE PLAT ----
CREATE  INDEX I_FK_PLAT_categorie
     ON plat (idCat ASC);

#   ---------------------    TABLE : type  ---
CREATE TABLE IF NOT EXISTS categorie
 (
   idType Int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT ,
   libelle varchar(50) Not NULL 
 )ENGINE=INNODB;


# ----------------------- TABLE : boisson --
CREATE TABLE IF NOT EXISTS boisson
 (
   idProd Int PRIMARY KEY NOT NULL ,
   quantite Varchar(15) NULL  ,
   idType Int(11)  null   ,
   PRIX DOUBLE not NULL 
 ) ENGINE=INNODB;
#   ---------------------------- INDEX DE LA TABLE boisson 
CREATE  INDEX I_FK_boisson_type
     ON boisson (idType ASC);



# -----------------------  TABLE : COMMANDE --
CREATE TABLE IF NOT EXISTS commande
 (
   idCmd Int PRIMARY KEY NOT NULL AUTO_INCREMENT ,
   id_Client Int NOT NULL  ,
   dateCmd Date Not null
 ) ENGINE=INNODB;
#------ Index Commande
CREATE  INDEX I_FK_commande_client
     ON commande (id_Client ASC);

# --------------------- TABLE : ProduitCOMMANDE  --
CREATE TABLE IF NOT EXISTS produitCommande
 (
   idProd  Int  Not Null,
   idCmd Int NOT NULL  ,
   quantite Int NULL
 ) ENGINE=INNODB;

# ----------------   INDEX DE LA TABLE produitcommande 

CREATE  INDEX I_FK_PRODUITCOMMANDE_PRODUIT
     ON produitCommande (idProd ASC);

CREATE  INDEX I_FK_produitCommande_commande
     ON produitCommande (idCmd ASC);


# -----------  Clé étrangères des tables ----
ALTER TABLE commande 
  ADD FOREIGN KEY FK_commande_client (id_Client)
      REFERENCES client (id_Pers) ON DELETE CASCADE 
      ON UPDATE CASCADE ;

ALTER TABLE boisson 
  ADD FOREIGN KEY FK_boisson_produit (idProd)
      REFERENCES produit (idProd) ON DELETE CASCADE 
      ON UPDATE CASCADE,

ALTER TABLE admin 
  ADD FOREIGN KEY FK_admin_personne (id_Pers)
      REFERENCES personne (id_Pers) ON DELETE CASCADE 
      ON UPDATE CASCADE ;


ALTER TABLE plat 
  ADD FOREIGN KEY FK_plat_categorie (idCat)
      REFERENCES categorie (idCat) ON DELETE CASCADE 
      ON UPDATE CASCADE ,
  ADD FOREIGN KEY FK_plat_produit (idProd)
      REFERENCES produit (idProd) ON DELETE CASCADE 
      ON UPDATE CASCADE ;


ALTER TABLE client 
  ADD FOREIGN KEY FK_client_personne (id_Pers)
      REFERENCES personne (id_Pers) ON DELETE CASCADE 
      ON UPDATE CASCADE ;


ALTER TABLE reservation 
  ADD FOREIGN KEY FK_reservation_client (idClient)
      REFERENCES client (id_Pers) ON DELETE CASCADE 
      ON UPDATE CASCADE ;


ALTER TABLE produitCommande 
  ADD FOREIGN KEY FK_produitCommande_produit (idProd)
      REFERENCES produit (idProd),
  ADD CONSTRAINT Pk_ProduitCommande  PRIMARY KEY (idProd,idCmd),
  
  ADD FOREIGN KEY FK_produitCommande_commande (idCmd)
      REFERENCES commande (idCmd) ON DELETE CASCADE 
      ON UPDATE CASCADE ;
      
 




