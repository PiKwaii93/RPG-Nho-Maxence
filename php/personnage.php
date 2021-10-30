<?php

include "Mage.php";
include "Guerrier.php";

abstract class Personnage
{
    private string $role;
    private string $nom;
    private int $pv;
    private int $force;
    private int $defense;
    private bool $statut;

    public function __construct(string $role, string $nom, int $pv, int $force, int $defense, bool $statut)
    {
        $this->role = $role;
        $this->nom = $nom;
        $this->pv = $pv;
        $this->force = $force;
        $this->defense = $defense;
        $this->statut = $statut;
    }

    public function afficheRole(){
        echo($this->role);
        echo("<br>");
    }

    public function afficheNom(){
        echo($this->nom);
        echo("<br>");
    }

    public function affichePv(){
        echo($this->pv);
        echo("<br>");
    }
    public function afficheForce(){
        echo($this->force);
        echo("<br>");
    }
    public function afficheDefense(){
        echo($this->defense);
        echo("<br>");
    }
    public function afficheStatut(){
        if($this->statut==0){
            echo("Vous êtes réveillé");
            echo("<br>");
        }elseif($this->statut==1){
            echo("Vous êtes endormi");
            echo("<br>");
        }
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




    public function setRole($role){
        $this->role = $newRole;
    }

    public function setNom($newNom){
        $this->nom = $newNom;
    }

    public function setPv($newPv){
        $this->pv = $newPv;
    }

    public function setForce($newForce){
        $this->force = $newForce;
    }
    
    public function setDefense($newDefense){
        $this->defense = $newDefense;
    }

    public function setStatut($newStatut){
        $this->statut = $newStatut;
    }
    

    public function attaque($perso): void{
        if($this->getStatut() == false){
            $newPv = $perso->getPv() - ($this->getForce() - $perso->getDefense());
            if ($newPv > $perso->getPv()) {
                return;
            }
            $perso->setPv($newPv);
            $perso->affichePv();
        }else{
            echo("Vous ne pouvez pas attaquer car vous dormez");
            return;
        }
    }


}



?>
