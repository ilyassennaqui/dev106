<?php
$groupes= array('Dev101','Dev102','Dev103','Dev104');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Saisi d'information</legend>
            <div>
                <label>Numero</label>
                <input type="number" name="num"> 
            </div>
            <div>
                <label>Nom Complet</label>
                <input type="text" name="nom"> 
            </div>
            <div>
                <label>Genre</label>
                <input type="radio" name="genre" value="M">M
                <input type="radio" name="genre" value="F">F          
            </div>
            <div>
                <label>Groupes</label>
                <select name="groupe">
                    <?php 
                    foreach ($groupes as $g){
                        echo "<option value='".$g."'>".$g."</option>";
                        }
                    ?>
                </select>
            </div>

                    <!--La creation du tableau-->
            <table>
                <tr>
                    <th>Module</th>
                    <th>Note</th>
                    <th>coefficient</th>
                </tr>
                <tr>
                    <td>Algorithm</td>
                    <td><input type="text" name="note_alg"></td>
                    <td>(2)</td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td><input type="text" name="note_js"></td>
                    <td>(3)</td>
                </tr>
                <tr>
                    <td>PHP</td>
                    <td><input type="text" name="note_php"></td>
                    <td>(3)</td>
                </tr>
            </table>
            <input type="submit" value="Enregistrer">
</fieldset>

</form>
<?php

?>
 <?php
 // fonction qui retourne la decision


 function getDecision($moy){
    if($moy>=10){
        $decision="Admis";
    }
    else if($moy>=9 && $moy<10){
        $decision="Racheté";
    }
    else if($moy>=7 && $moy<9){
        $decision="Redouble";
    }
    else{
        $decision="Réorienté";
    }
    return $decision;
 }

 // fonction qui retourne les moyenne de ces notes
    function MoyenneGenerale($a,$j,$p){
        $alg=2;
        $js=3;
        $php=3;
        $som_N=($a*$alg)+($j*$js)+($p*$php);
        $moyenne=$som_N/8;
        return round($moyenne,2);
    }


    if ($_POST){
        $num=$_POST["num"];
        $nom=$_POST["nom"];
        $genre=$_POST["genre"];
        $groupe=$_POST["groupe"];
        $note_alg=$_POST["note_alg"];   
        $note_js=$_POST["note_js"];
        $note_php=$_POST["note_php"];
        //if (isset($groupe)){
        //    foreach ($groupe as $grp) {
        //        echo $grp;
        //    }
        //};
        //if(isset( $num) && isset( $nom) && isset( $genre) && isset( $groupe)) && isset( $note_alg) && isset( $note_js) && isset($note_php) {
            //Calcule de moyenne
            $mygeneral=MoyenneGenerale($note_alg,$note_js,$note_php);
            $Decision=getDecision($mygeneral);
             
            // Affichage à l'écran
            echo "Numero : ".$num."<br>";
            echo " Nom: ".$nom."<br>";
            echo " Genre: ".$genre."<br>";
            echo " Groupe: ".$groupe."<br>";
            echo " Moyenne: ".$mygeneral."<br>";
            echo " Decision: ".$Decision."<br>";
            
            // Export Json
            $tab=[
                "numero"=>$num,
                "nom"=>$nom,
                "genre"=>$genre,
                "groupe"=>$groupe,
                "notes"=>[
                    "Algorithm"=>$note_alg,
                    "Javascript"=>$note_js,
                    "Php"=>$note_php
                    ]
                    ];
                    
                    $fichier="info.json";
                    $djson=json_encode($tab);
                    $op=fopen($fichier,"w+");
                    fwrite($op,$djson);
                    fclose($op);
                    
                    echo  "Enregistrement avec succes";
        }
        //else{
        //    echo "Veuiller remplir tous les champs"
        //}

    
 ?>
</body>
</html>