<?php
include("data.php");
include("fonction.php");
include("dev.php");
include("ges.php");
include("com.php");
include("res.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listes de stagiaire de filiere Developpement</h1>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th>Numero</th><th>Nom_Complet</th><th>Filiere</th><th>Note</th><th>Decision</th><th>Moyenne</th>";
    echo "</tr>";
    
    foreach ($dev as $d) {
        echo "<tr>";
        echo "<td>".$d['numero']."</td>";
        echo "<td>".$d['nom_complet']."</td>";
        echo "<td>".$d['filiere']."</td>";
        echo "<td>".$d['note']."</td>";
        echo "<td>".getDecision($d['note'])."</td>";
         echo "<td>".$dev."</td>";
        echo "</tr>";
    }
    
    foreach ($res as $d) {
        echo "<tr>";
        echo "<td>".$d['numero']."</td>";
        echo "<td>".$d['nom_complet']."</td>";
        echo "<td>".$d['filiere']."</td>";
        echo "<td>".$d['note']."</td>";
        echo "<td>".getDecision($d['note'])."</td>";
        echo "<td>".$res."</td>";
        echo "</tr>";
    }
   
    foreach ($ges as $d) {
        echo "<tr>";
        echo "<td>".$d['numero']."</td>";
        echo "<td>".$d['nom_complet']."</td>";
        echo "<td>".$d['filiere']."</td>";
        echo "<td>".$d['note']."</td>";
        echo "<td>".getDecision($d['note'])."</td>";
        echo "<td>".$ges."</td>";
        echo "</tr>";
    }
    
    foreach ($com as $d) {
        echo "<tr>";
        echo "<td>".$d['numero']."</td>";
        echo "<td>".$d['nom_complet']."</td>";
        echo "<td>".$d['filiere']."</td>";
        echo "<td>".$d['note']."</td>";
        echo "<td>".getDecision($d['note'])."</td>";
        echo "<td>".$com."</td>";
        echo "</tr>";
       
    }
    endforeach;
    
    echo "</table>";
    ?>
</body>
</html>