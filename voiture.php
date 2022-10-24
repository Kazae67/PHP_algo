<?php

    // Class 🏠🧔👩
    class Voiture {
        protected string $marque;
        protected string $modele;
        protected int $nbPortes;
        protected int $vitesseActuelle;
        protected bool $statut;

        // Construt 🔒
        public function __construct(string $marque, string $modele, int $nbPortes){
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
            $this->vitesseActuelle = 0;
            $this->statut = false;
        }

        // Getters 🔑
        public function getMarque():string{
            return $this->marque;
        }
        public function getModele():string{
            return $this->modele;
        }
        public function getNbPortes():int{
            return $this->nbPortes;
        }
        public function getVitesseActuelle():int{
            return $this->vitesseActuelle;
        }
        public function getStatut(){
            return $this->statut ? "démarré" : "stoppé";
        }

        // Setters ⚙️
        public function setMarque(string $marque){
            $this->marque = $marque;
            return $this->marque;
        }
        public function setModele(string $modele){
            $this->modele = $modele;
            return $this->modele;
        }
        public function setNbPortes(int $nbPortes){
            $this->nbPortes = $nbPortes;
            return $this->nbPortes;
        }
        public function setVitesseACtuelle(int $vitesseActuelle){
            $this->vitesseActuelle = $vitesseActuelle;
            return $this->vitesseActuelle;
        }
        public function setStatut(bool $statut){
            $this->statut = $statut;
            return $this->statut;
        }

        // Démarrer ✔
        public function getDemarrer() {
            if($this->statut) {
                echo "Le véhicule ($this->marque) est déjà démarré <br>";
            } else {
                $this->statut = true;
                echo "Le véhicule [".$this->marque." ".$this->modele."]: démarre <br>";
            }
        }

        // Démarrer 2 ✔ 
        public function getDemarrer2() {
            if($this->statut) {
                echo "";
            } else {
                $this->statut = true;
                echo "";
            }
        }

        // Stopper ⚠
        public function getStopper() {
            if($this->statut == false) {
                echo "Le véhicule ($this->marque) est déjà stoppé <br>";
            } else {
                $this->statut = false;
                $this->vitesseActuelle = 0;
                echo "Le véhicule [".$this->marque." ".$this->modele."]: est stoppé <br>";
            }
        }

        // Stopper 2 ⚠
        public function getStopper2() {
            if($this->statut == false) {
                echo "";
            } else {
                $this->statut = false;
                $this->vitesseActuelle = 0;
                echo "";
            }
        }
        
        // Accélérer 🚗💨
        public function setAccelerer(int $vitesseActuelle) {
            if($this->statut) {
                $this->vitesseActuelle += $vitesseActuelle;
                echo "Le véhicule [$this->marque ".$this->modele."]: accélère de $vitesseActuelle km / h<br>";
            } else {
                echo "Pour accélérer, il faut démarrer le véhicule [".$this->marque." ".$this->modele."] !<br>";
            }
        }

        // Accélérer 2 🚗💨
        public function setAccelerer2(int $vitesseActuelle) {
            if($this->statut) {
                $this->vitesseActuelle += $vitesseActuelle;
                echo "Le véhicule [$this->marque ".$this->modele."]: veut accélerer de $vitesseActuelle <br>";
            } else {
                echo "Pour accélérer, il faut démarrer le véhicule [" . $this->marque. " " .$this->modele."] !<br>";
            }
        }

        // Accélérer 3 🚗💨
        public function setAccelerer3(int $vitesseActuelle) {
            if($this->statut) {
                $this->vitesseActuelle += $vitesseActuelle;
                echo "La vitesse du véhucule [$this->marque ".$this->modele."] est de : $vitesseActuelle km / h <br>";
            } else {
                echo "Pour accélérer, il faut démarrer le véhicule [" . $this->marque. " " .$this->modele."] !<br>";
            }
        }

        // Voiture 1 (Peugeot 408) 
        public function getV1() {
            return "INFOS VÉHICULE 1 <br> ********************<br>
                    Nom et modèle du véhicule : " . $this->marque." ".$this->modele . "<br>
                    Nombre de portes : $this->nbPortes <br>
                    Le véhicule " .$this->marque." ".$this->modele." est : ".$this->getStatut()."<br>
                    Sa vitesse actuelle est de : $this->vitesseActuelle km / h<br>";
        }

        // Voiture 2 (Citroën C4) 
        public function getV2(){
            return "INFOS VÉHICULE 2 <br> ********************<br>
                    Nom et modèle du véhicule : " . $this->marque." ".$this->modele . "<br>
                    Nombre de portes : $this->nbPortes <br>
                    Le véhicule $this est : ".$this->getStatut()."<br>
                    Sa vitesse actuelle est de : $this->vitesseActuelle km / h<br>";
        }

        // CONVERTIR EN STRING 📜
        public function __toString()
        {
            return $this->marque." ".$this->modele;
        }

        // getInfos
        public function getInfos(){
            return "Nom et modèle du véhicule : [".$this->marque." ".$this->modele."]<br>";
        }

    }

    // Héritage Voiture -> VoitureElec 🏠👨‍👩‍👦
    Class VoitureElec extends Voiture{
        protected int $autonomie;

        // Construct 🔒
        public function __construct(string $marque, string $modele, int $autonomie){
            parent::__construct($marque, $modele, $autonomie);
            $this->autonomie = $autonomie;  
        }

        // Getters 🔑
        public function getAutonomie():int{
            return $this->autonomie;
        }

        // Setters ⚙️
        public function setAutonomie(int $autonomie){
            $this->autonomie = $autonomie;
            return $this->autonomie;
        }

        // getInfos
        public function getInfos() {
            return parent::getInfos()."L'autonomie : [".$this->autonomie."]<br><br>";
        }
    }

?>