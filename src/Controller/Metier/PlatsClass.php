<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PlatsClass
 *
 * @author ahe
 */
class PlatsClass {
    //put your code here
    
    private $id;
    private $nom;
    private $description;
    private $prix;
    private $categorie;
    private $rupture; 
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getDescription() {
        return $this->description;
    }

    function getPrix() {
        return $this->prix;
    }

    function getCategorie() {
        return $this->categorie;
    }

    function getRupture() {
        return $this->rupture;
    }


    function setId($id): void {
        $this->id = $id;
    }

    function setNom($nom): void {
        $this->nom = $nom;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

    function setPrix($prix): void {
        $this->prix = $prix;
    }

    function setCategorie($categorie): void {
        $this->categorie = $categorie;
    }

    function setRupture($rupture): void {
        $this->rupture = $rupture;
    }


}
