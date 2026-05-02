<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    //telecharger xamp 
    // cliquer sur le boutton start qui est devant le port apach
    // apres cliquer sur explorer 
    //apres tu cherche un fichier s'appelle htdocs
    // apres tu creer un fichier dedans de htdocs 
    // moi j'ai le nomme dev106 
    //apres tu selectionne dev106 dans vscode 
    // apres tu peut creer des fichiers de type php

    ?>


    <?php
    // dans un fichier php on ecrit aussi la partie html 
    // on peut utiliser la balise ou on ecrit la patie php 
    // different fois et dans different endroit
    // ici on ecrit
    ?>

    <?php
    // ou bien ici on ecrit
     // noter birn que quand on veut executer un fichier on ne fait pas live server
     // 1er etape: aller a un browser (Brave,...)
     // 2eme etape : Ecrire localhost/dev106/exercice3.php
     //dev 106 est le nom de folder
     // exercice3.php est le nom de fichier 
     
    ?>
   
<?php
// ICI ou s'ecrit le code PHP 
// Afficher un message 
echo "Bonjour tout le monde";
echo "<h1>Bonjour tout le monde </h1>";
echo "<br>"; // chaque unstruction doit être terminée par ;
echo"<ul>";
echo"<li>Python</li>";
echo"<li>HTML</li>";
echo"<li>JavaScript</li>";
echo "</ul>";
// declaration de variable 
// le nom du var doit être precede par le signe $
$nom="Mohammed";
$number1=55;
$number2=55.89;
$ok=true;
$tab=["Python",false,"Casablanca",12];
//Pour afficher des informations structurérs autrement dit pour definir le type de variable
//sur une variable ==> la fonction var_dump($var)
echo var_dump($nom);
echo "<br>";
echo var_dump($tab);
echo "<br>";
echo var_dump($tab[0]);
echo "<br>";
//Pour faire la concatination entre chaine de caractere et une var 
echo "le premier element est :".$tab[0];
// $a +$b ==> Addition
// $a -$b ==> Soustraction
// $a*$b ==> Multiplication
// $a /$b ==> Division
// $a %$b ==> Reste de la division 
// $a **$b ==> $a a la puissance de $b
// intDiv($a,$b) ==> Division entiere

//$x=10 ; $x++ <==> $x=$x+1

//La declaratrion des constantes
// Methode 1 :
  // define("PI",3.14);
//Methode 2 :
   // const PI =3.14;

?>

<hr>


<form action="" method="post">
      <div class="container">
        <div>
            <label>Nom :</label>
        </div>
        <div>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label>Prenom :</label>
        </div>
        <div>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div>
            <label>Age :</label>
        </div>
        <div>
        <input type="number" name="age" id="age">
        </div>
      </div>
        <input type="submit" value="Afficher">

    </form>

<?php
    // pour afficher le nom de fichier script 
       // echo $_SERVER["PHP_SELF"];
    //pour afficher le nom de server
        //echo $_SERVER["SERVER_NAME"];
    // pour afficher le nom de methode de requete 
        //echo $_SERVER["REQUEST_METHOD"];
    if($_SERVER["REQUEST_METHOD"]=="POST")// ou if($_POST)
    {

        echo "Nom :".$_POST["nom"];
        echo "<br>";
        echo "Prenom :".$_POST["prenom"];
        echo "<br>";
        echo "Age :".$_POST["age"];
    }
    ?>

<hr>
<?php
// initialiser un tableau 
// 1- $tab=array()
// 2-$tab=[]
//Remplir un tableau
// 1- $tab[0]="Dev"    2-$tab[]="Dev"
// - $tab[1]="Res"      -$tab[]="Res"
// - $tab[2]="Ges"      -$tab[]="Ges"

// initialisation et remplissage
// $tab=array("Dev","Res"...)
$tab=["Dev","Res","Ges"];
// La methode push
//array_push($tab, element ou plusieurs elements)
//print_r($var):permet d'afficher des infos 
// a proposd'une variable de maniere à ce qu'elle soit lisible
print_r($tab);
echo "<br>";
// Pour afficher la taille du tableau 
echo "la taille du tableau : ".count($tab);
echo "<br/>";
echo "la taille du tableau : ".sizeof($tab);

 
?>
<hr>
<table>
    <h3>comment remplir select d'apres un tableau</h3>
    <select>
        
        <?php
        for($i=0;$i<count($tab);$i++){
            echo "<option value='$tab[$i]'>$tab[$i]</option>";
        }
        //pour for on a endfor
        ?>
</select>
</table>

<hr>
<?php
echo "<h3>L'utilisation de foreach </h3>";
foreach($tab as $t)
    echo $t."<br>";
?>
    
</body>
</html>