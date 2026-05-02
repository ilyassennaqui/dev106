<?php
$tab=["Lecture","Sport","Voyage","Internet"];
$x=10;
//function Mafonction(){
//    global $x;// le mot clé global permet d'acceder à une variable de porté global
//    // depuis une fonction ( espace local) 
//    $x=$x+5;
//}
// Deuxieme methode 
//echo "<pre>";
//print_r ($GLOBALS);
//echo "</pre>";
//function Mafonction(){
//    $GLOBALS["x"];
//    $GLOBALS["x"]=$GLOBALS["x"]+5;// $GLOBALS est un tableau qui permet d'acceder
//    //  a toute les variable globale sans passer par le mot cle global
//
//}
function Incrementer(){
    static  $cpmt=0;// une variable declarée static dans une fonction
    //  conserve sa valeur entre plusieurs appel de cette fonction 
    // Elle n'est pas dètruite a la fin de l'exécution 
    echo "La valeur du comteur est :".$cpmt."<br>";
    $cpmt++;
}
Incrementer();
Incrementer();
Incrementer();

//Mafonction();
//echo "la valeur de x est :".$x ;
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <div class="container">
        <div>
            <label>Nom :</label>
        </div>
        <div>
            <input type="text" name="nom">
        </div>
        <div>
            <label>Prenom :</label>
        </div>
        <div>
            <input type="text" name="prenom">
        </div>
        <div>
            <label>Genre :</label>
        </div>
        <div>
            <input type="radio" name="genre" value="M">M
            <input type="radio" name="genre" value="F">F
        </div>
        <div>
            <label>Loisirs</label>
        </div>
        <div>
            <?php
//Methode en stockant les valeurs dans un tableau
//foreach ($tab as $t) {
//    echo "<input type='checkbox' name='loisirs[]' value='$t'>$t<br>";
//}
//

// *3EME METHODE
 foreach ($tab as $t):?>

<input type="checkbox" name="loisirs[]" value="<?php echo $t ?>"><?php echo $t ?>
<br>
 <?php
 endforeach
 ?>
    
        <!-- Premiere methode sans les stocker dans un tableau 
        <input type="checkbox" name="loisirs[]" value="Lecture">Lecture
        <input type="checkbox" name="loisirs[]" value="Sport">Sport
        <input type="checkbox" name="loisirs[]" value="Voyage">Voyage
        <input type="checkbox" name="loisirs[]" value="Internet">Internet-->
        <div>
     </div>
     <input type="submit" value="Afficher" name="aff">
</form>
<?php
if($_POST){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $genre=$_POST["genre"];
    $loisirs=$_POST["loisirs"];
    echo "<h3>NOM :".$nom."</h3>";
    echo "<h3>PRENOM :$prenom</h3>";
    echo "<h3>GENRE :".$genre."</h3>";
    echo"<h3>LOISIRS : </h3>";
    echo "<ul>";
    foreach ($loisirs as $loi) {
        echo "<li>".$loi."</li>";
    }
    echo "</ul>";
}
?>
        
</body>
</html>