<?php
//Tableau associative 
    $pers=[array(
        "nom"=>"Ennaqui",
        "prenom"=>"Ilyass",
        "Specialite"=>"Dev",
        "Note"=>9.5),
        array(
        "nom"=>"Elmzabite",
        "prenom"=>"Mohammed Taha",
        "Specialite"=>"Ges",
        "Note"=>20),
        array(
        "nom"=>"Lasfar",
        "prenom"=>"Rayane",
        "Specialite"=>"Com",
        "Note"=>2),
        array(
        "nom"=>"bahja",
        "prenom"=>"Adam",
        "Specialite"=>"Res",
        "Note"=>16)];
        function GetDecision($a){
            if($a>=10){
                $decision="Admis";
            }
            else if($a<10 and $a>9){
                 $decision="Rachete";
            }
            else{
                 $decision="Redouble";
            }
            return $decision;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Information sur le stagaire</h1>
    <?php 
    echo "<table>";
    echo "<tr>";
    echo "<th>Nom</th><th>Prenom</th><th>Specialite</th><th>Note</th><th>Decision</th>";
    echo "</tr>";
    foreach ($pers as $key => $value) {
        echo "<tr>";
        foreach ($value as $k => $val) {            
            echo "<td>$val</td>";
            }
            echo "<td>".GetDecision($value["Note"])."</td>";
        echo "</tr>";
        }
    echo "</table>";
    ?>
    
</body>
</html>