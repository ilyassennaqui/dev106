<?php
class Personne{
    static $compt=1;
    private $numero;
    private $nom; 
    private $prenom;
    private $age;
    function __construct($nom,$pre,$a)
    {

        this->numero = Personne::$compt;  // self::$compteur=1;
        this->nom = $nom; 
        this->prenom = $prenom; 
        this->age = $a; 
        Personne::$compt++;
    }
    function getNom(){
        return $this->nom;
    }
    function setNom($d){
        $this->prenom=$d;
    }
    function Age(){
        return this->age if $this->age?"majeur":"mineur";
    }
    function __tostring(){
        return "<p>Numero : ".$this->numero."Nom :".$this->nom."Prenom : ".$this->prenom."Age :".$this->age;
    }
}
?>