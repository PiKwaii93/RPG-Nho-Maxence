<?php

class Mage extends Personnage{

    public function __construct(string $nom){
        $this->role = "Mage";
        $this->nom = $nom;
        $this->pv = 100;
        $this->force = rand(5,10);
        $this->defense = 0;
        $this->statut = 0;        
    }

    public function endors($perso):void {
        $perso->statut = TRUE;
        $pdo->query("UPDATE `RPG`.`Personnages` SET time=NOW() WHERE `id` = $perso->id");
    }
    
    public function getRole(){
        return($this->role);
    }

    public function getNom(){
        return($this->nom);
    }

    public function getPv(){
        return($this->pv);
    }
    public function getForce(){
        return($this->force);
    }
    public function getDefense(){
        return($this->defense);
    }
    public function getStatut(){
        return($this->statut);
    }

}




?>