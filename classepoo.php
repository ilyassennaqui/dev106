<?php
class Personne{
    
    private $numero;
    private $nom; 
    private $prenom;
    private $age;
    function __construct($n,$nom,$pre,$a)
    {

        this->numero = $n; 
        this->nom = $nom; 
        this->prenom = $prenom; 
        this->age = $a; 
    }
    function getNom(){
        return $this->nom;
    }
    function setNom($d){
        $this->prenom=$d;
    }
    function Age(){
        return $this->age if $this->age?"majeur":"mineur";
    }
    function __tostring(){
        return "<p>Numero : ".$this->numero.
        "Nom :".$this->nom."Prenom : ".$this->prenom
        ."Age :".$this->age;
    }
}



?>