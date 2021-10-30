<?php


class Guerrier extends Personnage{

    public function __construct(string $nom){
        $this->role = "Guerrier";
        $this->nom = $nom;
        $this->pv = 100;
        $this->force = rand(20,40);
        $this->defense = rand(10,19);
        $this->statut = 0;        
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