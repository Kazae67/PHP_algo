<?php

class Personne { //class
    private string $nom;
    private string $prenom;
    private DateTime $birthdate;
    private int $age;

// CONSTRUCT
    public function __construct(string $nom, string $prenom, string $birthdate){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->birthdate = new DateTime($birthdate);
        $this->age = $this->calculAge();

    }
// GET
    public function getNom(){
        return $this->nom;   
    }
    public function getPrenom(){
        return $this->prenom;
    }

    public function getAge(){
        return $this->age;
    }

    public function getBirthdate(){
        return $this->birthdate->format('Y/m/d');
    }
// FUNCTION PRIVATE
    private function calculAge(){
        $date = new DateTime(date('Y/m/d H:i:s')); // date actuelle
        $diff = $this->birthdate->diff($date);
        return $diff->y;
    }

// SET
    public function setNom($NewName){
        $this->nom = $NewName;
    }
    public function setPrenom($NewPrenom){
        $this->prenom = $NewPrenom;
    }
    public function setBirthdate($NewBirthdate){
        $this->birthdate = new DateTime($NewBirthdate);
    }
}

