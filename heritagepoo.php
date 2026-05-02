<?php
class Personne{
    static $compteur=0;
    protected $numero;
    protected $nom; 
    protected $prenom;
    protected $age;
    function __construct($n,$nom,$pre,$a)
    {
        self:: $compteur=0;
        $this->numero = $n; 
        $this->nom = $nom; 
        $this->prenom = $prenom; 
        $this->age = $a; 
    }
    function getNom(){
        return $this->nom;
    }   
    function setNom($d){
        $this->prenom=$d;
    }
    function Age(){
        return  $this->age>18?"majeur":"mineur";
    }
    function __tostring(){
        return "<p>Numero : ".$this->numero."Nom :".$this->nom."Prenom : ".$this->prenom."Age :".$this->age;
    }
}

// un stagiaire est une personne qui a en plus filiere
//et note examen
//creer
class Stagiaire extends Personne{
    private $filiere;
    private $note;
    function __construct($nom,$pre,$a,$fil,$note)
    {
        parent::__construct($nom,$pre,$a);
        $this->filiere=$fil;
        $this->note=$note;

    }

    function __tostring(){
        $str=parent::__tostring();
        $str.="<p>Filiere : ".$this->filiere."Note :".$this->note;
        return str;
    }
}
?>