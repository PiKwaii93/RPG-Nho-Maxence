<?php

class Maison{
    private $fenetre;
    protected $porte;
    public $piece;


    public function ouvrirFenetre(){
        echo "Fenetre ouverte";
    }

    protected function ouvrirPorte(){
        echo "Porte ouverte";
    }

    private function compterPieces(){
        echo "Il y a quelques pièces";
    }


}


$maisonDeMichel = new Maison();
$maisonDeAnnie = new Maison();


$maisonDeMichel->ouvrirFenetre();

?>