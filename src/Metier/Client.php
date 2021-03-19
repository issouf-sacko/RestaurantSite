<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author ahe
 */

namespace App\Metier;
class Client {
    //put your code here
    
    private $id;
    private $nom;
    private $prenom;
    private $addresse;
    private $codePostal;
    private $ville;
    private $email; 
    private $telephone;
    private $motDePasse;
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAddresse() {
        return $this->addresse;
    }

    function getCodePostal() {
        return $this->codePostal;
    }

    function getVille() {
        return $this->ville;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getMotDePasse() {
        return $this->motDePasse;
    }


    function setId($id): void {
        $this->id = $id;
    }

    function setNom($nom): void {
        $this->nom = $nom;
    }

    function setPrenom($prenom): void {
        $this->prenom = $prenom;
    }

    function setAddresse($addresse): void {
        $this->addresse = $addresse;
    }

    function setCodePostal($codePostal): void {
        $this->codePostal = $codePostal;
    }

    function setVille($ville): void {
        $this->ville = $ville;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setTelephone($telephone): void {
        $this->telephone = $telephone;
    }

    function setMotDePasse($motDePasse): void {
        $this->motDePasse = $motDePasse;
    }



}
